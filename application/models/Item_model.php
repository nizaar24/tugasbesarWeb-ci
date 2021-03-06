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
			
			$object = array(
				'alamat' => $this->input->post('alamat'),
				'kamar'=> $this->input->post('kamar'),
				'fasilitas' => $this->input->post('fasilitas'),
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

		public function updateStatus($id)
		{
			$data = array(

				'status' => ("tidak tersedia"),
				
			);
			
			$this->db->where('id', $id);
			$this->db->update('item', $data);
		}

		public function updateStatus2($id)
		{
			$data = array(

				'status' => ("tersedia"),
				
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

      	public function transaksi($id)
		{
			$tgl=$this->input->post('tanggal');
			$tglBaru=date_format(new DateTime($tgl),"Y-m-d");
			$obj = array(
				'username' => $this->input->post('username'),
				'nama' => $this->input->post('nama'),
				'nmr_tlp' => $this->input->post('nmr_tlp'),
				'email' => $this->input->post('email'),
				'gender' => $this->input->post('gender'),
				'idItem' => $this->input->post('id'),
				'alamat' => $this->input->post('alamat'),
				'kamar' => $this->input->post('kamar'),
				'fasilitas' => $this->input->post('fasilitas'),
				'harga' => $this->input->post('harga'),
				'keterangan' => $this->input->post('keterangan'),
				'tanggal' => $tglBaru,
			);

			$this->db->insert('transaksi', $obj);
		}
 	
 
 }
 
 /* End of file Item_model.php */
 /* Location: ./application/models/Item_model.php */ ?>