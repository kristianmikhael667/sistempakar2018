<?php

class Editpenyakit extends CI_Controller{

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
					  'content' => 'admin/tambahpenyakit/edit'
                     );
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);
	}

}