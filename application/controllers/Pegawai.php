<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

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
		 $session_data = $this->session->userdata('logged_in');
		 $data['username'] = $session_data['username'];
		 // $data['nama'] = $session_data['nama'];
		 // $data['email'] = $session_data['email'];
		 // $data['nmr_tlp'] = $session_data['nmr_tlp'];

		 $this->load->view('Sukses', $data, FALSE);
		}
	}


/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */
 ?>