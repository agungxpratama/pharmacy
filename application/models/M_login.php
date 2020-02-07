<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model{	
	function cek($email, $password){
		$this->db->where('email',$email);
		$this->db->where('password',$password);		
		return $this->db->get('user')->row();
	}
	function cek_log_admin($username, $password){
		$this->db->where('email',$email);
		$this->db->where('password',$password);		
		return $this->db->get('login_admin');
	}	
	function prosinsert($table_name){
		$insert = $this->db->insert($table_name);
		return $insert;
	}		
	function tampil_addobat($table_name){		
		$data = $this->db->get($table_name);
		return $data->result();
	}
	function see($id = null){
		$query = $this->db->query('CALL lihat_obat('.$id.')');
		return $query;
	}
	function seen($id = null){		
	$this->db->select('*');
	$this->db->from('transaksi_beli');
	if($id != null){
		$this->db->where('id_transaksi',$id);
	}
	$query = $this->db->get();
	return $query;
	}
	function see2($id = null){		
	$this->db->select('*');
	$this->db->from('obat');
	if($id != null){
		$this->db->where('id_obat',$id);
	}
	$query = $this->db->get();
	return $query;
	}

	function seew($id = null){
		$query = $this->db->query('CALL lihat_keranjang('.$id.')');
		return $query;
	}
	function see1($id = null){
		$query = $this->db->query('CALL lihat_obat1('.$id.')');
		return $query;
	}
}
?>