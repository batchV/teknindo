<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_auth extends CI_Model {

	public $variable;

	public function __construct(){
		parent::__construct();
		
	}
	public function user($username,$password){
		$query = $this->db->query("
			SELECT * FROM karyawan 
			WHERE username = '$username' 
			AND password = '$password'
			");
		if ($query->num_rows() > 0) {
			
			foreach ($query->result() as $fetch) {
				$data["jabatan"] = $fetch->jabatan;
				$data["nama"] = $fetch->nama;
				$data["foto"] = $fetch->foto;
			}
			return $data;
		}
	}
	public function status_login($status,$username,$password){
		// $this->db->query("
		// 	UPDATE karyawan SET status = '$status' 
		// 	WHERE username = '$username' 
		// 	AND password='$password'
		// 	");
	}
	public function status_logout($status,$nama,$IDkaryawan){
		// $this->db->query("
		// 	UPDATE tabel_karyawan SET status = '$status' 
		// 	WHERE nama = '$nama' 
		// 	AND IDkaryawan ='$IDkaryawan'
		// 	");
	}
}

/* End of file get_login.php */
/* Location: ./application/models/get_login.php */
?>