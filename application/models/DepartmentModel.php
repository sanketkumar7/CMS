<?php

class DepartmentModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    function getDepartment()
    {
        $data=$this->db->get("Department")->row();
        return $data;
    }

    function addDepartment($formdata)
    {
        $this->db->insert("department",$formdata);
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
}