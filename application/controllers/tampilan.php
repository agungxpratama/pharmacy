<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tampilan extends CI_Controller{



	public function __construct(){
		parent ::__construct();

		$this ->load->model('M_login');
	}

	function obat_saya(){
		$data['lihat'] = $this->M_login->tampil_addobat('obat');
		$this->load->view('dashboard_admin',$data);
	}

	function beli(){
		$data['lihat'] = $this->M_login->tampil_addobat('obat');
		$this->load->view('demam',$data);
	}

	function edit($id = null){
		$query = $this->M_login->see($id);
		$data = array(
				'lihat' => $query->result()
		);
		$this->load->view('edit_obat',$data);
	}
	function detail_beli($id = null){
		$query = $this->M_login->see2($id);
		$data = array(
				'lihat' => $query->row(1)
		);
		$this->load->view('detail_beli',$data);
	}
	function detail_beli_admin($id = null){
		$query = $this->M_login->see2($id);
		$data = array(
				'lihat' => $query->row(1)
		);
		$this->load->view('detail_beli_admin',$data);
	}
	function keranjangg($id = null){
		$query = $this->M_login->see($id);
		$data = array(
				'lihat' => $query->row(1)
		);
		$this->load->view('keranjang',$data);
	}
	function keranjang9($id = null){
		$query = $this->M_login->see($id);
		$data = array(
				'lihat' => $query->row(1)
		);
		$this->load->view('keranjang',$data);
	}
	function checkout($id = null){
		$query = $this->M_login->seew($id);
		$data = array(
				'lihat' => $query->row(1)
		);
		$this->load->view('checkout',$data);
	}
	function bukti($id = null){
		$query = $this->M_login->seen($id);
		$data = array(
				'lihat' => $query->row(1)
		);
		$this->load->view('bukti_pembayaran',$data);
	}
	function checkout1($id = null){
		$query = $this->M_login->seew($id);
		$data = array(
				'lihat' => $query->row(1)
		);
		$this->load->view('jembatan',$data);
	}
	function batal_keranjang($id = null){
		$query = $this->M_login->see($id);
		$data = array(
				'lihat' => $query->result()
		);
		$this->load->view('demam',$data);
	}
}
?>