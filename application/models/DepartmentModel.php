<?php

class DepartmentModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    function GenerateUniqueID()
    {
        $randomNumber = mt_rand(1000, 9999);       
        $randomAlphabeticCharacter1 = chr(rand(65, 90)); 
        $randomAlphabeticCharacter2 = chr(rand(65, 90)); 
        $randomAlphabeticCharacter3 = chr(rand(65, 90)); 
        $shortIdentifier = $randomNumber . $randomAlphabeticCharacter1;
        return $shortIdentifier;
    }
    function getDepartment()
    {
        $data=$this->db->get("Department")->result();
        return $data;
    }

    function addDepartment($formdata)
    {
        $this->db->insert("department",$formdata);
    }


    function getDepartmentByID($id)
    {
        $data=$this->db->get_where("department",array("id"=>$id))->row();
        return $data;
    }

    function getDepartmentByDepartmentId($deptid)
    {
        $data=$this->db->get_where("department",array("departmentid"=>$deptid))->row();
        return $data;
    }

    public function updateDepartment($id,$formdata)
    {
        $this->db->where('id',$id);
        $this->db->update("department",$formdata);
    }

    function updateDepartnameinStudentTable($departmentid,$departname)
    {
        $this->db->set('department',$departname);
        $this->db->where('departmentid',$departmentid);
        $this->db->update("studentdetails");
    }

    function deleteDepartment($id)
    {
        $this->db->where('id',$id);
        $this->db->delete("department");

    }

    function incrementStudentCount($deptid,$oldcount)
    {
        $this->db->where('departmentid',$deptid);
        $this->db->update("department",array('studentscount'=>$oldcount+1));
    }

    function decrementStudentCount($deptid,$oldcount)
    {
        $this->db->where('departmentid',$deptid);
        $this->db->update("department",array('studentscount'=>$oldcount-1));
    }

    public function get_Last_Value_in_department_id()
    {
        $this->db->select('id');
        $this->db->from('department');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $lastValue = $row->id;
            $newvalue = $lastValue + 1;
            $newStdiD = "DEPT-" . $newvalue;
            return $newStdiD;
        } else {
            return null;
        }
    }


    function getDeptByName($deptname)
    {
        $data=$this->db->get_where("department",array("departmentname"=>$deptname))->row();
        return $data;
    }
}