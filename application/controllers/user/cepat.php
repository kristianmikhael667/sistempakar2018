<?php

class Cepat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelompok_model', 'kelompok');
        $this->load->model('Gejala_model', 'modelgejala');
        $this->load->model('model_kanker/namakanker', 'kanker');
        $this->load->model('model_login', 'login');
        $this->load->model('Nilai', 'nl');
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->helper('url');
        if (($this->session->userdata('id_user') == null) && ($this->session->userdata('role_id') != 1)) {
            redirect('login/login');
        }
    }

    public function index()
    {
        $data = array(
            'title' => '',
            'content' => 'user/cepat/list'
        );
        $data['record'] = $this->login->list();
        $this->load->view('template_dashboard_user/wrapper', $data, FALSE);
    }

    public function obati()
    {
        $data = array(
            'title' => '',
            'content' => 'user/cepat/obat'
        );
        $data['record'] = $this->login->list();
        $this->load->view('template_dashboard_user/wrapper', $data, FALSE);
    }

    public function diagnosa()
    {
        if (!$this->input->post('gejala')) {
            $data['contentuser'] = 'user/diagnosa/list';
            $data['listKelompok'] = $this->modelgejala->get_list_data();
            $this->load->view('template_dashboard_user/wrapper', $data);
        } else {
            $data = array(
                'title' => '',
                'content' => 'user/hasil_diagnosa/list'
            );
            $gejala = implode(",", $this->input->post("gejala"));
            $data["listGejala"] = $this->modelgejala->get_list_by_id($gejala);
            $data["listPenyakit"] = $this->nl->get_by_gejala($gejala);
            $data["listPencegahan"] = $this->nl->get_by_cegah($gejala);
            $data["listStadium"] = $this->nl->get_by_stadium($gejala);
            $listPencegahan = $this->nl->get_by_cegah($gejala);
            $listStadium = $this->nl->get_by_stadium($gejala);
            $listPenyakit = $this->nl->get_by_gejala($gejala);
            $penyakit = array();
            $cegah = array();
            $i = 0;
            foreach ($listPenyakit->result() as $value) {
                $listGejala = $this->nl->get_gejala_by_penyakit($value->penyakit_id, $gejala);
                $combineCFmb = 0;
                $combineCFmd = 0;
                $CFBefore = 0;
                $j = 0;
                foreach ($listGejala->result() as $value2) {
                    $penyakit[$i] = array(
                        'kode' => $value->kode,
                        'namapenyakit' => $value->namapenyakit
                    );
                    $i++;
                }
            }

            foreach ($listPencegahan->result() as $value) {
                $listGejala = $this->nl->get_gejala_by_cegah($value->pencegahan_id, $gejala);
                $combineCFmb = 0;
                $combineCFmd = 0;
                $CFBefore = 0;
                $j = 0;
                foreach ($listGejala->result() as $value2) {
                    $cegah[$i] = array(
                        'kode' => $value->kode,
                        'namapencegahan' => $value->namapencegahan
                    );
                    $i++;
                }
            }
            $this->load->view('template_dashboard_user/wrapper', $data, FALSE);
        }
    }
}
