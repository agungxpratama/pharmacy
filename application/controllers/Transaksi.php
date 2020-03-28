<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Transaksi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
  		// memuat model yang bertujuan tuntuk mendapatkan data admin
  		$this->load->model('M_All');

  		if($this->session->userdata('role') != "user"){
  			redirect(base_url("index.php/home"));
  		}
    }

    public function simpanTransaksi()
    {
        $data = array(
            'id_obat' => $this->input->post('id_obat'),
            'nama_obat' => $this->input->post('nama_obat'),
            'harga_obat' => $this->input->post('harga_obat'),
            'quantity' => $this->input->post('jumlah'),
            'pengiriman' => $this->session->userdata('nama'),
        );
        print_r($data);
        $this->M_All->insert('keranjang2', $data);
        redirect(base_url('index.php/home/produk'));
    }
}
