<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep extends CI_Controller {

    
      
    public function index(){
		$this->data['title'] = "Resep Dessert";
        $this->data['resepdata'] = $this->Resep_model->resep_all_data();
        $this->load->view('resep/index',$this->data);
    }

    public function add()
    {
        $config['upload_path']='uploads';
		$config['allowed_types']='jpg|png|jpeg|pdf';
		$config['max_size']='2000';
		$config['file_name'] = $post["nama_resep"];

		$this->load->library('upload',$config);
		 $this->load->model('Query','',TRUE);
		  if($this->input->post('submit')){
		  	if(!$this->upload->do_upload('gambar')){
				$error = "File yang Anda Upload lebih dari 2MB atau Format file tidak sesuai";
				$data['error']=$error;
				$data['hasil'] = $this->Query->getByIdLaporan($ID);
				$this->load->view('mahasiswa/menu_laporan_validasi/update_laporan_mahasiswa',$data);
				}
				else {
				$gambar=$this->upload->data();
				$data['upload_data']=$gambar;
				if($gambar['file_name']){
				$lokasi="/dessertkuaja-web/uploads/".$gambar['file_name'];
            }
        }
        $resep = $this->Resep_model;
        $validation = $this->form_validation;
        
        $validation->set_rules($resep->rules());

        if ($validation->run()) {
            $resep->save($lokasi);
            $this->session->set_flashdata('Sukses', 'Berhasil disimpan');
        }
        redirect('resep/index'); 
    }  else{
       

        $this->load->view("resep/index");
    }
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('resep');
       
        $resep = $this->Resep_model;
        $validation = $this->form_validation;
        $validation->set_rules($resep->rules());

        if ($validation->run()) {
            $resep->update();
            $this->session->set_flashdata('Sukses', 'Berhasil disimpan');
        }

        $data["resep"] = $resep->getById($id);
        if (!$data["resep"]) show_404();
        
        $this->load->view("resep/update_resep", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->product_model->delete($id)) {
            redirect(site_url('admin/products'));
        }
    }
   
	
}
