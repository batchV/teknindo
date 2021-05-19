	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	private $idpemesanan;
	private $no_po;

	public function __construct(){ 
		parent::__construct();
		$this->load->model('Admin/M_pemesanan','pemesanan');
	}

	public function data(){
		$data['content'] = 'admin/Pemesanan_data.php';
		$data['data'] = $this->pemesanan->get_data();
		$data['title'] = "Pemesanan";
		$this->load->view('_templates/wrapper',$data);
	}

	public function f_tambah()
	{
		$data['content'] = 'admin/f_pilih_kdbarang.php';
		$data['kode_barang'] = $this->pemesanan->get_kode_barang();
		$this->load->view('_templates/wrapper',$data);
	}


	public function get_form()
	{	
		date_default_timezone_set('Asia/Jakarta');
		$data['waktu'] = date("Y-m-d");
		$kode_barang = $this->input->post('kode_barang');
		$data['kode'] = $this->input->post('kode_barang');	
		$data['data'] = $this->pemesanan->get_barang($kode_barang);

		$data['supplier'] = $this->pemesanan->get_supplier();

		$this->load->view('Admin/f_input_pemesanan',$data);
	}

	public function setno_po($no_po)
	{
		$data = $this->pemesanan->lastidpemesanan();
		foreach ($data as $dt) {
			$no_po = $data['no_po'];
		}	
		 	return $no_po;
	}	

	public function set_id_pemesanan()
	{		
		$data = $this->pemesanan->lastidpemesanan();
		foreach ($data as $dt) {
			$idpemesanan = $dt['id_pemesanan'];
		}	
			return 	$idpemesanan;
		
	}	

	public function last_IDpemesanan()
	{		
		$this->set_id_pemesanan();

	}	

	public function last_nopo()
	{
		
	}

	public function Histori()
	{
		$data['content'] = 'admin/Histori_pemesanan.php';
		$data['data'] = $this->barang->select();
		$this->load->view('_templates/wrapper',$data);
	}
}
