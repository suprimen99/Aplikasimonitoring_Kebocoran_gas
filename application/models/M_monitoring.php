<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_monitoring extends CI_Model
{
    public function getDataSensor()
{
    $this->db->select('*');
    $this->db->from('tb_sensor');
    $this->db->order_by('id', 'desc');
    $query = $this->db->get();
    return $query->row();
}
public function grafik()
	{
		$this->db->select('*');
		$this->db->from('tb_sensor');
		$this->db->order_by('id', 'desc');
		// $this->db->limit(16, 20);
		// $this->db->group_by('tb_sensor.id');
		$query = $this->db->get();
		return $query->result();
	}
	public function countAllsensor()
	{
		return $this->db->get('tb_sensor')->num_rows();
	}

	public function getAllsensor($limit, $start)
	{
		// $this->db->select('*');
		// $this->db->from('tb_sensor', $limit, $start);
		$this->db->order_by('id', 'desc');
		// $this->db->group_by('tb_sensor.id');
		$query = $this->db->get('tb_sensor', $limit, $start);
		return $query->result_array();
	}
}

?>