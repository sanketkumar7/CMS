<?php

class StaffModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    function createAdmin()
    {
        $formdata['email'] = "admin@gmail.com";
        $formdata['password'] = "admin";

        $user = $this->db->get_where("logindetails", array("email" => "admin@gmail.com", "password" => "admin","role"=>"Admin"))->row();
        if ($user) {
            return;
        } else {
            $this->db->insert('logindetails', $formdata);
        }
    }

    function loginValidation($email, $Password)
    {
        $staff = $this->db->get_where('logindetails', array('email' => $email, 'password' => $Password))->row();
        if ($staff) {
            return $staff;
        }
        return NULL;
    }
    public function get_Last_Value_in_Staff_id()
    {
        $this->db->select('id');
        $this->db->from('staffdata');
        $this->db->order_by('id','DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $lastValue = $row->id;
            $newvalue = $lastValue + 1;
            $newStdiD = "STF-" . $newvalue;
            return $newStdiD;
        } else {
            return null;
        }
    }
    function getStaffList()
    {
        $Data = $this->db->get('staffdata')->result();
        return $Data;
    }
    function addStaffToDb($FormData)
    {
        $this->db->insert('staffdata', $FormData);
    }

    function checkemail($email)
    {
        $staff = $this->db->get_where('logindetails', array('email' => $email))->row();
        if ($staff) {
            return $staff;
        }
        return NULL;
    }

    function createLoginDetails($logindata)
    {
        $this->db->insert('logindetails', $logindata);
    }

    function UpdateStaffInLoginDetails($staffid,$data)
    {
        $this->db->where('userid',$staffid);
        $this->db->update("logindetails",$data);
    }
    function findStaffById($id)
    {
        $data = $this->db->get_where('staffdata', array('id' => $id));
        return $data->row();
    }


    function updateStaffDataWithId($id, $FormData)
    {
        $this->db->where('id', $id);
        $this->db->update('staffdata', $FormData);
    }

    function UpdateStaffInEachtable($staffid, $name)
    {
        $array_table = array('staffsalarydata', 'staffattendancedata','staffcheckincheckoutdata');
        foreach ($array_table as $table) {
            if ($table == "staffattendancedata" || $table =="staffcheckincheckoutdata") {
                $this->db->set('name', $name);
                $this->db->where('staffid', $staffid);
                $this->db->update($table);
            } else {
                $this->db->set('staffname', $name);
                $this->db->where('staffid', $staffid);
                $this->db->update($table);
            }
        }
    }
    function deleteStaffWithId($id)
    {
        $this->db->delete('staffdata', array('id' => $id));
    }

    function deletStaffLoginDetails($staffid)
    {
        $this->db->delete('logindetails', array('staffid' => $staffid));
    }

    function markStaffAttendance($data)
    {
        $this->db->insert('staffattendancedata', $data);
    }

    function markpresent($staffid, $date)
    {
        $this->db->set('attendance', "Present");
        $this->db->where('staffid', $staffid);
        $this->db->where('date', $date);
        $this->db->where('attendance !=', "Present");
        $this->db->where('attendance !=', "Half Day");
        $this->db->update('staffattendancedata');
    }
    function attendancetoday($todayDate)
    {
        $data = $this->db->get_where('staffattendancedata', array('date' => $todayDate))->result();
        return $data;
    }

    function getStaffAttendanceList()
    {
        $Data = $this->db->get('staffattendancedata')->result();
        return $Data;
    }

    function getByStaffByIdfromcheckincheckoutdata($staffid, $todaydate)
    {
        $Data = $this->db->get_where('staffcheckincheckoutdata', array('staffid' => $staffid, 'date' => $todaydate))->result();
        return $Data;
    }

    function getByStaffByIdfromcheckincheckout($staffid,$date)
    {
        $Data = $this->db->get_where('staffcheckincheckoutdata', array('staffid' => $staffid, 'date' => $date))->result();
        return $Data;
    }

    function setintime($formdata)
    {
        $this->db->insert('staffcheckincheckoutdata', $formdata);
    }
    function setOutTime($formdata)
    {
        $this->db->insert('staffcheckincheckoutdata', $formdata);
    }

    function setStaffAttendanceForToday($staffid,$name,$date,$attendance)
    {
        $formdata=array(
            "staffid"=>$staffid,
            "date"=>$date,
            "name"=>$name,
            "attendance"=>$attendance,
            "month"=>date('F'),
        );
        $this->db->insert('staffattendancedata', $formdata);
    }

    function getStaffcheckincheckoutlist()
    {
        $Data = $this->db->get('staffcheckincheckoutdata')->result();
        return $Data;
    }
    function getStaffcheckincheckoutlistforstaffid($staffid,$todaydate)
    {
        $Data = $this->db->get_where('staffcheckincheckoutdata',array('staffid'=>$staffid,'date'=>$todaydate))->result();
        return $Data;
    }
    function getallstaffids()
    {
        $this->load->database();
        $query = $this->db->select('staffid')->get('staffdata');
        $firstColumn = array();
        foreach ($query->result_array() as $row) {
            if($row['staffid']!="")
            {
                $firstColumn[] = $row['staffid'];
            }
           
        }
        return $firstColumn;
    }
    function leaveRequest($formdata)
    {
        $this->db->insert('staffleavedata', $formdata);
    }

    function getLeaveHistoryForLoggedInUser($staffid)
    {
        $data = $this->db->get_where('staffleavedata', array('staffid' => $staffid))->result();
        return $data;
    }


    function getLeaveData()
    {
        $data = $this->db->get_where('staffleavedata')->result();
        return $data;
    }

    function changeStatus($id, $status)
    {
        $this->db->set('status', $status);
        $this->db->where('id', $id);
        $this->db->update('staffleavedata');
    }

    function getleavedataforid($id)
    {
        $data = $this->db->get_where('staffleavedata', array('id' => $id))->row();
        return $data;
    }

    function changeRemainingLeavesCount($staffid, $remainingleaves)
    {
        $this->db->set('remainingleavecount', $remainingleaves);
        $this->db->where('staffid', $staffid);
        $this->db->update('staffleavedata');
    }

    function getleavedatawithStafffid($staffid)
    {
        $data = $this->db->get_where('staffleavedata', array('staffid' => $staffid))->row_array();
        return $data;
    }

    function getStaffLeaveDataForDate($staffid, $date, $status)
    {
        $data = $this->db->where('staffid', $staffid)
            ->where('status !=', "Rejected")
            ->where('leavedate', $date)
            ->get('staffleavedata')
            ->row();
        return $data;
    }

    function getStaffLeaveDataForFromDateandToDate($staffid, $fromdate, $todate)
    {

        $this->db->where('staffid', $staffid);
        $this->db->group_start();
        $this->db->where('fromdate <=', $fromdate);
        $this->db->where('todate <=', $todate);
        $this->db->or_where('todate >=', $todate);
        $this->db->where('todate <=', $todate);
        $this->db->or_group_start();
        $this->db->where('fromdate <=', $fromdate);
        $this->db->group_end();
        $this->db->group_end();
        $data = $this->db->get('staffleavedata')->row();
        return $data;
    }

    function getLeaveDataForStaffid($staffid, $status)
    {
        $data = $this->db->where('staffid', $staffid)
            ->where('status !=', $status)
            ->get('staffleavedata')
            ->result();
        return $data;
    }

    function getLeaveDataForStaffidforstatusapproved($staffid, $status)
    {
        $data = $this->db->where('staffid', $staffid)
            ->where('status', $status)
            ->get('staffleavedata')
            ->result();
        return $data;
    }
    function getByStaffById($staffid)
    {
        $data = $this->db->get_where('staffdata', array('staffid' => $staffid))->row();
        return $data;
    }

    function getStaffDataForDate($staffid, $date)
    {
        $data = $this->db->get_where('staffdata', array('staffid' => $staffid, 'leavedate' => $date))->row();
        return $data;
    }

    function getStaffSalaryData()
    {
        $Data = $this->db->get('staffsalarydata')->result();
        return $Data;
    }

    function getStaffWithStaffId($staffid)
    {
        $data = $this->db->get_where('staffdata', array('staffid' => $staffid))->row();
        return $data;
    }

    function checkSalaryStatusForTheMonth($staffid, $month)
    {
        $data = $this->db->get_where('staffsalarydata', array('staffid' => $staffid, 'month' => $month,))->row();
        return $data;
    }

    function findcount($staffid, $month)
    {
        $data = $this->db->get_where('staffattendancedata', array('staffid' => $staffid, 'month' => $month, 'attendance' => 'Present'))->result();
        $rowCount = count($data);
        return $rowCount;
    }

    function findHalfDayCount($staffid, $month)
    {
        $data = $this->db->get_where('staffattendancedata', array('staffid' => $staffid, 'month' => $month, 'attendance' => 'Half Day'))->result();
        $rowCount = count($data);
        return $rowCount;
    }
    function pay($formdata)
    {
        $this->db->insert("staffsalarydata", $formdata);
    }
}
