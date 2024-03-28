<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GeneralProficiencyController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model('GeneralProficiencyModel');

    }


    function Login()
    {
        $this->load->view("StudentLogin");
    }

    function Validatelogin()
    {
        $Password = $this->input->post('password');
        $email = $this->input->post('email');
        $user = $this->GeneralProficiencyModel->loginValidation($email, $Password);
        if ($user != null) {
            $this->session->set_userdata('userloggedin', true);
            $this->session->set_flashdata('UserLoginSuccess', 'User Loggedin Successfully ..!');
            $this->session->set_flashdata('userRole', $user->role);
            $this->session->set_userdata('userid', $user->studentid);
            $this->session->set_userdata('userrole', $user->role);
            $this->session->set_userdata('userloggedin', true);
            if ($user->role == "Student") {
                return redirect("GeneralProficiencyController/StudentDashboard");
            } else if ($user->role == "Coordinator") {
                return redirect("GeneralProficiencyController/CoordinatorDashboard");
            }
        } else {
            $this->session->set_flashdata('UserLoginerror', 'Wrong Email or Password..!');
            return redirect('GeneralProficiencyController/Login');
        }
    }

    function StudentDashboard()
    {
        if (!isset($_SESSION['userloggedin'])) {
            redirect('GeneralProficiencyController/Login');
        }
        $this->load->view('layout/sidebar');
        $this->load->view("StudentDashboard");
        $this->load->view("layout/footer");
    }

    function CoordinatorDashboard()
    {
        if (!isset($_SESSION['userloggedin'])) {
            redirect('GeneralProficiencyController/Login');
        }
        $this->load->view('layout/sidebar');
        $this->load->view("coordinatorDashboard");
        $this->load->view("layout/footer");
    }

    function GeneralProficiency()
    {
        if (!isset($_SESSION['userloggedin'])) {
            redirect('GeneralProficiencyController/Login');
        }
        $studentdata['student'] = $this->GeneralProficiencyModel->getByStudentId($this->session->userdata('userid'));
        $student = $this->GeneralProficiencyModel->getByStudentId($this->session->userdata('userid'));
        $semester = $student->semester;
        $studentid = $this->session->userdata('userid');
        // print_r($studentid);
        $data['gpcoursehistory'] = $this->GeneralProficiencyModel->getGpcoursehistory($studentid);
        $getcoursesubmitstatus['coursestatus'] = $this->GeneralProficiencyModel->getGpcoursesubmitdata($studentid, $semester);
        $this->load->view("studentgeneralproficiencydashboard", array_merge($getcoursesubmitstatus, $data));
    }
    function GpCoordinator()
    {
        $data['data'] = $this->GeneralProficiencyModel->getGPCourseData();
        $this->load->view("gpcoordination", $data);
    }

    function subjectselectrequest()
    {
        $formdata = $this->input->post();
        $formdata['studentid'] = $this->session->userdata('userid');
        $student = $this->GeneralProficiencyModel->getByStudentId($this->session->userdata('userid'));
        $formdata['semester'] = $student->semester;
        $studentname = $student->student_first_name . " " . $student->student_last_name;
        $formdata['studentname'] = $studentname;
        $formdata['status'] = "Pending";
        $formdata['requestdate'] = date("d-m-y");
        $serialnumber = $this->GeneralProficiencyModel->get_Last_Value_in_gpcoursedata_id();
        if ($serialnumber == null) {
            $formdata['requestid'] = "TN1";
        } else {
            $formdata['requestid'] = $serialnumber;
        }
        $studentid = $this->session->userdata('userid');
        $this->GeneralProficiencyModel->submitGPSubjectRequest($formdata);
        $data['gpcoursehistory'] = $this->GeneralProficiencyModel->getGpcoursehistory($studentid);
        $this->session->set_flashdata('SubjectSubmitSuccess', 'Subject Submitted Successfully');

        return redirect("GeneralProficiencyController/GeneralProficiency");
    }

    function SaveUploadedCertificate()
    {
        if (!empty($_FILES['document'])) {
            // print_r("Say Hello");
            $config['upload_path'] = 'uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|pdf';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('document')) {
                // Handle upload failure
                $error = $this->upload->display_errors();
                echo 'Error uploading file: ' . $error;
            } else {
                $photo_data = $this->upload->data();
                $document = $photo_data['file_name'];
                $studentid = $this->session->userdata('userid');
                $this->GeneralProficiencyModel->savecertificate($studentid, $document);
                $this->session->set_flashdata('UploadSuccess', 'Document Uploaded Successfully..!');
            }
        }
        return redirect('GeneralProficiencyController/GeneralProficiency');
    }

    function MakeCancelRequest()
    {
        $studentid = $this->input->get('studentid');
        $studentdata = $this->GeneralProficiencyModel->getpreferencelockstatus($studentid);
        $preferencelockedstatus = $studentdata->preferencelockedstatus;
        $loggedinuserrole = $this->session->userdata('userrole');
        print_r($studentid);
        $this->GeneralProficiencyModel->cancelRequestForGPCourse($studentid, $preferencelockedstatus, $loggedinuserrole);
        if ($loggedinuserrole == "Student") {
            return redirect("GeneralProficiencyController/GeneralProficiency");
        } else if ($loggedinuserrole == "Coordinator") {
            return redirect("GeneralProficiencyController/GpCoordinator");
        }
    }

    function LockSubject()
    {
        $studentids = $_POST['studentid'];
        for ($i = 0; $i < count($studentids); $i++) {
            $studentid = $studentids[$i];
            $this->GeneralProficiencyModel->lockSubject($studentid);
            return redirect('GeneralProficiencyController/GpCoordinator');
        }
    }

    function Logout()
    {
        $this->session->unset_userdata('userloggedin');
        return redirect("GeneralProficiencyController/Login");
    }

    function ChangeDocumentVerificationStatus()
    {
        $studentid = $this->input->get('studentid');
        $status = $this->input->get('action');
        $this->GeneralProficiencyModel->setDocumentVerificationStatus($studentid, $status);
        return redirect('GeneralProficiencyController/GpCoordinator');
    }

    function GetStudentData()
    {
        $studentid = $this->input->get('studentid');
        $this->load->model("GeneralProficiencyModel");
        $student = $this->GeneralProficiencyModel->getByStudentId($studentid);
        // $gpcourseedata=$this->GeneralProficiencyModel->getGpcoursehistory($studentid);
        $name = $student->student_first_name . " " . $student->student_last_name;
        if ($student) {
            $response = array(
                'studentid' => $student->student_id,
                'name' => $name,
                'course' => $student->course,
                'type' => $student->type,
                'branch' => $student->branch,
                'year' => $student->year,
                'semester' => $student->semester,
            );
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }

}
