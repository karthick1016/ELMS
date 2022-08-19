<?php

class Leaveapproval extends Database
{
    public function display($name)
    {
        $query = "SELECT leaveapprove.id,leaveapprove.fromdate,leaveapprove.todate,leaveapprove.leavetypes,leaveapprove.days,leaveapprove.description,leaveapprove.status,employee.name,manager.managername
        FROM leaveapprove,employee,manager WHERE employee.id = leaveapprove.employeeid AND employee.managerid = manager.managerid AND manager.managername = '$name' AND leaveapprove.status IS NULL"; 
        $leaveapproval = mysqli_query($this->conn,$query);
        return $leaveapproval;  
    }

    public function approveUpdate($id,$status)
    {
        $insert = "UPDATE leaveapprove SET status = '$status' WHERE id = '$id'";
        $sql = mysqli_query($this->conn,$insert);
        return $sql;
    }
    public function leaveDetails($name)
    {
        $leavedetails = "SELECT leaveapprove.id,leaveapprove.fromdate,leaveapprove.todate,leaveapprove.leavetypes,leaveapprove.days,leaveapprove.description,leaveapprove.status,
        manager.managername,employee.name FROM leaveapprove,employee,manager WHERE employee.id = leaveapprove.employeeid AND manager.managerid = employee.managerid AND 
        manager.managername = '$name'";
        $details = mysqli_query($this->conn,$leavedetails);
        return $details;
    }

    public function dropDown()
    {
        $result = mysqli_query($this->conn,"SELECT * FROM leaves");
        return $result;
    }

    public function insertData($table,$fromDate,$toDate,$leavetypes,$days,$description,$name,$id)
    {
      $sql = "INSERT INTO $table(fromdate,todate,leavetypes,days,description,employeename,employeeid) VALUES ('".$fromDate."','".$toDate."','".$leavetypes."','$days','".$description."','".$name."','$id')";
      $inserting = mysqli_query($this->conn,$sql);
      return $inserting;
    }

    public function employeeleaveDetails($name)
    {
        $employeeleavedetails = "SELECT leaveapprove.fromdate,leaveapprove.todate,leaveapprove.leavetypes,leaveapprove.days,leaveapprove.description,leaveapprove.status,
        manager.managername,employee.name FROM leaveapprove,employee,manager WHERE employee.id = leaveapprove.employeeid AND manager.managerid = employee.managerid AND 
        employee.name = '$name'";
        $details = mysqli_query($this->conn,$employeeleavedetails);
        return $details;
    }
}



?>