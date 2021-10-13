<?php

class Namapencegahan extends CI_Model{


    public function list()
	{
		$this->db->select('*');
		$this->db->from('pencegahan');
		$query = $this->db->get();    
        return $query;
	}

    public function tampil_data(){
		return $this->db->get('pencegahan');
	}

    
	public function cek_akun($id){
		$this->db->select('*');
		$this->db->from('pencegahan');
		$this->db->where('id', $id);
		$query = $this->db->get();
        return $query;
	}

	public function delete($id)
	{
		$this->db->where($id);
		$this->db->delete('pencegahan');
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
    }

    public function updateProduct($data, $id)
    {
        $query = $this->db->table('pencegahan')->update($data, array('idpencegahan' => $id));
        return $query;
    }
    
    public function adddata($id){	
		return $this->db->insert('pencegahan', $id); 
    }
    
    public function edit($id, $data)
	{
		$this->db->update('pencegahan', $data, $id);
    }
    
    public function edit_barang($where,$table){
		return $this->db->get_where($table,$where);
	}

}

?>