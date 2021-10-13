<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelompok_model extends CI_Model {

	function get_list_data(){
        $this->db->select('*');
        $this->db->from('jenispenyakit');
        return $this->db->get();
    }
}
