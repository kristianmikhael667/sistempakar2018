<?php

class Regist extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('model_login', 'login');
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->helper('url');
    }

    public function index()
	{
		$data = array('title' => 'Tambah Pasien',
					  'content' => 'regist'
                     );
                     
		$this->load->view('regist', $data, FALSE);
	}

	public function add(){
		$data = array('title' => 'Add Karyawan',
					  'content' => 'regist'
		);
		$this->load->view('regist', $data, FALSE);
		$config['upload_path'] = './assets/images/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|jpeg|png|doc|docx|pdf|xls|xlsx|ppt|ppt|zip|rar'; //type yang dapat diakses bisa anda sesuaikan
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
				$id_user		    = $this->input->post('id_user');
				$password		    = $this->input->post('password');
				$nama		        = $this->input->post('nama');
				$lahir		        = $this->input->post('lahir');
				$tanggal_lahir      = $this->input->post('tanggal_lahir');
				$jeniskelamin	    = $this->input->post('jeniskelamin');
				$alamat				= $this->input->post('alamat');
				$status		        = $this->input->post('status');
                $role_id			= 1;
                $nomor              = $this->input->post('nomor');
				$foto 				= $gbr['file_name'];
				$cek_pasien 		= $this->login->cek_data($id_user);
				$cek_data_pasien 	= $cek_pasien->num_rows();
					if($cek_data_pasien > 0){
						foreach($cek_pasien->result_array() as $row){
							echo "<script>alert('ID Pasien'".$row['id_user']." sudah didaftarkan ')</script>";
						}
					}
					else{
						$data_user = array(
							'id_user'		=> $id_user,
							'password'		=> $password,
							'nama'		    => $nama,
							'lahir'		    => $lahir,
							'tanggal_lahir' => $tanggal_lahir,
							'jeniskelamin'	=> $jeniskelamin,
							'alamat'		=> $alamat,
							'status'		=> 'NONE',
                            'role_id'		=> 1,
                            'nomor'         => $nomor,
							'foto'			=> $foto
						);
						$this->login->add_employe($data_user); 

						echo "<script>alert('UPLOAD DATA PASIEN BERHASIL')</script>";
						redirect('login/login');
					}
			}
		}
		
	}
	
	public function edit(){
		$data = array('title' => 'Add Karyawan',
					  'content' => 'hrd/karyawan/edit'
		);
		$this->load->view('tamplate_bootstrap_hrd/wrapper', $data, FALSE);
		$id = $this->input->get('id');
		


		$config['upload_path'] = './assets/images/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|doc|docx|pdf|xls|xlsx|ppt|ppt|zip|rar'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
		$config['max_size']             = 7000;
		$config['max_width']            = 0;
		$config['max_height']           = 0;

		

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){
			if ($this->upload->do_upload('filefoto')){
				$gbr = $this->upload->data();
				$id_karyawan		= $this->input->post('id_karyawan');
				$nama_karyawan		= $this->input->post('nama_karyawan');
				$jenis_kelamin		= $this->input->post('jenis_kelamin');
				$kode_bagian		= $this->input->post('kode_bagian');
				$alamat				= $this->input->post('alamat');
				$nomor_telepon		= $this->input->post('nomor_telepon');
				$email				= $this->input->post('email');
				$tanggal_lahir		= $this->input->post('tanggal_lahir');
				$password			= $this->input->post('password');
				$status				= $this->input->post('status');
				$role_id			= $this->input->post('role_id');
				$config['image_library']='gd2';
	            $config['source_image']='./assets/images/'.$gbr['file_name'];
	            $config['new_image']= './assets/images/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$foto 				= $gbr['file_name'];
				$data_user1 = array(
					'nama_karyawan'		=> $nama_karyawan,
					'jenis_kelamin'		=> $jenis_kelamin,
					'kode_bagian'		=> $kode_bagian,
					'alamat'			=> $alamat,
					'nomor_telepon'		=> $nomor_telepon,
					'email'				=> $email,
					'tanggal_lahir'		=> $tanggal_lahir,
					'password'			=> $password,
					'status'			=> $status,
					'role_id'			=> $role_id,
					'foto'				=> $foto
				);
				$where = array(
					'id_karyawan' => $id_karyawan
				);
				$this->karyawan->edit($where, $data_user1);
				echo "<script>alert('DATA KARYAWAN BERHASIL DI EDIT')</script>";
				redirect('hrd/dashboard_hrd/index');
			
			}
		}
		else{
			
		$id_karyawan		= $this->input->post('id_karyawan');
		$nama_karyawan		= $this->input->post('nama_karyawan');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$kode_bagian		= $this->input->post('kode_bagian');
		$alamat				= $this->input->post('alamat');
		$nomor_telepon		= $this->input->post('nomor_telepon');
		$email				= $this->input->post('email');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$password			= sha1($this->input->post('password'));
		$status				= $this->input->post('status');
		$role_id			= $this->input->post('role_id');	
			$data_user1 = array(
				'nama_karyawan'		=> $nama_karyawan,
				'jenis_kelamin'		=> $jenis_kelamin,
				'kode_bagian'		=> $kode_bagian,
				'alamat'			=> $alamat,
				'nomor_telepon'		=> $nomor_telepon,
				'email'				=> $email,
				'tanggal_lahir'		=> $tanggal_lahir,
				'password'			=> $password,
				'status'			=> $status,
				'role_id'			=> $role_id
			);
			$where = array(
				'id_karyawan' => $id_karyawan
			);
			$this->karyawan->edit($where, $data_user1);
			echo "<script>alert('DATA KARYAWAN BERHASIL DI EDIT')</script>";
			redirect('hrd/dashboard_hrd/index');
			
		}

	        
				
	}

	
}