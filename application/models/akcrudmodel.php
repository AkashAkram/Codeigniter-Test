<?php 
/**
* 
*/
class akCrudModel extends CI_Model
{
	

	public function create($data = array())
	{

		$this->db->insert('users', $data);
		return $this->db->insert_id();
	}


	public function displayAllUser()
	{
		$this->db->from('users');
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get(); 
		return $query->result();
	}
	public function displayThisUser($id)
	{
		$this->db->from('users');
		$this->db->where('id',$id);
		$query = $this->db->get(); 
		return $query->result();
	}

	public function editUser($id)
	{
		$this->db->from('users');
		$this->db->where('id',$id);
		$query = $this->db->get(); 
		return $query->result();
	}

	public function updateUser($id, $info)
	{
		$this->db->where('id', $id);
		$this->db->update('users', $info);
	}
	public function removeUser($id)
	{
		$this->db->where('id', $id);
		$this->db->Delete('users');
	}
}
