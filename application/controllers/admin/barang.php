<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang extends CI_Controller {
	public function index()
	{
		$data['content'] = 'admin/barang';
		$this->load->view('_templates/wrapper',$data);
	}
}
