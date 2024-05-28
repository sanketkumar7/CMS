<?php

class GeneralProficiencyModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        function separateStringAndNumeric($input) {
            $stringPart = substr($input, 0, 3);
            $numericPart = intval(substr($input, 3)) + 1; 
            print_r($numericPart);
            // $result = $stringPart . $numericPart;
            // return $result;
        }
        $this->load->library('session');
    }
    
    public function findByRegNum($regnumber)
    {
        $Student = $this->db->get_where('studentdata', array('student_id' => $regnumber))->row();
        return $Student;
    }

    public function loginValidation($email,$Password)
    {
        $user = $this->db->get_where('logindetails', array('email' => $email,'password'=>$Password))->row();
        return $user;
    }

    public function submitGPSubjectRequest($formdata)
    {
        $this->db->insert("generalproficiencycoursedata",$formdata);
    }

    public function getGpcoursehistory($studentid)
    {
        $data=$this->db->get_where("generalproficiencycoursedata",array('studentid'=>$studentid))->result();
        return $data;
    }

    function savecertificate($studentid,$document)
    {
        $this->db->set('document',$document);
        $this->db->set('documentuploadstatus','Uploaded');
        $this->db->set('documentverificationstatus','Pending');
        $this->db->where('studentid',$studentid);
        $this->db->where('status','pending');
        $this->db->where('preferencelockedstatus','Locked');
        $this->db->update("generalproficiencycoursedata");
    }

    function getpreferencelockstatus($studentid)
    {
        $data=$this->db->get_where('generalproficiencycoursedata',array('studentid'=>$studentid,'status'=>'Pending'))->row();
        return $data;
    }
    function cancelRequestForGPCourse($studentid,$lockstatus,$role)
    {
       
        if($lockstatus=="Locked" && $role=="Student")
        {   $this->db->set("cancelrequest","Pending");
            $this->db->where('studentid',$studentid);
            $this->db->where('status','Pending');
            $this->db->update("generalproficiencycoursedata");
            $this->session->set_flashdata('SubjectDeleteRequestSuccess', 'Subject Submitted Successfully');

        }
        else{
            $this->db->set("cancelrequest","Cancelled");
            $this->db->set("status","Cancelled");
            $this->db->set("preferencelockedstatus","NA");
            $this->db->set("canceldate",date("d-m-y"));
            $this->db->where('studentid',$studentid);
            $this->db->where('status','Pending');
            $this->db->update("generalproficiencycoursedata");
            $this->session->set_flashdata('SubjectDeleteSuccess', 'Subject Submitted Successfully');

        }
       
    }
    function get_Last_Value_in_gpcoursedata_id()
    {
        $this->db->select('id');
        $this->db->from('generalproficiencycoursedata');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $lastValue = $row->id;
           $newvalue=$lastValue+1;
           $newStdiD="TN".$newvalue;
           return $newStdiD;
        } else {
            return null;
        }
    }

    function getGPCourseData()
    {
        $data=$this->db->get("generalproficiencycoursedata")->result();
        return $data;
    }

    function lockSubject($studentid)
    {
        $this->db->set("preferencelockedstatus","Locked");
        $this->db->where('studentid',$studentid);
        $this->db->where('status','Pending');
        $this->db->update("generalproficiencycoursedata");
    }

    function setDocumentVerificationStatus($studentid,$status)
    {
        if($status=="Approve")
        {
            $this->db->set("documentverificationstatus","Approved");
            $this->db->where('studentid',$studentid);
            $this->db->update("generalproficiencycoursedata");  
        }
        else{
            $this->db->set("documentverificationstatus","Rejected");
            $this->db->set("documentuploadstatus","Not Uploaded");
            $this->db->where('studentid',$studentid);
            $this->db->update("generalproficiencycoursedata"); 
        }
    }

    function getByStudentId($studentid)
    {
        $student=$this->db->get_where('studentdata', array('student_id' => $studentid))->row();
        return $student;
    }

    function getGpcoursesubmitdata($studentid,$semester)
    {
        $this->db->where('studentid', $studentid);
        $this->db->where('semester', $semester);
        $this->db->where('preferencelockedstatus', 'Locked');
        $this->db->or_where('status', 'pending');    
        $this->db->where('studentid', $studentid);
        $this->db->where('semester', $semester);    
        $data = $this->db->get('generalproficiencycoursedata')->row();
        return $data;
    }
}