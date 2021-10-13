<?php

class Login_akses extends CI_Model{


    public function list()
	{
		$this->db->select('*');
		$this->db->from('users');
		$query = $this->db->get();    
        return $query;
	}

	public function cek_akun($id){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id_user', $id);
		$query = $this->db->get();
        return $query;
	}

	public function delete($id)
	{
		$this->db->where($id);
		$this->db->delete('users');
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function edit($id, $data)
	{
		$this->db->update('users', $data, $id);
    }
}

?>