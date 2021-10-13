<?php

class Namastadium extends CI_Model{


    public function list()
	{
		$this->db->select('*');
		$this->db->from('stadium');
		$query = $this->db->get();    
        return $query;
	}

    public function tampil_data(){
		return $this->db->get('stadium');
	}

    
	public function cek_akun($id){
		$this->db->select('*');
		$this->db->from('stadium');
		$this->db->where('idf', $id);
		$query = $this->db->get();
        return $query;
	}

	public function delete($id)
	{
		// $this->db->where($id);
		// $this->db->delete('stadium');

		$query=$this->db->query("DELETE hasil, stadium
		 FROM hasil LEFT JOIN stadium ON hasil.stadium_id = stadium.idf
		 WHERE hasil.stadium_id='$id'
		");
		return $query;
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
    }

    public function updateProduct($data, $id)
    {
        $query = $this->db->table('stadium')->update($data, array('idf' => $idf));
        return $query;
    }
    
    public function adddata($id){	
		return $this->db->insert('stadium', $id); 
    }
    
    public function edit($id, $data)
	{
		$this->db->update('stadium', $data, $id);
    }
    
    public function edit_barang($where,$table){
		return $this->db->get_where($table,$where);
	}

}

?>