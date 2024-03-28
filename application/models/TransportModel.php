<?php

class TransportModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getTransports()
    {
        $Data = $this->db->get('transportdata');
        return $Data->result();
    }

    function addTransportToDb($formdata)
    {
        $this->db->insert("transportdata", $formdata);
    }
    public function get_Last_Value_in_transports_id()
    {
        $this->db->select('id');
        $this->db->from('transportdata');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $lastValue = $row->id;
            $newvalue = $lastValue + 1;
            $newStdiD = "TR" . $newvalue;
            return $newStdiD;
        } else {
            return null;
        }
    }

    public function findTransportById($transportId)
    {
        $transport = $this->db->get_where('transportdata', array('id' => $transportId))->row();
        if (empty( $transport )) {
            print_r("No Transport");
        }

        return $transport;
    }

    function DeleteTransportWithId($id)
    {
        $this->db->delete('transportdata', array('id' => $id));
    }

    function updateTransportdata($transportid, $FormData)
    {
        $this->db->where('id', $transportid);
        $this->db->update("transportdata", $FormData);
    }

    function getRouteIdByName($id)
    {
        $Route = $this->db->get_where('routedata', array('id' => $id))->row();
        if (empty($Route)) {
            print_r("No Route");
        }

        return $Route;
    }
    function findBusIdByRegNumber($RegNumber)
    {
        $vehicle = $this->db->get_where('vehicledata', array('vehicleregnumber' => $RegNumber))->row();
        return $vehicle;
    }

    // function findBusIdByRegNumber($Regnumber)
    // {
    //     $Regnumber="MH 15 BV 8765";
    //     $Vehicle = $this->db->get_where('vehicledata', array('vehicleregnumber' =>$Regnumber))->row();
    //     print_r($Vehicle);
    //     // return $Vehicle;
    // }

    function driverIdbyName($name)
    {
        $transport = $this->db->get_where('driverdata', array('driverid' => $name))->row();
        return $transport;
    }

    function gettransportbyid($transportid)
    {
        $transport = $this->db->get_where('transportdata', array('transportid' => $transportid))->row();
        return $transport;
    }

    function gettransportwithid($id)
    {
        $transport = $this->db->get_where('transportdata', array('id' => $id))->row();
        return $transport;
    }

    function gettransport($id)
    {
        $transport = $this->db->get_where('transportdata', array('id' => $id))->row();
        return $transport;
    }

    function getstudenttbyid($studentid)
    {
        $transport = $this->db->get_where('studentdata', array('student_id' => $studentid))->row();

        return $transport;
    }
    function saveallotedstudentdata($formdata)
    {
        $this->db->insert('transportservicedata', $formdata);
    }

    function getAllAllotedStudents()
    {
        $Data = $this->db->get('transportservicedata');
        return $Data->result();
    }

    function findtransportservicebystudentregnumber($regnumber)
    {
        $Data = $this->db->get_where('transportservicedata', array('StudentRegNumber' => $regnumber))->row();
        return $Data;
    }

    function deleteTransportServiceWithId($id)
    {
        $this->db->delete('transportservicedata', array('id' => $id));
    }

    function getTransportServiceWithId($id)
    {
        $Data = $this->db->get_where('transportservicedata', array('id' => $id))->row();
        return $Data;
    }

    function updateAllotedstudentdata($id, $formdata)
    {
        $this->db->where('id', $id);
        $this->db->update("transportservicedata", $formdata);
    }


    function reduceAvailablecapacity($vehicleid, $availablecapacity)
    {
        $this->db->where('id', $vehicleid);
        $this->db->update('vehicledata', array('availablecapacity' => $availablecapacity - 1));
    }

    function setTransportAvailablecapacity($id, $availablecapacity)
    {
        $this->db->where('id', $id);
        $this->db->update('transportdata', array('availablecapacity' => $availablecapacity));
    }

    function updateVehicleCapacity($id, $availablecapacity)
    {
        $this->db->where('id', $id);
        $this->db->update('transportdata', array('availablecapacity' => $availablecapacity));
    }

    function setPreviousTransportAvailableCapacity($id, $availablecapacity)
    {
        $this->db->where('id', $id);
        $this->db->update('transportdata', array('availablecapacity' => $availablecapacity));
    }


    function setDriverStatus($id, $status)
    {
        $this->db->set('status',$status);
        $this->db->where('driverid', $id);
        $this->db->update('driverdata');
    }
    function setVehicleStatus($id, $status)
    {
        $this->db->where('vehicleserialnumber', $id);
        $this->db->update('vehicledata', array('status' => $status));
    }

    function setStatus($id, $status)
    {
        $this->db->where('id', $id);
        $this->db->update('transportdata', array('status' => $status));
    }

    function getRoutes()
    {
        $Data = $this->db->get('routedata');
        return $Data->result();
    }

    function findRouteById($Routeid)
    {
        $Route = $this->db->get_where('routedata', array('id' => $Routeid))->row();
        return $Route;
    }

    function get_Last_Value_in_Routes_id()
    {
        $this->db->select('id');
        $this->db->from('routedata');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $lastValue = $row->id;
            $newvalue = $lastValue + 1;
            $newStdiD = "RT" . $newvalue;
            return $newStdiD;
        } else {
            return null;
        }
    }

    function addRoutetoDb($formdata)
    {
        $this->db->insert("routedata", $formdata);
    }

    function updateRouteData($routeid, $FormData)
    {
        $this->db->where('id', $routeid);
        $this->db->update('routedata', $FormData);
    }

    function getVehiclewithid($id)
    {
        $Vehicle = $this->db->get_where('vehicledata', array('id' => $id))->row();
        return $Vehicle;
    }

    function markDriverAttendance($array)
    {
        $this->db->insert('driverattendancedata', $array);
    }

    function markpresent($driverid,$date)
    {
        $this->db->where('driverid', $driverid);
        $this->db->where('attendancedate',$date);
        $this->db->update('driverattendancedata', array('attendance' => "Present"));
    }

    function getdriverattendancedata()
    {
        $Data = $this->db->get('driverattendancedata');
        return $Data->result();
    }


    function attendancetoday($todayDate)
    {
        $data = $this->db->get_where('driverattendancedata', array('attendancedate' => $todayDate))->row();
        return $data;
    }

    function getSalaries()
    {
        $Data = $this->db->get('driversalary');
        return $Data->result();
    }

    function checkSalaryStatusForTheMonth($driverId, $month)
    {
        $data = $this->db->get_where('driversalary', array('driverid' => $driverId, 'month' => $month,))->row();
        return $data;
    }

    function findcount($driverId, $month)
    {
        $data = $this->db->get_where('driverattendancedata', array('driverid' => $driverId, 'month' => $month,'attendance'=>'Present'))->result();
        $rowCount = count($data);
        return $rowCount;
    }

    function pay($formdata)
    {
        $this->db->insert("driversalary", $formdata);
    }

    function getvehiclewithregnumber($regnumber)
    {
        $data = $this->db->get_where('vehicledata', array('vehicleregnumber' => $regnumber))->result();
        return $data;
    }

    function getDriverWithDriverId($driverid)
    {
        $data = $this->db->get_where('driverdata', array('driverid' => $driverid))->row();
        return $data;
    }

    function DeleterouteWithid($id)
    {
        $this->db->delete('routedata', array('id' => $id));
    }

    function updateTransportdataforvehicle($id, $data)
    {
        $this->db->where('vehicleid', $id);
        $this->db->update('transportdata', $data);
    }

    function updatedrivernameintransport($id, $data)
    {
        $this->db->set('drivername',$data);
        $this->db->where('driverid', $id);
        $this->db->update('transportdata');
        $affected_rows = $this->db->affected_rows();
        return $affected_rows;
    }

    function updatedrivernameinAttendance($id, $data)
    {
        $this->db->where('driverid', $id);
        $this->db->update('driverattendancedata', $data);
    }

    function updatedrivernameinSalary($id, $data)
    {
        $this->db->where('driverid', $id);
        $this->db->update('driversalary', $data);
    }

    function getdriver($id)
    {
        $driver = $this->db->get_where('transportdata', array('driverid' => $id))->row();
        return $driver;
    }

    function updatRouteinstops($routeid, $data)
    {
        $this->db->where('routeid', $routeid);
        $this->db->update('stopdata', $data);
    }

    function updatRouteintransport($routeid, $data)
    {
        $this->db->where('routeid', $routeid);
        $this->db->update('transportdata', $data);
    }

    function updatRouteintransportusage($id, $data)
    {
        $this->db->where('routeid', $id);
        $this->db->update('transportservicedata', $data);
    }

    function getroute($id)
    {
        $route = $this->db->get_where('routedata', array('id' => $id))->row();
        return $route;
    }

    function UpdateStopintransportservice($stopid, $data)
    {
        $this->db->where('stopid', $stopid);
        $this->db->update('transportservicedata', $data);
    }

    function getstop($Stopid)
    {
        $stop = $this->db->get_where('stopdata', array('id' => $Stopid))->row();
        return $stop;
    }

    function Calculateremainingfees($Stopid, $remainingFees)
    {
        $this->db->set('reamainingbusfees', $remainingFees);
        $this->db->where('stopid', $Stopid);
        $this->db->update('transportservicedata');
    }

    function getdata($Stopid)
    {
        $data = $this->db->get_where('transportservicedata', array('stopid' => $Stopid))->row();
        return $data;
    }

    function getstopwithid($stopid)
    {
        $data = $this->db->get_where('stopdata', array('stopserialnumber' => $stopid))->row();
        return $data;
    }

    function findstopbyname($stopname)
    {
        // print_r($stopname);
        $data = $this->db->get_where('stopdata', array('stopserialnumber' => $stopname))->row();
        return $data;
    }

    function getservicedata($id)
    {
        $data = $this->db->get_where('transportservicedata', array('transportid' => $id))->row();
        return $data;
    }

    function addDrivertoDb($data)
    {
        $this->db->insert("driverdata", $data);
    }

    function getdrivers()
    {
        $data=$this->db->get("driverdata");
        return $data->result();
    }
    
    function getDriverWithStatus($status)
    {
        $driver=$this->db->get_where('driverdata', array('status' => $status));
        return $driver->result();
    }
    public function get_Last_Value_in_Driver_id()
    {
        $this->db->select('id');
        $this->db->from('driverdata');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $lastValue = $row->id;
           $newvalue=$lastValue+1;
           $newStdiD="DR".$newvalue;
           return $newStdiD;
        } else {
            return null;
        }
    }

    
    public function getdriverwithid($id)
    {
        $driver=$this->db->get_where('driverdata', array('driverid' => $id))->row();
        return $driver;
    }

    function getdriverid($id)
    {
        $driver=$this->db->get_where('driverdata', array('id' => $id))->row();
        return $driver;
    }
    function UpdateDriver($id,$formdata)
    {
        $this->db->where('id',$id);
        $this->db->update('driverdata',$formdata);
    }
    // public function getAllRoutes()
    // {
    //     $Data = $this->db->get('routedata');
    //     return $Data->result();
    // }

    // public function findRouteById($RouteId)
    // {
    //     $Route = $this->db->get_where('routedata', array('id' => $RouteId))->row();
    //     if (empty($Route)) {
    //         print_r("No Route");
    //     }

    //     return $Route;
    // }

    function DeleteDriverWithid($id)
    {
        $this->db->delete('driverdata', array('id' => $id));
    }

    function getStops()
    {
        $Data = $this->db->get('stopdata');
        return $Data->result();
    }

    function addStoptoDb($data)
    {
        $this->db->insert("stopdata", $data);
    }

    public function get_Last_Value_in_Stops_id()
    {
        $this->db->select('id');
        $this->db->from('stopdata');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $lastValue = $row->id;
           $newvalue=$lastValue+1;
           $newStdiD="STP".$newvalue;
           return $newStdiD;
        } else {
            return null;
        }
    }

    function deleteStopWithId($id)
    {
        $this->db->delete('stopdata', array('id' => $id));
    }
   
    // function updateRouteData($Routeid,$data)
    // {
    //    
    // }

    function findStopById($StopId)
    {
        $Stop = $this->db->get_where('stopdata', array('id' => $StopId))->row();
        if (empty($Stop)) {
            print_r("No studnet");
        }

        return $Stop;
    }

    function updateStop($Stopid,$FormData)
    {
        $this->db->where('id', $Stopid);
        $this->db->update("stopdata", $FormData);
    }

    public function getAllRoutes()
    {
        $Data = $this->db->get('routedata');
        return $Data->result();
    }


    public function findRouteByname($Routename)
    {
        $Route = $this->db->get_where('routedata', array('routename' => $Routename))->row();
        if (empty($Route)) {
            print_r("No Route");
        }
        return $Route;
    }

    public function findStopswhererouteid($routeid)
    {
        $Stops=$this->db->get_where("stopdata", array("routeid"=> $routeid))->result();
        return $Stops;
    }

    // public function findstopbyname($stopname)
    // {
    //     $Stop=$this->db->get_where("stopdata", array("stopname"=> $stopname))->row();
    //     return $Stop;
    // }

    function getVehicles()
    {
        $vehicles=$this->db->get("vehicledata");
        return $vehicles->result();
    }
    function addVehicletoDb($data)
    {
        $this->db->insert("vehicledata", $data);
    }

    public function get_Last_Value_in_Vehicles_id()
    {
        $this->db->select('id');
        $this->db->from('vehicledata');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $lastValue = $row->id;
           $newvalue=$lastValue+1;
           $newStdiD="VH".$newvalue;
           return $newStdiD;
        } else {
            return null;
        }
    }

    function findVehicleById($vehicleid)
    {
        $vehicle=$this->db->get_where('vehicledata', array('id' => $vehicleid))->row();
        return $vehicle;
    }
    // public function getAllRoutes()
    // {
    //     $Data = $this->db->get('vehicledata');
    //     return $Data->result();
    // }

    function deleteVehicletWithId($vehicleid)
    {
        $this->db->delete('vehicledata', array('id' => $vehicleid));
    }

     function updateVehicleData($vehicleid,$data)
    {
        $this->db->where('id', $vehicleid);
        $this->db->update("vehicledata", $data);
    }

    function getVehicleswithStatus($status)
    {
        $vehicle=$this->db->get_where('vehicledata', array('status' => $status));
        return $vehicle->result();
    }

    function getroutewithid($routeid)
    {
        $Route=$this->db->get_where('routedata',array('id'=>$routeid))->row();
        return $Route;
    }

    function gettransportwithdriverid($driverid)
    {
        $Route=$this->db->get_where('transportdata',array('driverid'=>$driverid))->row();
        return $Route;
    }

    function getvehiclewithregid($Vehicleid)
    {
        $Vehicle=$this->db->get_where('vehicledata',array('vehicleserialnumber'=>$Vehicleid))->row();
        return $Vehicle;
    }

    function findTransportByvehicleid($vehicleid)
    {
        $transport=$this->db->get_where('transportdata',array('vehicleid'=>$vehicleid))->row();
        return $transport;
    }

    function findStudentsBytransportid($transportid)
    {
        $Students=$this->db->get_where('transportservicedata',array('transportid'=>$transportid))->result();
        return $Students;
    }

    function getTransportId($id)
    {
        $transport=$this->db->get_where('transportdata',array('id'=>$id))->row();
        return $transport;
    }

    function gettransportservicecountforthistransport($transportid)
    {
        $count=$this->db->get_where('transportservicedata',array('transportid'=>$transportid))->num_rows();
        return $count;
    }

    function gettransportwithrouteid($routeid)
    {
        $transport=$this->db->get_where('transportdata',array('routeid'=>$routeid))->row();
        return $transport;
    }

    function getstopbyId($stopid)
    {
        $stop=$this->db->get_where('stopdata',array('id'=>$stopid))->row();
        return $stop;
    }

    function gettransportservicewithstopid($stopid)
    {
        $transportservice=$this->db->get_where('transportservicedata',array('stopid'=>$stopid))->row();
        return $transportservice;
    }
}
