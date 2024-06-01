<?php

class StudentModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function addStudent($data)
    {
        $this->db->insert("studentdetails", $data);
    }

    function GenerateUniqueID()
    {
        $randomNumber = mt_rand(100, 999);       
        $randomAlphabeticCharacter1 = chr(rand(65, 90)); 
        $randomAlphabeticCharacter2 = chr(rand(65, 90)); 
        $randomAlphabeticCharacter3 = chr(rand(65, 90)); 
        $shortIdentifier = $randomNumber . $randomAlphabeticCharacter1.$randomAlphabeticCharacter2;
        return $shortIdentifier;
    }
    public function getAllStudents()
    {
        $Data = $this->db->get('studentdetails');
        return $Data->result();
    }

    public function deleteStudent($student_id)
    {
        $this->db->delete('studentdetails', array('id' => $student_id));
    }

    public function findStudentByid($Student_id)
    {
        $Student = $this->db->get_where('studentdetails', array('id' => $Student_id))->row();
        if (empty($Student)) {
            print_r("No studnet");
        }

        return $Student;
    }



    public function updatestudentdetails($studentdetails, $student_id)
    {
        $this->db->where('id', $student_id);
        $this->db->update("studentdetails", $studentdetails);
    }


    function updateStudentnameinTransportservicedata($studentid, $studentname)
    {
        $sql = "UPDATE transportservicedata SET studentname = ? WHERE studentid = ?";
        $this->db->query($sql, array($studentname, $studentid));
    }

    public function findDataWithNullValues()
    {
        $tableName = 'studentdetails';
        $columns = $this->db->list_fields($tableName);
        $sql = "SELECT * FROM $tableName WHERE ";

        foreach ($columns as $column) {
            $sql .= "$column = 'NA' OR ";
        }

        $sql = rtrim($sql, ' OR ');

        $query = $this->db->query($sql);

        return $query->result();
    }

    public function findByRegNum($regnumber)
    {
        $Student = $this->db->get_where('studentdetails', array('student_id' => $regnumber))->row();
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
        $student=$this->db->get_where('studentdetails', array('student_id' => $studentid))->row();
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
    
    function updateFeeStatus($id)
    {
        $this->db->where("student_id",$id);
        $this->db->set("collegefeesstatus","Complete");
        $this->db->update("studentdetails");
    }
}
