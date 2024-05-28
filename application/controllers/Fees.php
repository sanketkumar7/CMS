<?php
defined("BASEPATH") or exit("Direct Script Access Not Allowed");

class Fees extends CI_Controller{

function __construct()
{
    parent::__construct();
    $this->load->model("FeesModel");
    $this->load->library("session");
}

function index()
{
    return redirect("Fees/FeesDashboard");
}
function FeesDashboard()
{
    $this->load->view("FeesViews/FeesDashboard");
    $this->load->view("layout/feesSidebar");
}
function AddFees()
{
    $this->load->view("FeesViews/addCategoryFees");
    $this->load->view("layout/feesSidebar");
}

function AddFeesPost()
{
    $formdata=$this->input->post();
    $this->FeesModel->addCategoryBasedFees($formdata);
    $this->session->set_flashdata('FeesAddSuccess', 'Fees Added Successfully ..!');
    return redirect("Fees/GetAllFees");
}
function GetAllFees()
{
    $data['data']=$this->FeesModel->getCategoryBasedFees();
    $this->load->view("FeesViews/AllCategoryBasedFeesList",$data);
    $this->load->view("layout/feesSidebar");
}

function UpdateFees()
{
    $id=$this->input->get("id");
    $data['data']=$this->FeesModel->getCategoryBasedFeesById($id);
    $this->load->view("FeesViews/updateCategoryFeesData",$data);
    $this->load->view("layout/feesSidebar");
    
}

function UpdateFeesPost()
{
    $formdata=$this->input->post();
    $id=$formdata["id"];
    unset($formdata["id"]);
    $this->FeesModel->updateCategoryBasedFees($id,$formdata);
    $this->session->set_flashdata('FeesUpdateSuccess', 'Fees Updated Successfully ..!');
    return redirect("Fees/GetAllFees");
    
}


function deleteFees()
{
    $id=$this->input->get("id");
    $this->FeesModel->deleteCategoryBasedFees($id);
    $this->session->set_flashdata('FeesDeleteSuccess', 'Fees Deleted Successfully ..!');
    return redirect("Fees/GetAllFees");
}

function ViewFeeData()
{
    $id=$this->input->get("id");
    $data['data']=$this->FeesModel->getCategoryBasedFeesById($id);
    $this->load->view("FeesViews/CategoryFeesData",$data);
    $this->load->view("layout/feesSidebar");
}

function FeesHistory()
{
$this->load->view("FeesViews/feesHistory");
$this->load->view("layout/feesSidebar");
}

function GetFeesHistory()
{
$id=$this->input->get("id");
$data['data']=$this->FeesModel->getFeesHistory($id);

if(!empty($data))
{
    $response=array("message"=>"Data Found",
        "data"=>$data);
}
else{
    $response=array("message"=>"No Data Found");
}
$this->output->set_content_type('application/json');
$this->output->set_output(json_encode($response));
}


// function AllStudentFeesData()
// {
//     $data['data']=$this->FeesModel->getAllStudentFeesData();
//     $this->load->view("AllStudentFeesList",$data);
// }


// function payFees()
// {

// }

// function getFeesdata()
// {

// }

}


?>