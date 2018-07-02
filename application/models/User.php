<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class User extends CI_Model {

 	public function Login($username,$password)
	{
		$this->db->select('id,username,password,level,nama,email,nmr_tlp,gender');
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

 	public function getDataUser()
		{
			$query = $this->db->get("user");
			return $query->result_array();
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

	public function getUser($username)
		{
			$this->db->where('username', $username);
			$query = $this->db->get('user');
			return $query->result();
		}

	public function updateById($username)
		{
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'nama' => $this->input->post('nama'),
				
				'email' => $this->input->post('email'),
				'nmr_tlp' => $this->input->post('nmr_tlp'),

			);
			$this->db->where('username', $username);
			$this->db->update('user', $data);
		}

	public function hapusData($id)
	{
		// $this->db->where($where);
		// if($this->db->delete($this->table)){
		// 	return "Berhasil";
		// }
		if ($this->db->delete("user", "id = ".$id)) { 
            return true; 
			}
	}
	

 }
 
 /* End of file user.php */
 /* Location: ./application/models/user.php */ ?>
 