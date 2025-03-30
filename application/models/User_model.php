<?php
class User_model extends CI_Model
{
	public function create($data)
	{
		$query = $this->db->insert('karyawan', $data);

		return $query;
	}
}
