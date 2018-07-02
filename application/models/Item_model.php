<?php 
 	defined('BASEPATH') OR exit('No direct script access allowed');
 
	 class Item_model extends CI_Model 
	 {
 		public $table ="item";
 		
 		public function getDataKontrakan($where=null,$word=null)
		{
			// $query = $this->db->get("item");
			// return $query->result_array();
			$this->db->select('*');
		$this->db->from($this->table);
		if ($where!=null) {
			$this->db->where($where);
		}
		if ($word!=null) {
			$this->db->like('kamar',$word);
			// $this->db->or_like('merk',$word);
		}
		return $this->db->get()->result_array();

		}
		public function insertKontrakan()
		{
			// $tgl=$this->input->post('tglLahir');
			// $tglBaru=date_format(new DateTime($tgl),"Y-m-d");
			$object = array(
				'alamat' => $this->input->post('alamat'),
				'fasilitas' => $this->input->post('fasilitas'),
				// 'tanggalLahir' => $tglBaru,
				'harga' => $this->input->post('harga'),
				'keterangan' => $this->input->post('keterangan'),
				'gambar' => $this->upload->data('file_name'));
			$this->db->insert('item', $object);
		}

		public function getKontrakan($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->get('item');
			return $query->result();
		}

		public function updateById($id)
		{
			$obj = array(
				'alamat' => $this->input->post('alamat'),
				'fasilitas' => $this->input->post('fasilitas'),
				'harga' => $this->input->post('harga'),
				'keterangan' => $this->input->post('keterangan'),
				
				'gambar' => $this->upload->data('file_name')
			);

			$this->db->where('id', $id);
			$this->db->update('item', $obj);
		}

		public function updateById2($id)
		{
			$data = array(
				'alamat' => $this->input->post('alamat'),
				'fasilitas' => $this->input->post('fasilitas'),
				'harga' => $this->input->post('harga'),
				'keterangan' => $this->input->post('keterangan'),
				
			);
			
			$this->db->where('id', $id);
			$this->db->update('item', $data);
		}

		public function delete($id)
		{ 
        	if ($this->db->delete("item", "id = ".$id)) { 
            return true; 
        }
      } 
 	
 
 	 }
 
 /* End of file Item_model.php */
 /* Location: ./application/models/Item_model.php */ ?>