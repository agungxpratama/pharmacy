<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
 		$this->load->model('M_All');

 		if($this->session->userdata('role') != "admin"){
 			redirect(base_url("index.php/home"));
 		}
 	}

	public function index()
	{
        $this->load->view('admin/header');
        $this->load->view('admin/index');
		$this->load->view('admin/footer');
	}

    public function obat()
    {
        $data['obat'] = $this->M_All->get('obat')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/obat/index', $data);
		$this->load->view('admin/footer');
    }

    public function tambahObat()
    {
        $config['upload_path']          = './assets_admin/img/foto/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['overwrite']        = true;
		$config['max_size']             = 1024;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

        $this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto')){
			$this->session->set_flashdata('error', $this->upload->display_errors());
			$data = array('error' => $this->upload->display_errors());
			// $this->load->view('pengelolaan/gudang', $data);
		}else{
			$this->session->set_flashdata('success', 'Berhasil di Upload');
			$data = array('success' => $this->upload->data('foto'));
			// $this->load->view('pengelolaan/gudang', $data);
		}
        $foto = $this->upload->data('orig_name');
        $data = array(
            'nama_obat' => $this->input->post('nama_obat',true),
            'foto' => $foto,
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
        // $this->db->set($data);
        // $insert = $this->M_login->prosinsert('obat',$data);
        // $insert = $this->M_All->insert('obat',$data);
        // if ($insert > 0) {
        //     redirect(base_url('index.php/admin/obat'));
        //     }elseif ($file_type == "image/jpeg")
        //         {
        //             if ($file_size > 0 and $file_error == 0) {
        //             move_uploaded_file($file_tmp, "foto_tambahan/".$_POST['id_obat'].".jpg");
        //         }
        //     }else{
        //     echo "gagal upload";
        //     }

        $this->M_All->insert('obat', $data);
		redirect('index.php/admin/obat');
    }

    public function viewObat($id)
    {
        $where = array('id_obat' => $id);
        $data['obat'] = $this->M_All->view_where('obat', $where)->result();
        $this->load->view('admin/header');
        $this->load->view('admin/obat/view', $data);
        $this->load->view('admin/footer');
    }

    public function editObat($id)
    {
        $where = array('id_obat' => $id);
        $data = array(
            'nama_obat' => $this->input->post('nama_obat',true),
            // 'foto' => $foto,
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
    }

    public function HapusObat($id)
	{
		$where = array('id_obat' => $id);
		$this->M_All->delete($where,'obat');
		redirect('index.php/admin/obat');
	}

    public function Artikel()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/artikel/');
		$this->load->view('admin/footer');
    }
}
