<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit extends CI_Controller{



	public function __construct(){
		parent ::__construct();

		$this ->load->model('M_edit');
	}

	function edit($id_obat){			
	$where = array('id_obat' => $id_obat);
	$data['tambah_obat'] = $this->M_edit->edit_data($where,'tambah_obat')->result();
	redirect('index.php/tampilan/obat_saya',$data);

	}
	function pros_ed(){		
		$id_obat = $this->input->post('id_obat');
		$nama_obat = $this->input->post('nama_obat');
		$jenis_obat = $this->input->post('jenis_obat');		
		$harga_obat = $this->input->post('harga_obat');
		$foto = $this->input->post('foto');
		
		$this->form_validation->set_rules('nama_obat','nama_obat','required');
		$this->form_validation->set_rules('jenis_obat','jenis_obat','required');
		$this->form_validation->set_rules('harga_obat','harga_obat','required');
		// $this->form_validation->set_rules('foto','foto','required');
		if ($this->form_validation->run() == FALSE) {
			$this->edit($this->input->post('id_obat'));
		}else{

			$data = array(
			'nama_obat' => $nama_obat,
			'jenis_obat' => $jenis_obat,			
			'harga_obat' => $harga_obat,
			'foto' => $foto
			);

			$where = array(
				'id_obat' => $id_obat
			);

			$result = $this->M_edit->update_data($where,$data,'obat');			
			redirect('tampilan/obat_saya');
		}
	}
}
?>