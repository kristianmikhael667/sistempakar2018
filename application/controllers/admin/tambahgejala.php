<?php

class Tambahgejala extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('model_gejala/namaGejala', 'gejala');
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
					  'content' => 'admin/tambahgejala/list'
                     );
                     
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);
	}

	public function add()
	{	
		$ids		    = $this->input->post('ids');
		$kode		    = $this->input->post('kode');
		$namagejala			= $this->input->post('namagejala');
		$kelompok_gejala_id			= $this->input->post('kelompok_gejala_id');
		$cek_gejala 		= $this->gejala->cek_akun($id);
		$cek_data_gejala 	= $cek_gejala->num_rows();
		if($cek_data_gejala > 0){
			foreach($cek_gejala->result_array() as $row){
				echo "<script>alert('ID Gejala'".$row['id']." sudah didaftarkan ')</script>";
			}
		}
		else{
			$data_user = array(
				'ids'	=> $ids,
				'kode'	=> $kode,
				'namagejala'	=> $namagejala,
				'kelompok_gejala_id'	=> $kelompok_gejala_id
			);
			$this->gejala->adddata($data_user); 
			echo "<script>alert('UPLOAD DATA PASIEN BERHASIL')</script>";
			redirect('admin/tambahgejala/index');
		}
	}

	public function delete()
	{
		$data = array('title' => 'Delete gejala',
					  'content' => 'admin/tambahgejala/list'
					);
		$id = $this->input->get('id');
		// $where = array('ids' => $id);
		$this->gejala->delete($id);
		redirect('admin/tambahgejala/index');
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);	
	}

	public function edit()
	{	
		$data = array('title' => 'Edit gejala',
					  'content' => 'admin/tambahgejala/edit'
		);
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);
		//$id 	= $this->input->get('id');
		$ids 	= $this->input->post('ids');
		$kode	= $this->input->post('kode');
		$namagejala		= $this->input->post('namagejala');
		$data_user1 = array(
			'ids'		=> $ids,
			'kode'		=> $kode,
			'namagejala'	=> $namagejala
		);
		$where = array(
			'ids' => $ids
		);
		$this->gejala->edit($where, $data_user1);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Edit Data Gejala Berhasil
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<br>
				<a href="index">Back</a>
				</div>');
	}
	
}