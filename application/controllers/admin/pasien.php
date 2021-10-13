<?php

class Pasien extends CI_Controller{
	
    public function __construct(){
		parent::__construct();
		
		if($this->session->userdata('role_id') != '2'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Anda Belum Login Admin!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>');
		redirect('login/login');
        }
        $this->load->model('model_login/Login_akses', 'login');
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
					  'content' => 'admin/datapasien/pass'
                     );
                     
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);
    }
    
    public function edit(){
		$id_user = $this->input->post('id_user');
		$status = $this->input->post('status');

		$data = array(
			'id_user'		=> $id_user,
			'status'		=> $status
		);

		$where = array(
			'id_user' => $id_user
		);

		$this->model_login->update_data($where,$data, 'users');
		redirect('admin/pasien/index');
	}

}