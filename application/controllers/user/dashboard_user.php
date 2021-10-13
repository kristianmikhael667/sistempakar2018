<?php

class Dashboard_user extends CI_Controller{

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Anda Belum Login Pasien
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>');
		redirect('login/login');
		}
		$this->load->model('model_login', 'login');
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->helper('url');
		if( ($this->session->userdata('id_user') == null) && ($this->session->userdata('role_id') != 1) ){
			redirect('login/login');
		}
    }

    public function index()
	{
		$data = array('title' => 'Data Pasien',
					  'content' => 'user/dashboard/dashboarduser'
					 );
		$data['record'] = $this->login->list();
		$this->load->view('template_dashboard_user/wrapper', $data, FALSE);
	}

	public function profile()
	{
		$data = array('title' => 'Data Pasien',
					  'content' => 'user/profile/profile'
					 );
					 $data['record'] = $this->login->list();
					 $this->load->view('template_dashboard_user/wrapper', $data, FALSE);
	}

	public function edit(){
		$data = array('title' => 'Penyakit',
					  'content' => 'user/profile/edit'
		);
		$data['record'] = $this->login->list();
		$this->load->view('template_dashboard_user/wrapper', $data, FALSE);
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
				$id_user		    = $this->input->post('id_user');
				$password		    = $this->input->post('password');
				$nama		        = $this->input->post('nama');
				$lahir		        = $this->input->post('lahir');
				$tanggal_lahir      = $this->input->post('tanggal_lahir');
				$jeniskelamin	    = $this->input->post('jeniskelamin');
				$alamat				= $this->input->post('alamat');
                $nomor              = $this->input->post('nomor');
				$config['image_library']='gd2';
	            $config['source_image']='./assets/images/'.$gbr['file_name'];
	            $config['new_image']= './assets/images/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$foto 				= $gbr['file_name'];
				$data_user1 = array(
					'id_user'		=> $id_user,
					'password'		=> $password,
					'nama'		    => $nama,
					'lahir'		    => $lahir,
					'tanggal_lahir' => $tanggal_lahir,
					'jeniskelamin'	=> $jeniskelamin,
					'alamat'		=> $alamat,
                    'nomor'         => $nomor,
					'foto'			=> $foto
				);
				$where = array(
					'id_user' => $id_user
				);
				$this->login->edit($where, $data_user1);
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Edit Data Pasien Berhasil
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<br>
				<a href="index">Back</a>
				</div>');
			
			}
		}
		else{
			$id_user		    = $this->input->post('id_user');
			$password		    = $this->input->post('password');
			$nama		        = $this->input->post('nama');
			$lahir		        = $this->input->post('lahir');
			$tanggal_lahir      = $this->input->post('tanggal_lahir');
			$jeniskelamin	    = $this->input->post('jeniskelamin');
			$alamat				= $this->input->post('alamat');
            $nomor              = $this->input->post('nomor');
			$data_user1 = array(
				'id_user'		=> $id_user,
				'password'		=> $password,
				'nama'		    => $nama,
				'lahir'		    => $lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'jeniskelamin'	=> $jeniskelamin,
				'alamat'		=> $alamat,
                'nomor'         => $nomor
			);
			$where = array(
				'id_user' => $id_user
			);
			$this->login->edit($where, $data_user1);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Edit Data Pasien Berhasil
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<br>
				<a href="index">Back</a>
				</div>');
		}			
	}
	
}