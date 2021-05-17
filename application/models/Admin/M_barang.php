<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	
	public function select(){
		$DB = $this->db;
		$query = $DB->query("
				SELECT * FROM 
				barang				
				");
		if ($query->num_rows() < 0) {
			return FALSE;
		}
		else{
			foreach ($query->result_array() as $arr) {
				$data[] = $arr;
			}
			return $data;

		}
	}		

}