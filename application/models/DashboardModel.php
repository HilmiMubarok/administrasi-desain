<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardModel extends CI_Model {

	public function save($data, $table)
	{
		return $this->db->insert($table, $data);
	}

	public function get($table)
	{
		return $this->db->get($table);
	}

	public function get_join($table, $join, $field)
	{
		$this->db->join($join, $field);
		return $this->db->get($table);
	}

	public function get_by($data, $table, $join = null, $field = null)
	{
		if ($join == null) {
			return $this->db->get_where($table, $data);
		} else {
			$this->db->join($join, $field);
			return $this->db->get_where($table, $data);
		}
	}

	public function update($field, $data, $table)
	{
		return $this->db->where($field)->update($table, $data);
	}

	public function delete($field, $table)
	{
		return $this->db->where($field)->delete($table);
	}

	public function getTotal($table)
	{
		return $this->db->get($table)->num_rows();
	}

}

/* End of file DashboardModel.php */
/* Location: ./application/models/DashboardModel.php */