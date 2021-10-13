<?php

class Gejala_model extends CI_Model{

    public function gejala($limit, $start = 0, $q = null){
		// return $this->db->get('gejala')->result();

		//ini menggunakan query standar
		//jadi silahkan ppilih mau yg mana sama saja
		//bye
		// return $this->db->query("SELECT *, gejala.id AS gid FROM gejala JOIN kelompok_gejala on kelompok_gejala.id = gejala.kelompok_gejala_id")->result();

		//jadi ini query bawaan CI
		return $this->db->select('*, gejala.idgejala AS gid')
				 ->from('gejala')
				 ->join('jenispenyakit','jenispenyakit.idjenis = gejala.kelompok_gejala_id')
                 ->limit($limit, $start)
				 ->get()
				 ->result_array();
    }
    
    function get_by_kelompok($kelompok){
        $this->db->select('*');
        $this->db->from('gejala');
        $this->db->where('kelompok_gejala_id',$kelompok);
        $this->db->order_by("RAND()");
        return $this->db->get();
    }
    
    public function get_list_by_id($id){
        $sql = "select ids, kode, namagejala from gejala where ids in (".$id.")";
        return $this->db->query($sql);
    }
    
    
}

?>