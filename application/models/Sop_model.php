<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sop_model extends CI_Model
{
    public function get_rows($table){
        $rows=$this->db->get($table);

        return $rows->result_array();
    }

    public function get_rows_with_conditions($table,$conditions){
        $this->db->where($conditions);
        $rows=$this->db->get($table);

        return $rows->result_array();
    }

    public function get_single_row_with_conditions($table,$conditions){
        $this->db->where($conditions);
        $rows=$this->db->get($table);

        return $rows->row_array();
    }
    public function update_row_with_conditions($table, $conditions,$data) {
        $this->db->where($conditions);
        $success = $this->db->update($table, $data);
        return $success;
    }
    public function update_or_insert_row_with_conditions($table, $conditions, $data) {
        $this->db->where($conditions);
        $query = $this->db->get($table);
    
        if ($query->num_rows() > 0) {
            $this->db->where($conditions);
            $this->db->set($data);
            $success = $this->db->update($table);
            return $success;
        } else {
            $success = $this->db->insert($table, $data+$conditions);
        }
        return $success;
    }

    public function update_or_insert_by_unique_key($table, $data) {
        $success = $this->db->replace($table, $data);
        return $success;
    }
    
    function find_record($table, $criteria) {
        $record = $this->db->get_where($table, $criteria)->row_array(); 
        return $record ? $record : false;
    }
    
    function insert_record($table, $data) {
        return $this->db->insert($table, $data);
    }  
    
    function get_or_create($table, $criteria) {
        $existing_record = $this->find_record($table, $criteria);
        if ($existing_record) {
            return $existing_record;
        } else {
            $this->db->insert($table, $criteria);
            return $this->find_record($table, $criteria);
        }
    }

// CO Mapping
    public function get_co_unit($course_code){
        $query = $this->db->get_where('co_mapping', array('course_code' => $course_code));
        if ($query->num_rows() > 0) {
            $units = $query->result_array();
            $units = array_column($units, 'unit');
            return $units;
        } else {
            return [];
        }
    }
    // public function get_co_unit_1($course_code){
    //     $this->db->select('unit');
    //     $this->db->from('co_mapping');
    //     $this->db->where('course_code',$course_code);
    //     $record=$this->db->get()->result_array();
    //     return $record?$record:[];
    // }
    public function update_co_mapping_row($course_code,$data) {
        print_r($data);
        $this->db->set($data);
        $this->db->where('course_code',$course_code);
        $success = $this->db->update('co_mapping');
        return $success;
    }

    public function get_co_mapping_with_conditions_sorted($table, $conditions) {
        $this->db->where($conditions);
        $this->db->order_by('unit', 'ASC'); 
        $rows = $this->db->get($table);
        return $rows->result_array(); 
    }

    public function practice(){
        return $this->db->from("student_details");

    }





}

?>