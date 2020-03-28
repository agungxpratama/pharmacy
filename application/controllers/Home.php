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

	public function diagnosa()
	{
		// code...
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
		$data['cart'] = $this->M_All->get('keranjang2')->result();
		$this->load->view('home/base/head_cart');
		$this->load->view('home/base/header');
		$this->load->view('home/cart', $data);
		$this->load->view('home/base/footer');
		$this->load->view('home/base/foot_cart');
	}

	public function checkOut()
	{
		// code...
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
