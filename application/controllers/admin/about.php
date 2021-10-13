<?php

class About extends CI_Controller{


	public function __construct(){
		parent::__construct();
		$this->load->model('model_pesan/namaPesan', 'pesan');
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
					  'content' => 'admin/about/list'
                     );
                     
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);
	}

	public function delete()
	{
		$data = array('title' => 'Delete pesan',
					  'content' => 'admin/about/list'
					);
		$id = $this->input->get('id');
		$where = array('id' => $id);
		$this->pesan->delete($where);
		redirect('admin/about/index');
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);	
	}

	public function lihat(){
		$data = array('title' => '',
					  'content' => 'admin/about/view'
		);
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);
        $id = $this->input->get('id');
		$ids		    		= $this->input->post('id');
		$nama		    	= $this->input->post('nama');
		$nomor				= $this->input->post('nomor');
		$email				= $this->input->post('email');
		$pesan				= $this->input->post('pesan');
		$waktu				= $this->input->post('waktu');
		$data_user1 = array(
			'id'			=> $ids,
			'nama'			=> $nama,
			'nomor'			=> $nomor,
			'email'			=> $email,
			'pesan'			=> $pesan,
			'waktu'			=> $waktu
		);
		$where = array(
			'id' => $ids
		);
		$this->pesan->edit($where, $data_user1);		
	}
	
}