<?php

class Tambahberita extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('model_berita/namaBerita', 'berita');
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->helper('url');
		if( ($this->session->userdata('id_user') == null) && ($this->session->userdata('role_id') != 2) ){
			redirect('login/login');
		}
	}

    public function index()
	{
		$data = array('title' => '',
					  'content' => 'admin/tambahberita/list'
                     );
                     
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);
	}

	public function add(){
		$data = array('title' => '',
					  'content' => 'admin/tambahberita/list'
		);
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);
		$config['upload_path'] = './assets/images/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|docx|pdf|xls|xlsx|ppt|ppt|zip|rar'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
		$config['max_size']             = 7000;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
		$this->upload->initialize($config);

		if(!empty($_FILES['filefoto']['name'])){
			if ($this->upload->do_upload('filefoto')){ //nama fiel yg ada diview
				$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/images/karyawan/'.$gbr['file_name'];
	            $config['new_image']= './assets/images/karyawan/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();
				$id		    		= $this->input->post('id');
				$judulberita	    = $this->input->post('judulberita');
				$subjudul		    = $this->input->post('subjudul');
				$sekilas			= $this->input->post('sekilas');
				$isiberita			= $this->input->post('isiberita');
				$tanggal			= $this->input->post('tanggal');
				$waktu				= $this->input->post('waktu');
				$foto 				= $gbr['file_name'];
				$cek_berita 		= $this->berita->cek_akun($id);
				$cek_data_berita 	= $cek_berita->num_rows();
					if($cek_data_berita > 0){
						foreach($cek_berita->result_array() as $row){
							echo "<script>alert('ID Berita'".$row['id']." sudah didaftarkan ')</script>";
						}
					}
					else{
						$data_user = array(
							'id'			=> $id,
							'judulberita'			=> $judulberita,
							'subjudul'	=> $subjudul,
							'sekilas'	=> $sekilas,
							'isiberita'			=> $isiberita,
							'foto'			=> $foto,
							'tanggal'		=> $tanggal,
							'waktu'		=> $waktu
						);
						$this->berita->adddata($data_user); 

						echo "<script>alert('UPLOAD DATA BERITA BERHASIL')</script>";
						redirect('admin/tambahberita/index');
					}
			}
		}
	}

	public function edit(){
		$data = array('title' => 'Add Karyawan',
					  'content' => 'admin/tambahberita/edit'
		);
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);
        $id = $this->input->get('id');
		$config['upload_path'] = './assets/images/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|docx|pdf|xls|xlsx|ppt|ppt|zip|rar'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
		$config['max_size']             = 7000;
		$config['max_width']            = 0;
		$config['max_height']           = 0;

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){
			if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
				$id		    		= $this->input->post('id');
				$judulberita	    = $this->input->post('judulberita');
				$subjudul		    = $this->input->post('subjudul');
				$sekilas			= $this->input->post('sekilas');
				$isiberita			= $this->input->post('isiberita');
				$tanggal			= $this->input->post('tanggal');
				$waktu				= $this->input->post('waktu');
				$config['image_library']='gd2';
	            $config['source_image']='./assets/images/'.$gbr['file_name'];
	            $config['new_image']= './assets/images/'.$gbr['file_name'];
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
				$where = array(
					'id' => $id
				);
				$this->berita->edit($where, $data_user1);
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
					Edit Data Berita Berhasil
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					<br>
					<a href="index">Back</a>
				</div>');
			}
		}
		else{
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
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			Edit Data Berita Berhasil
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			<br>
			<a href="index">Back</a>
			</div>');
		}			
	}
	
}