<?php

defined('BASEPATH') or exit("No Direct Script Access Allowed");

class Leave extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model('StaffModel');
        date_default_timezone_set('Asia/Kolkata');
        $currenttime = date("H:i:s");
    }

    function StaffLeaveDashboard()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Staff") {
            $this->load->view('StaffViews/StaffLeaveDashboard');
            $this->load->view('layout/staffsidebar');
        } else if ($this->session->userdata('userloggedin') && $role != "Staff") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
    }

    function ApplyLeavePage()
    {
        // $role = $this->session->userdata('role');
        // if ($this->session->userdata('userloggedin') && $role == "Staff") {
            $StaffLeaveData['data'] = $this->StaffModel->getleavedatawithStafffid($this->session->userdata('staffid'));
            $this->load->view("StaffViews/ApplyLeavePage", $StaffLeaveData);
            $this->load->view('layout/staffsidebar');
        // } else if ($this->session->userdata('userloggedin') && $role != "Staff") {
        //     return redirect("StaffController/UnAuthorizedAccess");
        // } else {
        //     return redirect("StaffController/Login");
        // }
    }

    function ApplyleavePost()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Staff") {
            $formdata = $this->input->post();
            $staffid = $this->session->userdata('staffid');
            if ($formdata['leavetype'] == "Half Day") {
                $newdate = new DateTime($formdata['leavedate']);
                $formattedDate = $newdate->format('d-m-y');
                $formdata['leavedate'] = $formattedDate;
                $formdata['fromdate'] = "NA";
                $formdata['todate'] = "NA";
            } else if ($formdata['leavedate'] != '') {
                $newdate = new DateTime($formdata['leavedate']);
                $formattedDate = $newdate->format('d-m-y');
                $formdata['leavedate'] = $formattedDate;
                $formdata['fromdate'] = "NA";
                $formdata['todate'] = "NA";
                $formdata['remainingleavecount'] = $formdata['remainingleavecount'] - $formdata['totaldays'];
                $this->StaffModel->changeRemainingLeavesCount($staffid, $formdata['remainingleavecount']);
            } else {
                $newfromdate = new DateTime($formdata['fromdate']);
                $formattedfromDate = $newfromdate->format('d-m-y');
                $newtodate = new DateTime($formdata['todate']);
                $formattedtoDate = $newtodate->format('d-m-y');
                $formdata['fromdate'] = $formattedfromDate;
                $formdata['todate'] = $formattedtoDate;
                $formdata['leavedate'] = "NA";
                $formdata['remainingleavecount'] = $formdata['remainingleavecount'] - $formdata['totaldays'];
                $this->StaffModel->changeRemainingLeavesCount($staffid, $formdata['remainingleavecount']);
            }

            $formdata['status'] = "Pending";
            $formdata['staffid'] = $this->session->userdata('staffid');
            $this->StaffModel->leaverequest($formdata);
            $this->session->set_flashdata('StaffLeaveSuccess', 'Applied for Leave Successfully ..!');
            return redirect("StaffController/LeaveHistory");
        } else if ($this->session->userdata('userloggedin') && $role != "Staff") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/login");
        }
    }

    function LeaveHistory()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Staff") {
            $staffid = $this->session->userdata('staffid');
            $Leavedata['data'] = $this->StaffModel->getLeaveHistoryForLoggedInUser($staffid);
            $this->load->view("StaffViews/StaffLeaveHistory", $Leavedata);
            $this->load->view('layout/staffsidebar');
        } else if ($this->session->userdata('userloggedin') && $role != "Staff") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/login");
        }
    }
    
    function AdminLeaveDashboard()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $Leavedata['data'] = $this->StaffModel->getLeaveData();
            $this->load->view("StaffViews/StaffLeaveData", $Leavedata);
            $this->load->view('layout/staffsidebar');
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/login");
        }
    }


    function ChangeLeaveStatus()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $id = $this->input->get("id");
            $status = $this->input->get("status");
            $leavedata = $this->StaffModel->getleavedataforid($id);
            if ($status == "Approve") {
                if ($leavedata->leavetype == "Half Day") {
                    $status = "Approved";
                    $this->StaffModel->changeStatus($id, $status);
                    $this->session->set_flashdata("ApprovedSuccess", "Approved Successfully");
                    return redirect("StaffController/AdminLeaveDashboard");
                } else {
                    $staffid = $leavedata->staffid;
                    $status = "Approved";
                    $this->StaffModel->changeStatus($id, $status);
                    $this->session->set_flashdata("ApprovedSuccess", "Approved Successfully");
                    return redirect("StaffController/AdminLeaveDashboard");
                }
            } else if ($status == "Reject") {
                $status = "Rejected";
                $staffid = $leavedata->staffid;
                $this->StaffModel->changeStatus($id, $status);
                $leavcount = $leavedata->remainingleavecount + $leavedata->totaldays;
                $this->StaffModel->changeRemainingLeavesCount($staffid, $leavcount);
                $this->session->set_flashdata("RejectSuccess", "Rejected Successfully");

                return redirect("StaffController/AdminLeaveDashboard");
            }
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/login");
        }
    }
    function GetStaffData()
    {
        $staffid = $this->input->get('staffid');
        $todaydate = date("d-m-y");
        $staff = $this->StaffModel->getByStaffById($staffid);
        if (!empty($staff)) {
            $staffattendanacedata = $this->StaffModel->getStaffcheckincheckoutlistforstaffid($staffid, $todaydate);
            $last_row = end($staffattendanacedata);
            if (!empty($staffattendanacedata)) {
                if ($last_row->intime != "") {
                    $laststatus = "Check In";
                } else {
                    $laststatus = "Check Out";
                }
                $response = array(
                    'message' => "Data Found",
                    'laststatus' => $laststatus,
                    'attendancedatatoday' => $staffattendanacedata
                );
            } else {
                $response = array('message' => "No Data Found");
            }
        } else {
            $response = array('message' => "No Staff Found");
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }

    function GetStaffLeaveData()
    {
        $id = $this->input->get('id');
        $LeaveData = $this->StaffModel->getleavedataforid($id);
        $staffid = $LeaveData->staffid;
        $staff = $this->StaffModel->getStaffWithStaffId($staffid);
        if (!empty($staff)) {
            $name = $staff->firstname . " " . $staff->lastname;
            $Leavdate = $LeaveData->leavedate;
            $Fromdate = $LeaveData->fromdate;
            $Todate = $LeaveData->todate;
            $TotalDays = $LeaveData->totaldays;
            $status = $LeaveData->status;
            $description = $LeaveData->leavedescription;
            $response = array(
                'staffid' => $staffid,
                'name' => $name,
                'Leavdate' => $Leavdate,
                'Fromdate' => $Fromdate,
                'Todate' => $Todate,
                'TotalDays' => $TotalDays,
                'status' => $status,
                'description' => $description,
            );
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }

    function CheckLeaveOnDate()
    {
        $staffid = $this->session->userdata('staffid');
        $LeaveType = $this->input->get('LeaveType');
        $date = new DateTime($this->input->get("date"));
        $formattedDate = $date->format('d-m-y');
        $data = $this->StaffModel->getStaffLeaveDataForDate($staffid, $formattedDate, "Rejected");
        if ($data) {
            $response = array('message' => "Taken");
        } else {
            $response = array('message' => "No Data Found");
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }

    function checkLeaveonDates()
    {
        $staffid = $this->session->userdata('staffid');
        $LeaveType = $this->input->get('LeaveType');
        $fromdate = $this->input->get("fromdate");
        $todate = $this->input->get("todate");
        $data = $this->StaffModel->getLeaveDataForStaffid($staffid, "Rejected");
        $overlapFound = false;
        $newFromDate = new DateTime($fromdate);
        $newToDate = new DateTime($todate);
        foreach ($data as $entry) {
            if ($entry->fromdate != "NA" && $entry->todate != "NA") {
                $existingFromDate = new DateTime($entry->fromdate);
                $existingToDate = new DateTime($entry->todate);
                if ($newFromDate == $existingFromDate && $newToDate == $existingToDate) {
                    $overlapFound = true;
                    break;
                }
                if ($newFromDate <= $existingToDate && $newToDate >= $existingFromDate) {
                    $overlapFound = true;
                    break;
                }
            }
        }

        if ($overlapFound) {
            $response = array("message" => "Taken");
        } else {
            $response = array("message" => "Not found");
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }
    
}

?>
