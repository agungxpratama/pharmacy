<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class proses2 extends CI_Controller{	

	public function index(){		
		$this->load->view('welcome_message');
	}
	function log(){		
		$this->load->view('login');
	}
	function daftar(){		
		$this->load->view('daftar');
	}	
	function cek(){		
		$this->load->view('keranjang');
	}	
	function demam(){
		$data['lihat'] = $this->M_login->tampil_addobat('obat');
		$this->load->view('demam',$data);
	}
	function flu(){		
		$this->load->view('flu_batuk');
	}	
	function cart(){		
		$this->load->view('cart');
	}
	function diare(){		
		$this->load->view('diare');
	}
	function contact(){		
		$this->load->view('contact');
	}
	function logad(){		
		$this->load->view('index_admin');
	}	
	function dashad(){		
		$this->load->view('dashboard_admin');
	}	
	function addobat(){		
		$this->load->view('tambah_obat');
	}
	function login(){		
		$this->load->view('login_pilih');
	}
	function login_admin(){		
		$this->load->view('login_admin');
	}
	function edit_obat(){		
		$this->load->view('edit_obat');
	}
	function checkout(){		
		$this->load->view('checkout');
	}
	function user(){		
		$this->load->view('berandauser');
	}
		

}

?>