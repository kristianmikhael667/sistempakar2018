<?php


class Login extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('model_login/Login_akses', 'login_user');
		$this->load->library('session');
		$this->load->library('upload');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function login()
    {
        $this->form_validation->set_rules('id_user','id_user','required',['required' => 'ID wajib diisi!']);
        $this->form_validation->set_rules('password','password','required',['required' => 'Password wajib diisi!']);
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login');
        }else{
            $auth = $this->model_login->cek_login();
            //$auth1 = $this->model_auth->status();
            $status_karyawan = $auth->status;

            if($auth == FALSE){
                $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        ID atau Password Anda Salah
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                    redirect('login/login');
            }
            
            else{
                $this->session->set_userdata('id_user',$auth->id_user);
                $this->session->set_userdata('role_id',$auth->role_id);
                $status_karyawan = $auth->status;
                $auth1 = $this->model_login->cek_login();
                $cek_query=$this->login_user->cek_akun('id_user');     
                $data=$cek_query->row_array();
                $this->session->set_userdata('nama', $data['nama']);

                $status_karyawan = $auth1->status;
                $role = $auth1->role_id;

                if(($role == '1') && ($status_karyawan=="AKTIF")){
                    redirect('user/dashboard_user');
                }
                else if(($role == '2') && ($status_karyawan=="AKTIF")){
                    redirect('admin/dashboard_admin');
                }
                else{
                    $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Akun Anda Belum Aktif, Tunggu Konfirmasi dari Admin
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
               
                    redirect('login/login');
                } 
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login/login');
    }
}