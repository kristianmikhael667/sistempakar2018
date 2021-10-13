<?php

class Namakanker extends CI_Model{


    public function list()
	{
		$this->db->select('*');
		$this->db->from('penyakit');
		$query = $this->db->get();    
        return $query;
	}

	public function lihat()
	{
		$this->db->select('*');
		$this->db->from('jenispenyakit');
		$query = $this->db->get();    
        return $query;
	}

    public function tampil_data(){
		return $this->db->get('penyakit');
	}

    
	public function cek_akun($id){
		$this->db->select('*');
		$this->db->from('penyakit');
		$this->db->where('id', $id);
		$query = $this->db->get();
        return $query;
	}

	public function cek_akun_jenis($id){
		$this->db->select('*');
		$this->db->from('jenispenyakit');
		$this->db->where('id', $id);
		$query = $this->db->get();
        return $query;
	}

	// public function delete($id)
	// {
	// 	$this->db->where($id);
	// 	$this->db->delete('penyakit');
	// }

	public function delete($id)
	{
		$query=$this->db->query("DELETE hasil, penyakit
		 FROM hasil LEFT JOIN penyakit ON hasil.penyakit_id = penyakit.id
		 WHERE hasil.penyakit_id='$id'
		");
		return $query;
	}

	public function hapus($id)
	{
		$this->db->where($id);
		$this->db->delete('jenispenyakit');
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
    }

    public function updateProduct($data, $id)
    {
        $query = $this->db->table('penyakit')->update($data, array('id' => $id));
        return $query;
    }
    
    public function adddata($id){	
		return $this->db->insert('penyakit', $id); 
	}
	
	public function addjenis($id){
		return $this->db->insert('jenispenyakit', $id);
	}
    
    public function edit($id, $data)
	{
		$this->db->update('penyakit', $data, $id);
    }
    
    public function edit_barang($where,$table){
		return $this->db->get_where($table,$where);
	}

	// public function delete($id)
	// {
	// 	$query=$this->db->query("DELETE a.*, b.* FROM penyakit a, hasil b WHERE a.id = '$id' AND b.penyakit_id = '$id' = '$id'");
	// 	return $query; 
	// }

}

?>