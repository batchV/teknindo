<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	public function index()
	{
		$data['content'] = 'admin/V_master';
		$this->load->view('_templates/wrapper',$data);
	}
}
