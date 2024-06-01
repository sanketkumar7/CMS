<?php

class SalaryModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

function getStaffSalaryData()
{
    $Data = $this->db->get('staffsalarydata')->result();
    return $Data;
}

function getStaffWithStaffId($staffid)
{
    $data = $this->db->get_where('staffdata', array('staffid' => $staffid))->row();
    return $data;
}

function checkSalaryStatusForTheMonth($staffid, $month)
{
    $data = $this->db->get_where('staffsalarydata', array('staffid' => $staffid, 'month' => $month,))->row();
    return $data;
}

function findcount($staffid, $month)
{
    $data = $this->db->get_where('staffattendancedata', array('staffid' => $staffid, 'month' => $month, 'attendance' => 'Present'))->result();
    $rowCount = count($data);
    return $rowCount;
}

function findHalfDayCount($staffid, $month)
{
    $data = $this->db->get_where('staffattendancedata', array('staffid' => $staffid, 'month' => $month, 'attendance' => 'Half Day'))->result();
    $rowCount = count($data);
    return $rowCount;
}
function pay($formdata)
{
    $this->db->insert("staffsalarydata", $formdata);
}

function checksalarypaycount($month)
{
    $count = $this->db->get_where("staffsalarydata", array("status" => "Paid", "month" => $month))->num_rows();
    return $count;
}

function totalstaffcount()
{
    $count = $this->db->get("staffdata")->num_rows();
    return $count;
}

function getDesignationdata($designation)
{
    $designation=$this->db->get_where("staffsalarybasedondesignation",array("designation",$designation))->row();
}

}
?>