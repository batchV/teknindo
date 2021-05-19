<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$waktu = date("Y-m-d H:i:s");
		$data['waktu'] = $waktu;
		$data['content'] = 'Teknisi/dashboard';
		$data['title'] = $this->session->userdata('jabatan');
		$this->load->view('_templates/wrapper',$data);
	}
}
