// $user_login = $this->session->userdata('user_id');
		// if($this->session->userdata('is_login') == FALSE){redirect('login_user');}

		if (!$this->input->post('gejala')) {
			// $data['content'] = 'user/diagnosa/list'; //nama file yang akan jadi kontent di template
			// $data['listKelompok'] = $this->kelompok->get_list_data();
			// $this->load->view('template_dashboard_user/wrapper', $data);
			$data = array('title' => '',
					  'content' => 'user/diagnosa/list'
                     );
                     $this->kelompok->get_list_data();
					 $this->load->view('template_dashboard_user/wrapper', $data, FALSE);

		}else{
			// $data["content"]="user/hasil_diagnosa/list";
			$data = array('title' => '',
						'content' => 'user/hasil_diagnosa/list'
			);
			$this->load->view('template_dashboard_user/wrapper', $data, FALSE);

			$gejala = implode(",", $this->input->post("gejala"));
			$data["listGejala"] = $this->modelgejala->get_list_by_id($gejala);
			//hitung
			$listPenyakit = $this->nl->get_by_gejala($gejala);
			$penyakit = array();
			$i=0;
			foreach($listPenyakit->result() as $value){
				$listGejala = $this->nl->get_gejala_by_penyakit($value->penyakit_id,$gejala);
				
					$penyakit[$i]=array('kode'=>$value->kode,
										'nama'=>$value->nama,
										'keterangan'=>$value->keterangan);
										// 'user_id' =>$user_login);
					//$this->db->insert('hasil_analisis', $penyakit[$i]);
					$i++;
				// }	
			}
			//insert ke tabel history
			// $insert_data = array();
			// foreach ($this->input->post("gejala") as $g) {
			// 	$insert_data[] = array(
			// 					// 'user_id' => $user_login,
			// 					'gejala_id' => $g
			// 				);
			// }
			// $this->db->insert_batch('history', $insert_data);

			// function cmp($a, $b)
			// {
			// 	return ($a["kepercayaan"] > $b["kepercayaan"]) ? -1 : 1;
			// }
			// usort($penyakit, "cmp");
			// $data["listPenyakit"] = $penyakit;
			// $data_hasil = array(
			// 	'kode' =>$penyakit[0]['kode'],
			// 	'nama' =>$penyakit[0]['nama'],
			// 	'kepercayaan' =>$penyakit[0]['kepercayaan'],
			// 	'keterangan' =>$penyakit[0]['keterangan'],
			// 	// 'user_id' =>$penyakit[0]['user_id'],
			// );
			// $this->db->insert('hasil_diagnosa', $data_hasil);

			// $this->load->view('templates/user/diagnosa/index', $data);
		}
	}