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
		$cek = $this->M_User->cek_login('admin',$where)->num_rows();
        // cek apabila data yang dimasukan ada dalam database

		if($cek > 0){
			$data_session = array(
				'nama' => 'admin',
				'status' => 'login',
                'role' => 'admin',
                'email' => $email
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

    public function actionLogin()
    {
        $email = $this->input->post('email', true);
        // mendapatkan variabel username dari halaman login
		$password = $this->input->post('pass', true);
        // mendapatkan variabel password dari halaman login
		$where = array(
			'email' => $email,
            'password' => md5($password)
			// 'password' => $password
			);
            // ditampung di array
		$cek = $this->M_User->cek_login('login_user',$where)->num_rows();
        // cek apabila data yang dimasukan ada dalam database

		if($cek > 0){
            $where = array('email' => $email, );
            $data_user = $this->M_All->view_where('user', $where)->row();
			$data_session = array(
				'nama' => $data_user->nama_lengkap,
				'status' => 'login',
                'role' => 'user',
                'id_user' => $data_user->id_user,

				);
			$this->session->set_userdata($data_session);
            // menerapkan data session sesuai dengan nama username
			redirect(base_url("index.php/home"));
            // apabila berhasil maka akan langsung ke halaman welcome
		}else{
			echo "Username dan password salah !.$cek.";
            print_r($where);
		}
    }

    public function register()
    {
        $this->load->view('auth/register');
    }

    public function actionRegister()
    {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telepon');
        $email = $this->input->post('email');
        $password = $this->input->post('pass');

        $data = array(
            'nama_lengkap' => $nama,
            'alamat' => $alamat,
            'telepon' => $no_telp,
            'email' => $email,
        );

        $data_login = array(
            'email' => $email,
            'password' => md5($password)
        );

        $this->M_All->insert('user', $data);
        $this->M_All->insert('login_user', $data_login);
        redirect('index.php/auth/login');
    }

    function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/Home/'));
	}
}
