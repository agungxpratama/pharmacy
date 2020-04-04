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
            'id_user' => $this->session->userdata('id_user'),
            'id_transaksi' => 0,
        );
        print_r($data);
        $this->M_All->insert('keranjang2', $data);
        redirect(base_url('index.php/home/produk'));
    }

    public function simpanCheckout()
    {
        $data = array(
			'nama_lengkap' => $this->input->post('nama_depan'),
			'telepon' => $this->input->post('telepon'),
			'alamat' => $this->input->post('alamat_lengkap'),
			'kota' => $this->input->post('kota'),
			'kode_pos' => $this->input->post('kode_pos'),
			'provinsi' => $this->input->post('provinsi'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'metode_pembayaran' => $this->input->post('radio_payment'),
            'total_harga' => $this->input->post('harga_total'),
			'quantity' => $this->input->post('jumlah_barang'),

		);
        $this->M_All->insert('transaksi', $data);
        // if ($this->M_All->insert('transaksi', $data)) {
            $where = array('id_transaksi' => 0, );
            $transaksi = $this->M_All->select('id_transaksi', 'transaksi')->row();
            $data_transaksi = array('id_transaksi' => $transaksi->id_transaksi);
            echo 'data_transaksi'.print_r($data_transaksi);
            echo "<hr>";
            echo 'transaksi'.print_r($transaksi);
            echo "<hr>";
            $this->M_All->update('keranjang2', $where, $data_transaksi);
            // if ($this->M_All->update('keranjang2', $where, $data_transaksi)) {
                $keranjang = $this->M_All->get('keranjang2')->result();
                echo 'keranjang'.print_r($keranjang);
                echo "<hr>";
                foreach ($keranjang as $k) {
                    $this->M_All->insert('keranjang', $k);
                }
                $this->M_All->empty('keranjang2');
            // }
        // }
        echo print_r($data);
        redirect(base_url('index.php/home'));

    }
}
