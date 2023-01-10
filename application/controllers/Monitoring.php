<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoring extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_monitoring');
  }

		public function index()
    {
			$data['judul'] = "DASHBOARD"; 
			$data['Penulis'] = "Copyright &copy; Muhamad Supriyanto 2022"; 
			$data['grafik'] = $this->M_monitoring->grafik();
			$this->load->view('template/header', $data);
			$this->load->view('template/navbar');
			$this->load->view('dashboard',$data);
			$this->load->view('template/footer',$data);
    }

    public function sensor()
    {
		$data['judul'] = "SENSOR"; 
		$data['Penulis'] = "Copyright &copy; Muhamad Supriyanto 2022"; 
		$this->load->view('template/header', $data);
        $this->load->view('template/navbar');
		$this->load->view('sensor');
        $this->load->view('template/footer',$data);
     
    }
    

    public function cekgas()
    {
        $recordsensor = $this->M_monitoring->getDataSensor();
        $data = array('data_sensor' =>$recordsensor );
        $this->load->view('cekgas', $data);
    }
	
    public function ceksuhu()
    {
        $recordsensor = $this->M_monitoring->getDataSensor();
        $data = array('data_sensor' =>$recordsensor );
        $this->load->view('ceksuhu', $data);
    }

		public function kirimdata()
	{
		$gas = $this->uri->segment(3);
		$suhu = $this->uri->segment(4);

		//insert ke table tb_sensor
		$DataUpdate = array(
		'gas' => $gas,
		'suhu' => $suhu
		);

		//insert data
		$this->db->insert('tb_sensor', $DataUpdate);
	}

	public function Datasensor()
	{
		
		$config['base_url'] = 'http://localhost:8080/SensorGas/Monitoring/Datasensor';
		$config['total_rows'] = $this->M_monitoring->countAllsensor();
		$this->load->library('pagination');

		$config['per_page'] = 5;
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
		
		// $data['input'] = $this->M_monitoring->InputData();
		// $data['sensor'] = $this->M_monitoring->getAllsensor();
		$data['start'] = $this->uri->segment(3); 
		$data['sensor'] = $this->M_monitoring->getAllsensor($config['per_page'],$data['start']);
		$data['judul'] = "DATA SENSOR";
		$data['Penulis'] = "Copyright &copy; Muhamad Supriyanto 2022"; 
		$this->load->view('template/header', $data);
			$this->load->view('template/navbar');
			$this->load->view('Data_sensor',$data);
			$this->load->view('template/footer', $data);
	}
	
}


?>