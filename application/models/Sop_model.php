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
    public function update_row_with_conditions($table, $conditions, $data) {
        $this->db->set($data); 
        $this->db->where($conditions);
        $success = $this->db->update($table); // Update the table
        return $success;
    }
    

    public function update_or_insert_row_with_conditions($table, $conditions, $data) {
        $this->db->where($conditions);
        $success = $this->db->replace($table, $data);
        return $success;
    }
    
// co mapping
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
    public function update_co_mapping_row($course_code,$data) {
        $this->db->set($data);
        $this->db->where('course_code',$course_code);
        $success = $this->db->update('co_mapping');
        print($success);
        return $success;
    }

    public function get_co_mapping_with_conditions_sorted($table, $conditions) {
        $this->db->where($conditions);
        $this->db->order_by('unit', 'ASC'); // Sort by 'unit' column in ascending order
        $rows = $this->db->get($table);
        return $rows->result_array(); // Return the sorted results as an array of associative arrays
    }

    
    

}

?>