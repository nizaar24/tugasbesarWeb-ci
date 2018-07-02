<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$data['nama'] = $session_data['nama'];
			$data['email'] = $session_data['email'];
			$data['nmr_tlp'] = $session_data['nmr_tlp'];
			$data['gender'] = $session_data['gender'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('acl');
			if (! $this->acl->is_public($current_controller)) {
				if (! $this->acl->is_allowed($current_controller,$data['level'])) 
				{
					// redirect('Login/logout','refresh');
				}
			}
		} else {
			redirect('Login','refresh');
		}
	}
		
		public function Index()
		{
		 $session_data = $this->session->userdata('logged_in');
		 $data['username'] = $session_data['username'];
		 $data['nama'] = $session_data['nama'];
		 $data['email'] = $session_data['email'];
		 $data['nmr_tlp'] = $session_data['nmr_tlp'];
		 $data['gender'] = $session_data['gender'];
		//  $this->load->helper('url','form');
		// $this->load->model('user');
		//  $data['user_list'] = $this->user->getDataUser();
		 $this->load->view('profil_view', $data, FALSE);
		}

		public function update($username)
		{
			$session_data = $this->session->userdata('logged_in');
			 $data['username'] = $session_data['username'];
			//  $data['nama'] = $session_data['nama'];
		 // $data['email'] = $session_data['email'];
		 // $data['nmr_tlp'] = $session_data['nmr_tlp'];
		 // $data['gender'] = $session_data['gender'];
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		//$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		//$this->form_validation->set_rules('nmr_tlp', 'Nmr_tlp', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');


		$this->load->model('User');
		$data['profil'] = $this->User->getUser($username);

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_profil_view',$data);
		}
		else
		{
			$this->User->updateById($username);
			redirect('Pegawai','refresh');
		}
		}

	}

 ?>