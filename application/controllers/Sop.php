<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sop extends CI_Controller {

	public function index()
	{   
        $this->load->view('layout/sidebar');
		$this->load->view('layout/header');
        $this->load->view('co-assessment-mapping');
        $this->load->view('layout/footer');
	}

	public function AdminDashboard()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('AdminDashboard');
		$this->load->view('layout/footer');
	}







}
?>