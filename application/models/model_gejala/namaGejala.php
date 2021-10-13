<?php

class Namagejala extends CI_Model{

	public function gejalaa()
    {
        return $this->db->select('*, gejala.ids AS gjl ')
                    ->from('gejala')
                    ->join('jenispenyakit', 'jenispenyakit.id = gejala.kelompok_gejala_id')
                    ->order_by('gejala.kode', 'ASC')
                    ->get();
	}
	
	function getjenis(){
        return $this->db->get('jenispenyakit');
    }

    public function list()
	{
		$this->db->select('*');
		$this->db->from('gejala');
		$query = $this->db->get();    
        return $query;
	}

	public function cek_akun($id){
		$this->db->select('*');
		$this->db->from('gejala');
		$this->db->where('ids', $id);
		$query = $this->db->get();
        return $query;
	}

	public function delete($id)
	{
		$query=$this->db->query("DELETE hasil, gejala
		 FROM hasil LEFT JOIN gejala ON hasil.gejala_id = gejala.ids
		 WHERE hasil.gejala_id='$id'
		");
		return $query;
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table, 'gejala',$data);
    }
    
    public function adddata($id){	
		return $this->db->insert('gejala', $id); 
    }
    
    public function edit($id, $data)
	{
		$this->db->update('gejala', $data, $id);
    }
    
    public function edit_barang($where,$table){
		return $this->db->get_where($table,$where);
	}

}

?>