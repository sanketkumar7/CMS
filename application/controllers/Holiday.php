<?php
defined('BASEPATH') or exit("No direct Script access Allowed");

Class Holiday extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model('HolidayModel');
        $config['upload_path'] = 'uploads/newup';
        $config['allowed_types'] = 'jpg|png|pdf|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        date_default_timezone_set('Asia/Kolkata');
        $currenttime = date("H:i:s");
    }
    function index()
    {
        return redirect("Holiday/GetHolidaysList");
    }

    function Holiday()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $this->load->view("HolidayViews/HolidayDashboard");
            $this->load->view("layout/holidaySidebar");
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
      
    }
    function GetHolidaysList()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $data['data']=$this->HolidayModel->getHolidays();
            $this->load->view("HolidayViews/holidaysList",$data);
            $this->load->view("layout/holidaySidebar");
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
     
    }

    function AddHoliday()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $this->load->view("HolidayViews/addHoliday");
            $this->load->view("layout/holidaySidebar");
           
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
       
    }
    
    function AddHolidayPost()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $formdata=$this->input->post();
            $dateTime = new DateTime($formdata["date"]);
            $formattedDate = $dateTime->format('d-m-Y');
            $formdata["date"]=$formattedDate;
            $this->HolidayModel->addHoliday($formdata);
            $this->session->set_flashdata('AddHolidaySuccess', 'Holiday Added Successfully ..!');
            return redirect("Holiday/GetHolidaysList");
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
        
        
    }

    function UpdateHoliday()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $id=$this->input->get("id");
        $Holiday["Holiday"]=$this->HolidayModel->getHolidayById($id);
        $this->load->view("HolidayViews/updateHoliday",$Holiday); 
        $this->load->view("layout/holidaySidebar");     
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
        
    }

    function UpdatedHolidayPost()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $formdata=$this->input->post();
        $id=$formdata["id"];
        unset($formdata["id"]);
        $dateTime = new DateTime($formdata["date"]);
        $formattedDate = $dateTime->format('d-m-Y');
        $formdata["date"]=$formattedDate;
        $this->HolidayModel->updateHoliday($id,$formdata);
        $this->session->set_flashdata('UpdateHolidaySuccess', 'Holiday updated Successfully ..!');
        return redirect("Holiday/GetHolidaysList");
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
       
    }

    function DeleteHoliday()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {     
        $id=$this->input->get("id");
        $this->HolidayModel->deleteHoliday($id);
        $this->session->set_flashdata('DeleteHolidaySuccess', 'Holiday Deleted Successfully ..!');
        return redirect("Holiday/GetHolidaysList");  
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
     
    }

    function getHoliday()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {     
            $id=$this->input->get("id");
            $Holiday['Holiday']=$this->HolidayModel->getHolidayById($id);
            $this->load->view("HolidayViews/getHoliday",$Holiday);
            $this->load->view("layout/holidaySidebar");  
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
     
      
    }

    function checkdatevalidity()
    {

        $date=$this->input->get("date");
        $dateTime = new DateTime($date);
        $formattedDate = $dateTime->format('d-m-Y');
        $data=$this->HolidayModel->getHolidayByDate($formattedDate);
        if(!empty($data))
        {
            $response=array("message"=>"Holiday on that date Exists");
        }
        else{
            $response=array("message"=>"No Holiday Found"); 
        }
        $this->output->set_content_type("application/json");
        $this->output->set_output(json_encode($response));
    }


}
