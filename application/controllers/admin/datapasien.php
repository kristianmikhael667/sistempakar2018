<?php

class Datapasien extends CI_Controller{
	
    public function __construct(){
		parent::__construct();
		$this->load->model('model_login/Login_akses', 'login');
		if($this->session->userdata('role_id') != '2'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Anda Belum Login Admin!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>');
		redirect('login/login');
		}
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->helper('url');
		if( ($this->session->userdata('id_user') == null) && ($this->session->userdata('role_id') != 2) ){
			redirect('login/login');
		}
	}
	
	public function index()
	{
		$data = array('title' => 'Data Admin',
					  'content' => 'admin/datapasien/list'
                     );
                     
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);
	}

	public function delete()
	{
		$data = array('title' => 'Delete gejala',
					  'content' => 'admin/datapasien/list'
					);
		$id = $this->input->get('id');
		$where = array('id_user' => $id);
		$this->login->delete($where);
		redirect('admin/datapasien/index');
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);	
	}

	public function edit()
	{	
		$data = array('title' => 'Edit Data',
					  'content' => 'admin/datapasien/pass'
		);
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);
		$id = $this->input->get('id');
		$id_user	= $this->input->post('id_user');
		$nama		= $this->input->post('nama');
		$status		= $this->input->post('status');
		$data_user1 = array(
			'id_user'	=> $id_user,
			'nama'		=> $nama,
			'status'	=> $status
		);
		$where = array(
			'id_user' => $id_user
		);
		$this->login->edit($where, $data_user1);
	}

}