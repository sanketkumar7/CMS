<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sop extends CI_Controller {

//Co-assessment mapping
	public function index()
	{   
        $department_rows=$this->Sop_model->get_rows('institutes');
        foreach($department_rows as $key=>$value){
            $departments[$key]=array(
                'code'=>$value['code'],
                'name'=>$value['name']
            );
        }
        $data=array(
            'lock'=>true,
            'departments'=>$departments,
        );

        // //marks mapping:
        // $course_code='CE101-C3';
        // $co_mapping_rows=$this->Sop_model->get_co_mapping_with_conditions_sorted('co_mapping',array('course_code'=>$course_code));
        // $co_mapping_default=$this->Sop_model->get_rows_with_conditions('co_mapping_default',array('course_code'=>$course_code));
        // $data['co']=$co_mapping_rows;
        $this->load->view('layout/sidebar');
		$this->load->view('layout/header');
        $this->load->view('co-assessment-mapping',$data);
        $this->load->view('layout/footer');
	}

	public function AdminDashboard()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('AdminDashboard');
		$this->load->view('layout/footer');
	}

// Ajax
    public function select_programs_list(){
        $institute_code=$this->input->post('institute');
        $program_rows=$this->Sop_model->get_rows_with_conditions("programs",array('institute_code'=>$institute_code));
        foreach($program_rows as $program){
            $programs[$program['code']]=$program['name'];
        }

        $response=array(
            'programs_html'=>$this->load->view('ajax/programs',array('programs'=>$programs),TRUE),
            'details_load'=>true
        );
        echo json_encode($response);
    }

    public function select_courses_list(){
        $program_code=$this->input->post('program');
        $course_rows=$this->Sop_model->get_rows_with_conditions("courses",array('program_code'=>$program_code));
        foreach($course_rows as $course){
            $courses[$course['code']] = $course['name'];
        }
        $response=array(
            'details_load'=>true,
            'courses_html'=>$this->load->view('ajax/courses',array('courses'=>$courses),TRUE),
        );
        echo json_encode($response);
    }

    public function get_co_mapping(){
        $course_code=$this->input->post('course_code');
        $co_mapping_rows=$this->Sop_model->get_rows_with_conditions('co_mapping',array('course_code'=>$course_code));
        // $units=array_combine(
        //     array_column($co_mapping_rows, 'unit'),
        //     array_map(function($row) {
        //         return ['quiz' => $row['quiz']];
        //     }, $co_mapping_rows)
        // );
        // print_r($units);
        // die;
        
        $co_mapping_default=$this->Sop_model->get_or_create($table='co_mapping_default',$criteria=array('course_code'=>$course_code))??array();
        $co_mapping_marks=$this->Sop_model->get_rows_with_conditions('co_mapping_marks',array('course_code'=>$course_code));
        $grouped_co_marks=array();
        if(!empty($co_mapping_marks))
        foreach($co_mapping_marks as $co_row){
            $grouped_co_marks[$co_row['unit']]=$co_row;
        }
        $data=array(
            'co_default'=>$co_mapping_default,
            'co'=>$co_mapping_rows,
            'co_marks'=>$grouped_co_marks,
            'course_code'=>$course_code,
        );
        $response=array(
            'details_load'=>true,
            'co_html'=>$this->load->view('ajax/mappingOfCourseOutcomes',$data,TRUE),
            'co_mark_html'=>$this->load->view('ajax/mappingOfOutcomesMarks',$data,TRUE),
        );
        echo json_encode($response);
    }

    public function set_co_mapping($course_code){
        $updated=false;
        $tasks = [
            'assignment',
            'mid_sem_test_1',
            'quiz',
            'surprise_test',
            'mid_sem_test_2',
            'external_theory'
        ];
        $units=$this->Sop_model->get_co_unit($course_code);
        $formData = $this->input->post();
        foreach($units as $unit){
            $data=array();
            foreach($tasks as $task){
                $data[$task]=($formData["$unit" . "_" . "$task"]??0 =='on'?1:0);
            }
            $conditions=array(
                'course_code'=>$course_code,
                'unit'=>$unit,
            );
            $updated=$this->Sop_model->update_row_with_conditions('co_mapping',$conditions,$data);
            if(!$updated) break;
        }
        if($updated){
            $co_mapping_rows=$this->Sop_model->get_rows_with_conditions('co_mapping',array('course_code'=>$course_code));
            $co_mapping_default=$this->Sop_model->get_rows_with_conditions('co_mapping_default',array('course_code'=>$course_code))[0];
            $co_mapping_marks=$this->Sop_model->get_rows_with_conditions('co_mapping_marks',array('course_code'=>$course_code));
            $grouped_co_marks=array();
            if(!empty($co_mapping_marks))
            foreach($co_mapping_marks as $co_row){
                $grouped_co_marks[$co_row['unit']]=$co_row;
            }
            $data=array(
                'co_default'=>$co_mapping_default,
                'co'=>$co_mapping_rows,
                'co_marks'=>$grouped_co_marks,
                'course_code'=>$course_code
            );
            $response=array(
                'updated'=>$updated,
                'co_mark_html'=>$this->load->view('ajax/mappingOfOutcomesMarks',$data,TRUE),
            );
        }
        else{
            $response=array(
                'updated'=>$updated
            );
        }
        
        echo json_encode($response);    
    }

    public function set_co_mapping_mark($course_code){
        $updated=false;
        $total_marks_error=false;
        $tasks = [
            'assignment',
            'mid_sem_test_1',
            'quiz',
            'surprise_test',
            'mid_sem_test_2',
            'external_theory'
        ];
        $units=$this->Sop_model->get_co_unit($course_code);
        $co_max_marks=$this->Sop_model->get_rows_with_conditions('co_mapping_default',array('course_code'=>$course_code))[0];
        $formData = $this->input->post();
        foreach($tasks as $task){
            $total=0;
            foreach($units as $unit){
                if($formData["$unit" . "_" . "$task"]??0){
                    $total=$total + $formData[$unit. '_' . $task];
                }
            }
            if($total>0 && $total!=$co_max_marks['max_marks_' .$task]){
                $total_marks_error=true;
                $task_name=$task;
                break;
            }
        }
        if($total_marks_error==false){
            foreach($units as $unit){
                $data=array();
                foreach($tasks as $task){
                    if($formData["$unit" . "_" . "$task"]??0){
                        $data[$task]=$formData["$unit" . "_" . "$task"];
                    }
                }
                $conditions=array(
                    'course_code'=>$course_code,
                    'unit'=>$unit,
                );
                if($data) 
                    $updated=$this->Sop_model->update_or_insert_row_with_conditions('co_mapping_marks',$conditions,$data);
                if(!$updated) break;
            }
            $response=array(
                'updated'=>$updated,
            );
        }
        else{
            $response=array(
                'updated'=>$updated,
                'mark_error'=>$total_marks_error,
                'task_name'=>$task
            );
        }
        echo json_encode($response);
    }
    
    public function set_co_mapping_lock(){
        $course_code=$this->input->post('course_code');
        $conditions=array(
            'course_code'=>$course_code,
        );
        $updated=$this->Sop_model->update_row_with_conditions('co_mapping_default',$conditions,array('co_mapping_lock'=>1));
        if($updated){
            $this->get_co_mapping($course_code);
        }
        else{
            echo json_encode(array('details_load'=>false));
        }
    }
    
    public function set_co_mapping_mark_lock(){
        $course_code=$this->input->post('course_code');
        $conditions=array(
            'course_code'=>$course_code,
            'co_mapping_lock'=>1
        );

        $co_mapping_lock=$this->Sop_model->find_record('co_mapping_default',$conditions);
        if($co_mapping_lock){
            $data=array('co_marks_mapping_lock'=>1);
            
        }
    }


    
    






    public function practice(){
        $course_code='CE101-C3';
            $query = $this->db->get_where('co_mapping', array('course_code' => $course_code));
            if ($query->num_rows() > 0) {
                $units = $query->result_array();
                $units = array_column($units, 'unit');
                print_r($units);
                print("<br><br>");
            } 

          
                $this->db->select('unit');
                $this->db->from('co_mapping');
                $this->db->where('course_code',$course_code);
                $record=$this->db->get()->result_array();
                print_r($record);
                print("<br><br>");
                print_r(array_values($record));
                print_r(array_keys($record));
                
                

    }

    
}
?>