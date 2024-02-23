<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sop extends CI_Controller {

//Co-assessment mapping
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
// Ajax
    public function select_programs_list(){
        $institute=$this->input->post('institute');
        $programs = array(
            "Computer Science",
            "Electrical Engineering",
            "Mechanical Engineering",
            "Business Administration",
        );
        $response=array(
            'programs_html'=>$this->load->view('ajax/programs',array('programs'=>$programs),TRUE),
            'details_load'=>true
        );
        echo json_encode($response);
    }

    public function select_courses_list(){
        $institute=$this->input->post('program');
        $courses = array(
            "CSCI101" => "Introduction to Computer Science",
            "ENGR202" => "Engineering Mechanics",
            "MATH301" => "Advanced Calculus",
            "CHEM201" => "Organic Chemistry",
        );
        $response=array(
            'details_load'=>true,
            'courses_html'=>$this->load->view('ajax/courses',array('courses'=>$courses),TRUE),
        );
        echo json_encode($response);
    }




}
?>