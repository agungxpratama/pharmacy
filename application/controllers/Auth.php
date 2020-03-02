<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
  		$this->load->model('M_User');
  	}
	public function index()
	{
        $this->load->view('auth/choose');
        // $this->load->view('home/index');
		// $this->load->view('home/footer');
        // $this->load->view('auth/login');
	}

    public function loginAdmin()
    {
        $this->load->view('auth/login_admin');
    }

    public function actionLoginAdmin()
    {
        $email = $this->input->post('email', true);
        // mendapatkan variabel username dari halaman login
		$password = $this->input->post('password', true);
        // mendapatkan variabel password dari halaman login
		$where = array(
			'email' => $email,
            // 'password' => md5($password)
			'password' => $password
			);
            // ditampung di array
		$cek = $this->M_User->cek_login("admin",$where)->num_rows();
        // cek apabila data yang dimasukan ada dalam database

		if($cek > 0){
			$data_session = array(
				'nama' => 'admin',
				'status' => "login",
                'role' => 'admin'
				);
			$this->session->set_userdata($data_session);
            // menerapkan data session sesuai dengan nama username
			redirect(base_url("index.php/admin"));
            // apabila berhasil maka akan langsung ke halaman welcome
		}else{
			echo "Username dan password salah !";
		}
    }

    public function login()
    {
        $this->load->view('auth/login');

    }

    function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/Home/'));
	}
}
