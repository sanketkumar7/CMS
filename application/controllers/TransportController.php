<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TransportController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model('TransportModel');
    }
    public function index()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        return redirect("TransportController/transport");
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }
    public function RoutesList()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $Routes['routes'] = $this->TransportModel->getRoutes();
        $this->load->view('Transportviews/Routes', $Routes);
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }
    public function addRoute()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
            
            $this->load->view('Transportviews/addRoute');
    }
    else if($this->session->userdata('userloggedin') && $role!="Admin")
    {
        return redirect("StaffController/UnAuthorizedAccess");
    }
    else{
        return redirect("StaffController/login");
    }
    }

    public function AddRoutePost()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $formdata = $this->input->post();
        $this->load->model('TransportModel');
        $serialnumber = $this->TransportModel->get_Last_Value_in_Routes_id();
        if ($serialnumber == null) {
            $formdata['serialnumber'] = "RT1";
        } else {
            $formdata['serialnumber'] = $serialnumber;
        }
        $this->load->model('TransportModel');
        $this->TransportModel->addRoutetoDb($formdata);
        $this->session->set_flashdata('RouteAddSuccess', 'Route Added Successfully ..!');
        return redirect('TransportController/RoutesList');
    }
    else if($this->session->userdata('userloggedin') && $role!="Admin")
    {
        return redirect("StaffController/UnAuthorizedAccess");
    }
    else{
        return redirect("StaffController/login");
    }
    }

    public function ViewRouteData()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $RouteId = $this->input->get('id');
        $this->load->model('TransportModel');
        $Route['route'] = $this->TransportModel->findRouteById($RouteId);
        $this->load->view('Transportviews/RouteData', $Route);}
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    public function EditRoute()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $RouteId = $this->input->get('id');
        $this->load->model('TransportModel');
        $Route['route'] = $this->TransportModel->findRouteById($RouteId);
        $this->load->view('Transportviews/editRoutes', $Route);
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }
    public function UpdateRoute()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $FormData = $this->input->post();
        $routeid = $FormData['id'];
        $this->load->model('TransportModel');
        unset($FormData['id']);
        $data = ['routename' => $FormData['routename']];
        $Route = $this->TransportModel->getroute($routeid);
        $this->TransportModel->updatRouteinstops($routeid, $data);
        $this->TransportModel->updatRouteintransport($routeid, $data);
        $this->TransportModel->updatRouteintransportusage($Route->id, $data);
        $this->TransportModel->updateRouteData($routeid, $FormData);
        $this->session->set_flashdata('RouteUpdateSuccess', 'Route Updated Successfully ..!');
        return redirect('TransportController/RoutesList');
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }
    public function DeleteRoute()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $RouteId = $this->input->get('id');
        $this->load->model('TransportModel');
        $transport=$this->TransportModel->gettransportwithrouteid($RouteId);
        if(!empty($transport))
        {
            $this->session->set_flashdata('RouteDeleteFailure', 'Route Cannote be Deleted ..!');
            return redirect('TransportController/RoutesList');
        }
        else{
            $this->TransportModel->DeleterouteWithid($RouteId);
            $this->session->set_flashdata('RouteDeleteSuccess', 'Route Deleted Successfully ..!');
            return redirect('TransportController/RoutesList');
        }
    }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    public function StopsList()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->model('TransportModel');
        $Stops['stops'] = $this->TransportModel->getStops();
        $this->load->view("Transportviews/Stops", $Stops);
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    public function AddStopPage()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->model('TransportModel');
        $Routes['routes'] = $this->TransportModel->getAllRoutes();
        $this->load->view("Transportviews/addStop", $Routes);
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    public function AddStopPost()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $formData = $this->input->post();
        $this->load->model('TransportModel');
        $stopserialnumber = $this->TransportModel->get_Last_Value_in_Stops_id();
        $route = $this->TransportModel->findRouteByname(($formData['routename']));
        if ($stopserialnumber == null) {
            $formData['stopserialnumber'] = "STP1";
        } else {
            $formData['stopserialnumber'] = $stopserialnumber;
        }
        $formData['routeid'] = $route->id;
        $this->TransportModel->addStoptoDb($formData);
        $this->session->set_flashdata('StopAddSuccess', 'Stop Added Successfully ..!');
        return redirect('TransportController/StopsList');
    }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    public function DeleteStop()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $StopId = $this->input->get('id');
        $this->load->model('TransportModel');
        $stop=$this->TransportModel->getstopbyId($StopId);
        $transportservice=$this->TransportModel->gettransportservicewithstopid($stop->stopserialnumber);
        if(!empty($transportservice))
        {
            $this->session->set_flashdata('StopDeleteFailure', 'Stop Cannot Be Deleted..!');
            return redirect('TransportController/StopsList');
        }
        else{
            $this->TransportModel->deleteStopWithId($StopId);
            $this->session->set_flashdata('StopDeleteSuccess', 'Stop Deleted Successfully ..!');
            return redirect('TransportController/StopsList');
        }
    }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
       
    }

    public function EditStopData()
    {
        
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $StopId = $this->input->get('id');
        $this->load->model('TransportModel');
        $stop['stop'] = $this->TransportModel->findStopByid($StopId);
        $Routes['routes'] = $this->TransportModel->getAllRoutes();
        $this->load->view('Transportviews/editStop', array_merge($stop, $Routes));
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    public function UpdateStopPost()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $FormData = $this->input->post();
       
        $Stopid = $FormData['id'];
        $this->load->model('TransportModel');
        unset($FormData['id']);
        $this->load->model('TransportModel');
        $Stop = $this->TransportModel->getstop($Stopid);
        $route=$this->TransportModel->getroutewithid($FormData['routename']);
        $FormData['routename']=$route->routename;
        $FormData['routeid']=$route->id;
        $Data = [
            'stopname' => $FormData['stopname'],
            'totalbusfees' => $FormData['stopfees']
        ];
        $this->TransportModel->UpdateStopintransportservice($Stop->stopserialnumber, $Data);
        $Stopnew = $this->TransportModel->getstop($Stopid);
        $servicedata = $this->TransportModel->getdata($Stopnew->stopserialnumber);
        $remainingfees = $Stopnew->stopfees - $servicedata->paidbusfees;
        $this->TransportModel->Calculateremainingfees($Stop->stopserialnumber, $remainingfees);
        $this->TransportModel->updateStop($Stopid, $FormData);
        $this->session->set_flashdata('StopUpdateSuccess', 'Stop Updated Successfully ..!');
        return redirect('TransportController/StopsList');
    }

    else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    public function ShowStopData()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $StopId = $this->input->get('id');
        $this->load->model('TransportModel');
        $stop['stop'] = $this->TransportModel->findStopByid($StopId);
        $Routes['routes'] = $this->TransportModel->getAllRoutes();
        $this->load->view('Transportviews/ShowStopData', array_merge($stop, $Routes));
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    public function VehicleList()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->model('TransportModel');
        $Vehicles['vehicles'] = $this->TransportModel->getVehicles();
        $this->load->view('Transportviews/Vehicles', $Vehicles);
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    public function AddVehiclePage()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->view('Transportviews/addVehicle');
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    function Fetchvehiclewithregnumber()
    {
        $vehicleregnumber = $this->input->get('vehicleregnumber');
        $this->load->model('TransportModel');
        $Vehicle = $this->TransportModel->getvehiclewithregnumber($vehicleregnumber);
        if ($Vehicle) {
            $response = array('message' => 'Vehicle Found');
        } else {
            $response = array('message' => 'No Vehicle Found');
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }
    public function AddVehiclePost()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('busimages')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $data = array('upload_data' => $this->upload->data());
        }
        $uploaded_photo = $_FILES['busimages'];
        $photoname = $uploaded_photo['name'];
        $formdata = $this->input->post();
        $formdata['busimages'] = $photoname;
        $formdata['availablecapacity'] = $formdata['totalseatingcapacity'];
        $this->load->model('TransportModel');
        $vehicleid = $this->TransportModel->get_Last_Value_in_Vehicles_id();
        if ($vehicleid == null) {
            $formdata['vehicleserialnumber'] = "VH1";
        } else {
            $formdata['vehicleserialnumber'] = $vehicleid;
        }
        $this->TransportModel->addVehicletoDb($formdata);
        $this->session->set_flashdata('VehicleAddSuccess', 'Vehicle Added Successfully ..!');
        return redirect('TransportController/VehicleList');
    } else if($this->session->userdata('userloggedin') && $role!="Admin")
    {
        return redirect("StaffController/UnAuthorizedAccess");
    }
    else{
        return redirect("StaffController/login");
    }
    }

    public function DeleteVehicle()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $vehicleid = $this->input->get('id');
        $this->load->model('TransportModel');
        $Vehicle = $this->TransportModel->getVehiclewithid($vehicleid);
        if ($Vehicle->status == "Active") {
            $this->session->set_flashdata('VehicledeleteFail', 'Vehicle Delete Error ..!');
            return redirect("TransportController/VehicleList");
        } else {
            $this->TransportModel->deleteVehicletWithId($vehicleid);
            $this->session->set_flashdata('VehicleDeleteSuccess', 'Vehicle Deleted Successfully ..!');
            return redirect('TransportController/VehicleList');
        }
    }
    else if($this->session->userdata('userloggedin') && $role!="Admin")
    {
        return redirect("StaffController/UnAuthorizedAccess");
    }
    else{
        return redirect("StaffController/login");
    }
    }

    public function EditVehicleData()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $vehicleid = $this->input->get('id');
        $this->load->model('TransportModel');
        $Vehicle['vehicle'] = $this->TransportModel->findVehicleById($vehicleid);
        $vehiclen = $this->TransportModel->findVehicleById($vehicleid);
        $transport = $this->TransportModel->findTransportByvehicleid($vehiclen->vehicleserialnumber);
        if ($transport != null) {
            $studentcount['count'] = $this->TransportModel->findStudentsBytransportid($transport->transportid);
            $countn = $this->TransportModel->findStudentsBytransportid($transport->transportid);
            $this->session->set_userdata('student_count', $countn);
            $this->load->view('Transportviews/editVehicle', array_merge($Vehicle, $studentcount));
        } else {
            $this->session->unset_userdata('student_count');
            $this->load->view('Transportviews/editVehicle', $Vehicle);
        }
    }
    else if($this->session->userdata('userloggedin') && $role!="Admin")
    {
        return redirect("StaffController/UnAuthorizedAccess");
    }
    else{
        return redirect("StaffController/login");
    }
    }
    public function UpdateVehicle()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $formdata = $this->input->post();
        if (isset($_FILES['busimages'])) {
            if (!$this->upload->do_upload('busimages')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = array('upload_data' => $this->upload->data());
                $uploaded_photo = $_FILES['busimages'];
                $photoname = $uploaded_photo['name'];
                $formdata['busimages'] = $photoname;
            }
        } else {
            echo "Driver photo is not set or is empty.";
        }
        $availablecapacity=$formdata['totalseatingcapacity'];
        $student_count=$this->session->userdata('student_count');
        if ((isset($student_count)) && !empty($student_count)) {
            $countval = count($this->session->userdata('student_count'));
            $availablecapacity = $formdata['totalseatingcapacity'] - $countval;
        } else {
            $availablecapacity = $formdata['totalseatingcapacity'];
        }
        $data = [

            'vehiclenumber' => $formdata['vehicleregnumber'],
            'vehicletype' => $formdata['vehicletype'],
            'totalcapacity' => $formdata['totalseatingcapacity'],
            'availablecapacity' => $availablecapacity,
        ];
        $formdata['availablecapacity']=$availablecapacity;

        $id = $formdata['id'];
        unset($formdata['id']);
        $this->load->model('TransportModel');
        $Vehicle = $this->TransportModel->findVehicleById($id);
        // $Transport=$this->TransportModel->findTransportByvehicleid($Vehicle->vehicleserialnumber);
        $this->TransportModel->updateVehicleData($id, $formdata);
        $this->load->model('TransportModel');
        $this->TransportModel->updateTransportdataforvehicle($Vehicle->vehicleserialnumber, $data);
        $this->session->set_flashdata('VehicleUpdateSuccess', 'Vehicle Updated Successfully ..!');
        return redirect('TransportController/VehicleList');
    }
    else if($this->session->userdata('userloggedin') && $role!="Admin")
    {
        return redirect("StaffController/UnAuthorizedAccess");
    }
    else{
        return redirect("StaffController/login");
    }
    }

    public function ShowVehicleData()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $vehicleid = $this->input->get('id');
        $this->load->model('TransportModel');
        $Vehicle['vehicle'] = $this->TransportModel->findVehicleById($vehicleid);
        $this->load->view('Transportviews/ShowVehicleData', $Vehicle);
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    public function DriverList()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->model('TransportModel');
        $Drivers['drivers'] = $this->TransportModel->getdrivers();
        $this->load->view('Transportviews/DriverList', $Drivers);
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    public function AddDriverPage()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->view('Transportviews/addDriver');
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    public function AddDriverPost()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('driverphoto')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $data = array('upload_data' => $this->upload->data());
        }
        $uploaded_photo = $_FILES['driverphoto'];
        $photoname = $uploaded_photo['name'];
        $formdata = $this->input->post();
        $formdata['driverphoto'] = $photoname;
        $totalname = $formdata['firstname'] . " " . $formdata['lastname'];
        $formdata['firstname_lastname'] = $totalname;
        $this->load->model('TransportModel');
        $driverid = $this->TransportModel->get_Last_Value_in_Driver_id();
        if ($driverid == null) {
            $formdata['driverid'] = "DR1";
        } else {
            $formdata['driverid'] = $driverid;
        }
        $this->TransportModel->addDrivertoDb($formdata);
        $this->session->set_flashdata('DriverAddSuccess', 'Driver Added Successfully ..!');
        return redirect('TransportController/DriverList');
    }
    else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    public function DeleteDriverWithid()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $id = $this->input->get('id');
        $this->load->model('TransportModel');

        $Driver = $this->TransportModel->getdriverid($id);
        if ($Driver->status == "Active") {
            $this->session->set_flashdata('DrverdeleteFail', 'Driver Delete Error ..!');
            return redirect("TransportController/DriverList");
        } else {
            $this->TransportModel->DeleteDriverWithid($id);
            $this->session->set_flashdata('DriverDeleteSuccess', 'Vehicle Deleted Successfully ..!');
            return redirect('TransportController/DriverList');
        }
    }
    else if($this->session->userdata('userloggedin') && $role!="Admin")
    {
        return redirect("StaffController/UnAuthorizedAccess");
    }
    else{
        return redirect("StaffController/login");
    }
    }

    public function EditDriverData()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $id = $this->input->get('id');
        $this->load->model('TransportModel');
        $Driver['driver'] = $this->TransportModel->getdriverid($id);
        $this->load->view('Transportviews/editDriver', $Driver);
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }
    public function UpdateDriverWithid()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $formdata = $this->input->post();
        if (isset($_FILES['driverphoto'])) {
            if (!$this->upload->do_upload('driverphoto')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = array('upload_data' => $this->upload->data());
                $uploaded_photo = $_FILES['driverphoto'];
                $photoname = $uploaded_photo['name'];
                $formdata['driverphoto'] = $photoname;
            }
        } else {
            echo "Driver photo is not set or is empty.";
        }
        $totalname = $formdata['firstname'] . " " . $formdata['lastname'];
        $formdata['firstname_lastname'] = $totalname;
        $id = $formdata['id'];
        $this->load->model("TransportModel");
        $Driver = $this->TransportModel->getdriverid($id);
        // print_r($Driver);
        unset($formdata['id']);
        $this->load->model('TransportModel');
        $data = [
            'drivername' => $totalname,
        ];

        $affetc = $this->TransportModel->updatedrivernameintransport($Driver->driverid, $totalname);
        $Transport = $this->TransportModel->gettransportwithdriverid($Driver->driverid);
        $this->TransportModel->updatedrivernameinAttendance($Driver->driverid, $data);
        $this->TransportModel->updatedrivernameinSalary($Driver->driverid, $data);
        $this->TransportModel->UpdateDriver($id, $formdata);
        $this->session->set_flashdata('DriverUpdateSuccess', 'Driver Updated Successfully ..!');
        return redirect('TransportController/DriverList');
    }
    else if($this->session->userdata('userloggedin') && $role!="Admin")
    {
        return redirect("StaffController/UnAuthorizedAccess");
    }
    else{
        return redirect("StaffController/login");
    }
    }

    public function ShowDriverData()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $id = $this->input->get('id');
        $this->load->model('TransportModel');
        $Driver['driver'] = $this->TransportModel->getdriverid($id);
        $this->load->view('Transportviews/ShowDriverData', $Driver);
        } else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    public function Transport()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->model('TransportModel');
        $Transports['transports'] = $this->TransportModel->getTransports();
        $Routes['routes'] = $this->TransportModel->getAllRoutes();
        $Drivers['drivers'] = $this->TransportModel->getdrivers();
        $Vehicles['vehicles'] = $this->TransportModel->getVehicles();
        $this->load->view('Transportviews/transport', array_merge($Transports, $Routes, $Drivers, $Vehicles));
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }
    public function AddTransportpage()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->model('TransportModel');
        
        $Transports['transports'] = $this->TransportModel->getTransports();
        $Routes['routes'] = $this->TransportModel->getAllRoutes();
        $Drivers['drivers'] = $this->TransportModel->getDriverWithStatus("Inactive");
        $Vehicles['vehicles'] = $this->TransportModel->getVehicleswithStatus("Inactive");
        $this->load->view('Transportviews/transports', array_merge($Transports, $Routes, $Drivers, $Vehicles));
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    public function AddTransport()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $formdata = $this->input->post();
        $this->load->model('TransportModel');
        $transportid = $this->TransportModel->get_Last_Value_in_transports_id();
        if ($transportid == null) {
            $formdata['transportid'] = "TR1";
        } else {
            $formdata['transportid'] = $transportid;
        }
        $route = $this->TransportModel->getRouteIdByName(($formdata['routename']));

        $Vehicle = $this->TransportModel->findBusIdByRegNumber($formdata['vehiclenumber']);
        $drivername = $formdata['drivername'];
        $Driver = $this->TransportModel->driverIdbyName($drivername);
        $this->TransportModel->setDriverStatus($Driver->driverid,"Active");
        $this->TransportModel->setVehicleStatus($Vehicle->vehicleserialnumber, "Active");
        $formdata['routeid'] = $route->id;
        $formdata['routename'] = $route->routename;
        $formdata['drivername'] = $Driver->firstname_lastname;
        $formdata['vehicleid'] = $Vehicle->vehicleserialnumber;
        $formdata['driverid'] = $Driver->driverid;
        $formdata['vehicletype'] = $Vehicle->vehicletype;
        $formdata['totalcapacity'] = $Vehicle->totalseatingcapacity;
        $formdata['availablecapacity'] = $Vehicle->availablecapacity;
        $this->TransportModel->addTransportToDb($formdata);
        $this->session->set_flashdata('TransportAddSuccess', 'Transport Added Successfully ..!');
        return redirect('TransportController/Transport');
    }
    else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    function EditTransportData()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->model('TransportModel');
        $Routes['routes'] = $this->TransportModel->getAllRoutes();
        $Drivers['drivers'] = $this->TransportModel->getDriverWithStatus("Inactive");
        $Vehicles['vehicles'] = $this->TransportModel->getVehicleswithStatus("Inactive");
        $id = $this->input->get('id');
        $Transport['transport'] = $this->TransportModel->findTransportById($id);
        $transportn = $this->TransportModel->findTransportById($id);
        $this->session->set_userdata('prevVehicleId', $transportn->vehicleid);
        $this->session->set_userdata('PrevDriverid', $transportn->driverid);
        $this->load->view('Transportviews/editTransport', array_merge($Transport, $Routes, $Drivers, $Vehicles));
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    function UpdateTransport()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $FormData = $this->input->post();
        $transportid = $FormData['id'];
        $trasnport=$this->TransportModel->getTransportId($transportid);
        $this->load->model('TransportModel');
        unset($FormData['id']);
        $route = $this->TransportModel->getRouteIdByName(($FormData['routeid']));
        $Vehicle = $this->TransportModel->findBusIdByRegNumber($FormData['vehiclenumber']);
        $drivername = $FormData['drivername'];
        $Driver = $this->TransportModel->driverIdbyName($drivername);
        $driverid = $this->session->userdata('PrevDriverid');
        $driver = $this->TransportModel->getdriverwithid($driverid);
        $FormData['driverid'] = $driver->driverid;
        $FormData['drivername'] = $driver->firstname_lastname;
        $vehicle = $this->TransportModel->getvehiclewithregid($this->session->userdata('prevVehicleId'));
        if ($Driver != $driver) {
            $FormData['driverid'] = $Driver->driverid;
            $FormData['drivername'] = $Driver->firstname_lastname;
            $this->TransportModel->setDriverStatus($driver->driverid, "Inactive");
            $this->TransportModel->setDriverStatus($Driver->driverid, "Active");
        }
        if ($Vehicle != $vehicle) {
            $FormData['vehicleid'] = $Vehicle->vehicleserialnumber;
            $this->TransportModel->setVehicleStatus($vehicle->vehicleserialnumber, "Inactive");
            $this->TransportModel->setVehicleStatus($Vehicle->vehicleserialnumber, "Active");
            $FormData['totalcapacity'] = $Vehicle->totalseatingcapacity;
            $count=$this->TransportModel->gettransportservicecountforthistransport($trasnport->transportid);
            $FormData['availablecapacity'] = $Vehicle->availablecapacity-$count;
            print_r($count);
        }
        $FormData['routeid'] = $route->id;
        $FormData['routename'] = $route->routename;
        $this->TransportModel->updateTransportdata($transportid, $FormData);
        $this->session->set_flashdata('TransportUpdateSuccess', 'Transport Update Successfully ..!');
        return redirect('TransportController/Transport');
    }
    else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    function DeleteTransportWithid()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $id = $this->input->get('id');
        $this->load->model('TransportModel');
        $Transport = $this->TransportModel->gettransportwithid($id);
        $this->load->model('TransportModel');
        $servicedata = $this->TransportModel->getservicedata($Transport->transportid);
        if ($servicedata) {
            $this->session->set_flashdata('TransportdeleteFail', 'Transport Delete Error ..!');
            return redirect("TransportController/Transport");
        } else {
            $this->TransportModel->setVehicleStatus($Transport->vehicleid, "Inactive");
            $this->TransportModel->setDriverStatus($Transport->driverid, "Inactive");
            $this->TransportModel->DeleteTransportWithId($id);
            $this->session->set_flashdata('TransportDeleteSuccess', 'Transport Deleted Successfully ..!');
            return redirect('TransportController/Transport');
        }
    }
    else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    function ShowTransportData()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->model('TransportModel');
        $Routes['routes'] = $this->TransportModel->getAllRoutes();
        $Drivers['drivers'] = $this->TransportModel->getdrivers();
        $Vehicles['vehicles'] = $this->TransportModel->getVehicles();
        $id = $this->input->get('id');
        $this->load->model('TransportModel');
        $Transport['transport'] = $this->TransportModel->findTransportById($id);
        $this->load->view('Transportviews/ShowTransportData', array_merge($Transport, $Routes, $Drivers, $Vehicles));
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    function ShowAllotedStudentslist()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->model('TransportModel');
        $AllotedStudents['allotedstudents'] = $this->TransportModel->getAllAllotedStudents();
        $this->load->view('Transportviews/transportserviceusagelist', $AllotedStudents);
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    function AllotStudent()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->model('TransportModel');
        $Transports['transports'] = $this->TransportModel->getTransports();
        $this->load->view('Transportviews/AllotStudent', $Transports);
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    function AllotStudentPost()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->model('TransportModel');
        $formdata = $this->input->post();
        $transportid = $formdata['transportid'];
        $studentid = $formdata['studentregnumber'];
        $transport = $this->TransportModel->gettransportbyid($transportid);
        $student = $this->TransportModel->getstudenttbyid($studentid);
        $this->TransportModel->reduceAvailablecapacity($transport->vehicleid, $transport->availablecapacity);
        $this->TransportModel->setTransportAvailablecapacity($transport->id, $transport->availablecapacity - 1);
        $Stop = $this->TransportModel->getstopwithid($formdata['stopname']);
        $Route = $this->TransportModel->getroutewithid($formdata['routename']);
        $formdata['studentid'] = $student->id;
        $formdata['stopid'] = $formdata['stopname'];
        $formdata['routeid'] = $formdata['routename'];
        $formdata['stopname'] = $Stop->stopname;
        $formdata['routename'] = $Route->routename;
        if ($formdata['reamainingbusfees'] > 0) {
            $formdata['feesstatus'] = "Incomplete";
        } else if ($formdata['reamainingbusfees'] == 0) {
            $formdata['feesstatus'] = "Complete";
        }
        $this->TransportModel->saveallotedstudentdata($formdata);
        $this->session->set_flashdata('StudentAlotSuccess', 'Transport Alloted Successfully ..!');
        return redirect('TransportController/ShowAllotedStudentslist');
    }
    else if($this->session->userdata('userloggedin') && $role!="Admin")
    {
        return redirect("StaffController/UnAuthorizedAccess");
    }
    else{
        return redirect("StaffController/login");
    }
    }

    function EditAllotData()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $id = $this->input->get('id');
        $this->load->model('TransportModel');
        $Transportservicedata = $this->TransportModel->getTransportServiceWithId($id);
        $data['data'] = $this->TransportModel->getTransportServiceWithId($id);
        $this->session->set_userdata('prevTransportID', $Transportservicedata->transportid);
        $Transports['transports'] = $this->TransportModel->getTransports();
        $this->load->view('Transportviews/editAllotStudentData', array_merge($data, $Transports));
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
    {
        return redirect("StaffController/UnAuthorizedAccess");
    }
    else{
        return redirect("StaffController/login");
    }
    }

    function UpdateAllotment()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->model('TransportModel');
        $formdata = $this->input->post();
        $transportid = $formdata['transportid'];
        $studentid = $formdata['studentregnumber'];
        $Stop = $this->TransportModel->getstopwithid($formdata['stopname']);
        $Route = $this->TransportModel->getroutewithid($formdata['routename']);
        $formdata['stopid'] = $formdata['stopname'];
        $formdata['routeid'] = $formdata['routename'];
        $formdata['stopname'] = $Stop->stopname;
        $formdata['routename'] = $Route->routename;
        $id = $this->session->userdata('prevTransportID');
        $transportprevious = $this->TransportModel->gettransportbyid($id);
        $transport = $this->TransportModel->gettransportbyid($transportid);
        if ($transportprevious != $transport) {
            $this->TransportModel->updateVehicleCapacity($transportprevious->vehicleid, $transportprevious->availablecapacity + 1);
            $this->TransportModel->setPreviousTransportAvailableCapacity($transportprevious->id, $transportprevious->availablecapacity + 1);
            $this->TransportModel->reduceAvailablecapacity($transport->vehicleid, $transport->availablecapacity);
            $this->TransportModel->setTransportAvailablecapacity($transport->id, $transport->availablecapacity - 1);
        }
        $student = $this->TransportModel->getstudenttbyid($studentid);
        $formdata['transportid'] = $transport->transportid;
        $formdata['studentid'] = $student->id;
        $id = $formdata['id'];
        unset($formdata['id']);
        if ($formdata['reamainingbusfees'] > 0) {
            $formdata['feesstatus'] = "Incomplete";
        } else if ($formdata['reamainingbusfees'] == 0) {
            $formdata['feesstatus'] = "Complete";
        }
        $this->TransportModel->updateAllotedstudentdata($id, $formdata);
        $this->session->set_flashdata('AlotUpdateSuccess', 'Student Allotment Updated Successfully ..!');
        return redirect('TransportController/ShowAllotedStudentslist');
    }
    else if($this->session->userdata('userloggedin') && $role!="Admin")
    {
        return redirect("StaffController/UnAuthorizedAccess");
    }
    else{
        return redirect("StaffController/login");
    }
    }
    function ShowTransportServiceData()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $id = $this->input->get('id');
        $this->load->model('TransportModel');
        $Transportservicedata['data'] = $this->TransportModel->getTransportServiceWithId($id);
        $this->load->view('Transportviews/ShowTransportServiceData', $Transportservicedata);
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }
    function DeleteTransportServiceWithid()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $id = $this->input->get('id');
        $this->load->model('TransportModel');
        $transportservicedata = $this->TransportModel->getTransportServiceWithId($id);
        $transportid = $transportservicedata->transportid;
        $transport = $this->TransportModel->gettransportbyid($transportid);
        $Vehicleid = $transport->vehicleid;
        $Vehicle = $this->TransportModel->getvehiclewithregid($Vehicleid);
        $this->TransportModel->deleteTransportServiceWithId($id);
        $this->TransportModel->updateVehicleCapacity($Vehicle->vehicleserialnumber, $Vehicle->availablecapacity + 1);
        $this->TransportModel->setTransportAvailablecapacity($transport->id, $transport->availablecapacity + 1);
        $this->session->set_flashdata('AlotRemoveSuccess', 'Deleted Successfully ..!');
        return redirect('TransportController/ShowAllotedStudentslist');
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }
    function FetchCapacityOfBus()
    {
        $transportid = $this->input->get('transportId');
        $this->load->model('TransportModel');
        $transport = $this->TransportModel->gettransportbyid($transportid);
        $availablecapacity = $transport->availablecapacity;
        if ($transport) {
            $response = array('availablecapacity' => $availablecapacity);
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }
    function FetchAssociatedStopsWithroute()
    {
        $routeName = $this->input->get('routeid');
        $this->load->model('TransportModel');
        $this->load->model('TransportModel');
        $route = $this->TransportModel->getRouteIdByName($routeName);
        $routeid = $route->id;
        $Stops = $this->TransportModel->findStopswhererouteid($routeid);
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($Stops));
    }

    function FetchFeesForStop()
    {
        $stopname = $this->input->get('stopName');
        $this->load->model('TransportModel');
        $this->load->model('TransportModel');
        // $stop = $this->TransportModel->findstopbyname($stopname);
        $stop = $this->TransportModel->findstopbyname($stopname);
        if ($stop) {
            $fees = $stop->stopfees;
        } else {
            $fees = 0;
        }
        $response = array('total' => $fees);
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }

    function Fetchstudentwithregnumber()
    {
        $regnumber = $this->input->get('studentregnumber');
        $this->load->model('TransportModel');
        $transportservicedata = $this->TransportModel->findtransportservicebystudentregnumber($regnumber);
        if ($transportservicedata) {
            $response = array('message' => "Student Already registered");
        } else {
            $this->load->model('GeneralProficiencyModel');
            $student = $this->GeneralProficiencyModel->findByRegNum($regnumber);
            if ($student) {
                $studentfullname = $student->student_first_name . " " . $student->student_last_name;
                $response = array('studentname' => $studentfullname, 'Course' => $student->type, 'Branch' => $student->branch, 'Year' => $student->year);
            } else {
                $response = array('message' => "No student Found");
            }
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }

    public function Attendance()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->model('TransportModel');
        $attendance['driverattendanceata'] = $this->TransportModel->getdriverattendancedata();
        $this->load->view('Transportviews/DriverAttendance', $attendance);
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    public function MarkAttendancePage()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->model('TransportModel');
        $Drivers['drivers'] = $this->TransportModel->getdrivers();
        $this->load->view('Transportviews/MarkDriverattendance', $Drivers);
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }
    public function MarkAttendance()
    {
        $this->load->model('TransportModel');
        $driverIds = $_POST['driverid'];
        $driverNames = $_POST['drivername'];
        $attendances = $_POST['attendance'];
        $todayDate = date("d-m-Y");
        for ($i = 0; $i < count($driverIds); $i++) {
            $driverId = $driverIds[$i];
            $driverName = $driverNames[$i];
            $attendanceDate = $todayDate;
            $attendance = "Absent";
            $array = array(
                'driverid' => $driverId,
                'drivername' => $driverName,
                'attendancedate' => $attendanceDate,
                'attendance' => $attendance,
                'month' => date('F'),
            );
            $this->TransportModel->markDriverAttendance($array,$todayDate);
        }
        for ($i = 0; $i < count($attendances); $i++) {
            $this->TransportModel->markpresent($attendances[$i],$todayDate);
        }
        $this->session->set_flashdata('AttendanceSuccess', 'Attendance Marked Successfully ..!');
        return redirect('TransportController/Attendance');
    }

    public function checkAttendanceStatus()
    {
        $this->load->model('TransportModel');
        $todayDate = date("d-m-Y");
        $Attendancedata = $this->TransportModel->attendancetoday($todayDate);
        if ($Attendancedata && $Attendancedata != null) {
            $response = array('message' => "Attendance Already Marked");
        } else {
            $response = array('message' => "Attendance Not Marked");
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }

    function DriverSalary()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->model('TransportModel');
        $Salary['salarydata'] = $this->TransportModel->getSalaries();
        $this->load->view('Transportviews/driverSalary', $Salary);
        }
        else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    function PaySalaryPage()
    {
        $role=$this->session->userdata('role');
        if($this->session->userdata('userloggedin') && $role=="Admin")
        {
        $this->load->model('TransportModel');
        $Salary['salarydata'] = $this->TransportModel->getSalaries();
        $this->load->view('Transportviews/PayDriverSalary', $Salary);
        } else if($this->session->userdata('userloggedin') && $role!="Admin")
        {
            return redirect("StaffController/UnAuthorizedAccess");
        }
        else{
            return redirect("StaffController/login");
        }
    }

    function FetchDriverWithId()
    {
        $driverid = $this->input->get('driverid');
        $this->load->model('TransportModel');
        $Driver = $this->TransportModel->getDriverWithDriverId($driverid);
        if ($Driver) {
            $name = $Driver->firstname . " " . $Driver->lastname;
            $response = array('drivername' => $name);
        } else {
            $response = array('message' => "No Driver Found");
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }
    function paysalary()
    {
        
        $this->load->model('TransportModel');
        $formdata = $this->input->post();
        $formdata['status'] = "Paid";
        $formdata['date'] = date("d-m-Y");
        $this->TransportModel->pay($formdata);
        $this->session->set_flashdata('SalarySuccess', 'Salary Paid Successfully ..!');
        return redirect('TransportController/DriverSalary');
    }

    function CalculateSalary()
    {
        $driverId = $this->input->get('driverid');
        $month = $this->input->get('month');
        $this->load->model('TransportModel');
        $salarydata = $this->TransportModel->checkSalaryStatusForTheMonth($driverId, $month);
        if ($salarydata) {
            $response = array('message' => 'Salary Already Paid For the Month');
        } else {
            $Attendancecount = $this->TransportModel->findcount($driverId, $month);
            if ($Attendancecount != 0 || $Attendancecount!=null) {
                $response = array('count' => $Attendancecount);
            } else {
                $response = array('count' => 0);
            }
        }
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }



}
