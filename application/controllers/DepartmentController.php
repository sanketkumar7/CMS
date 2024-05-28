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
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $this->load->view('DepartmentViews/AdminDepartmentDashboard');
            $this->load->view('layout/departmentsidebar');
            // $this->load->view('DepartmentViews/AdminDepartmentDashboard');
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
    }

    function ManageDepartment()
    {
      
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $department['department']= $this->DepartmentModel->getDepartment();
            $this->load->view('DepartmentViews/DepartmentList',$department);
            $this->load->view('layout/departmentsidebar');
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
    }

    function AddDepartment()
    {  $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $this->load->view('DepartmentViews/addDepartment');
            $this->load->view('layout/departmentsidebar');
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
    }

    function checkdeptnamevalidity()
    {
        $deptname=$this->input->get("deptname");
        $dept=$this->DepartmentModel->getDeptByName($deptname);
        if($dept==null)
        {
            $response =array("message"=>"No Dept Found");
        }
        else{
            $response =array("message"=>"Dept Found");
        }

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }

    function AddDepartmentPost()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $formdata=$this->input->post();
            $deptid = $this->DepartmentModel->GenerateUniqueID();
            $formdata['departmentid'] = "DEPT-".$deptid;
            $this->DepartmentModel->addDepartment($formdata);
            $this->session->set_flashdata('DepartmentAddSuccess', 'Department Added Successfully ..!');
            return redirect("DepartmentController/ManageDepartment");
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
       
    }

    function EditDepartment()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $id=$this->input->get("id");
        $data['data']=$this->DepartmentModel->getDepartmentByID($id);
        $this->load->view('DepartmentViews/editDepartment',$data);
        $this->load->view('layout/departmentsidebar');

        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
       
    }

    function UpdateDepartment()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $formdata=$this->input->post();
            $id=$formdata['id'];
            unset($formdata['id']);
            $department=$this->DepartmentModel->getDepartmentByID($id); 
            $this->DepartmentModel->updateDepartment($id,$formdata);
            $departname=$formdata['departmentname'];
            $this->DepartmentModel->updateDepartnameinStudentTable($department->departmentid,$departname);
            $this->session->set_flashdata('DepartmentUpdateSuccess', 'Department Updated Successfully ..!');
            return redirect("DepartmentController/ManageDepartment");
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
        
    }

    function DeleteDepartment()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $id=$this->input->get("id");
            $department=$this->DepartmentModel->getDepartmentByID($id);
            // print_r($department).die;
            if($department->studentscount==0)
            {
                $this->DepartmentModel->deleteDepartment($id);
                $this->session->set_flashdata('DepartmentDeleteSuccess', 'Department Deleted Successfully ..!');
            }
            else{
                $this->session->set_flashdata('DepartmentDeleteError', 'Department Deleted Successfully ..!');
                return redirect("DepartmentController/ManageDepartment");
            }
           
            return redirect("DepartmentController/ManageDepartment");
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
      
    }

    function ShowDepartmentData()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $id=$this->input->get("id");
            $data['data']=$this->DepartmentModel->getDepartmentByID($id);
            $this->load->view('layout/departmentsidebar');

            $this->load->view('DepartmentViews/showdepartmentdata',$data);
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
     
    }


}