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
		$this->load->view('home/base/head_main');
        $this->load->view('home/base/header');
        $this->load->view('home/index');
		$this->load->view('home/base/footer');
		$this->load->view('home/base/foot_main');
        // $this->load->view('auth/login');
	}

	public function artikel()
	{
		// code...
	}

	public function diagnosa($id)
	{
		$where = array('kategori' => $id, );
		$data['obat'] = $this->M_All->view_where('obat', $where)->result();
		$this->load->view('home/base/head_categories');
		$this->load->view('home/base/header');
		$this->load->view('home/produk', $data);
		$this->load->view('home/base/footer');
		$this->load->view('home/base/foot_categories');
	}

	public function produk()
	{
		$data['obat'] = $this->M_All->get('obat')->result();
		$this->load->view('home/base/head_categories');
		$this->load->view('home/base/header');
		$this->load->view('home/produk', $data);
		$this->load->view('home/base/footer');
		$this->load->view('home/base/foot_categories');
		// $this->load->view('home/base/footer_categories');
	}

	public function detailProduk($id)
	{
		$where = array('id_obat' => $id);
		$data['obat'] = $this->M_All->view_where('obat', $where)->row();
		$this->load->view('home/base/head_produk');
		$this->load->view('home/base/header');
		$this->load->view('home/view_produk', $data);
		$this->load->view('home/base/footer');
		$this->load->view('home/base/foot_produk');
	}

	public function cart()
	{
		$data['cart'] = $this->M_All->join_cart('keranjang2', 'obat')->result();
		$this->load->view('home/base/head_cart');
		$this->load->view('home/base/header');
		$this->load->view('home/cart', $data);
		$this->load->view('home/base/footer');
		$this->load->view('home/base/foot_cart');
	}

	public function clearCart()
	{
		$where = array('id_obat' => $id);
		$this->M_All->delete($where,'obat');
		redirect('index.php/admin/obat');
	}

	public function checkOut()
	{
		// if($this->session->userdata('role') != "user"){
  		// 	redirect(base_url("index.php/home"));
  		// }
		$where = array('id_user' => $this->session->userdata('id_user'), );
		$data['user'] = $this->M_All->view_where('user', $where)->row();
		$data['checkout'] = $this->M_All->join_cart('keranjang2', 'obat')->result();
		$this->load->view('home/base/head_checkout');
		$this->load->view('home/base/header');
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

	public function contact()
	{
		$this->load->view('home/base/head_contact');
		$this->load->view('home/base/header');
		$this->load->view('home/contact');
		$this->load->view('home/base/footer');
		$this->load->view('home/base/foot_contact');
	}
}
