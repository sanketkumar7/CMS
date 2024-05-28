<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SubjectController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model("DepartmentModel");
        $this->load->model('SubjectModel');
        $config['upload_path'] = 'uploads/Departmentuploads';
        $config['allowed_types'] = 'jpg|png';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        date_default_timezone_set('Asia/Kolkata');
        $currenttime = date("H:i:s");
    }

    function Subject()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            
            $this->load->view('SubjectViews/SubjectDashboard');
            $this->load->view('layout/subjectsidebar');
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
    }

    function ManageSubject()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $subject['subject'] = $this->SubjectModel->getSubject();
            
            $this->load->view('SubjectViews/manageSubject', $subject);
            $this->load->view('layout/subjectsidebar');
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
    }

    function AddSubject()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $this->load->model("DepartmentModel");
            $department['department'] = $this->DepartmentModel->getDepartment();
            
            $this->load->view('SubjectViews/addSubject', $department);
            $this->load->view('layout/subjectsidebar');
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
    }

    function AddSubjectPost()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $formdata = $this->input->post();
            $this->load->model("DepartmentModel");
            $subjectid = $this->SubjectModel->GenerateUniqueID();
            $formdata['subjectid'] = "SUB-".$subjectid;
            $deptid = $formdata['departmentid'];
            $department = $this->DepartmentModel->getDepartmentByDepartmentId($deptid);
            $formdata['departmentname'] = $department->departmentname;
            $formdata['course'] = $department->course;
            // print_r($formdata);
            $this->SubjectModel->addSubject($formdata);
            $this->session->set_flashdata('SubjectAddSuccess', 'Subject Added Successfully ..!');
            
            return redirect("SubjectController/ManageSubject");
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
    }

    function EditSubject()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $this->load->model("DepartmentModel");
            $department['department'] = $this->DepartmentModel->getDepartment();
            $id = $this->input->get("id");
            $data['data'] = $this->SubjectModel->getSubjectByID($id);
            $this->load->view('SubjectViews/editSubject', array_merge($department, $data));
            $this->load->view('layout/subjectsidebar');
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
    }

    function UpdateSubject()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $this->load->model("DepartmentModel");

            $formdata = $this->input->post();
            $id = $formdata['id'];
            unset($formdata['id']);
            $deptid = $formdata['departmentid'];
            $department = $this->DepartmentModel->getDepartmentByDepartmentId($deptid);
            $formdata['departmentname'] = $department->departmentname;
            $formdata['course'] = $department->course;
            $this->SubjectModel->updateSubject($id, $formdata);
            $this->session->set_flashdata('SubjectUpdateSuccess', 'Subject Updated Successfully ..!');

            return redirect("SubjectController/ManageSubject");
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
    }

    function DeleteSubject()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $id = $this->input->get("id");
            $this->SubjectModel->deleteSubject($id);
            $this->session->set_flashdata('SubjectDeleteSuccess', 'Subject Deleted Successfully ..!');
            return redirect("SubjectController/ManageSubject");
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
    }

    function ShowSubjectData()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $id = $this->input->get("id");
            $data['data'] = $this->SubjectModel->getSubjectByID($id);
            
            $this->load->view('SubjectViews/ShowSubjectData', $data);
            $this->load->view('layout/subjectsidebar');
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
    }

    // function 
}
