<?php

class Stadium extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('model_stadium/namaStadium', 'stadium');
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
					  'content' => 'admin/tambahstadium/list'
                     );
                     
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);
	}

	public function add()
	{
		$idf		    		= $this->input->post('idf');
		$kode		   			= $this->input->post('kode');
		$namastadium			= $this->input->post('namastadium');
		$cek_stadium 		    = $this->stadium->cek_akun($id);
		$cek_data_stadium	    = $cek_stadium->num_rows();
		if($cek_data_stadium > 0){
			foreach($cek_stadium->result_array() as $row){
				echo "<script>alert('ID Stadium'".$row['id']." sudah didaftarkan ')</script>";
			}
		}
		else{
			$data_user = array(
				'idf'	    		=> $idf,
				'kode'	    		=> $kode,
				'namastadium'	    => $namastadium
			);
			$this->stadium->adddata($data_user); 
			echo "<script>alert('UPLOAD DATA PASIEN BERHASIL')</script>";
			redirect('admin/stadium/index');
		}
	}

	public function delete()
	{
		$data = array('title' => 'Delete gejala',
					  'content' => 'admin/tambahstadium/list'
					);
		$id = $this->input->get('id');
		// $where = array('idf' => $id);
		$this->stadium->delete($id);
		redirect('admin/stadium/index');
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);	
	}

	public function edit()
	{	
		$data = array('title' => 'Edit gejala',
					  'content' => 'admin/tambahstadium/edit'
		);
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);
		$idf		    		= $this->input->post('idf');
		$kode		   			= $this->input->post('kode');
		$namastadium			= $this->input->post('namastadium');
		$data_user1 = array(
			'idf'				=> $idf,
			'kode'				=> $kode,
			'namastadium'	    => $namastadium
		);
		$where = array(
			'idf' => $idf
		);
		$this->stadium->edit($where, $data_user1);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Edit Data Stadium Berhasil
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<br>
				<a href="index">Back</a>
				</div>');
	}
}