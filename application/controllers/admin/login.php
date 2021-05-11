<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {//class
	public function index()//method
	{
		$this->load->view('login.php');
	}
	public function signin()//method
	{
		$this->load->models('login.php');
	}
}
