<?php

class About extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('model_login', 'login');
		$this->load->model('model_pesan/namaPesan', 'pesan');
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
					  'content' => 'user/about/list'
                     );
                     $data['record'] = $this->login->list();
					 $this->load->view('template_dashboard_user/wrapper', $data, FALSE);
	}

	public function add()
	{
		$id		    			= $this->input->post('id');
		$nama		   			= $this->input->post('nama');
		$nomor					= $this->input->post('nomor');
		$email					= $this->input->post('email');
		$pesan					= $this->input->post('pesan');
		$data_user = array(
			'id'	    		=> $id,
			'nama'	    		=> $nama,
			'nomor'	    		=> $nomor,
			'email'	    		=> $email,
			'pesan'	    		=> $pesan,
		);
		$this->pesan->adddata($data_user); 
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Pesan Anda Telah Terkirim
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
		redirect('user/about/index');
	}
}
