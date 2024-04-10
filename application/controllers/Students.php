<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Students extends CI_Controller
{
    public function index($search = null)
    {
        if ($search) {
            $search_id = $this->input->post('search_id');
            $search_name = $this->input->post('search_name');
            $search_phone = $this->input->post('search_phone');
            $students = $this->Student_model->search_students(['id' => $search_id, 'name' => $search_name, 'phone' => $search_phone]);
        } else {
            $students = $this->Common_model->get_rows('student_details');
        }
        $context = [
            'students' => $students,
            'search_id' => $search_id ?? '',
            'search_name' => $search_name ?? '',
            'search_phone' => $search_phone ?? '',
        ];
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('students', $context);
        $this->load->view('layout/footer');
    }
    public function check_admission_id($admission_id)
    {
        $record = $this->Common_model->find_record('student_details', ['student_id' => $admission_id]);
        return $record ? false : true;
    }
    public function add_student()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name', 'First Name', 'required|trim');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim|in_list[Female,Male,Others]');
        $this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'required|trim|regex_match[/^\d{4}-\d{2}-\d{2}$/]');
        $this->form_validation->set_rules('roll_number', 'Roll Number', 'trim|numeric|required');
        $this->form_validation->set_rules('blood_group', 'Blood Group', 'required|trim|in_list[A+,B+,O+]');
        $this->form_validation->set_rules('religion', 'Religion', 'required|trim|in_list[Hindu, Christian, Others]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('class', 'Class', 'required|trim|numeric');
        $this->form_validation->set_rules('section', 'Section', 'required|trim|in_list[A,B,C]');
        $this->form_validation->set_rules('admission_id', 'Admission ID', 'required|trim|callback_check_admission_id');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|numeric');
        $this->form_validation->set_message('check_admission_id', 'The {field} already exists.');
        $data = array();
        if ($this->input->method() == 'post') {
            if (empty($_FILES['photo_path']['name'])) {
                $this->form_validation->set_rules('photo_path', 'Image', 'required|trim');
            }
            if ($this->form_validation->run()) {
                $first_name = $this->input->post('first_name');
                $last_name =  $this->input->post('last_name');
                $gender = $this->input->post('gender');
                $date_of_birth = $this->input->post('date_of_birth');
                $roll_number = $this->input->post('roll_number');
                $blood_group = $this->input->post('blood_group');
                $religion = $this->input->post('religion');
                $email = $this->input->post('email');
                $class = $this->input->post('class');
                $section = $this->input->post('section');
                $admission_id = $this->input->post('admission_id');
                $phone = $this->input->post('phone');
                $data = [
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'gender' => $gender,
                    'date_of_birth' => $date_of_birth,
                    'roll_number' => $roll_number,
                    'blood_group' => $blood_group,
                    'religion' => $religion,
                    'email' => $email,
                    'class' => $class,
                    'section' => $section,
                    'phone' => $phone,
                    'student_id' => $admission_id,
                ];
                if (true) {
                    $inserted = $this->Student_model->insert('student_details', $data);
                    if ($inserted) {
                        $config['upload_path']         = './uploads/images/students/';
                        $config['allowed_types']       = 'jpg|png|jpeg';
                        $this->load->library('upload', $config);
                        if ($this->upload->do_upload('photo_path')) {
                            $photo_data = $this->upload->data();
                            $this->Common_model->update_row('student_details', ['student_id' => $admission_id], ['photo_path' => $config['upload_path'] . $photo_data['file_name']]);
                        }
                        $this->session->set_flashdata('success_msg', "Student $first_name $last_name added Successfully.");
                    } else
                        $this->session->set_flashdata('success_msg', "Something went wrong.");
                    return redirect('students/');
                } else {
                    $this->session->set_flashdata('success_msg', "Student with Admission ID : $admission_id already Exists.");
                }
            } else {
                $this->load->view('layout/sidebar');
                $this->load->view('layout/header');
                $this->load->view('add-student');
                $this->load->view('layout/footer');
                return;
            }
        }
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('add-student', $data);
        $this->load->view('layout/footer');
    }

    public function edit_student($id)
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name', 'First Name', 'required|trim');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim|in_list[Female,Male,Others]');
        $this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'required|trim|regex_match[/^\d{4}-\d{2}-\d{2}$/]');
        $this->form_validation->set_rules('roll_number', 'Roll Number', 'trim|numeric|required');
        $this->form_validation->set_rules('blood_group', 'Blood Group', 'required|trim|in_list[A+,B+,O+]');
        $this->form_validation->set_rules('religion', 'Religion', 'required|trim|in_list[Hindu, Christian, Others]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('class', 'Class', 'required|trim|numeric');
        $this->form_validation->set_rules('section', 'Section', 'required|trim|in_list[A, B, C]');
        $this->form_validation->set_rules('admission_id', 'Admission ID', 'required|trim');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|numeric');
        $updated = false;
        $student_pic = $this->Common_model->find_record('student_details', ['id' => $id]);
        if ($student_pic && empty($student_pic['photo_path']) ?? '') {
            if (empty($_FILES['photo_path']['name'])) {
                $this->form_validation->set_rules('photo_path', 'Image', 'required|trim');
            }
        }
        if ($this->input->method() == 'post' && $this->form_validation->run()) {
            $data = $this->input->post();
            $updated = $this->Common_model->update_row('student_details', array('id' => $id), $data);
            if ($updated) {
                $config['upload_path']   = './uploads/images/students/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('photo_path')) {
                    $photo_data = $this->upload->data();
                    $this->Common_model->update_row('student_details', ['id' => $id], ['photo_path' => $config['upload_path'] . $photo_data['file_name']]);
                }
                $this->session->set_flashdata('success_msg', "Student {$data['first_name']} {$data['last_name']} updated Successfully.");
            } else
                $this->session->set_flashdata('success_msg', "Something went wrong.");
            return redirect('students/');
        }
        $student =  $this->Common_model->find_record('student_details', ['id' => $id]);
        foreach ($student as $key => $value) {
            $data[$key] = $value;
        }
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('edit-student', $data);
        $this->load->view('layout/footer');
    }

    public function delete_student($id)
    {
        $deleted = false;
        $student = $this->Common_model->find_record('student_details', ['id' => $id]);
        if (!empty($student)) {
            $deleted = $this->Common_model->delete_row('student_details', ['id' => $id]);
            if ($deleted) {
                unlink($student['photo_path']);
                $this->session->set_flashdata('success_msg', "Student {$student['first_name']} {$student['last_name']} deleted Successfully.");
                return redirect('students/');
            } else {
                $this->session->set_flashdata('success_msg', "Something went wrong.");
                return redirect('students/');
            }
        } else {
        }
    }
}
