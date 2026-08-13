<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Admin extends CI_Controller { 
 
 	function __construct(){ 
 	 	parent::__construct(); 
 
  // cek session yang login, jika session status tidak sama dengan session admin_login,maka halaman akan di alihkan kembali ke halaman login. 
 	 	if($this->session->userdata('status')!="admin_login"){ 
 	 	 	redirect(base_url().'login?alert=belum_login'); 
 	 	} 
 	} 
 
 	function index(){ 
 	 	$this->load->view('admin/v_header'); 
 	 	$this->load->view('admin/v_index'); 
 	 	$this->load->view('admin/v_footer'); 
 	} 
 	 
 
} 
