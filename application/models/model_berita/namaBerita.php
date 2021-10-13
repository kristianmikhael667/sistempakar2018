<?php

class Namaberita extends CI_Model{


    public function list()
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->order_by('tanggal', 'DESC');
		$query = $this->db->get();    
        return $query;
	}

	public function hitungJumlahBerita()
	{   
		$query = $this->db->get('berita');
		if($query->num_rows()>0)
		{
		return $query->num_rows();
		}
		else
		{
		return 0;
		}
	}

	public function cek_akun($id){
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->where('id', $id);
		$query = $this->db->get();
        return $query;
	}
    
    public function adddata($id){	
		return $this->db->insert('berita', $id); 
	}
    
    public function edit($id, $data)
	{
		$this->db->update('berita', $data, $id);
    }

}

?>