<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Monitoring_sensor extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Monitoring');
		
		
	}


	public function index()
	{
		$user['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['judul'] = 'Menu Sensor';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar',$user);
		$this->load->view('menu/sensor', $data);
		$this->load->view('templates/footer');
	}

	public function ceksuhu()
	{
		$recordsensor = $this->M_Monitoring->Getdatasensor();
		$data = array('data_sensor' => $recordsensor);

		// kirim ke tampilan cek suhu
		$this->load->view('ceksuhu', $data);
	}

	public function kelembaban()
	{
		$recordsensor = $this->M_Monitoring->Getdatasensor();
		$data = array('data_sensor' => $recordsensor);

		// kirim ke tampilan cek suhu
		$this->load->view('cekkelembaban', $data);
	}

	public function cekasap()
	{
		$recordsensor = $this->M_Monitoring->Getdatasensor();
		$data = array('data_sensor' => $recordsensor);

		// kirim ke tampilan cek suhu
		$this->load->view('cekasap', $data);
	}

	public function kirimdata()
	{
		$suhu = $this->uri->segment(3);
		$kelembaban = $this->uri->segment(4);
		$asap = $this->uri->segment(5);

		//insert ke table tb_sensor
		$DataUpdate = array(
		'suhu' => $suhu,
		'kelembaban' => $kelembaban,
		'asap' => $asap
		);

		//insert data
		$this->db->insert('tb_sensor', $DataUpdate);
	}

	public function Datasensor()
	{
		$user['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['judul'] = 'Data Sensor';
		
		$config['base_url'] = 'http://localhost/NodeMcu/Monitoring_sensor/Datasensor';
		$config['total_rows'] = $this->M_Monitoring->countAllsensor();
		$this->load->library('pagination');

		$config['per_page'] = 12;
		$config['full_tag_open'] = '<nav>
		<ul class="pagination">';
		$config['full_tag_close'] = '</nav>
		</ul>';


		$config['first_link'] ='first';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		
		$config['last_link'] ='last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		
		$config['next_link'] ='&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		
		$config['next_link'] ='&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		
		$config['prev_link'] ='&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		
		$config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		
		$config['num_tag_open'] = '<li class="page-item ">';
		$config['num_tag_close'] = '</li>';

        $config['attributes']= ['class' => 'page-link'];










		$this->pagination->initialize($config);

		// var_dump($config['total_rows']);
		// die;
		
		// $data['input'] = $this->M_Monitoring->InputData();
		// $data['sensor'] = $this->M_Monitoring->getAllsensor();
		$data['start'] = $this->uri->segment(3); 
		$data['sensor'] = $this->M_Monitoring->getAllsensor($config['per_page'],$data['start']);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar',$user);
		$this->load->view('menu/Data_sensor', $data);
		$this->load->view('templates/footer');
	}

	public function Grafiksensor()
	{
		$user['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['judul'] = 'Grafik Sensor';
		$data['grafiksensor'] = $this->M_Monitoring->chart_database();
		$test1 = $data['grafiksensor'][0];
		$test2 = $data['grafiksensor'][1];
		$test3 = $data['grafiksensor'][2];
		$test4 = $data['grafiksensor'][3];
		// var_dump($data['grafiksensor']); die;

		$ajax = [
			'waktu1' => $test1['Waktu'],
			'waktu2' => $test2['Waktu'],
			'waktu3' => $test3['Waktu'],
			'waktu4' => $test4['Waktu'],
			'suhu1' => $test1['suhu'],
			'suhu2' => $test2['suhu'],
			'suhu3' => $test3['suhu'],
			'suhu4' => $test4['suhu'],
			'kelembaban1' => $test1['kelembaban'],
			'kelembaban2' => $test2['kelembaban'],
			'kelembaban3' => $test3['kelembaban'],
			'kelembaban4' => $test4['kelembaban'],
		];
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar',$user);
		$this->load->view('menu/grafiksensor', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/ajax_grafik', $ajax);
	}

	public function cek_grafik()
	{
		$data_waktu = $this->M_Monitoring->data_waktu();
		$data_waktu2 = $this->M_Monitoring->data_waktu2();
		$data_waktu3 = $this->M_Monitoring->data_waktu3();
		$data_waktu4 = $this->M_Monitoring->data_waktu4();
		$count_suhu = $this->M_Monitoring->cek_suhugrafik();
		$count_suhu2 = $this->M_Monitoring->cek_suhugrafik2();
		$count_suhu3 = $this->M_Monitoring->cek_suhugrafik3();
		$count_suhu4 = $this->M_Monitoring->cek_suhugrafik4();
		$count_kelembaban = $this->M_Monitoring->cek_kelembabangrafik();
		$count_kelembaban2 = $this->M_Monitoring->cek_kelembabangrafik2();
		$count_kelembaban3 = $this->M_Monitoring->cek_kelembabangrafik3();
		$count_kelembaban4 = $this->M_Monitoring->cek_kelembabangrafik4();
		$output = [
			"data_waktu" => $data_waktu,
			"data_waktu2" => $data_waktu2,
			"data_waktu3" => $data_waktu3,
			"data_waktu4" => $data_waktu4,
			"count_suhu" => $count_suhu,
			"count_suhu2" => $count_suhu,
			"count_suhu3" => $count_suhu,
			"count_suhu4" => $count_suhu,
			"count_kelembaban" => $count_kelembaban,
			"count_kelembaban2" => $count_kelembaban,
			"count_kelembaban3" => $count_kelembaban,
			"count_kelembaban4" => $count_kelembaban,
		];
		// var_dump($output);
		// die;
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}

	public function cek_model()
	{
		$data_waktu = $this->M_Monitoring->cek_suhugrafik2();
		$output = [
			"data_waktu" => $data_waktu
		];
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}

	public function print()
	{
		$user['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['judul'] = 'Print';
		$this->load->view('templates/header', $data);
		$data['sensor'] = $this->M_Monitoring->Data();
		$this->load->view('print', $data);
	}

	
}