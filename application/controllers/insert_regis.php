<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class insert_regis extends CI_Controller{

	public function insert(){
		$data = array(
			'nama_lengkap' => $this->input->post('nama_lengkap',true),
			'alamat' => $this->input->post('alamat',true),
			'telepon' => $this->input->post('telepon',true),
			'email' => $this->input->post('email',true),
			'password' => $this->input->post('password',true));
		$this->db->set($data);
		$insert = $this->M_login->prosinsert('user',$data);
		if ($insert > 0) {
			redirect(base_url(''));
	    	}else{
	    	echo "gagal daftar";
	    	}
		}

		public function insert_obat(){
			$data = array(
				'nama_obat' => $this->input->post('nama_obat',true),
				'foto' => $this->input->post('foto',true),
				'kategori' => $this->input->post('kategori',true),
				'merek' => $this->input->post('merek',true),
				'jenis_obat' => $this->input->post('jenis_obat',true),
				'aturan_pakai' => $this->input->post('aturan_pakai',true),
				'komposisi' => $this->input->post('komposisi',true),
				'deskripsi' => $this->input->post('deskripsi',true),
				'kemasan' => $this->input->post('kemasan',true),
				'indikasi_umum' => $this->input->post('indikasi_umum',true),
				'manufaktur' => $this->input->post('manufaktur',true),
				'segmentasi' => $this->input->post('segmentasi',true),
				'harga_obat' => $this->input->post('harga_obat',true),
				'efek_samping' => $this->input->post('efek_samping',true)
			);
			$this->db->set($data);
			$insert = $this->M_login->prosinsert('obat',$data);
			if ($insert > 0) {
				redirect(base_url('index.php/tampilan/obat_saya'));
		    	}elseif ($file_type == "image/jpeg") 
		    		{
		    			if ($file_size > 0 and $file_error == 0) {
		    			move_uploaded_file($file_tmp, "assets/foto_tambahan/".$_POST['id_obat'].".jpg");
		    		}
		    	}else{
		    	echo "gagal upload";
				}
		}

		public function bukti_pem(){
		$data = array(
			'id_transaksi' => $this->input->post('id_transaksi',true),
			'id_obat' => $this->input->post('id_obat',true),
			'pengiriman' => $this->input->post('pengiriman',true),
			'nama_lengkap' => $this->input->post('nama_lengkap',true),
			'nama_obat' => $this->input->post('nama_obat',true),
			'quantity' => $this->input->post('quantity',true),
			'harga_obat' => $this->input->post('harga_obat',true),
			'total_harga' => $this->input->post('total_harga',true)
		);
		$this->db->set($data);
		$insert = $this->M_login->prosinsert('detail_transaksi',$data);
		if ($insert > 0) {
			redirect(base_url('index.php/proses2/user'));
	    	}elseif ($file_type == "image/jpeg")
	    		{
	    			if ($file_size > 0 and $file_error == 0) {
	    			move_uploaded_file($file_tmp, "assets/foto_tambahan/".$_POST['id_obat'].".jpg");
	    		}
	    	}else{
	    	echo "gagal upload";
			}
		}


		public function insert_trans(){
		$data = array(
			'nama_lengkap' => $this->input->post('nama_lengkap',true),
			'pengiriman' => $this->input->post('pengiriman',true),
			'telepon' => $this->input->post('telepon',true),
			'alamat' => $this->input->post('alamat',true),
			'kecamatan' => $this->input->post('kecamatan',true),
			'provinsi' => $this->input->post('provinsi',true),
			'kota' => $this->input->post('kota',true),
			'kode_pos' => $this->input->post('kode_pos',true),
			'id_obat' => $this->input->post('id_obat',true),
			'nama_obat' => $this->input->post('nama_obat',true),
			'quantity' => $this->input->post('quantity',true),
			'harga_obat' => $this->input->post('harga_obat',true),
			'total_harga' => $this->input->post('total_harga',true)

		);
		$this->db->set($data);
		$insert = $this->M_login->prosinsert('transaksi_beli',$data);
		if ($insert > 0) {
			redirect(base_url('index.php/tampilan/bukti/'.$this->db->insert_id()));
	    	}elseif ($file_type == "image/jpeg")
	    		{
	    			if ($file_size > 0 and $file_error == 0) {
	    			move_uploaded_file($file_tmp, "assets/foto_tambahan/".$_POST['id_obat'].".jpg");
	    		}
	    	}else{
	    	echo "gagal upload";
			}
		}


		public function lanjut(){
		$data = array(
			'id_obat' => $this->input->post('id_obat',true),
			'nama_obat' => $this->input->post('nama_obat',true),
			'harga_obat' => $this->input->post('harga_obat',true),
			'quantity' => $this->input->post('quantity',true),
			'pengiriman' => $this->input->post('pengiriman',true));
		$this->db->set($data);
		$insert = $this->M_login->prosinsert('keranjang2',$data);
		if ($insert > 0) {
			redirect(base_url('index.php/tampilan/checkout/'.$this->db->insert_id()));
	    	}elseif ($file_type == "image/jpeg")
	    		{
	    			if ($file_size > 0 and $file_error == 0) {
	    			move_uploaded_file($file_tmp, "assets/foto_tambahan/".$_POST['id_obat'].".jpg");
	    		}
	    	}else{
	    	echo "gagal upload";
			}
		}

		public function keranjang(){
		$data = array(
			'id_obat' => $this->input->post('id_obat',true),
			'nama_obat' => $this->input->post('nama_obat',true),
			'jenis_obat' => $this->input->post('jenis_obat',true),
			'harga_obat' => $this->input->post('harga_obat',true));
		$this->db->set($data);
		$insert = $this->M_login->prosinsert('keranjang',$data);
		if ($insert > 0) {
			redirect(base_url('index.php/tampilan/keranjangg/'.$_POST['id_obat']));
	    	}elseif ($file_type == "image/jpeg")
	    		{
	    			if ($file_size > 0 and $file_error == 0) {
	    			move_uploaded_file($file_tmp, "assets/foto_tambahan/".$_POST['id_obat'].".jpg");
	    		}
	    	}else{
	    	echo "gagal upload";
			}
		}
}
?>
