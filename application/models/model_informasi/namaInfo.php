<?php

class Namainfo extends CI_Model{


    public function list()
	{
		$this->db->select('*');
		$this->db->from('informasi');
		$this->db->order_by('tanggal', 'DESC');
		$query = $this->db->get();    
        return $query;
	}

	public function cek_akun($id){
		$this->db->select('*');
		$this->db->from('informasi');
		$this->db->where('id', $id);
		$query = $this->db->get();
        return $query;
	}
    
    public function adddata($id){	
		return $this->db->insert('informasi', $id); 
	}
    
    public function edit($id, $data)
	{
		$this->db->update('informasi', $data, $id);
    }

}

?>