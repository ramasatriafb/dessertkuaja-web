<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index(){
		$this->data['title'] = "DessertKuAja";
		$this->load->view('auth/index',$this->data);
	}

	public function login(){
		$username = $this->input->post("username");
        $password = $this->input->post("password");
        $this->form_validation->set_rules("password", "Password", "trim|required");
		if ($this->form_validation->run() == TRUE){
            $response = $this->Auth_model->login($username,$password);
            $sess_array = array();
            // var_dump($response['user_id']);
        //    die();
               $sess_array = array(
                    'masuk'=> TRUE, 
                    'user_id' => $response['user_id'],
                    'token' => $response['token']
               );
                $this->session->set_userdata($sess_array);
            
            // var_dump($sess_array); die();
            // echo $sess_array['token'];die();
            
            redirect('dashboard/index');
        }else{
			$this->data['title'] = "Login RMF App";
			$this->load->view('auth/index',$this->data);
		}
	}

	

	

	public function logout(){
        $this->session->sess_destroy();
        // var_dump($this->session);die();
        $url=base_url('');
        redirect($url);
	}
}
