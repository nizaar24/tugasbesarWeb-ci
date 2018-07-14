<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('acl');
			if (! $this->acl->is_public($current_controller)) {
				if (! $this->acl->is_allowed($current_controller,$data['level'])) 
				{
					redirect('Login/logout','refresh');
				}
			}
		} else {
			redirect('Login','refresh');
		}
	}
		
		public function Index()
		{
		 // $session_data = $this->session->userdata('logged_in');
		 // $data['username'] = $session_data['username'];
		 // $data['user_list'] = $this->User->getDataUser();
		$this->load->helper('url','form');
		$this->load->model('user');
		$data['user_list'] = $this->user->getDataUser();
		$this->load->view('dataUser', $data, FALSE);
		}

		public function hapus($id)
		{
		$this->load->helper('url','form');
		$this->load->model('user');
		$data['idUser'] = $id;
		$this->user->hapusData($id);
		redirect('User_c');
		}
	}


/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */
 ?>