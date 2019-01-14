<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserData_model extends CI_Model {

    
    public function getUSerData_Kolesterol(){
        $sql=("SELECT COUNT(gejala)
        FROM user_gejala
        where gejala ='Kolesterol'");
        $query = $this -> db -> query($sql)->row_array();
        return $query;   
    }

    public function getUSerData_Hipertensi(){
        $sql=("SELECT COUNT(gejala)
        FROM user_gejala
        where gejala ='Hipertensi'");
        $query = $this -> db -> query($sql)->row_array();
        return $query;   
    }

    public function getUSerData_AsamUrat(){
        $sql=("SELECT COUNT(gejala)
        FROM user_gejala
        where gejala ='Asam Urat'");
        $query = $this -> db -> query($sql)->row_array();
        return $query;   
    }

    public function getUSerData_Normal(){
        $sql=("SELECT COUNT(gejala)
        FROM user_gejala
        where gejala ='Normal'");
        $query = $this -> db -> query($sql)->row_array();
        return $query;   
    }
    

    
}