<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Login extends CI_Controller {
 
 	public function index()
 	{
 		$session_data = $this->session->userdata('logged_in');
			 $data['username'] = $session_data['username'];
			 $data['nama'] = $session_data['nama'];
 		$this->load->model('Item_model');
		$data['list_item'] = $this->Item_model->getDataKontrakan();

 		$this->load->view('home',$data);
 	}
 	
 	public function cekDb($password)
 	{
 		$this->load->model('user');
 		$username = $this->input->post('username');
 		$nama = $this->input->post('nama');
 		$email = $this->input->post('email');
 		$nmr_tlp = $this->input->post('nmr_tlp');
 		$gender = $this->input->post('gender');
 		$result = $this->user->login($username,$password);
 		if($result){
 			$sess_array = array();
 			foreach ($result as $row) {
 				$sess_array = array(
 					'idUser'=>$row->idUser,
 					'username'=> $row->username,
 					'level' => $row->level,
 					'nama' => $row->nama,
 					'email' => $row->email,
 					'nmr_tlp' => $row->nmr_tlp,
 					'gender' => $row->gender
 				);
 				$this->session->set_userdata('logged_in',$sess_array);
 			}
 			return true;
 		}else{
 			$this->form_validation->set_message('cekDb',"Login Gagal Username dan Password Tidak Valid");
 			return false;
 		}
 	}

 	public function cekLogin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username' , 'trim|required');
		$this->form_validation->set_rules('password', 'Password' , 'trim|required|callback_cekDb');
		if  ($this->form_validation->run() == FALSE) {

			$this->load->view('Login_view');

		} else 
		{
			redirect('Pegawai','refresh');
		} 
	}

	public function Logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('Login','refresh');
	}

	public function Registrasi()
	{
		//$this->load->view('registrasi');
      $this->load->library('form_validation');

 		$this->form_validation->set_rules('username','Username','trim|required');
 		$this->form_validation->set_rules('password','Password','trim|required');
 		$this->form_validation->set_rules('nama','Nama','trim|required');
 		$this->form_validation->set_rules('email','Email','trim|required');
 		$this->form_validation->set_rules('nmr_tlp','Nmr_tlp','trim|required');
 		$this->form_validation->set_rules('gender','Gender','trim|required');
 		if ($this->form_validation->run() == FALSE) {
 			$this->load->view('registrasi');
 		} else {
 			$this->load->model('user');
 			$this->user->InsertUser();
 			echo '<script>alert("Anda Berhasil Daftar")</script>';

 			redirect('Login','refresh');
 		}
	}

 
 }
 
 /* End of file Login.php */
 /* Location: ./application/controllers/Login.php */ ?>