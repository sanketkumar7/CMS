<?php

use function PHPSTORM_META\map;

defined('BASEPATH') or exit('No direct script access allowed');

class Hostel extends CI_Controller
{
    public function index()
    {
        $all_blocks = $this->Hostel_model->get_rows('hostel');
        $context = [
            'blocks' => $all_blocks
        ];
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('hostel', $context);
        $this->load->view('layout/footer');
    }
    public function add_block()
    {
        if ($this->input->method() == 'post') {
            $block_name = $this->input->post('block_name');
            $total_rooms = $this->input->post('total_rooms');
            $room_strength = $this->input->post('room_strength');
            $data = [
                'block_name' => $block_name,
                'total_rooms' => $total_rooms,
                'room_strength' => $room_strength,
            ];
            $inserted = $this->Hostel_model->insert('hostel', $data);
            if ($inserted) {
                $this->session->set_flashdata('success_msg', "$block_name added successfully.");
                return redirect('hostel/');
            }
        }
    }
    public function ajax_delete_block()
    {
        $deleted = false;
        $block_id = $this->input->post('block_id');
        $block_name = $this->input->post('block_name');
        $conditions = [
            'id' => $block_id,
            'block_name' => $block_name,
        ];
        $deleted = $this->Hostel_model->delete_row('hostel', $conditions);
        $response = [
            'deleted' => $deleted,
        ];
        echo json_encode($response);
    }
    public function ajax_update_block()
    {
        $updated = false;
        $block_id = $this->input->post('block_id');
        $block_name = $this->input->post('block_name');
        $conditions = [
            'id' => $block_id,
        ];
        $data = ['block_name' => $block_name,];
        $updated = $this->Hostel_model->update_row('hostel', $conditions, $data);
        if ($updated) {
            $this->session->set_flashdata('success_msg', "$block_name updated successfully.");
            return redirect('hostel/');
        }
    }
    public function hostel_block($block_id)
    {
        $block = $this->Hostel_model->get_rows('hostel', ['id' => $block_id]);
        $block_rooms = $this->Hostel_model->get_rows('room_details', ['block_id' => $block_id]);
        $rooms = [];
        // foreach ($block_rooms as $row) {
        //     $rooms[$row['room_no']][$row['bed_no']] = $row;
        // }
        array_map(function ($row) use (&$rooms) {
            $rooms[$row['room_no']][$row['bed_no']] = $row;
        }, $block_rooms);
        $context = [
            'block' => $block[0],
            'rooms' => $rooms,
        ];
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('hostel_block', $context);
        $this->load->view('layout/footer');
    }
    public function ajax_search_and_get_student_name()
    {
        $student_exists = $enrolled = false;
        $student_id = $this->input->post("std_id");  // student id from input field in form
        $student_exists = $this->Hostel_model->find_record('student_details', ['student_id' => $student_id]);
        $response = [
            'student_name' => $student_exists ? $student_exists['first_name'] . ' ' . $student_exists['last_name'] : '',
            'found' => $student_exists,
            'enrolled' => $enrolled,
        ];
        echo json_encode($response);
    }
    public function student_enrollment()
    {
        $inserted = false;
        $data = [$this->input->post()];
        $block_id = $data[0]['block_id'];
        $room_number = $data[0]['room_number'];
        $bed_number = $data[0]['bed_number'];
        $student_id = $data[0]['student_id'];
        $student_name = $data[0]['student_name'];
        $data = [
            'block_id' => $block_id,
            'room_no' => $room_number,
            'bed_no' => $bed_number,
            'student_id' => $student_id,
            'student_name' => $student_name,
            'status' => 'booked',
        ];
        $inserted = $this->Hostel_model->insert('room_details', $data);
        if ($inserted) {
            $this->session->set_flashdata('success_msg', "$student_name is added successfully.");
            return redirect("hostel/hostel_block/$block_id");
        } else {
            $this->session->set_flashdata('success_msg', "$student_name is not added.");
            return redirect("hostel/hostel_block/$block_id");
        }
    }
}
