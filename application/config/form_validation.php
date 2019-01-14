<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    array(
        'field' => 'username',
        'label' => 'Username',
        'rules' => 'required',
        'required'=>'Inputkan Username Anda'
    ),
    array(
        'field' => 'nama_dpn',
        'label' => 'Nama Depan',
        'rules' => 'required',
        'required'=>'Inputkan Nama Depan Anda'
    ),
    array(
        'field' => 'nama_blkg',
        'label' => 'Nama Belakang',
        'rules' => 'required',
        'required'=>'Inputkan Nama Belakang Anda'
    ),
    array(
        'field' => 'email',
        'label' => 'Email',
        'rules' => 'required|valid_email',
        'required'=>'Inputkan Alamat Email Anda yang Valid'
    ),
    array(
        'field' => 'perusahaan',
        'label' => 'Perusahaan',
        'rules' => 'required',
        'required'=>'Inputkan Nama Perusahaan Anda'
    ),
    array(
        'field' => 'telepon',
        'label' => 'Telepon',
        'rules' => 'required',
        'required'=>'Inputkan Telepon Anda yang Valid'
    ),
    array(
        'field' => 'password',
        'label' => 'Password',
        'rules' => 'required',
        'required'=>'Inputkan Password Anda minimal 8 Karakter'
    ),
    array(
        'field' => 'konfirm_password',
        'label' => 'Konfirmasi Password',
        'rules' => 'required|matches[password]',
        'required'=>'Password Anda Tidak Sama'
    )
);

?>