<?php

class Tambahhasil extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('model_hasil/namaHasil', 'hasil');
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
					  'content' => 'admin/tambahhasil/list'
                     );
                     
		$this->load->view('template_dashboard_admin/wrapper', $data, FALSE);
	}

	public function add()
	{
		$id		    			= $this->input->post('id');
		$gejala_id				= $this->input->post('gejala_id');
		$penyakit_id			= $this->input->post('penyakit_id');
		$pencegahan_id			= $this->input->post('pencegahan_id');
		$stadium_id				= $this->input->post('stadium_id');
		$cek_hasil 				= $this->hasil->cek_akun($id);
		$cek_data_hasil 		= $cek_hasil->num_rows();
		if($cek_data_hasil > 0){
			foreach($cek_hasil->result_array() as $row){
				echo "<script>alert('ID Hasil'".$row['id']." sudah didaftarkan ')</script>";
			}
		}
		else{
			$data_user = array(
				'id'			=> $id,
				'gejala_id'		=> $gejala_id,
				'penyakit_id'	=> $penyakit_id,
				'pencegahan_id'	=> $pencegahan_id,
				'stadium_id'	=> $stadium_id
			);
			$this->hasil->adddata($data_user); 
			echo "<script>alert('UPLOAD DATA PASIEN BERHASIL')</script>";
			redirect('admin/tambahhasil/index');
		}
	}

	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->hasil->delete($id);
		redirect('admin/tambahhasil/index');
	}

}