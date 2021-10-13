<?php

class Informasi extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('model_informasi/namaInfo', 'info');
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
		$data = array('title' => '',
					  'content' => 'user/informasi/list'
                     );
                     $data['record'] = $this->login->list();
					 $this->load->view('template_dashboard_user/wrapper', $data, FALSE);
	}

	public function lihat(){
		$data = array('title' => 'Add Info',
					  'content' => 'user/informasi/informasilist'
		);
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
		}			
	}
}