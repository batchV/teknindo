<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	 public function __construct(){ 
		parent::__construct();
	}
	public function index()
	{
		echo $this->session->nama;
	// if ($this->session->userdata('nama') == NULL) {
	// 		redirect('login');
	// 	}
	// 	$data['content'] = 'Admin/dashboard';
	// 	$data['title'] = 'HOME';
	//  	$this->load->view('Admin/_templates/header');
	//  	$this->load->view('Admin/_templates/navbar');
	//  	$this->load->view('Admin/_templates/sidebar');
	//  	$this->load->view('Admin/_templates/content',$data);
	//  	$this->load->view('Admin/_templates/footer');
	}
}
