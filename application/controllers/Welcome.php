<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function qr_scanner()
	{
		$this->load->view('qr_scanner');
	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('login');
		$this->load->view('layout/footer');
	}

	function indexp()
	{
		$this->load->view("sub");
	}
}
