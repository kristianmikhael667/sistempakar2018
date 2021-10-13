<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_berita/namaBerita', 'berita');
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->library('pagination');
		$this->load->helper('url');
	}

	public function index()
	{
		$url = "https://api.kawalcorona.com/indonesia";
		//        $url = "https://corona.elpida.my.id/api/detail/";
		$get_url = file_get_contents($url);
		$dataku = json_decode($get_url, true);
		// var_dump($dataku);
		// die;
		$data = array(
			'title'	=> '',
			'datalist' => $dataku,
			'content' => 'utama/dashboard_utama/list'
		);
		$this->load->view('template_dashboard_utama/wrapper', $data, FALSE);
	}

	public function lihat()
	{
		$data = array(
			'title' => '',
			'content' => 'utama/halaman_berita/list'
		);
		$this->load->view('template_dashboard_utama/wrapper', $data, FALSE);
		$id = $this->input->get('id');
		$config['upload_path'] = './assets/images/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|docx|pdf|xls|xlsx|ppt|ppt|zip|rar'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
		$config['max_size']             = 7000;
		$config['max_width']            = 0;
		$config['max_height']           = 0;

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				$id		    		= $this->input->post('id');
				$judulberita	    = $this->input->post('judulberita');
				$subjudul		    = $this->input->post('subjudul');
				$sekilas			= $this->input->post('sekilas');
				$isiberita			= $this->input->post('isiberita');
				$tanggal			= $this->input->post('tanggal');
				$waktu			= $this->input->post('waktu');
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/images/' . $gbr['file_name'];
				$config['new_image'] = './assets/images/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$foto 				= $gbr['file_name'];

				$data_user1 = array(
					'id'			=> $id,
					'judulberita'			=> $judulberita,
					'subjudul'	=> $subjudul,
					'sekilas'	=> $sekilas,
					'isiberita'			=> $isiberita,
					'foto'			=> $foto,
					'tanggal'		=> $tanggal,
					'waktu'		=> $waktu
				);
				// $where = array(
				// 	'id' => $id
				// );
				// $this->berita->edit($where, $data_user1);

			}
		} else {
			$id		    		= $this->input->post('id');
			$judulberita	    = $this->input->post('judulberita');
			$subjudul		    = $this->input->post('subjudul');
			$sekilas			= $this->input->post('sekilas');
			$isiberita			= $this->input->post('isiberita');
			$tanggal			= $this->input->post('tanggal');
			$waktu			= $this->input->post('waktu');

			$data_user1 = array(
				'id'			=> $id,
				'judulberita'	=> $judulberita,
				'subjudul'		=> $subjudul,
				'sekilas'		=> $sekilas,
				'isiberita'		=> $isiberita,
				'tanggal'		=> $tanggal,
				'waktu'		=> $waktu
			);
			$where = array(
				'id' => $id
			);
			$this->berita->edit($where, $data_user1);
		}
	}
}
