<?php

class log extends CI_Controller{


	function aksi_login(){
		if(isset($_POST['login'])){
		$email = $this->input->POST('email',true);
		$password = $this->input->POST('password',true);
		$cek = $this->M_login->cek($email,$password);
		$hasil = count($cek);
		if ($hasil > 0) {
			$data_awal = array(
			'email'=>$this->input->POST('email',true),
			'password'=>$this->input->POST('password',true));
			$this->session->set_userdata($data_awal) ;
			$this->db->set($data_awal);
			$insert = $this->M_login->prosinsert('login_user',$data_awal);
			redirect('index.php/proses2/user');
		}else{
			$this->session->set_flashdata('info','Email atau Password Salah !<br>');
			redirect('index.php/proses2/log');
			}

		}
	}


	function aksi_login_admin(){
		$data = array(
		'email' => $this->input->post('email',true),
		'password' => $this->input->post('password',true));
		$this->db->set($data);
		$insert = $this->M_login->prosinsert('login_admin',$data);
		if ($insert > 0) {
			redirect(base_url(''));
	    	}else{
	    	echo "gagal upload";
	    	}

		$email = $this->input->POST('email');
		$password = $this->input->POST('password');
		$cek = $this->M_login->cek_log_admin($email,$password);
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/proses2/login'));
	}
}
?>
