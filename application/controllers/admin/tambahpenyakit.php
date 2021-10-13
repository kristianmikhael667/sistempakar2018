<?php

class Tambahpenyakit extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('model_kanker/namakanker', 'kanker');
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
					  'content' => 'admin/tambahpenyakit/list'
                     );
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);
	}
	
	public function add(){
		$data = array('title' => 'Add Karyawan',
					  'content' => 'admin/tambahpenyakit/list'
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
				$kode		    = $this->input->post('kode');
				$namapenyakit		= $this->input->post('namapenyakit');
				$definisi			= $this->input->post('definisi');
				$penanganan			= $this->input->post('penanganan');
				$obat				= $this->input->post('obat');
				$rumahsakit			= $this->input->post('rumahsakit');
				$spesialis			= $this->input->post('spesialis');
				$foto 				= $gbr['file_name'];
				$cek_kanker 		= $this->kanker->cek_akun($id);
				$cek_data_kanker 	= $cek_kanker->num_rows();
					if($cek_data_kanker > 0){
						foreach($cek_kanker->result_array() as $row){
							echo "<script>alert('ID Kanker'".$row['id']." sudah didaftarkan ')</script>";
						}
					}
					else{
						$data_user = array(
							'id'			=> $id,
							'kode'			=> $kode,
							'namapenyakit'	=> $namapenyakit,
							'definisi'		=> $definisi,
							'penanganan'	=> $penanganan,
							'obat'			=> $obat,
							'rumahsakit'	=> $rumahsakit,
							'spesialis'		=> $spesialis,
							'foto'			=> $foto
						);
						$this->kanker->adddata($data_user); 

						echo "<script>alert('UPLOAD DATA PASIEN BERHASIL')</script>";
						redirect('admin/tambahpenyakit/index');
					}
			}
		}
	}

	public function delete()
	{
		$data = array('title' => 'Data Karyawan',
					  'content' => 'admin/tambahpenyakit/list'
					);
		$id = $this->input->get('id');
		// $where = array('id' => $id);
		$this->kanker->delete($id);
		redirect('admin/tambahpenyakit/index');
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);	
	}

	public function hapus()
	{
		$data = array('title' => 'Data Karyawan',
					  'content' => 'admin/tambahpenyakit/list'
					);
		$id = $this->input->get('id');
		// $where = array('id' => $id);
		$this->kanker->delete($id);
		redirect('admin/tambahpenyakit/index');
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);	
	}

	public function edit(){
		$data = array('title' => 'Penyakit',
					  'content' => 'admin/tambahpenyakit/edit'
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
				$ida		    	= $this->input->post('id');
				$kode		    	= $this->input->post('kode');
				$namapenyakit		= $this->input->post('namapenyakit');
				$definisi			= $this->input->post('definisi');
				$penanganan			= $this->input->post('penanganan');
				$obat				= $this->input->post('obat');
				$rumahsakit			= $this->input->post('rumahsakit');
				$spesialis			= $this->input->post('spesialis');
				$config['image_library']='gd2';
	            $config['source_image']='./assets/images/'.$gbr['file_name'];
	            $config['new_image']= './assets/images/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$foto 				= $gbr['file_name'];
				$data_user1 = array(
					'id'			=> $ida,
					'kode'			=> $kode,
					'namapenyakit'	=> $namapenyakit,
					'definisi'		=> $definisi,
					'penanganan'	=> $penanganan,
					'obat'			=> $obat,
					'rumahsakit'	=> $rumahsakit,
					'spesialis'		=> $spesialis,
					'foto'			=> $foto
				);
				$where = array(
					'id' => $ida
				);
				$this->kanker->edit($where, $data_user1);
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Edit Data Penyakit Berhasil
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<br>
				<a href="index">Back</a>
				</div>');
			
			}
		}
		else{
			$id		   			= $this->input->post('id');
			$kode		    	= $this->input->post('kode');
			$namapenyakit		= $this->input->post('namapenyakit');
			$definisi			= $this->input->post('definisi');
			$penanganan			= $this->input->post('penanganan');
			$obat				= $this->input->post('obat');
			$rumahsakit			= $this->input->post('rumahsakit');	
			$spesialis			= $this->input->post('spesialis');
			$data_user1 = array(
				'id'			=> $id,
				'kode'			=> $kode,
				'namapenyakit'	=> $namapenyakit,
				'definisi'		=> $definisi,
				'penanganan'	=> $penanganan,
				'obat'			=> $obat,
				'spesialis'		=> $spesialis,
				'rumahsakit'	=> $rumahsakit,
			);
			$where = array(
				'id' => $id
			);
			$this->kanker->edit($where, $data_user1);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Edit Data Penyakit Berhasil
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<br>
				<a href="index">Back</a>
				</div>');
		}			
	}

	public function lihat(){
		$data = array('title' => 'Add Karyawan',
					  'content' => 'admin/tambahpenyakit/view'
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
				$kode		    	= $this->input->post('kode');
				$namapenyakit		= $this->input->post('namapenyakit');
				$definisi			= $this->input->post('definisi');
				$penanganan			= $this->input->post('penanganan');
				$obat				= $this->input->post('obat');
				$rumahsakit			= $this->input->post('rumahsakit');
				$config['image_library']='gd2';
	            $config['source_image']='./assets/images/'.$gbr['file_name'];
	            $config['new_image']= './assets/images/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$foto 				= $gbr['file_name'];
				$data_user1 = array(
					'id'			=> $id,
					'kode'			=> $kode,
					'namapenyakit'	=> $namapenyakit,
					'definisi'		=> $definisi,
					'jenis'			=> $jenis,
					'penanganan'	=> $penanganan,
					'obat'			=> $obat,
					'rumahsakit'	=> $rumahsakit,
					'foto'			=> $foto
				);
				$where = array(
					'id' => $id
				);
				$this->kanker->edit($where, $data_user1);
			
			}
		}
		else{
			$id		    		= $this->input->post('id');
			$kode		    	= $this->input->post('kode');
			$namapenyakit		= $this->input->post('namapenyakit');
			$definisi			= $this->input->post('definisi');
			$penanganan			= $this->input->post('penanganan');
			$obat				= $this->input->post('obat');
			$rumahsakit			= $this->input->post('rumahsakit');	
			$data_user1 = array(
				'id'			=> $id,
				'kode'			=> $kode,
				'namapenyakit'	=> $namapenyakit,
				'definisi'		=> $definisi,
				'penanganan'	=> $penanganan,
				'obat'			=> $obat,
				'rumahsakit'	=> $rumahsakit,
			);
			$where = array(
				'id' => $id
			);
			$this->kanker->edit($where, $data_user1);
		}			
	}

	public function addjenis()
	{
		$id		    		= $this->input->post('id');
		$namajenis			= $this->input->post('namajenis');
		$cek_jenis 		    = $this->kanker->cek_akun_jenis($id);
		$cek_data_jenis 	= $cek_jenis->num_rows();
		if($cek_data_jenis > 0){
			foreach($cek_jenis->result_array() as $row){
				echo "<script>alert('ID Jenis'".$row['id']." sudah didaftarkan ')</script>";
			}
		}
		else{
			$data_user = array(
				'id'	=> $id,
				'namajenis'	=> $namajenis
			);
			$this->kanker->addjenis($data_user); 
			echo "<script>alert('UPLOAD DATA PASIEN BERHASIL')</script>";
			redirect('admin/tambahpenyakit/index');
		}
	}
}