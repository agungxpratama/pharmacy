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
        $data['transaksi'] = $this->M_All->count('transaksi');
        $data['pesanan'] = $this->M_All->count('pemesanan');
        $data['user'] = $this->M_All->count('user');
        $this->load->view('admin/header');
        $this->load->view('admin/index', $data);
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
            if ($this->M_All->insert('obat', $data) != true) {
                redirect('index.php/admin/obat');
            }else {
                redirect('index.php/admin/obat');
            }

		}
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

        // $this->M_All->insert('obat', $data);
		// redirect('index.php/admin/obat');
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

        $this->M_All->update('obat', $where, $data);
        redirect('index.php/admin/viewObat/'.$id);
    }

    public function HapusObat($id)
	{
		$where = array('id_obat' => $id);
		$this->M_All->delete($where,'obat');
		redirect('index.php/admin/obat');
	}

    public function Artikel()
    {
        $data['artikel'] = $this->M_All->get('artikel')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/artikel/index', $data);
		$this->load->view('admin/footer');
    }

    public function viewArtikel($id)
    {
        $where = array('id_artikel' => $id, );
        $data['artikel'] = $this->M_All->view_where('artikel', $where)->row();
        $this->load->view('admin/header');
        $this->load->view('admin/artikel/detail', $data);
        $this->load->view('admin/footer');}

    public function tambahArtikel()
    {
        $config['upload_path']          = './assets_admin/img/artikel/';
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
            $foto = $this->upload->data('orig_name');
            $data = array(
                'foto' => $foto,
                'judul' => $this->input->post('judul',true),
                'isi' => $this->input->post('isi',true),
                'tgl_buat' => date('Y-m-d'),
            );
            print_r($data);
            if ($this->M_All->insert('artikel', $data) != true) {
                redirect('index.php/admin/artikel');
            }else {
                redirect('index.php/admin/artikel');
            }
		}
    }

    public function HapusArtikel($id)
	{
		$where = array('id_artikel' => $id);
		$this->M_All->delete($where,'artikel');
		redirect('index.php/admin/artikel');
	}

    public function Categories()
    {
        $data['categories'] = $this->M_All->select_distinct('kategori', 'obat')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/obat/kategori', $data);
		$this->load->view('admin/footer');
    }

    public function Pemesanan()
    {
        $data['pemesanan'] = $this->M_All->get('pemesanan')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/etc/pemesanan', $data);
		$this->load->view('admin/footer');
    }

    public function TelahDiproses()
    {
        $where = array('proses' => 1, );
        $data['pemesanan'] = $this->M_All->view_where('pemesanan', $where)->result();
        $this->load->view('admin/header');
        $this->load->view('admin/etc/pemesanan', $data);
		$this->load->view('admin/footer');
    }

    public function BelumDiproses()
    {
        $where = array('proses' => 0, );
        $data['pemesanan'] = $this->M_All->view_where('pemesanan', $where)->result();
        $this->load->view('admin/header');
        $this->load->view('admin/etc/pemesanan', $data);
		$this->load->view('admin/footer');
    }

    public function CekPemesanan($id)
    {
        $where = array('id_pemesanan' => $id);
        $data['isi_pemesanan'] = $this->M_All->view_where('keranjang', $where)->result();
        $this->load->view('admin/header');
        $this->load->view('admin/etc/daftar_pemesanan', $data);
		$this->load->view('admin/footer');
    }

    public function ProsesPemesanan($id)
    {
        $where = array('id_pemesanan' => $id);
        $proses = array('proses' => 1, );
        $data = array(
            'id_pemesanan' => $id,
            'tanggal' => date('Y-m-d'),
            'status' => 0,//ststus 0 karena sudah di proses tetapi belum di bayar
        );
        $this->M_All->update('pemesanan', $where, $proses);
        $this->M_All->insert('transaksi', $data);
        redirect('index.php/admin/transaksi');
    }

    public function Transaksi()
    {
        $data['transaksi'] = $this->M_All->join_transaksi('transaksi', 'pemesanan')->result();
        // print_r($data);
        $this->load->view('admin/header');
        $this->load->view('admin/etc/transaksi', $data);
        $this->load->view('admin/footer');
    }

    public function detailTransaksi($id)
    {
        $where = array('id_transaksi' => $id, );
        $data['transaksi'] = $this->M_All->join_detail_transaksi('transaksi', 'pemesanan', $where)->row();
        $list = array('id_pemesanan' => $data['transaksi']->id_pemesanan, );
        $data['pesanan'] = $this->M_All->view_where('keranjang', $list)->result();
        // print_r($data['transaksi']);
        $this->load->view('admin/header');
        $this->load->view('admin/etc/detail_transaksi', $data);
        $this->load->view('admin/footer');
    }

    public function updateResi()
    {
        $id_transaksi = $this->input->post('id_transaksi');
        $where = array('id_transaksi' => $id_transaksi, );
        $data = array(
            'resi' => $this->input->post('resi'),
            'status' => 2,
        );
        $this->M_All->update('transaksi', $where, $data);
        redirect('index.php/admin/detailTransaksi/'.$id_transaksi);
    }

    public function DataUser()
    {
        $data['user'] = $this->M_All->get('user')->result();
        // print_r($data);
        $this->load->view('admin/header');
        // print_r($data);
        $this->load->view('admin/etc/data_user', $data);
        $this->load->view('admin/footer');
    }

    public function Tracking()
    {
        $data['transaksi'] = $this->M_All->join_transaksi('transaksi', 'pemesanan')->result();
        // print_r($data);
        $this->load->view('admin/header');
        $this->load->view('admin/etc/tracking', $data);
        $this->load->view('admin/footer');
    }

    public function TrackingSelesai()
    {
        $where = array('transaksi.status' => 3, );
        $data['transaksi'] = $this->M_All->join_transaksi_where('transaksi', 'pemesanan', $where)->result();
        $this->load->view('admin/header');
        $this->load->view('admin/etc/tracking', $data);
        $this->load->view('admin/footer');
    }

    public function TrackingBelumDibayar()
    {
        $where = array('transaksi.status' => 0, );
        $data['transaksi'] = $this->M_All->join_transaksi_where('transaksi', 'pemesanan', $where)->result();
        $this->load->view('admin/header');
        $this->load->view('admin/etc/tracking', $data);
        $this->load->view('admin/footer');
    }

    public function TrackingTelahDibayar()
    {
        $where = array('transaksi.status' => 1, );
        $data['transaksi'] = $this->M_All->join_transaksi_where('transaksi', 'pemesanan', $where)->result();
        $this->load->view('admin/header');
        $this->load->view('admin/etc/tracking', $data);
        $this->load->view('admin/footer');
    }

    public function updateStock($id)
    {
        $where = array('id_obat' => $id);
        $data = array('stock' => $this->input->post('stock'), );
        $this->M_All->update('obat', $where, $data);
        redirect('index.php/admin/viewObat/'.$id);

    }

    public function Report()
    {
        $data['report'] = $this->M_All->get_report()->result();
        // print_r($data);
        $this->load->view('admin/header');
        $this->load->view('admin/etc/report', $data);
        $this->load->view('admin/footer');
    }

    public function hapusReport($id)
    {
        // echo $id;
        $where = array('id_report' => $id, );
        // print_r($where);
        $this->M_All->delete($where, 'report');
        redirect('index.php/admin/report');
    }
}
