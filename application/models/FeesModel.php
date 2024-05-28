<?php
defined("BASEPATH") or exit("No Direct Script Acess Allowed");


class FeesModel extends CI_Model{

    function __construct()
    {
        parent::__construct();
        $this->load->Database();
    
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
    $data=$this->db->get_where("collegefeespayhistory",array("id"=>$id))->result();
    return $data;
}

    // collegefees

    // function addCollegeFees($formData)
    // {
    //     $this->db->insert("",$formData);
    // }

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