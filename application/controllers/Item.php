<?php 

 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Item extends CI_Controller {
 
	 public function __construct()
		{
			parent::__construct();
			if ($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
				if(!($session_data['username']) OR ($session_data['level']!='admin')){
					echo '<script>alert("Anda Tidak Memiliki Hak Akses")</script>';
 					redirect('home','refresh');

				}
			} else {
				redirect('Login','refresh');
			}
		}
			
			public function Index()
			{
			 $session_data = $this->session->userdata('logged_in');
			 $data['username'] = $session_data['username'];
			 $data['level'] = $session_data['level'];
			 $this->load->helper('url','form');
			$this->load->model('item_model');
			
			$data['item_list'] = $this->item_model->getDataKontrakan();
			 $this->load->view('item_view', $data, FALSE);
			}
		

	/*crud */

		public function create()
		{
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->load->model('item_model');
			$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
			$this->form_validation->set_rules('fasilitas', 'Fasilitas', 'trim|required');
			$this->form_validation->set_rules('harga', 'Harga', 'trim|required');
			$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
			
	 		 $session_data = $this->session->userdata('logged_in');
			 $data['username'] = $session_data['username'];
			if ($this->form_validation->run()==FALSE)
			{
				$this->load->view('tambah_item_view',$data);
			}
			else
			{
				$config['upload_path']		= './assets/uploads';
				$config['allowed_types']	= 'gif|jpg|png';
				$config['max_size']			= 1000000000;
				$config['max_width']		= 10240;
				$config['max_height']		= 7680;

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('foto'))
				{
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('tambah_item_view', $error);
				}

				else
				{

					// $session_data = $this->session->userdata('logged_in');
					// $data['username'] = $session_data['username'];
			 		$this->load->helper('url','form');
					$this->load->model('item_model');

					$this->item_model->insertKontrakan();
					$data['item_list'] = $this->item_model->getDataKontrakan();
					$this->load->view('item_view',$data);

				}
			}

		}

		public function update($id)
		{
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->load->model('item_model');

			$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
			$this->form_validation->set_rules('fasilitas', 'Fasilitas', 'trim|required');
			$this->form_validation->set_rules('harga', 'Harga', 'trim|required');
			$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

			
	 		$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$data['item'] = $this->item_model->getKontrakan($id);

			if ($this->form_validation->run()==FALSE)
			{
				$this->load->view('edit_item_view',$data);
			}else{
				$config['upload_path']		= './assets/uploads';
				$config['allowed_types']	= 'gif|jpg|png';
				$config['max_size']			= 1000000000;
				$config['max_width']		= 10240;
				$config['max_height']		= 7680;

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('gambar'))
				{
					// $error = array('error' => $this->upload->display_errors());
					// $this->load->view('edit_item_view', $error);
				$this->item_model->updateById2($id);
			 		
				$data['item_list'] = $this->item_model->getDataKontrakan();
			 	$this->load->view('item_view', $data);
			 		

				}

				else
				{

				$this->item_model->updateById($id);
				
			 		
				$data['item_list'] = $this->item_model->getDataKontrakan();
			 	$this->load->view('item_view', $data);
				

				}
			}
			
		}

		public function deleteData($id)
		{
	 		$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			

			$this->load->helper("url");
			$this->load->model("item_model");
			$this->item_model->delete($id);
			// redirect('item');
			$data['item_list'] = $this->item_model->getDataKontrakan();
			 $this->load->view('item_view', $data, FALSE);	
		}

	 	


 
 }
 
 /* End of file Item.php */
 /* Location: ./application/controllers/Item.php */ ?>


