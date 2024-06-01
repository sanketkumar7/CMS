<?php
defined("BASEPATH") or exit("Direct Script Access Not Allowed");

class Fees extends CI_Controller{

function __construct()
{
    parent::__construct();
    $this->load->model("FeesModel");
    $this->load->library("session");
    date_default_timezone_set("Asia/Kolkata");

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
$data=$this->FeesModel->getFeesHistory($id);
// print_r($data);
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



function PayCollegeFees()
{
    $this->load->view("FeesViews/payFees");
    $this->load->view("layout/feesSidebar");
}

function payfees()
{
        $formdata=$this->input->post();
        $totalfeespaid=$formdata["totalfeespaid"]+$formdata["currentpayment"];
        $id=$formdata["studentid"];
        if($totalfeespaid==$formdata["totalfees"])
        {
            $formdata["totalfeespaid"]=$totalfeespaid;
            $formdata["remainingfees"]=0;
            $formdata["status"]="Complete";
            $this->load->model("StudentModel");
            $this->StudentModel->updateFeeStatus($id);
            $this->FeesModel->updateFeeData($id,$formdata);
            unset($formdata["status"]);
            $formdata["date"]=date('d-m-Y');
            $this->FeesModel->insertfeeData($formdata);
        }
        else{
            $formdata["totalfeespaid"]=$totalfeespaid;
            $formdata["remainingfees"]=$formdata["totalfees"]-$totalfeespaid;
            $this->FeesModel->updateFeeData($id,$formdata);
            $formdata["date"]=date('d-m-Y');

            $this->FeesModel->insertfeeData($formdata);
        }

        return redirect("Fees/FeesHistory");
}


}


?>