<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportDataTransaksi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	

	public function __construct()
	{	
			parent::__construct();
			$this->load->library('pdf');
			$this->load->model('get_transaksi');
	}

	public function cetakDataTransaksi()
	{
		$this->load->library('pdf');
		$data['transaksi_list'] = $this->get_transaksi->getDataTransaksi();
		$this->load->model('get_transaksi');
        $this->pdf->load_view('dataTransaksi', $data);
	}
}
