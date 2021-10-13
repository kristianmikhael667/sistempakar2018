<?php

class Namahasil extends CI_Model{

    public function hasilnilai()
    {
        return $this->db->select('*, hasil.id AS hsl ')
                    ->from('hasil')
                    ->join('gejala', 'gejala.ids = hasil.gejala_id')
                    ->join('penyakit', 'penyakit.id = hasil.penyakit_id')
                    ->join('pencegahan', 'pencegahan.id = hasil.pencegahan_id')
                    ->join('stadium', 'stadium.idf = hasil.stadium_id')
                    ->order_by('hasil.id', 'DESC')
                    ->get();
    }

    public function cek_akun($id){
		$this->db->select('*');
		$this->db->from('hasil');
		$this->db->where('id', $id);
		$query = $this->db->get();
        return $query;
    }
    
    public function list($id){
		$this->db->select('*');
		$this->db->from('hasil');
		$query = $this->db->get();
        return $query;
	}

    public function adddata($id){	
		return $this->db->insert('hasil', $id); 
    }

    function getgejala(){
        return $this->db->get('gejala');
    }


    function getpenyakit(){
        return $this->db->get('penyakit');
    }

    function getpencegahan(){
        return $this->db->get('pencegahan');
    }

    function getstadium(){
        return $this->db->get('stadium');
    }

    public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('hasil');
	}

}

?>