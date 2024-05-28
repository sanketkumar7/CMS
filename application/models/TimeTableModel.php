<?php

class TimeTableModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }


    
function createTimeTablePrototype($formdata)
{
    $this->db->insert("",$formdata);
}

function updateTimeTablePrototype($id,$formdata)
{
    $this->db->where("id",$id);
    $this->db->update("",$formdata);
}

function getTimeTablePrototypeById($id)
{
    $data=$this->db->get_where("",array("id"=>$id))->row();
    return $data;
}

function deleteTimeTablePrototype($id)
{
    $this->db->where("id",$id);
    $this->db->delete("");
}



// Actual Timetable FUnctions

function createTimeTable($formdata)
{
    $this->db->insert("",$formdata);
}

function updateTimeTable($id,$formdata)
{
    $this->db->where("id",$id);
    $this->db->update("",$formdata);
}

function getTimeTableById($id)
{
    $data=$this->db->get_where("",array("id"=>$id))->row();
    return $data;
}

function deleteTimeTable($id)
{
    $this->db->where("id",$id);
    $this->db->delete("");
}



}
?>