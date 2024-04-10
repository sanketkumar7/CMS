<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DepartmentController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model('DepartmentModel');
        $config['upload_path'] = 'uploads/Departmentuploads';
        $config['allowed_types'] = 'jpg|png';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        date_default_timezone_set('Asia/Kolkata');
        $currenttime = date("H:i:s");
    }

    function Department()
    {  
        $this->load->view('DepartmentViews/AdminDepartmentDashboard');
    }

    function ManageDepartment()
    {
        $department['data']= $this->DepartmentModel->getDepartment();
        $this->load->view('DepartmentViews/DepartmentList',$department);
    }

    function AddDepartment()
    {
        $this->load->view('DepartmentViews/addDepartment');
    }

    function AddDepartmentPost()
    {
        $formdata=$this->input->post();
        $deptid = $this->DepartmentModel->get_Last_Value_in_department_id();
        if ($deptid == null) {
            $formData['departmentid'] = "DEPT-1";
            $deptid = "DEPT-1";
        } else {
            $formData['departmentid'] = $deptid;
        }
        $this->DepartmentModel->addDepartment($formdata);
        return redirect("DepartmentController/ManageDepartment");
    }

    function EditDepartment()
    {
        $this->load->view('editDepartment');
    }

    function DeleteDepartment()
    {

    }

    function ShowDepartmentData()
    {

    }



    // function 
}