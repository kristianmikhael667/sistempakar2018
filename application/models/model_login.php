<?php

class Model_login extends CI_Model{
    public function cek_login()
    {
        $id_user    = set_value('id_user');
        $password   = set_value('password');
        $result     = $this->db->where('id_user',$id_user)
                               ->where('password',$password)
                               ->limit(1)
                               ->get('users');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function get($user_id)
    {
        $this->db->select();
        $this->db->from('users as users');
        $this->db->where('users.id_user != ', $user_id);
        $this->db->where('users.id_user != 0');
        return $this->db->get();
    }

    public function list(){
        $this->db->select('*');
        $this->db->from('users');
        $query = $this->db->get();
        return $query;
    }

    public function cek_data($id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id_user', $id);
        $query = $this->db->get();
        return $query;
    }

    public function add_employe($id){	
		return  $this->db->insert('users', $id); 
    }
    
    public function edit($id, $data)
	{
		$this->db->update('users', $data, $id);
    }
}