<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Transaksi_m extends CI_Model {

 	public function getDataTransaksi()
		{
			$query = $this->db->get("transaksi");
			return $query->result_array();
		}
	public function hapusData($idItem)
	{
		if ($this->db->delete("transaksi", "idItem = ".$idItem)) { 
            return true; 
			}
	}
}
?>