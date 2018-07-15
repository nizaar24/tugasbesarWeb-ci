 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

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
		
	}
	public function home()
	{
	redirect('Home','refresh');
	}

	public function error(){
		echo "<script>
     				alert('maaf anda tidak tersedia..!!');
     				window.location.href='home';
     				</script>";
	}
	public function transaksi($id)
		{
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->load->model('item_model');
			$this->load->model('user');
			
			$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
			$this->form_validation->set_rules('fasilitas', 'Fasilitas', 'trim|required');
			$this->form_validation->set_rules('harga', 'Harga', 'trim|required');
			$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
			$this->form_validation->set_rules('nmr_tlp', 'Nmr_tlp', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('gender', 'Gender', 'trim|required');



			
	 		$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['idUser'] = $session_data['idUser'];
			$data['nama'] = $session_data['nama'];
			$data['nmr_tlp'] = $session_data['nmr_tlp'];
			$data['email'] = $session_data['email'];
			$data['gender'] = $session_data['gender'];
			$idUser= $session_data['idUser'];
			$data['item'] = $this->item_model->getKontrakan($id);
			
			$data['user'] = $this->user->getUser('$idUser');

			if ($this->form_validation->run()==FALSE){
				
				$this->load->view('transaksi',$data);

			}
			else{
				
				
				$this->item_model->transaksi($id);
				$this->item_model->updateStatus($id);
				
			 		
				
			 	$this->load->view('tampilTransaksi', $data);

				

			}

			
		}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */ ?>