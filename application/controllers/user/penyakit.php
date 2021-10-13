<?php

class Penyakit extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('model_kanker/namakanker', 'kanker');
		$this->load->model('model_login', 'login');
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->helper('url');
		if( ($this->session->userdata('id_karyawan') == null) && ($this->session->userdata('role_id') != 1) ){
			redirect('login/login');
		}
    }
	
    public function index()
	{
		$data = array('title' => '',
					  'content' => 'user/penyakit/list'
                     );
                     $data['record'] = $this->login->list();
					 $this->load->view('template_dashboard_user/wrapper', $data, FALSE);
    }
}