<?php 
defined("BASEPATH")or exit("No Direct Script Access Allowed");

class Salary extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model("SalaryModel");
    }

    function AdminSalaryDashboard()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $this->load->view("SalaryViews/AdminSalaryDashboard");
            $this->load->view('layout/salarySidebar');
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/login");
        }
    }

    function StaffSalaryData()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $SalaryData['data'] = $this->SalaryModel->getStaffSalaryData();
            $this->load->view("SalaryViews/StaffSalaryData", $SalaryData);
            $this->load->view('layout/salarySidebar');
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/login");
        }
    }

    function PayStaffSalaryPage()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $this->load->view("SalaryViews/PayStaffSalary");
            $this->load->view('layout/salarySidebar');
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/login");
        }
    }

    function PayStaffSalary()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $formdata = $this->input->post();
            $formdata['status'] = "Paid";
            $formdata['date'] = date("d-m-y");
            $this->SalaryModel->pay($formdata);
            $this->session->set_flashdata('SalarySuccess', 'Salary Paid Successfully ..!');
            return redirect('StaffController/StaffSalaryData');
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/login");
        }
    }

    function checkpreviousmonthpaystatus()
    {
        $previousmonth = $this->input->get("month");
        $staffcount = $this->SalaryModel->totalstaffcount();
        $salarypaidcount = $this->SalaryModel->checksalarypaycount($previousmonth);

        if ($staffcount == $salarypaidcount) {
            $response = array("message" => true);
        } else {
            $response = array("message" => false);
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }

    function FetchStaffWithId()
    {
        $staffid = $this->input->get('staffid');
        $Staff = $this->SalaryModel->getStaffWithStaffId($staffid);
        if ($Staff) {
            $name = $Staff->firstname . " " . $Staff->lastname;
            $response = array('staffname' => $name);
        } else {
            $response = array('message' => "No Staff Found");
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }

    function CalculateStaffSalary()
    {
        $staffid = $this->input->get('staffid');
        $month = $this->input->get('month');
        $staff=$this->SalaryModel->getByStaffById($staffid);
        $designation=$staff->designation;
        $designationdata=$this->SalaryModel->getDesignationdata($designation);
        $salary=$designationdata->salary;
        $Totalcount = 0;
        $salarydata = $this->SalaryModel->checkSalaryStatusForTheMonth($staffid, $month);
        if ($salarydata) {
            $response = array('message' => 'Salary Already Paid For the Month');
        } else {
            $Attendancecount = $this->SalaryModel->findcount($staffid, $month);
            $Halfdayacount = $this->SalaryModel->findHalfDayCount($staffid, $month);
            if ($Attendancecount != 0 || $Attendancecount != null) {
                $Totalcount += $Attendancecount;
            }
            if ($Halfdayacount != 0 || $Attendancecount != null) {
                $Halfdayacount = $Halfdayacount * 0.5;
                $Totalcount += $Halfdayacount;
            }
            $response = array('count' => $Totalcount,
        'salary'=>$salary);
            if ($Attendancecount == 0 && $Halfdayacount == 0) {
                $response = array('count' => $Totalcount);
            }
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }


}




?>