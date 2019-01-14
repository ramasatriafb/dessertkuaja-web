<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    
      
    public function index(){
		$this->data['title'] = "User Data";
        $this->data['userdata'] = $this->User_model->userdata_all();
        $this->load->view('user/index',$this->data);
    }

    public function user_session(){
        $this->data['title'] = "User Sessions";
        $this->data['user_sessions'] = $this->User_model->userdata_sessions();
        $this->load->view('user/session',$this->data);
    }
    
   
	
}
