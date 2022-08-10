<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Monitoring extends CI_Model
{

	public function Getdatasensor()
	{
		$this->db->select('*');
		$this->db->from('tb_sensor');
		$this->db->order_by('id', 'desc');
		// $this->db->group_by('tb_sensor.id');
		$query = $this->db->get();
		return $query->row();
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

	// public function datasensor($limit, $start )
	// {
	// return $this->db->get('tb_sensor', $limit, $start)->result_array();
	// }

	public function countAllsensor()
	{
		return $this->db->get('tb_sensor')->num_rows();
	}

	public function Data(){
		$this->db->select('*');
		$this->db->from('tb_sensor');
		$this->db->order_by('id', 'desc');
		// $this->db->group_by('tb_sensor.id');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getsensor()
	{
		$this->db->select('waktu', 'suhu', 'kelembaban');
		$this->db->from('tb_sensor');
		$this->db->order_by('id', 'desc');
		// $this->db->group_by('tb_sensor.id');
		$query = $this->db->get();
		return $query->result_array();
	}

	// public function UpdateData()
	// {
	// 	// $this->db->update('tb_sensor', $DataUpdate);
	// 	 $DataUpdate = [
	// 		'suhu' => 'suhu',
	// 		'kelembaban' => 'kelembaban',
	// 		'asap' => 'asap'
	// 	 ];
	// 	$this->db->insert('tb_sensor', $DataUpdate);
	//}

	public function chart_database()
	{
		$this->db->select('*');
		$this->db->from('tb_sensor');
		$this->db->order_by('id', 'desc');
		// $this->db->group_by('tb_sensor.id');
		$this->db->limit(4);
		$query = $this->db->get();
		return $query->result_array();
	}



	public function data_waktu()
	{
		$this->db->select('waktu');
		$this->db->from('tb_sensor');
		$this->db->order_by('id', 'desc');
		// $this->db->limit(1, 4);
		$query = $this->db->get();
		// return $query->result_array();
		return $query->row_array();
	}

	public function data_waktu2()
	{
		$query = $this->db->query("SELECT * FROM tb_sensor ORDER BY id DESC LIMIT 1")->row_array();
		$ambil_data2 = $query['id'] - 1;

		$this->db->select('waktu');
		$this->db->from('tb_sensor');
		$this->db->where('id', $ambil_data2);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function data_waktu3()
	{
		$query = $this->db->query("SELECT * FROM tb_sensor ORDER BY id DESC LIMIT 1")->row_array();
		$ambil_data2 = $query['id'] - 2;

		$this->db->select('waktu');
		$this->db->from('tb_sensor');
		$this->db->where('id', $ambil_data2);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function data_waktu4()
	{
		$query = $this->db->query("SELECT * FROM tb_sensor ORDER BY id DESC LIMIT 1")->row_array();
		$ambil_data2 = $query['id'] - 3;

		$this->db->select('waktu');
		$this->db->from('tb_sensor');
		$this->db->where('id', $ambil_data2);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function cek_suhugrafik()
	{
		$this->db->select('suhu');
		$this->db->from('tb_sensor');
		$this->db->order_by('id', 'desc');
		// $this->db->limit(1, 4);
		$query = $this->db->get();
		// return $query->result_array();
		return $query->row_array();
	}

	public function cek_suhugrafik2()
	{
		$query = $this->db->query("SELECT * FROM tb_sensor ORDER BY id DESC LIMIT 1")->row_array();
		$ambil_data2 = $query['id'] - 1;
		$this->db->select('suhu');
		$this->db->from('tb_sensor');
		$this->db->where('id', $ambil_data2);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function cek_suhugrafik3()
	{
		$query = $this->db->query("SELECT * FROM tb_sensor ORDER BY id DESC LIMIT 1")->row_array();
		$ambil_data2 = $query['id'] - 2;
		$this->db->select('suhu');
		$this->db->from('tb_sensor');
		$this->db->where('id', $ambil_data2);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function cek_suhugrafik4()
	{
		$query = $this->db->query("SELECT * FROM tb_sensor ORDER BY id DESC LIMIT 1")->row_array();
		$ambil_data2 = $query['id'] - 3;
		$this->db->select('suhu');
		$this->db->from('tb_sensor');
		$this->db->where('id', $ambil_data2);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function cek_kelembabangrafik()
	{
		$this->db->select('kelembaban');
		$this->db->from('tb_sensor');
		$this->db->order_by('id', 'desc');
		// $this->db->limit(1, 4);
		$query = $this->db->get();
		return $query->row_array();
		// return $query->result_array();
	}

	public function cek_kelembabangrafik2()
	{
		$query = $this->db->query("SELECT * FROM tb_sensor ORDER BY id DESC LIMIT 1")->row_array();
		$ambil_data2 = $query['id'] - 1;
		$this->db->select('kelembaban');
		$this->db->from('tb_sensor');
		$this->db->where('id', $ambil_data2);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function cek_kelembabangrafik3()
	{
		$query = $this->db->query("SELECT * FROM tb_sensor ORDER BY id DESC LIMIT 1")->row_array();
		$ambil_data2 = $query['id'] - 2;
		$this->db->select('kelembaban');
		$this->db->from('tb_sensor');
		$this->db->where('id', $ambil_data2);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function cek_kelembabangrafik4()
	{
		$query = $this->db->query("SELECT * FROM tb_sensor ORDER BY id DESC LIMIT 1")->row_array();
		$ambil_data2 = $query['id'] - 3;
		$this->db->select('kelembaban');
		$this->db->from('tb_sensor');
		$this->db->where('id', $ambil_data2);
		$query = $this->db->get();
		return $query->row_array();
	}

	
}