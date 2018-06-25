<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class User extends CI_Model {

 	public function Login($username,$password)
	{
		$this->db->select('id,username,password,level');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', MD5($password));
		$query = $this->db->get();
		if ($query->num_rows()==1) {
			return $query->result();
		}
      	else
		{
		return FALSE;
		}
	}
 	
 	public function InsertUser()
	{
		$data = array(
	 			'username' => $this->input->post('username'),
	 			'password' => md5($this->input->post('password')),
	 			'email' => $this->input->post('email'),
	 			'nmr_tlp' => $this->input->post('nmr_tlp'),
	 			'gender' => $this->input->post('gender'),
	 			'nama' => $this->input->post('nama'),
	 			'level' => $this->input->post('level')
	 		);
	 	$this->db->insert('user',$data);
	}
	

 }
 
 /* End of file user.php */
 /* Location: ./application/models/user.php */ ?>