<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
	    parent::__construct();
	    if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
  	}

	public function index()
	{
        $data['title'] = "Dashboard";
        $data['count_kolesterol'] = $this->UserData_model->getUSerData_Kolesterol();
		$data['count_hipertensi'] = $this->UserData_model->getUSerData_Hipertensi();
		$data['count_asamUrat'] = $this->UserData_model->getUSerData_AsamUrat();
        $data['count_normal'] = $this->UserData_model->getUSerData_Normal();
        // var_dump($data);die();
		$this->load->view('dashboard/index',$data);
	}
}