<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class M_edit extends CI_Model{	
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
		return $this->db->affected_rows();
	}
	public function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

}
?>