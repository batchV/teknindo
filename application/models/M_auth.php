<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	
	public function select($username,$password){
		$DB = $this->db;
		$query = $DB->query("
				SELECT * FROM 
				karyawan
				WHERE username = '$username' AND password ='$password'
				");
		if ($query->num_rows() < 0) {
			return FALSE;
		}
		else{
			foreach ($query->result_array() as $kwn) {
				return $kwn;
			}
		}
	}		

}