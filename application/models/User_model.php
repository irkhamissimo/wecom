<?php
class User_model extends CI_Model
{
	public function create($data)
	{
		$query = $this->db->insert('karyawan', $data);

		return $query;
	}

	public function login($email)
	{
		$query = $this->db->select('*')
			->where('email', $email)
			->get('karyawan');

		$row = $query->row();

		return $row;
	}
}
