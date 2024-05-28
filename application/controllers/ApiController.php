<?php
defined('BASEPATH') or exit('No direct script access allowed');


class ApiController extends CI_Controller{

    public function __construct()
    {
    
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model('ApiModel');
        $config['upload_path'] = 'uploads/newup';
        $config['allowed_types'] = 'jpg|png|pdf|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        date_default_timezone_set('Asia/Kolkata');
        $currenttime = date("H:i:s");


        function encryptData($data) {
            $iv = substr(hash('sha256', $data, true), 0, 16);
            $key=hash('sha256', $data, true);
            $encryptedData = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
            return base64_encode($iv . $encryptedData);
        }
    
        function decryptData($encryptedData) {
            $decodedData = base64_decode($encryptedData);
            $iv = substr($decodedData, 0, 16);
            $encryptedData = substr($decodedData, 16);
            $key = hash('sha256', $encryptedData, true);
            $decryptedData = openssl_decrypt($encryptedData, 'aes-256-cbc', $key, 0, $iv);
            return $decryptedData;
        }
    }

 
    public function firstapi()
    {
        $response="Hello World";
        // echo "Hello World";
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    public function getallusers()
    {
        $this->load->model('ApiModel');
        $userdata=$this->ApiModel->getusers();
        $this->output->set_content_type('application/json')->set_output(json_encode($userdata));
    }

    public function getuserdata()
    {
        $id=$this->input->get("id");
        $this->load->model('ApiModel');
        $userdata=$this->ApiModel->getuserdata($id);
        $this->output->set_content_type('application/json')->set_output(json_encode($userdata));
    }

    public function AddUserData()
    {
        $this->load->model('ApiModel');
        $data=array("name"=>$this->input->post("name"),
        "age"=>$this->input->post("age"),
        "gender"=>$this->input->post("gender"),
    );
    $result=$this->ApiModel->insertData($data);

    if($result>0)
    {
        $response=array("message"=>"User Created Successfully");
    }
    else{
        $response=array("message"=>"User Cannot be Created");
    }
    $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    public function updateData()
    {
        $this->load->model('ApiModel');
        $id=$this->input->get("id");
        $data=array("name"=>$this->input->post("name"),
        "age"=>$this->input->post("age"),
        "gender"=>$this->input->post("gender"),
    );
    $result=$this->ApiModel->updateData($data,$id);
    if($result>0)
    {
        $response=array("status" =>"success","message"=>"User Updated Successfully","response_data"=>$data);
    }
    else{
        $response=array("status" =>"error","message"=>"User Cannot be Updated");
    }
    $this->output->set_content_type('application/json')->set_output(json_encode($response));
    //send data in this format
    //return json_encode(array("status" =>"success","response_data"=>$response,'message'=>'Data updated succesfully'));
    }

    public function deletdata()
    {
        $this->load->model('ApiModel');
        $id=$this->input->get("id");
        $result=$this->ApiModel->deleteData($id);
        if($result>0)
        {
            $response=array("message"=>"User Deleted Successfully");
        }
        else{
            $response=array("message"=>"User Cannot be Deleted");
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    public function uploadFile()
    {
        if(($_SERVER['REQUEST_METHOD'] === 'POST') )
        {
            $FormData=$this->input->post();
            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            } else {
                $data = array('upload_data' => $this->upload->data());
                $FormData['image'] = $data['upload_data']['file_name'];
            }
            $result=$this->ApiModel->insertData($FormData);

            if($result>0)
            {
                $response=array("status" =>"success","response_data"=>$FormData,"message"=>"User Added Successfully");
            }
            }
            else{
                $response=array("status" =>"error","message"=>"User Cannot be Created");
            }
            $this->output->set_content_type('application/json')->set_output(json_encode($response));
        }
    }

?>