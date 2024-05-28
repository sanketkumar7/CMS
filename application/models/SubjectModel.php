<?php

class SubjectModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    function GenerateUniqueID()
    {
        $randomNumber = mt_rand(100, 999);       
        $randomAlphabeticCharacter1 = chr(rand(65, 90)); 
        $randomAlphabeticCharacter2 = chr(rand(65, 90)); 
        $randomAlphabeticCharacter3 = chr(rand(65, 90)); 
        $shortIdentifier =$randomAlphabeticCharacter3. $randomNumber . $randomAlphabeticCharacter1 . $randomAlphabeticCharacter2;
        return $shortIdentifier;
    }
    function getSubject()
    {
        $data=$this->db->get("subject")->result();
        return $data;
    }

    function addSubject($formdata)
    {
        $this->db->insert("subject",$formdata);
    }


    function getSubjectByID($id)
    {
        $data=$this->db->get_where("subject",array("id"=>$id))->row();
        return $data;
    }

    public function updateSubject($id,$formdata)
    {
        $this->db->where('id',$id);
        $this->db->update("subject",$formdata);
    }

    function deleteSubject($id)
    {
        $this->db->where('id',$id);
        $this->db->delete("subject");
    }
    
    public function get_Last_Value_in_Subject_id()
    {
        $this->db->select('id');
        $this->db->from('subject');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $lastValue = $row->id;
            $newvalue = $lastValue + 1;
            $newStdiD = "SUB-" . $newvalue;
            return $newStdiD;
        } else {
            return null;
        }
    }
}