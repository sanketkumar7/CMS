<?php 

class ApiModel extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getusers()
    {
        $data=$this->db->get("userdata")->result();
        return $data;
    }

    function getuserdata($id)
    {  
        $data=$this->db->get_where("userdata",array("id"=>$id))->row();
        return $data;
    }

    function insertData($data)
    {
        return $this->db->insert("userdata",$data);
    }

    function updateData($data,$id)
    {
        $this->db->where("id",$id);
        return $this->db->update("userdata",$data);
    }

    function deleteData($id)
    {
        $this->db->where('id',$id);
        return $this->db->delete("userdata");
    }
}