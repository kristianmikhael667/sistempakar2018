<?php

class Tentang extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->helper('url');
    }

    public function index()
	{
		$data = array('title' => 'Data Karyawan',
					  'content' => 'utama/tentang/list'
                     );
                     
					 $this->load->view('template_dashboard_utama/wrapper', $data, FALSE);
	}
}