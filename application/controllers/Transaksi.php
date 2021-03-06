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
  			redirect(base_url("index.php/auth"));
  		}
    }

   public function simpanTransaksi()
    {
        $quantity = $this->input->POST('jumlah',true);
        $id_obat = $this->input->POST('id_obat',true);
        if ($quantity >= "1") {
           $data = array(
            'id_obat' => $this->input->post('id_obat'),
            'nama_obat' => $this->input->post('nama_obat'),
            'harga_obat' => $this->input->post('harga_obat'),
            'quantity' => $this->input->post('jumlah'),
            'id_user' => $this->session->userdata('id_user'),
            'id_pemesanan' => 0,
        );
        print_r($data);
        $this->M_All->insert('keranjang2', $data);
        redirect(base_url('index.php/home/produk'));
        } else {
            $this->session->set_flashdata('msg',
                    '<div class="alert alert-success">
                        <h4>Gagal</h4>
                        <p>Anda harus membeli setidak nya 1 pcs, terimakasih.</p>
                    </div>');
                redirect(base_url('index.php/home/detailProduk/'.$id_obat));
        }

    }

    public function simpanCheckout()
    {
        $data = array(
            'id_user' => $this->session->userdata('id_user'),
			'nama_lengkap' => $this->input->post('nama_depan'),
			'telepon' => $this->input->post('telepon'),
			'alamat' => $this->input->post('alamat_lengkap'),
			'kota' => $this->input->post('kota'),
			'kode_pos' => $this->input->post('kode_pos'),
            'provinsi' => $this->input->post('provinsi'),
            'kelurahan' => $this->input->post('kelurahan'),
			'kecamatan' => $this->input->post('kecamatan'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'metode_pembayaran' => $this->input->post('radio_payment'),
            'total_harga' => $this->input->post('harga_total'),
            'quantity' => $this->input->post('jumlah_barang'),
            'id_m_p' => $this->input->post('metode_pengiriman'),
            'harga_pengiriman' => $this->input->post('harga_pengiriman'),
            'quantity' => $this->input->post('jumlah_barang'),
			'tanggal' => date('Y-m-d'),
            'proses' => 0

		);
        $this->M_All->insert('pemesanan', $data);
        // if ($this->M_All->insert('transaksi', $data) == 1) {
            $where = array('id_pemesanan' => 0, );
            $pemesanan = $this->M_All->select('id_pemesanan', 'pemesanan', 'id_pemesanan', 'DESC')->row();
            $data_pemesanan = array('id_pemesanan' => $pemesanan->id_pemesanan);
            $this->M_All->update('keranjang2', $where, $data_pemesanan);
            // if ($this->M_All->update('keranjang2', $where, $data_transaksi) == 1) {
                $keranjang = $this->M_All->get('keranjang2')->result();
                echo 'keranjang'.print_r($keranjang);
                echo "<hr>";
                foreach ($keranjang as $k) {
                    $this->M_All->insert('keranjang', $k);
                }
                $this->M_All->empty('keranjang2');
            // }
        // }
        // echo print_r($data);
        redirect(base_url('index.php/home'));

    }

    public function simpanBukti()
	{
		$config['upload_path']          = './assets_admin/img/bukti_bayar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['overwrite']        = true;
		$config['max_size']             = 1024;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto_bayar')){
			$this->session->set_flashdata('error', $this->upload->display_errors());
			$data = array('error' => $this->upload->display_errors());
			print_r($data);// $this->load->view('pengelolaan/gudang', $data);
		}else{
			$this->session->set_flashdata('success', 'Berhasil di Upload');
			$data = array('success' => $this->upload->data('foto_bayar'));
			// $this->load->view('pengelolaan/gudang', $data);
            $foto = $this->upload->data('orig_name');
			$data = array(
                'bukti' => $foto,
				'bank' => $this->input->post('trf_rekening'),
				'status' => 1,
			);
			$where = array('id_transaksi' => $this->input->post('id_transaksi'), );
            if ($this->M_All->update('transaksi', $where, $data) != true) {
                redirect('index.php/home/pesanan/');
            }else {
                redirect('index.php/home/pesanan/');
            }
		}
	}

    public function terimaPesanan($id)
    {
        $where = array('id_transaksi' => $id, );
        $data = array('status' => 3, );
        $this->M_All->update('transaksi', $where, $data);
        redirect('index.php/home/pesanan');
    }

    public function beriRatting()
    {
        $this_id_transaksi = $this->input->post('id_transaksi');
        $data = array(
            'rating' => $this->input->post('rating'),
            'id_obat' => $this->input->post('id_obat'),
            'tgl_rating' => date('Y-m-d'),
            'id_user' => $this->input->post('id_user'),
            'id_transaksi' => $this->input->post('id_transaksi'),
            'comment' => $this->input->post('comment'),
        );
        $this->M_All->insert('rating', $data);
        redirect('index.php/home/detailPesanan/'.$this_id_transaksi);
    }

    public function tambahWishlist()
    {
        $data = array(
            'id_obat' => $this->input->post('id_obat'),
            'nama_obat' => $this->input->post('nama_obat'),
            'harga_obat' => $this->input->post('harga_obat'),
            'id_user' => $this->session->userdata('id_user'),
        );
        print_r($data);
        $this->M_All->insert('favorite', $data);
        redirect(base_url('index.php/home/produk'));
    }

    public function Favorite()
    {
        $data['count'] = $this->M_All->count('keranjang2');
        $where = array('id_user' => $this->session->userdata('id_user'), );
		$data['favorite'] = $this->M_All->join_favorite('favorite', $where)->result();
		$data['rating'] = $this->M_All->get('rating')->result();
		$this->load->view('home/base/head_categories');
		$this->load->view('home/base/header', $data);
		$this->load->view('home/favorite', $data);
		$this->load->view('home/base/footer');
		$this->load->view('home/base/foot_categories');
    }

    public function report()
    {
        $config['upload_path']          = './assets_admin/img/report/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['overwrite']        = true;
		$config['max_size']             = 1024;

		$this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto')){
			$this->session->set_flashdata('error', $this->upload->display_errors());
			$data = array('error' => $this->upload->display_errors());
			print_r($data);// $this->load->view('pengelolaan/gudang', $data);
		}else{
			$this->session->set_flashdata('success', 'Foto Laporan Berhasil di Upload');
			$data = array('success' => $this->upload->data('foto_bayar'));
			// $this->load->view('pengelolaan/gudang', $data);
            $foto = $this->upload->data('orig_name');
			$data = array(
                'foto' => $foto,
                'pesan' => $this->input->post('pesan'),
				'id_transaksi' => $this->input->post('id_transaksi'),
			);
			// $where = array('id_transaksi' => $this->input->post('id_transaksi'), );
            if ($this->M_All->insert('report', $data) != true) {
                redirect('index.php/home/pesanan/');
            }else {
                redirect('index.php/home/pesanan/');
            }
		}
    }
}
