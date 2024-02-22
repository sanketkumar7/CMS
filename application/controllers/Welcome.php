<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('login');
		 $this->load->view('layout/footer');
	}

	public function AdminDashboard()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('AdminDashboard');
		$this->load->view('layout/footer');
	}
	public function TeacherDashboard()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('TeacherDashboard');
		$this->load->view('layout/footer');
	}
	public function StudentDashboard()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('StudentDashboard');
		$this->load->view('layout/footer');
	}
}
