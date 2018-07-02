<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// public function __construct()
	// {
	// 	parent :: __construct();
	// 	$this->load->model('Item_model');
	// }
	
	public function index($merk=null)
	{
		$this->load->model('Item_model');
		$data['list_item'] = $this->Item_model->getDataKontrakan();
		
		// if ($merk != null) {
		// 	$where = array('merk'=>$merk);
		// 	$data['list_item'] = $this->Item_m->getData($where);
			
		// }
		// $data['list_merk'] = $this->Item_m->list_merk();
		$this->load->view('home',$data);
	}

	public function search()
	{
		$word= $this->input->post('word');
		$data['list_item'] = $this->Item_m->getData(null,$word);
		
		$data['list_merk'] = $this->Item_m->list_merk();
		$this->load->view('home',$data);
	}

	public function detail($id)
	{
		$data['item'] = $this->Item_m->get_id($id);
		$data['list_merk'] = $this->Item_m->list_merk();
		$this->load->view('detail_item',$data);
	}
}

