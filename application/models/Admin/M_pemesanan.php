<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemesanan extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	
	public function get_data(){
		$DB = $this->db;
		$query = $DB->query("
				SELECT * FROM 
				pemesanan				
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

	public function get_kode_barang(){
		$DB = $this->db;
		$query = $DB->query("
				SELECT kode_barang FROM 
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

	public function get_barang($kode_barang){

		$DB = $this->db;
		$query = $DB->query("
				SELECT * FROM 
				barang	
				WHERE 
				kode_barang = '$kode_barang'
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

	public function get_supplier(){

		$DB = $this->db;
		$query = $DB->query("
				SELECT * FROM 
				supplier
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

	public function lastidpemesanan(){

		$DB = $this->db;
		$query = $DB->query("
				SELECT * FROM 
				pemesanan
				WHERE 
				status_pemesanan = '0' AND status = '0'
				ORDER BY kode_barang
				DESC LIMIT 1
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