<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_hapus extends CI_Model{	

	function hapus_obat($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
?>