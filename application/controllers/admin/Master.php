<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	public function __construct(){ 
		parent::__construct();
		$this->load->model('Admin/M_barang','barang');
	}

	public function index()
	{
		$data['content'] = 'admin/V_master';
		$data['data'] = $this->barang->select();
		$this->load->view('_templates/wrapper',$data);
	}
}
