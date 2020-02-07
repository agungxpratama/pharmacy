<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hapus extends CI_Controller{



	public function __construct(){
		parent ::__construct();

		$this ->load->model('M_hapus');
	}

	function hapus_obat($id){
		$where=array('id_obat'=>$id);
		$this->M_hapus->hapus_obat($where,'obat');
		redirect('tampilan/obat_saya');
	}
}
?>