<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
    {
  		parent::__construct();
  		// memuat model yang bertujuan tuntuk mendapatkan data admin
  		$this->load->model('M_All');

  		// if($this->session->userdata('role') != "admin"){
  		// 	redirect(base_url("index.php/home"));
  		// }
  	}

	public function index()
	{
		$data['count'] = $this->M_All->count('keranjang2');
		// print_r($data['count']);
		$data['artikel'] = $this->M_All->get('artikel')->result();
		$this->load->view('home/base/head_main');
        $this->load->view('home/base/header', $data);
        $this->load->view('home/index', $data);
		$this->load->view('home/base/footer');
		$this->load->view('home/base/foot_main');
        // $this->load->view('auth/login');
	}

	public function artikel()
	{
		$data['count'] = $this->M_All->count('keranjang2');
		// print_r($data['count']);
		$data['artikel'] = $this->M_All->get('artikel')->result();
		$this->load->view('home/base/head_main');
        $this->load->view('home/base/header', $data);
        $this->load->view('home/artikel', $data);
		$this->load->view('home/base/footer');
		$this->load->view('home/base/foot_main');
	}

	public function detailArtikel($id)
	{
		$data['count'] = $this->M_All->count('keranjang2');
		// print_r($data['count']);
		$where = array('id_artikel' => $id, );
		$data['artikel'] = $this->M_All->view_where('artikel', $where)->row();
		$this->load->view('home/base/head_produk');
        $this->load->view('home/base/header', $data);
        $this->load->view('home/detail_artikel', $data);
		$this->load->view('home/base/footer');
		$this->load->view('home/base/foot_produk');
	}

	public function diagnosa($id)
	{
		$data['count'] = $this->M_All->count('keranjang2');
		$where = array('kategori' => $id, );
		$data['obat'] = $this->M_All->view_where('obat', $where)->result();
		$data['rating'] = $this->M_All->get('rating')->result();
		$this->load->view('home/base/head_categories');
		$this->load->view('home/base/header', $data);
		$this->load->view('home/produk', $data);
		$this->load->view('home/base/footer');
		$this->load->view('home/base/foot_categories');
	}

	public function produk()
	{
		$data['count'] = $this->M_All->count('keranjang2');
		$data['obat'] = $this->M_All->get('obat')->result();
		$data['rating'] = $this->M_All->get('rating')->result();
		$this->load->view('home/base/head_categories');
		$this->load->view('home/base/header', $data);
		$this->load->view('home/produk', $data);
		$this->load->view('home/base/footer');
		$this->load->view('home/base/foot_categories');
		// $this->load->view('home/base/footer_categories');
	}

	public function detailProduk($id)
	{
		$data['rating'] = $this->M_All->get('rating')->result();
		$data['count'] = $this->M_All->count('keranjang2');
		$where = array('id_obat' => $id);
		$data['obat'] = $this->M_All->view_where('obat', $where)->row();
		$pre = array('id_obat' => $id, );
		$data['rating'] = $this->M_All->view_where('rating', $pre)->result();
		$this->load->view('home/base/head_produk');
		$this->load->view('home/base/header', $data);
		$this->load->view('home/view_produk', $data);
		$this->load->view('home/base/footer');
		$this->load->view('home/base/foot_produk');
	}

	public function cart()
	{
		$data['count'] = $this->M_All->count('keranjang2');
		$data['metode'] = $this->M_All->get('metode_pengiriman')->result();
		$data['cart'] = $this->M_All->join_cart('keranjang2', 'obat')->result();
		$this->load->view('home/base/head_cart');
		$this->load->view('home/base/header', $data);
		$this->load->view('home/cart', $data);
		$this->load->view('home/base/footer');
		$this->load->view('home/base/foot_cart');
	}

	public function clearCart($id)
	{
		$where = array('id_keranjang' => $id);
		$this->M_All->delete($where,'kernajang2');
		redirect('index.php/home/cart');
	}

	public function emptyCart()
	{
		$this->M_All->empty('keranjang2');
		redirect('index.php/home/cart');
	}

	public function checkOut()
	{
		if($this->session->userdata('role') != "user"){
  			redirect(base_url("index.php/home"));
  		}
		$data['count'] = $this->M_All->count('keranjang2');
		$where = array('id_user' => $this->session->userdata('id_user'), );
		$data['user'] = $this->M_All->view_where('user', $where)->row();
		$data['checkout'] = $this->M_All->join_cart('keranjang2', 'obat')->result();
		$this->load->view('home/base/head_checkout');
		$this->load->view('home/base/header', $data);
		$this->load->view('home/checkout', $data);
		$this->load->view('home/base/footer');
		$this->load->view('home/base/foot_checkout');
	}

	public function saveCheckout()
	{
		$data = array(
			'nama_lengkap' => $this->input->post('nama_depan'),
			'telepon' => $this->input->post('telepon'),
			'alamat' => $this->input->post('alamat_lengkap'),
			'kota' => $this->input->post('kota'),
			'kode_pos' => $this->input->post('kode_pos'),
			'provinsi' => $this->input->post('provinsi'),
			'kode_pos' => $this->input->post('kode_pos'),
		);
	}

	public function updateMetode()
	{
		$data = array(
			'metode' => $this->input->post('metode_pengiriman'),
		);
		echo $this->input->post('metode_pengiriman');
		$this->session->set_userdata($data);
		redirect(base_url('index.php/home/cart'));
	}

	public function contact()
	{
		$data['count'] = $this->M_All->count('keranjang2');
		$this->load->view('home/base/head_contact');
		$this->load->view('home/base/header', $data);
		$this->load->view('home/contact');
		$this->load->view('home/base/footer');
		$this->load->view('home/base/foot_contact');
	}

	public function Pesanan()
	{
		$data['count'] = $this->M_All->count('keranjang2');
		$where = array('id_user' => $this->session->userdata('id_user'), );
		$data['transaksi'] = $this->M_All->join_detail_transaksi('transaksi', 'pemesanan', $where)->result();
		$this->load->view('home/base/head_checkout');
		$this->load->view('home/base/header', $data);
		$this->load->view('home/order', $data);
		$this->load->view('home/base/footer');
		$this->load->view('home/base/foot_checkout');
	}

	public function detailPesanan($id)
	{
		if($this->session->userdata('role') != "user"){
  			redirect(base_url("index.php/auth"));
  		}
		$pre = array('id_transaksi' => $id, );
		$data['this_id_transaksi'] = $id;
		$data['rating'] = $this->M_All->view_where('rating', $pre)->result();
		$data['count'] = $this->M_All->count('keranjang2');
		$where = array(
			'id_user' => $this->session->userdata('id_user'),
			'id_transaksi' => $id,
		);
		$data['transaksi'] = $this->M_All->join_detail_transaksi('transaksi', 'pemesanan', $where)->row();
		$list = array('id_pemesanan' => $data['transaksi']->id_pemesanan, );
		$data['pesanan'] = $this->M_All->view_where('keranjang', $list)->result();
		$this->load->view('home/base/head_checkout');
		$this->load->view('home/base/header', $data);
		$this->load->view('home/detail_order', $data);
		$this->load->view('home/base/footer');
		$this->load->view('home/base/foot_checkout');
	}

	public function PesanLagi($id)
	{
		$where = array('id_transaksi' => $id, );
		$keranjang = $this->M_All->view_where('transaksi', $where)->row();

		$datawhere = array('transaksi.id_pemesanan' => $keranjang->id_pemesanan, );
		$buyAgain = $this->M_All->join_buy_again($datawhere)->result();
		foreach ($buyAgain as $buyAgain) {
			$data = array(
				'id_obat' => $buyAgain->id_obat,
				'nama_obat' => $buyAgain->nama_obat,
				'harga_obat' => $buyAgain->harga_obat,
				'quantity' => $buyAgain->quantity,
				'id_user' => $this->session->userdata('id_user'),
				'id_pemesanan' => 0,
			);
			$this->M_All->insert('keranjang2', $data);
		}
		// print_r($buyAgain);
		redirect(base_url('index.php/home/cart'));
	}
}
