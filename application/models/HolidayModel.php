<?php 
defined('BASEPATH') or exit("No Direct Script Access Allowed");

class HolidayModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    function getHolidays()
    {
        $data=$this->db->get("holidays")->result();
        return $data;
    }

    function addHoliday($formdata)
    {
        $this->db->insert("holidays",$formdata);
    }

    function getHolidayById($id)
    {
        $data=$this->db->get_where("holidays",array("id"=>$id))->row();
        return $data;
    }

    function updateHoliday($id,$formdata)
    {
        $this->db->where("id",$id);
        $this->db->update("holidays",$formdata);
    }

    function deleteHoliday($id)
    {
        $this->db->where("id",$id);
        $this->db->delete("holidays");
    }

    function getHolidayByDate($date)
    {
        $data=$this->db->get_where("holidays",array("date"=>$date))->row();
        return $data;
    }

}


?>