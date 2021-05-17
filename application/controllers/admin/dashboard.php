<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	 public function __construct(){ 
		parent::__construct();
	}
	public function index()
	{
	if ($this->session->userdata('nama') == NULL) {
			redirect('login');
		}
		date_default_timezone_set('Asia/Jakarta');
		$waktu = date("Y-m-d H:i:s");
		$data['content'] = 'Admin/dashboard';
		$data['title'] = 'HOME';
		$data['waktu'] = $waktu;
	 	$this->load->view('_templates/wrapper',$data);
	}
}
