<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StaffController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model('StaffModel');
        $config['upload_path'] = 'uploads/Staffuploads';
        $config['allowed_types'] = 'jpg|png';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->StaffModel->createAdmin();
        date_default_timezone_set('Asia/Kolkata');
        $currenttime=date("H:i:s");
    }

    public function index()
    {
        return redirect("StaffController/Login");
    }

    public function Login()
	{
		$this->load->view('login');
	}

    public function Loginvalidation()
	{
        $Password= $this->input->post('password');
        $email= $this->input->post('email');
		$user=$this->StaffModel->loginValidation($email,$Password);
		if($user!=null) 
		{ 
            if($user->role=="Admin")
            {
                $this->session->set_userdata('userloggedin',true);
                $this->session->set_userdata('role',$user->role);
                $this->session->set_flashdata('UserLoginSuccess','User Loggedin Successfully ..!');
                return redirect('StaffController/AdminDashboard');
            }
            else if($user->role=="Staff")
            {
                $this->session->set_userdata('staffid',$user->userid);
                $this->session->set_userdata('userloggedin',true);
                $this->session->set_userdata('role',$user->role);
                $this->session->set_flashdata('UserLoginSuccess','User Loggedin Successfully ..!');
                return redirect('StaffController/StaffDashboard');
            }
            else{
                $this->session->set_userdata('userloggedin',true);
                $this->session->set_flashdata('UserLoginSuccess','User Loggedin Successfully ..!');
                return redirect('StaffController/UnAuthorizedAccess');
            }
		}
		else
		{
            $this->session->set_flashdata('UserLoginerror','Wrong Email or Password..!');
			return redirect('StaffController/Login');
		}
	}
    
    function UnAuthorizedAccess()
    {
        $this->load->view("UnAuthorizedAccessPage");
    }
    function Logout()
    {
        if($this->session->userdata('userloggedin'))
        {
            $this->session->unset_userdata('userloggedin',false);
            $this->session->unset_userdata('role',false);
            $this->session->set_flashdata('UserLogoutSuccess','User Logged Out Successfully ..!');
            return redirect('StaffController/Login');
        }
        return redirect('StaffController/Login');
    }

    function StaffDashboard()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Staff")
        {
            $this->load->view("StaffViews/StaffDashboard");
        }
        else if($this->session->userdata('userloggedin') && $role!="Staff")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/Login");
        }
    }
    function ShowStaff()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
            $Data['data']=$this->StaffModel->getStaffList();
            $this->load->view('StaffViews/Staff',$Data);
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/Login");
        }
    }
    function AddStaff()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
            $this->load->view('StaffViews/addStaff');
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/Login");
        }
        
    }
    function checkemailavailability()
    {
        $email=$this->input->get('email');
        $user=$this->StaffModel->checkemail($email);
        if($user)
        {
            $response=array('message'=>"Email Already Registered");
            $this->output->set_content_type('application/json');
            $this->output->set_output(json_encode($response));
        }
        else{
            $response=array('message'=>"No Data Found");
            $this->output->set_content_type('application/json');
            $this->output->set_output(json_encode($response));
        }
    }
    function AddStaffPost()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $FormData = $this->input->post();
        if (!$this->upload->do_upload('profilephoto')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $FormData['profilephoto']=$data['upload_data']['file_name'];
        }
        $Staffid = $this->StaffModel->get_Last_Value_in_Staff_id();
        if ($Staffid == null) {
            $FormData['staffid'] = "STF-1";
            $Staffid="STF-1";
        } else {
            $FormData['staffid'] = $Staffid;
        }
      
        $logindata=array(
            'email'=>$FormData['loginemail'],
            'password'=>$FormData['password'],
            'role'=>"Staff",
            'userid'=>$Staffid,
        );
        $this->StaffModel->addStaffToDb($FormData);
        $this->StaffModel->createLoginDetails($logindata);
        $this->session->set_flashdata('StaffAddSuccess', 'Staff Added Successfully ..!');
        return redirect('StaffController/ShowStaff');
    }
    else{
        return redirect("StaffController/login");
    }
    }
    function EditStaff()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
            $id=$this->input->get('id');
            $Data['data']=$this->StaffModel->findStaffById($id);
            $this->load->view('StaffViews/editStaff',$Data);
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/Login");
        }
    }
    function UpdateStaffPost()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $FormData = $this->input->post();
        $id=$FormData['id'];
        unset($FormData['id']);
        if (isset($_FILES['profilephoto'])) {
            if (!$this->upload->do_upload('profilephoto')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = array('upload_data' => $this->upload->data());
                $FormData['profilephoto'] =$data['upload_data']['file_name'];
            }
        $name=$FormData['firstname']." ".$FormData['lastname'];
        $this->StaffModel->updateStaffDataWithId($id,$FormData);
        $this->StaffModel->UpdateStaffInEachtable($FormData['staffid'],$name);
        $data=array(
            'email'=>$FormData['loginemail'],
            'password'=>$FormData['password'],
        );
        $this->StaffModel->UpdateStaffInLoginDetails($FormData['staffid'],$data);
        $this->session->set_flashdata('StaffUpdateSuccess', 'Staff Updated Successfully ..!');
        return redirect('StaffController/ShowStaff');
    }
    else if($this->session->userdata('userloggedin') && $role!="Admin")
    {
        return redirect("StaffController/UnAuthorizedAccess");
    }
    else{
        return redirect("StaffController/login");
    }
    }
    }
    function DeleteStaff()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
            $id = $this->input->get('id');
            $this->StaffModel->deleteStaffWithId($id);
            $staff=$this->StaffModel->findStaffById($id);
            $this->StaffModel->deletStaffLoginDetails($staff->staffid);
            $this->session->set_flashdata('StaffDeleteSuccess', 'Staff Deleted Successfully ..!');
            return redirect('StaffController/ShowStaff');
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/Login");
        }
     
    }
    function ShowStaffData()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
            $id=$this->input->get('id');
            $Data['data']=$this->StaffModel->findStaffById($id);
            $this->load->view('StaffViews/ShowStaffData',$Data);

        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/Login");
        }
    }

    function Attendance()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
            $Data['data']=$this->StaffModel->getStaffAttendanceList();
            $this->load->view('StaffViews/StaffAttendanceList',$Data);
        } else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
       else{
        return redirect("StaffController/Login");
       }
    }

    function MarkStaffAttendance()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
            $this->load->view('StaffViews/MarkStaffAttendance');
        } else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
       else{
        return redirect("StaffController/Login");
       }
    }
    function checkincheckoutdata()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
            $Data['data']=$this->StaffModel->getStaffcheckincheckoutlist();
            $this->load->view('StaffViews/Staffcheckincheckoutdata',$Data);
        } else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
       else{
        return redirect("StaffController/Login");
       }
    }
    // function MarkStaffAttendance()
    // {
    //     if($this->session->userdata("userloggedin"))
    //     {
    //         $todayDate = date("d-m-Y");
    //         $Attendancedata = $this->StaffModel->attendancetoday($todayDate);
    //         // if($Attendancedata && $Attendancedata!=null)
    //         // {
    //         //     return redirect("StaffController/Attendance");
    //         // }
    //         // else{
    //             $Data['data']=$this->StaffModel->getStaffList();
    //             $this->load->view('MarkStaffAttendance',$Data);
    //         // }
          
    //     }
    //    else{
    //     return redirect("StaffController/Login");
    //    }
    // }

        // function CheckLeaveOnDate()
    // {
    //     $staffid=$this->session->userdata('staffid');
    //     $LeaveType=$this->input->get('LeaveType');
    //     $date=$this->input->get("date");
    //     $data=$this->StaffModel->getStaffLeaveDataForDate($staffid,$date,"Rejected");
    //     if($data)
    //     {
    //         $response=array('message'=>"Taken");
    //     }
    //     else{
    //         $response=array('message'=>"No Data Found");
    //     }
    //     $this->output->set_content_type('application/json');
    //     $this->output->set_output(json_encode($response));
    // }

    // function checkLeaveonDates()
    // {
    //     $staffid = $this->session->userdata('staffid');
    //     $LeaveType = $this->input->get('LeaveType');
    //     $fromdate = $this->input->get("fromdate");
    //     $todate = $this->input->get("todate");
    //     $data = $this->StaffModel->getLeaveDataForStaffid($staffid,"Approved");
    //     $overlapFound = false;
    //     $newFromDate = new DateTime($fromdate);
    //     $newToDate = new DateTime($todate);
    //     foreach ($data as $entry) {
    //         if($entry->fromdate!="NA" && $entry->todate!="NA")
    //         {
    //             $existingFromDate = new DateTime($entry->fromdate);
    //             $existingToDate = new DateTime($entry->todate);
    //             if ($newFromDate == $existingFromDate && $newToDate == $existingToDate) {
    //                 $overlapFound = true;
    //                 break;
    //             }
    //             if ($newFromDate <= $existingToDate && $newToDate >= $existingFromDate) {
    //                 $overlapFound = true;
    //                 break;
    //             }
    //         }
          
    //     }
        
    //     if ($overlapFound) {
    //         $response=array("message"=>"Taken");
    //         } else {
    //             $response=array("message"=>"Not found");
    //     }
    //     $this->output->set_content_type('application/json');
    //     $this->output->set_output(json_encode($response));
    // }
    function MarkAttendancePost()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $staffIds = $_POST['staffid'];
        $names = $_POST['name'];
        $attendances = $_POST['attendance'];
        $todayDate = date("d-m-y");
        $overlapFound=false;
        $leavetype="";
        for ($i = 0; $i < count($staffIds); $i++) {
            $staffId = $staffIds[$i];
            if($staffId)
            {
                $data=$this->StaffModel->getLeaveDataForStaffidforstatusapproved($staffId,"Approved");
                if(!empty($data))
                {
                    foreach ($data as $entry) {
                        if($entry->fromdate!="NA" && $entry->todate!="NA")
                        { 
                            $existingFromDate = new DateTime($entry->fromdate);
                            $formattedFromDate = $existingFromDate->format('d-m-y');
                            $existingToDate = new DateTime($entry->todate);
                            $formattedToDate = $existingToDate->format('d-m-y');
                            $today=new DateTime($todayDate);
                            $formattedtodayDate = $today->format('d-m-y');
                            if($formattedtodayDate>=$formattedFromDate &&  $formattedtodayDate<=$formattedToDate)
                            {
                                $overlapFound = true;
                            }
                        }
                        else if($entry->leavedate!="NA")
                        { 
                            $existingLeaveDate = new DateTime($entry->leavedate);
                            $formattedFromDate = $existingLeaveDate->format('d-m-y');
                            $today=new DateTime($todayDate);
                            $formattedtodayDate = $today->format('d-m-y');
                            if ($formattedtodayDate == $formattedFromDate) {
                                $leavetype=$entry->leavetype;
                                $overlapFound = true;
                            }
                        }
                }
                }
            $name = $names[$i];
            $attendanceDate = $todayDate;
            if($overlapFound)
            {
                if($leavetype=="Half Day")
                {
                    $attendance = "Half Day";
                }
                else{
                    $attendance = "Present";
                }
            }
            else{
                $attendance = "Absent";
            }
            $array = array(
                'staffid' => $staffId,
                'name' => $name,
                'date' => $attendanceDate,
                'attendance' => $attendance,
                'month' => date('F'),
            );
            $this->StaffModel->markStaffAttendance($array);
        }
    }
        for ($i = 0; $i < count($attendances); $i++) {
            $this->StaffModel->markpresent($attendances[$i],$todayDate);
        }
        $this->session->set_flashdata('AttendanceSuccess', 'Attendance Marked Successfully ..!');
        return redirect('StaffController/Attendance');
    } else if($this->session->userdata('userloggedin') && $role!="Admin")
    {
        return redirect("StaffController/UnAuthorizedAccess");
    }
    else{
        return redirect("StaffController/login");
    }
    }
    public function checkAttendanceStatus()
    {
        $todayDate = date("d-m-y");

        $Attendancedata = $this->StaffModel->attendancetoday($todayDate);
    
        if (!empty($Attendancedata)) {
            $response = array('message' => "Attendance Already Marked");
        } else {
            $response = array('message' => "Attendance Not Marked");
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }

    function MarkInTime()
    {
        
        $staffid=$this->input->get('staffid');
        $staff=$this->StaffModel->getStaffWithStaffId($staffid);
        $name=$staff->firstname." ".$staff->lastname;
        $Intime=date('H:i:s');
        $date=date("d-m-y");
        $staffattendanacedata = $this->StaffModel->getByStaffByIdfromcheckincheckoutdata($staffid,$date);
        if(!empty($staffattendanacedata))
        {
                $formdata=array(
                    "staffid"=>$staffid,
                    "name"=>$name,
                    "date"=> $date,
                    "intime"=> $Intime,
                    "month"=>date('F'),
                );
                $this->StaffModel->setInTime($formdata);
        }
        else{
            if($Intime>"10:00:00" && $Intime<="10:15:50")
            {
                $formdata=array(
                    "staffid"=>$staffid,
                    "name"=>$name,
                    "date"=> $date,
                    "intime"=> $Intime,
                    "month"=>date('F'),
                    "status"=>"Late",
                );
                $this->StaffModel->setInTime($formdata);
            }
            else if($Intime>="10:16:00")
            {
                $formdata=array(
                    "staffid"=>$staffid,
                    "name"=>$name,
                    "date"=> $date,
                    "intime"=> $Intime,
                    "month"=>date('F'),
                    "status"=>"Half Day",
                );
                $this->StaffModel->setInTime($formdata);
            }
            else
            {
                $formdata=array(
                    "staffid"=>$staffid,
                    "name"=>$name,
                    "date"=> $date,
                    "intime"=> $Intime,
                    "month"=>date('F'),
                );
                $this->StaffModel->setInTime($formdata);
            }  
        }
        return redirect("StaffController/checkincheckoutdata");
    }
    function markInTimeRedirect()
    {
        $this->session->set_flashdata('CheckinSuccess', 'Attendance Marked Successfully ..!');
        return redirect("StaffController/checkincheckoutdata");
    }
    function MarkOutTime()
    {
        $staffid=$this->input->get('staffid');
        $staff=$this->StaffModel->getStaffWithStaffId($staffid);
        $name=$staff->firstname." ".$staff->lastname;
        $Outtime=date('H:i:s');
        $date=date("d-m-y");
        $formdata=array(
            "staffid"=>$staffid,
            "name"=>$name,
            "date"=> $date,
            "outtime"=> $Outtime,
            "month"=>date('F'),
        );
        $this->StaffModel->setOutTime($formdata);
    }
    function markOuttimeRedirect()
    {
        $this->session->set_flashdata('CheckoutSuccess', 'Attendance Marked Successfully ..!');
        return redirect("StaffController/checkincheckoutdata");
    }

    function MarkAttendance()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $date=date("d-m-y");
        $staffids=$this->StaffModel->getallstaffids();
        $overlapFound=false;
        foreach($staffids as $staffid)
        {
            $staffattendanacedata = $this->StaffModel->getByStaffByIdfromcheckincheckout($staffid,$date);
            if(!empty($staffattendanacedata))
            {
                $totalWorkingHours = 0;
                $lastCheckinTime = null;
                foreach ($staffattendanacedata as $attendance) {
                    if ($attendance->intime != "") {
                        $lastCheckinTime = strtotime($attendance->intime); 
                    } elseif ($attendance->outtime !="" && $lastCheckinTime !== null) {
                        $checkoutTime = strtotime($attendance->outtime); 
                        $workingHours = ($checkoutTime - $lastCheckinTime) / 3600;         
                        $totalWorkingHours += $workingHours;
                        $lastCheckinTime = null;
                        $totalWorkingHours=round($totalWorkingHours);
                    }
                }
                if($totalWorkingHours>=8)
                {
                    $staff=$this->StaffModel->getByStaffById($staffid);
                 
                    $name=$staff->firstname." ".$staff->lastname;
                    $this->StaffModel->setStaffAttendanceForToday($staffid,$name,$date,"Present");
                }
                else{
                    $staff=$this->StaffModel->getByStaffById($staffid);
                    $name=$staff->firstname." ".$staff->lastname;
                    $this->StaffModel->setStaffAttendanceForToday($staffid,$name,$date,"Half Day");
                }
            }
            else{
                $data=$this->StaffModel->getLeaveDataForStaffidforstatusapproved($staffid,"Approved");
                if(!empty($data))
                {
                    foreach ($data as $entry) {
                        if($entry->fromdate!="NA" && $entry->todate!="NA")
                        { 
                            $existingFromDate = new DateTime($entry->fromdate);
                            $formattedFromDate = $existingFromDate->format('d-m-y');
                            $existingToDate = new DateTime($entry->todate);
                            $formattedToDate = $existingToDate->format('d-m-y');
                            $today=new DateTime($date);
                            $formattedtodayDate = $today->format('d-m-y');
                            if($formattedtodayDate>=$formattedFromDate &&  $formattedtodayDate<=$formattedToDate)
                            {
                                $overlapFound = true;
                            }
                        }
                        else if($entry->leavedate!="NA")
                        { 
                            $existingLeaveDate = new DateTime($entry->leavedate);
                            $formattedFromDate = $existingLeaveDate->format('d-m-y');
                            $today=new DateTime($date);
                            $formattedtodayDate = $today->format('d-m-y');
                            if ($formattedtodayDate == $formattedFromDate) {
                                $leavetype=$entry->leavetype;
                                $overlapFound = true;
                            }
                        }
                }
                }
                if($overlapFound)
                {
                    $staff=$this->StaffModel->getByStaffById($staffid);
                    $name=$staff->firstname." ".$staff->lastname;
                    $this->StaffModel->setStaffAttendanceForToday($staffid,$name,$date,"Present");
                }
                else{
                    $staff=$this->StaffModel->getByStaffById($staffid);
                    $name=$staff->firstname." ".$staff->lastname;
                    $this->StaffModel->setStaffAttendanceForToday($staffid,$name,$date,"Absent");
                }
                continue;
            }
        }
        $this->session->set_flashdata('AttendanceSuccess', 'Attendance Marked Successfully ..!');
        return redirect("StaffController/Attendance");
    } else if($this->session->userdata('userloggedin') && $role!="Admin")
    {
        return redirect("StaffController/UnAuthorizedAccess");
    }
    else{
        return redirect("StaffController/login");
    }
    }

    function StaffLeaveDashboard()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Staff")
        {
            $this->load->view('StaffViews/StaffLeaveDashboard');
        } else if($this->session->userdata('userloggedin') && $role!="Staff")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/Login");
        }
      
    }

    function ApplyLeavePage()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Staff")
        {
            $StaffLeaveData['data']=$this->StaffModel->getleavedatawithStafffid($this->session->userdata('staffid'));
            $this->load->view("StaffViews/ApplyLeavePage",$StaffLeaveData);

        } else if($this->session->userdata('userloggedin') && $role!="Staff")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/Login");
        }
    }

    function ApplyleavePost()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Staff")
        {
        $formdata=$this->input->post();
        $staffid=$this->session->userdata('staffid');
        if($formdata['leavetype']=="Half Day")
        {
            $newdate = new DateTime($formdata['leavedate']);
            $formattedDate = $newdate->format('d-m-y');
            $formdata['leavedate']=$formattedDate;
            $formdata['fromdate']="NA";
            $formdata['todate']="NA";
        }
        else if($formdata['leavedate']!='')
        {
            $newdate = new DateTime($formdata['leavedate']);
            $formattedDate = $newdate->format('d-m-y');
            $formdata['leavedate']=$formattedDate;
            $formdata['fromdate']="NA";
            $formdata['todate']="NA";
            $formdata['remainingleavecount']=$formdata['remainingleavecount']-$formdata['totaldays'];
            $this->StaffModel->changeRemainingLeavesCount($staffid,$formdata['remainingleavecount']);
        }
        else
        {
            $newfromdate = new DateTime($formdata['fromdate']);
            $formattedfromDate = $newfromdate->format('d-m-y');
            $newtodate = new DateTime($formdata['todate']);
            $formattedtoDate = $newtodate->format('d-m-y');
            $formdata['fromdate']=$formattedfromDate;
            $formdata['todate']=$formattedtoDate;
            $formdata['leavedate']="NA";
            $formdata['remainingleavecount']=$formdata['remainingleavecount']-$formdata['totaldays'];
            $this->StaffModel->changeRemainingLeavesCount($staffid,$formdata['remainingleavecount']);
        }
           
        $formdata['status']="Pending";
        $formdata['staffid']=$this->session->userdata('staffid');
        $this->StaffModel->leaverequest($formdata);
        $this->session->set_flashdata('StaffLeaveSuccess', 'Applied for Leave Successfully ..!');
        return redirect("StaffController/LeaveHistory");
    }else if($this->session->userdata('userloggedin') && $role!="Staff")
    {
        return redirect("StaffController/UnAuthorizedAccess");
    }
    else{
        return redirect("StaffController/login");
    }
}

    function LeaveHistory()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Staff")
        {
            $staffid=$this->session->userdata('staffid');
            $Leavedata['data']=$this->StaffModel->getLeaveHistoryForLoggedInUser($staffid);
            $this->load->view("StaffViews/StaffLeaveHistory",$Leavedata);
        }else if($this->session->userdata('userloggedin') && $role!="Staff")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
     
    }

    function AdminDashboard()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('AdminDashboard');
        $this->load->view('layout/footer');
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");

        }
    }

    function AdminStaffDashboard()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->view("StaffViews/AdminStaffDashboard");
        } else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    function AdminLeaveDashboard()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
            $Leavedata['data']=$this->StaffModel->getLeaveData();
            $this->load->view("StaffViews/StaffLeaveData",$Leavedata);
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    function ChangeLeaveStatus()
    { $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $id=$this->input->get("id");
        $status=$this->input->get("status");
        $leavedata=$this->StaffModel->getleavedataforid($id);
        if($status=="Approve")
        {
            if($leavedata->leavetype=="Half Day")
            {
                $status="Approved";
                $this->StaffModel->changeStatus($id,$status);
                $this->session->set_flashdata("ApprovedSuccess","Approved Successfully");
                return redirect("StaffController/AdminLeaveDashboard");
            }
            else{
                $staffid=$leavedata->staffid;
                $status="Approved";
                $this->StaffModel->changeStatus($id,$status);
                $this->session->set_flashdata("ApprovedSuccess","Approved Successfully");

                return redirect("StaffController/AdminLeaveDashboard");
            }
        }
        else if($status=="Reject"){
            $status="Rejected";
            $staffid=$leavedata->staffid;
            $this->StaffModel->changeStatus($id,$status);
            $leavcount=$leavedata->remainingleavecount+$leavedata->totaldays;
            $this->StaffModel->changeRemainingLeavesCount($staffid,$leavcount);
            $this->session->set_flashdata("RejectSuccess","Rejected Successfully");

            return redirect("StaffController/AdminLeaveDashboard");
        }      
    } else if($this->session->userdata('userloggedin') && $role!="Admin")
    {
        return redirect("StaffController/UnAuthorizedAccess");
    }
    else{
        return redirect("StaffController/login");
    }  
    }

    function GetStaffData()
    {
        $staffid = $this->input->get('staffid');
        $todaydate=date("d-m-y");
        $staff=$this->StaffModel->getByStaffById($staffid);
        if(!empty($staff))
        {
            $staffattendanacedata = $this->StaffModel->getStaffcheckincheckoutlistforstaffid($staffid,$todaydate);
            $last_row = end($staffattendanacedata);
            if(!empty($staffattendanacedata))
            {
                if($last_row->intime!="")
                {
                    $laststatus="Check In";
                }
                else{
                    $laststatus="Check Out";
                }
                $response=array(
                    'message'=>"Data Found",
                    'laststatus'=>$laststatus,
                    'attendancedatatoday'=>$staffattendanacedata);
            }
            else{
                $response=array('message'=>"No Data Found");
            }
        }
        else{
            $response=array('message'=>"No Staff Found");
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
      
    }
    
    function CheckLeaveOnDate()
    {
        $staffid=$this->session->userdata('staffid');
        $LeaveType=$this->input->get('LeaveType');
        $date=new DateTime($this->input->get("date"));
        $formattedDate = $date->format('d-m-y');
        $data=$this->StaffModel->getStaffLeaveDataForDate($staffid,$formattedDate,"Rejected");
        if($data)
        {
            $response=array('message'=>"Taken");
        }
        else{
            $response=array('message'=>"No Data Found");
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
        $data = $this->StaffModel->getLeaveDataForStaffid($staffid,"Rejected");
        $overlapFound = false;
        $newFromDate = new DateTime($fromdate);
        $newToDate = new DateTime($todate);
        foreach ($data as $entry) {
            if($entry->fromdate!="NA" && $entry->todate!="NA")
            {
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
            $response=array("message"=>"Taken");
            } else {
                $response=array("message"=>"Not found");
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }

    function AdminSalaryDashboard()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->view("StaffViews/AdminSalaryDashboard");
        } else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    function StaffSalaryData()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $SalaryData['data']=$this->StaffModel->getStaffSalaryData();
        $this->load->view("StaffViews/StaffSalaryData",$SalaryData);
        } else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    function PayStaffSalaryPage()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->view("StaffViews/PayStaffSalary");
        } else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }
    function PayStaffSalary()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $formdata = $this->input->post();
        $formdata['status'] = "Paid";
        $formdata['date'] = date("d-m-y");
        $this->StaffModel->pay($formdata);
        $this->session->set_flashdata('SalarySuccess', 'Salary Paid Successfully ..!');
        return redirect('StaffController/StaffSalaryData');
        } else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }
    
    function FetchStaffWithId()
    {
        $staffid = $this->input->get('staffid');
        $Staff = $this->StaffModel->getStaffWithStaffId($staffid);
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
        $Totalcount=0;
        $salarydata = $this->StaffModel->checkSalaryStatusForTheMonth($staffid, $month);
        if ($salarydata) {
            $response = array('message' => 'Salary Already Paid For the Month');
        } else {
            $Attendancecount = $this->StaffModel->findcount($staffid, $month);
            $Halfdayacount = $this->StaffModel->findHalfDayCount($staffid, $month);
            if ($Attendancecount != 0 || $Attendancecount!=null) {
                $Totalcount+=$Attendancecount;
            }
            if($Halfdayacount!=0 || $Attendancecount!=null)
            {
                    $Halfdayacount=$Halfdayacount*0.5;
                    $Totalcount+=$Halfdayacount;
            }
                $response = array('count' => $Totalcount);
            if($Attendancecount == 0 && $Halfdayacount==0)
            {
                $response = array('count' => $Totalcount);
            }
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }
  
    }
