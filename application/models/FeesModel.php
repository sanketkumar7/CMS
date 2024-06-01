<?php
defined("BASEPATH") or exit("No Direct Script Acess Allowed");


class FeesModel extends CI_Model{

    function __construct()
    {
        parent::__construct();
        $this->load->Database();
        date_default_timezone_set("Asia/Kolkata");

    }
    

    // Fees BAsed on Category

    function addCategoryBasedFees($formData)
    {
        $this->db->insert("feesbasedoncategory",$formData);
    }

    function getCategoryBasedFees()
    {
        $data=$this->db->get("feesbasedoncategory")->result();
        return $data;
    }

    function getCategoryBasedFeesById($id)
    {
        $data=$this->db->get_where("feesbasedoncategory",array("id"=>$id))->row();
        return $data;
    }

    function getFeesbyCategory($category)
    {
        $data=$this->db->get_where("feesbasedoncategory",array("category"=>$category))->row();
        return $data;
    }

    function updateCategoryBasedFees($id,$formData)
    {
        $this->db->where("id",$id);
        $this->db->update("feesbasedoncategory",$formData);
    }

    function deleteCategoryBasedFees($id)
    {
        $this->db->where("id",$id);
        $this->db->delete("feesbasedoncategory");
    }





// Fees History

function getFeesHistory($id)
{
    $data=$this->db->get_where("collegefeespayhistory",array("studentid"=>$id))->result();
    return $data;
}

function insertfeeData($data)
{
    $this->db->insert("collegefeespayhistory",$data);

}

// function updateFeesHistory($id,$formdata)
// {
//     $formdata["date"]=date('y-m-d');
//     $this->db->where("id",$id);
//     $this->db->update("collegefees",$formdata);
// }
    // collegefees

  function insertData($data)
  {
    $this->db->insert("collegefees",$data);
  }

  function updateFeeData($id,$formdata)
  {
    unset($formdata["currentpayment"]);
    $this->db->where("studentid",$id);
    $this->db->update("collegefees",$formdata);
  }

  function getStudentFees($id)
  {
    $data=$this->db->get_where("collegefees",array("studentid"=>$id))->row();
    return $data;
  }
    // function getCategoryBasedFeesById($id)
    // {
    //     $data=$this->db->get_where("",array("id"=>$id))->row();
    // }

    // function updateCategoryBasedFees($id,$formData)
    // {
    //     $this->db->where("id",$id);
    //     $this->db->update("",$formData);
    // }

    // function deleteCategoryBasedFees($id)
    // {
    //     $this->db->where("id",$id);
    //     $this->db->delete("");
    // }





}


?>