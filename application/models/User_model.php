<?php

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get($user_id)
    {
        $this->db->select();
        $this->db->from('users as users');
        $this->db->where('users.id_user != ', $user_id);
        $this->db->where('users.id_user != 0');
        return $this->db->get();
    }

    public function getOne($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('users');
    }

    public function logged($user_id)
    {
        $this->db->where('id_user', $user_id);
        $this->db->update('users', ['is_logged_in' => 1, 'last_login' => date('Y-m-d')]);

        return 1;
    }
}