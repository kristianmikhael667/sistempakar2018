<?php

class Tambahinformasi extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('model_informasi/namaInfo', 'info');
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
					  'content' => 'admin/tambahinfo/list'
                     );
                     
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);
	}

	public function add(){
		$data = array('title' => '',
					  'content' => 'admin/tambahinfo/list'
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
				$judulinfo	        = $this->input->post('judulinfo');
				$tanggal		    = $this->input->post('tanggal');
				$sekilas			= $this->input->post('sekilas');
				$isiinfo			= $this->input->post('isiinfo');
				$foto 				= $gbr['file_name'];
				$cek_info 		    = $this->info->cek_akun($id);
				$cek_data_info   	= $cek_info->num_rows();
					if($cek_data_info > 0){
						foreach($cek_info->result_array() as $row){
							echo "<script>alert('ID Info'".$row['id']." sudah didaftarkan ')</script>";
						}
					}
					else{
						$data_user = array(
							'id'		=> $id,
							'judulinfo'	=> $judulinfo,
							'tanggal'	=> $tanggal,
							'sekilas'	=> $sekilas,
							'isiinfo'	=> $isiinfo,
							'foto'	    => $foto
						);
						$this->info->adddata($data_user); 

						echo "<script>alert('UPLOAD DATA BERITA BERHASIL')</script>";
						redirect('admin/tambahinformasi/index');
					}
			}
		}
	}

	public function edit(){
		$data = array('title' => 'Add Info',
					  'content' => 'admin/tambahinfo/edit'
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
                $gbr                = $this->upload->data();
				$id		    		= $this->input->post('id');
				$judulinfo	        = $this->input->post('judulinfo');
				$tanggal		    = $this->input->post('tanggal');
				$sekilas			= $this->input->post('sekilas');
				$isiinfo			= $this->input->post('isiinfo');
				$config['image_library']='gd2';
	            $config['source_image']='./assets/images/'.$gbr['file_name'];
	            $config['new_image']= './assets/images/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$foto 				= $gbr['file_name'];

				$data_user1 = array(
					'id'		=> $id,
					'judulinfo'	=> $judulinfo,
					'tanggal'	=> $tanggal,
					'sekilas'	=> $sekilas,
					'isiinfo'	=> $isiinfo,
					'foto'		=> $foto
				);
				$where = array(
					'id' => $id
				);
				$this->info->edit($where, $data_user1);
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Edit Data Informasi Berhasil
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
			$judulinfo	        = $this->input->post('judulinfo');
			$tanggal		    = $this->input->post('tanggal');
			$sekilas			= $this->input->post('sekilas');
			$isiinfo			= $this->input->post('isiinfo');

			$data_user1 = array(
				'id'		=> $id,
				'judulinfo'	=> $judulinfo,
				'tanggal'	=> $tanggal,
				'sekilas'	=> $sekilas,
				'isiinfo'	=> $isiinfo
			);
			$where = array(
				'id' => $id
			);
			$this->info->edit($where, $data_user1);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Edit Data Informasi Berhasil
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<br>
				<a href="index">Back</a>
				</div>');
		}			
    }
	
}