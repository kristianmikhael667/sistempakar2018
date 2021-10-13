<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Model {

    public function daftarNilaicf($limit, $start = 0, $q = null){
		// return $this->db->query("SELECT * FROM gejala_penyakit JOIN penyakit on penyakit.penyakit_id = gejala_penyakit.id ")->result();
		// return $this->db->get("gejala_penyakit")->result();

		return $this->db->select('*, hasil.id AS hsl ')
						->from('hasil')
						->join('gejala', 'gejala.idgejala = hasil.gejala_id ')
						->join('penyakit', 'penyakit.idpenyakit = hasil.penyakit_id ')
						->order_by('hasil.id', 'ASC')
                        ->limit($limit, $start)
						->get()
						->result_array();
	}


	function get_by_gejala($gejala){
         $sql = "SELECT DISTINCT  penyakit_id, p.kode, p.namapenyakit, p.definisi, p.penanganan, p.obat, p.rumahsakit, p.spesialis FROM hasil hsl INNER JOIN penyakit p ON hsl.penyakit_id = p.id WHERE gejala_id IN (".$gejala.") order by penyakit_id, gejala_id";
         return $this->db->query($sql);
     }

     function get_by_cegah($gejala){
        $sql = "SELECT DISTINCT  pencegahan_id, p.kode, p.namapencegahan FROM hasil hsl INNER JOIN pencegahan p ON hsl.pencegahan_id = p.id WHERE gejala_id IN (".$gejala.") order by pencegahan_id, gejala_id";
        return $this->db->query($sql);
    }

    function get_by_stadium($gejala){
        $sql = "SELECT DISTINCT  stadium_id, p.kode, p.namastadium FROM hasil hsl INNER JOIN stadium p ON hsl.stadium_id = p.idf WHERE gejala_id IN (".$gejala.") order by stadium_id, gejala_id";
        return $this->db->query($sql);
    }


     function get_gejala_by_penyakit($id,$gejala=null){
        $sql = "select hasil.gejala_id from hasil where penyakit_id=".$id;
        if($gejala!=null)
           $sql=$sql." and gejala_id in (".$gejala.")";
       $sql=$sql." order by gejala_id";
        return $this->db->query($sql);
    }

    function get_gejala_by_cegah($id,$gejala=null){
        $sql = "select hasil.gejala_id from hasil where pencegahan_id=".$id;
        if($gejala!=null)
           $sql=$sql." and gejala_id in (".$gejala.")";
       $sql=$sql." order by gejala_id";
        return $this->db->query($sql);
    }

}
