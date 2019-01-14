<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep_model extends CI_Model {

    private $_table = "resep_dessert";

    
    public $nama_resep;
    public $gambar;
    public $image;
    public $keterangan;
    public $bahan;
    public $tata_cara;

    public function rules()
    {
        return [
            ['field' => 'nama_resep',
            'label' => 'Nama Resep',
            'rules' => 'required']
        ];
    }

    public function resep_all_data()
    {
        return $this->db->distinct()->select('b.resep_id as id,b.nama_resep as nama_resep, b.gambar as gambar, b.keterangan as keterangan,b.bahan as bahan, b.tata_cara as tatacara')-> from ('kategori_resep a, resep_dessert b, kategori c, user_profile d, user_gejala e')
        ->where('a.resep_id = b.resep_id')->where('a.kategori_id = c.kategori_id')->get()->result();
    }    

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["resep_id" => $id])->row();
    }

    public function save($lokasi)
    {
        $post = $this->input->post();
        $this->nama_resep = $post["nama_resep"];
        $this->gambar = $lokasi;
        $this->keterangan = $post["keterangan"];
        $this->bahan = $post["bahan"];
        $this->tata_cara = $post["tata_cara"];
        $this->db->insert($this->_table, $this);
    }

    public function update($id)
    {
        $post = $this->input->post();
        $this->nama_resep = $post["nama_resep"];
        $this->gambar = $post["gambar"];
        $this->keterangan = $post["keterangan"];
        $this->bahan = $post["bahan"];
        $this->tata_cara = $post["tata_cara"];
        $this->db->update($this->_table, $this, array('resep_id' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("resep_id" => $id));
    }
}