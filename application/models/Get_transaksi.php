<?php
class Get_transaksi extends CI_Model {
 
    public function getDataTransaksi()
	{
		//$this->db->where('alamat', $alamat);
		// $this->db->select('alamat,harga,kamar,fasilitas');
		// $this->db->from('item');
		// $query = $this->db->get();
		// return $query->result_array();
		$query = $this->db->get('transaksi');
		return $query->result_array();

	}
 
}
?>