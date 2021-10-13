<?php

class NamaPesan extends CI_Model{


    public function list()
	{
		$this->db->select('*');
		$this->db->from('pesan');
		$this->db->order_by('waktu', 'DESC');
		$query = $this->db->get();    
        return $query;
	}

	public function delete($id)
	{
		$this->db->where($id);
		$this->db->delete('pesan');
	}
    
    public function adddata($id){	
		return $this->db->insert('pesan', $id); 
    }

	public function cek_akun($id){
		$this->db->select('*');
		$this->db->from('pesan');
		$this->db->where('id', $id);
		$query = $this->db->get();
        return $query;
	}

	public function edit($id, $data)
	{
		$this->db->update('pesan', $data, $id);
    }

}

?>