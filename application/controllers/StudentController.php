<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StudentController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model("DepartmentModel");
        $this->load->model('StudentModel');
        $this->load->model('TransportModel');
    }

    function index()
    {
        return redirect("StudentController/AdminStudentDashboard");
    }
    public function AdminStudentDashboard()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $this->load->view('StudentViews/AdmiStudentDashboard');
            $this->load->view('layout/StudentSidebar');
            // $this->load->view('DepartmentViews/AdminDepartmentDashboard');
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
    }

    public function AddStudentPage()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $this->load->model('StudentModel');
            $Departments['departments'] = $this->DepartmentModel->getDepartment();
            $this->load->view('StudentViews/addstudent', $Departments);
            $this->load->view('layout/StudentSidebar');
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
        
    }
    public function AddStudent()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $this->load->model('StudentModel');
            $config['upload_path'] = 'uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('studentphoto')) {
            } else {
                $photo_data = array('upload_data' => $this->upload->data());
            }
            if (!$this->upload->do_upload('studentsign')) {
            } else {
                $sign_data = array('upload_data' => $this->upload->data());
            }
    
            $uploaded_photo = $_FILES['studentphoto'];
            $photoname = $uploaded_photo['name'];
            $uploaded_sign = $_FILES['studentsign']['name'];
            $Student_data = $this->input->post();
            $Student_data['studentphoto'] = $photoname;
            $Student_data['studentsign'] = $uploaded_sign;
            $student_id = $this->StudentModel->GenerateUniqueID();
            $Student_data["student_id"]=$student_id;
            $Student_data["collegefeesstatus"]="Incomplete";
            $deptid=$Student_data['departmentid'];
            $department=$this->DepartmentModel->getDepartmentByDepartmentId($deptid);
            $this->DepartmentModel->incrementStudentCount($deptid,$department->studentscount);
            $Student_data['department']=$department->departmentname;
            $this->StudentModel->addStudent($Student_data);
            $this->load->model("FeesModel");
            $data=array(
                "studentid"=>$student_id,
                "totalfees"=>$Student_data["collegefees"],
                "totalfeespaid"=>0,
                "remainingfees"=>$Student_data["collegefees"],
                "status"=>"Incomplete",
            );
            $this->FeesModel->insertData($data);
            $this->session->set_flashdata('StudentAddSuccess', 'Student Added Successfully ..!');
            return redirect('StudentController/ShowStudents');
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
    }

    public function ShowStudents()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $this->load->model('StudentModel');
        $students['students'] = $this->StudentModel->getAllStudents();
        $this->load->view('StudentViews/students', $students);
        $this->load->view('layout/StudentSidebar');
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
        
    }

    public function DeleteStudent()
    {
        $this->load->model('StudentModel');
        $student_id = $this->input->get('id');
        $student=$this->StudentModel->findStudentByid($student_id);
   
        $transport=$this->TransportModel->getTransportServicewithstudentid($student->id);
        // print_r($transport);
        // print_r($student);
        if($transport->feesstatus=="Incomplete")
        {
            $this->session->set_flashdata('StudentDeleteError', 'Student Cannot be Deleted ..!');
            return redirect('StudentController/ShowStudents');
        }
        
        else{
            $this->StudentModel->deleteStudent($student_id);
            $deptid=$student->departmentid;
            $department = $this->DepartmentModel->getDepartmentByDepartmentId($deptid);
            $this->DepartmentModel->decrementStudentCount($deptid,$department->studentscount);
            $this->session->set_flashdata('StudentDeleteSuccess', 'Student Deleted Successfully ..!');
            return redirect('StudentController/ShowStudents');
        }
  
    }

    public function EditStudent()
    {
        
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $student_id = $this->input->get('id');
        $Departments['departments'] = $this->DepartmentModel->getDepartment();
        $student['student'] = $this->StudentModel->findStudentByid($student_id);
        $std = $this->StudentModel->findStudentByid($student_id);
        $this->session->set_userdata('prevDepartmentID', $std->departmentid);
        $this->load->view('StudentViews/editstudent',array_merge($student,$Departments));
        
        $this->load->view('layout/StudentSidebar');
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
      
    }

    public function UpdateStudentData()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $Student_data = $this->input->post();
            $this->load->model('StudentModel');
            $config['upload_path'] = 'uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (isset($_FILES['studentphoto'])) {
                if (!$this->upload->do_upload('studentphoto')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    $Student_data['studentphoto'] = $data['upload_data']['file_name'];
                }
            }
            if (isset($_FILES['studentsign'])) {
                if (!$this->upload->do_upload('studentsign')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    $Student_data['studentsign'] = $data['upload_data']['file_name'];
                }
            }
            $prevdeptid = $this->session->userdata('prevDepartmentID');
            $deptid=$Student_data['departmentid'];
            $departmentprevious = $this->DepartmentModel->getDepartmentByDepartmentId($prevdeptid);
            $department = $this->DepartmentModel->getDepartmentByDepartmentId($deptid);
            // print_r($Student_data);
            // print_r($deptid);
            // print_r($departmentprevious);
            // print_r($department);
            if ($departmentprevious != $department) {
                $this->DepartmentModel->decrementStudentCount($prevdeptid,$departmentprevious->studentscount);
                $this->DepartmentModel->incrementStudentCount($deptid,$department->studentscount);
                // $this->TransportModel->setPreviousTransportAvailableCapacity($transportprevious->id, $transportprevious->availablecapacity + 1);
                // $this->TransportModel->reduceAvailablecapacity($transport->vehicleid, $transport->availablecapacity);
                // $this->TransportModel->setTransportAvailablecapacity($transport->id, $transport->availablecapacity - 1);
            }
            
            $this->load->model('StudentModel');
            $student_id = $Student_data['id'];
            unset($Student_data['id']);
            $Student_data['department']=$department->departmentname;
            $student=$this->StudentModel->findStudentByid($student_id);
            print_r($Student_data);
            // $this->StudentModel->updatestudentdetails($Student_data, $student_id);
            // $studentname=$student->student_first_name." ".$student->student_last_name;
            // $this->StudentModel->updateStudentnameinTransportservicedata($student->id,$studentname);
            // $this->session->set_flashdata('StudentUpdateSuccess', 'Student Updated Successfully ..!');
            // return redirect('StudentController/ShowStudents');
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
    }

    public function ShowStudentData()
    {
        $role = $this->session->userdata('role');
        if ($this->session->userdata('userloggedin') && $role == "Admin") {
            $student_id = $this->input->get('id');
            $this->load->model('StudentModel');
            $student['student'] = $this->StudentModel->findStudentByid($student_id);
            $this->load->view('StudentViews/ViewStudentData', $student);
            $this->load->view('layout/StudentSidebar');
        } else if ($this->session->userdata('userloggedin') && $role != "Admin") {
            return redirect("StaffController/UnAuthorizedAccess");
        } else {
            return redirect("StaffController/Login");
        }
     
    }

    function getFeesforCategory()
    {
        $category=$this->input->get("category");
        $this->load->model("FeesModel");
        $categoryfees=$this->FeesModel->getFeesbyCategory($category);
        if($categoryfees!=null || !empty($categoryfees))
        {
            $response=array("message"=>"Data Found",
            "fees"=>$categoryfees->fees);
        }
        else{
            $response=array("message"=>"No Data Found");
        }
        $this->output->set_content_type("application/json");
        $this->output->set_output(json_encode($response));
    }

    function getstudentfees()
    {
     $id=$this->input->get("id");
     $this->load->model("FeesModel");
     $student=$this->FeesModel->getStudentFees($id);
     if($student!=null)
     {
        $response=array("message"=>"Student Found",
                        "data"=>$student
                        );
     }
     else{
        $response=array("message"=>"No Data Found",
        );
     }

     $this->output->set_content_type("application/json");
     $this->output->set_output(json_encode($response));
    }
    
}



    
    // public function MarkAttendance() {
    //     $json = $this->input->raw_input_stream;
    //     $attendanceData = json_decode($json, true);

    //     // Check if JSON decoding failed or data is empty
    //     if ($attendanceData === null || empty($attendanceData)) {
    //         $response = array('status' => 'error', 'message' => 'Invalid or empty attendance data');
    //         $this->output->set_output(json_encode($response));
    //         return;
    //     }

    //     $this->load->model('TransportModel');

    //     // Loop through attendance data only if it's not empty
    //     foreach ($attendanceData as $attendance) {
    //         $driverId = $attendance['driverId'];
    //         $driverName = $attendance['driverName'];
    //         $date = $attendance['date']; 
    //         $array = array(
    //             'driverId' => $driverId,
    //             'driverName' => $driverName,
    //             'date' => $date,
    //             'attendance' => 'Present',
    //         );
    //         $this->TransportModel->markDriverAttendance($array);
    //     }

    //     $response = array('status' => 'success', 'message' => 'Attendance marked successfully');
    //     $this->output->set_output(json_encode($response));
    // }

// }
