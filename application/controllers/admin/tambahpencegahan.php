<?php

class Tambahpencegahan extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('model_pencegahan/namaPencegahan', 'pencegahan');
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
					  'content' => 'admin/tambahpencegahan/list'
                     );
                     
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);
	}

	public function add()
	{
		$id		    			= $this->input->post('id');
		$kode		   			= $this->input->post('kode');
		$namapencegahan			= $this->input->post('namapencegahan');
		$cek_cegah 		        = $this->pencegahan->cek_akun($id);
		$cek_data_cegah 	    = $cek_cegah->num_rows();
		if($cek_data_cegah > 0){
			foreach($cek_cegah->result_array() as $row){
				echo "<script>alert('ID Gejala'".$row['id']." sudah didaftarkan ')</script>";
			}
		}
		else{
			$data_user = array(
				'id'	    		=> $id,
				'kode'	    		=> $kode,
				'namapencegahan'	=> $namapencegahan
			);
			$this->pencegahan->adddata($data_user); 
			echo "<script>alert('UPLOAD DATA PASIEN BERHASIL')</script>";
			redirect('admin/tambahpencegahan/index');
		}
	}

	public function delete()
	{
		$data = array('title' => 'Delete gejala',
					  'content' => 'admin/tambahpencegahan/list'
					);
		$id = $this->input->get('id');
		$where = array('id' => $id);
		$this->pencegahan->delete($where);
		redirect('admin/tambahpencegahan/index');
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);	
	}

	public function edit()
	{	
		$data = array('title' => 'Edit gejala',
					  'content' => 'admin/tambahpencegahan/edit'
		);
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);
		$id             = $this->input->post('id');
		$kode           = $this->input->post('kode');
		$idpencegahan	= $this->input->post('idpencegahan');
		$namapencegahan	= $this->input->post('namapencegahan');
		$data_user1 = array(
			'id'				=> $id,
			'kode'				=> $kode,
			'namapencegahan'	=> $namapencegahan
		);
		$where = array(
			'id' => $id
		);
		$this->pencegahan->edit($where, $data_user1);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Edit Data Pencegahan Berhasil
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<br>
				<a href="index">Back</a>
				</div>');
	}
}