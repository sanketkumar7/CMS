<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TimeTableController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model('TimeTableModel');
        $config['upload_path'] = 'uploads/Departmentuploads';
        $config['allowed_types'] = 'jpg|png';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        date_default_timezone_set('Asia/Kolkata');
        $currenttime = date("H:i:s");
    }

    function TimeTableDashboard()
    {
        $this->load->view("TimeTableViews/TimeTableDashboard");
        $this->load->view("layout/TimeTableSidebar");
    }

    function TimeTableProtoList()
    {
        $this->load->view("TimeTableViews/TimeTableProtoList");
        $this->load->view("layout/TimeTableSidebar");
    }

    function CreatTimeTablePrototype()
    {
      
     
        $this->load->view("TimeTableViews/CreatTimeTablePrototype");
        $this->load->view("layout/TimeTableSidebar");
    }

    function TimeTableList()
    {
        $this->load->view("TimeTableViews/TimeTableList");
        $this->load->view("layout/TimeTableSidebar");
    }

    function AddTimeTable()
    {  $this->load->model("DepartmentModel");
        $department['department'] = $this->DepartmentModel->getDepartment();
        $this->load->view("TimeTableViews/AddTimeTable",$department);
        $this->load->view("layout/TimeTableSidebar");
    }
    
    function getcoursesforthedeaprtment()
    {
        $departmentid=$this->input->get("department");
        $this->load->model("DepartmentModel");
        $department=$this->DepartmentModel->getDepartmentByDepartmentId($departmentid);
        if($department!=null)
        {
            $response=array("course"=>$department->course);
        }
        else{
            $response=array("course"=>"No Course Found");
        }

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }
}

?>