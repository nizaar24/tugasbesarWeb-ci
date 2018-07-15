<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Transaksi_m extends CI_Model {

 	public function getDataTransaksi()
		{
			$query = $this->db->get("transaksi");
			return $query->result_array();
		}
	public function hapusData($id_transaksi)
	{
		if ($this->db->delete("transaksi", "id_transaksi = ".$id_transaksi)) { 
            return true; 
			}
	}
}
?>