<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataTransaksi extends CI_Controller {

 public function __construct()
		{
			parent::__construct();
			if ($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
				// if(!($session_data['level']!='user')){
				// 	redirect('Login/Logout','refresh');

				// }

				$data['username'] = $session_data['username'];
				$data['level'] = $session_data['level'];
				$data['nama'] = $session_data['nama'];
				$current_controller = $this->router->fetch_class();
				$this->load->library('acl');
				if (! $this->acl->is_public($current_controller)) {
					if (! $this->acl->is_allowed($current_controller,$data['level'])) 
					{
					}
					
				}
			} else {
				redirect('Login','refresh');
			}
		}

public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('transaksi_m');
		$data['transaksi_list'] = $this->transaksi_m->getDataTransaksi();
		$this->load->view('dataTransaksi', $data, FALSE);	
	}

public function hapus($idItem)
		{
		$this->load->helper('url','form');
		$this->load->model('transaksi_m');
		$this->load->model('item_model');
		$data['idItem'] = $idItem;
		$this->transaksi_m->hapusData($idItem);
		$this->item_model->updateStatus2($idItem);

		redirect('DataTransaksi');
		}
}
?>