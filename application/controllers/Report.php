<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct()
		{
			
			parent::__construct();
			$this->load->library('pdf');
			$this->load->model('Get_transaksi');
		}

	public function cetakTransaksi()
	{
		$this->load->library('pdf');
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['idUser'] = $session_data['idUser'];
		$data['nama'] = $session_data['nama'];
		$data['nmr_tlp'] = $session_data['nmr_tlp'];
		$data['email'] = $session_data['email'];
		$data['gender'] = $session_data['gender'];
		// $idUser= $session_data['idUser'];
		
		// $this->load->model('Get_transaksi');
		// $data['item'] = $this->Get_transaksi->getKontrakan();
		//$item[0]->alamat;
	
		//$data['user'] = $this->user->getUser('$idUser');
        $this->pdf->load_view('tampilTransaksi', $data);
	}

}
?>