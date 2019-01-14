<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function userdata_all(){
        return $this->db->select('a.user_id as id,a.username as username, b.nama as nama, b.jenis_kelamin as jenis_kelamin ,b.tgl_lahir as tgl_lahir,
         b.diabet as diabet, b.asam_urat as asam_urat, b.gula_darah as gula_darah,b.hdl as hdl, b.ldl as ldl,b.trigliserida as trigliserida')
         -> from ('user a')
        ->join('user_profile b', 'a.user_id = b.user_id')->get()->result();
    
    }

    public function userdata_sessions(){
        return $this->db->select('a.id as id, b.user_id as user_id,b.username as username, c.nama as nama, a.expired_at as expired_at, a.created_at as created_at')
         -> from ('users_authentication a')
        ->join('user b', 'a.users_id = b.user_id')
        ->join('user_profile c', 'b.user_id = c.user_id')->get()->result();
    
    }
   

    

    
}