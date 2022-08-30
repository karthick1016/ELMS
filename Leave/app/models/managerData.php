<?php

class ManagerData extends Database
{
    public function insertManager($name,$email,$password,$number)
    {
        $insert = mysqli_query($this->conn,"INSERT INTO manager(managername,email,password,phonenumber,usertype) VALUES ('".$name."','".$email."',md5('".$password."'),'".$number."',0)");
        return $insert;
    }

    public function displayManager($id = NULL)
    {
       
        if(!empty($id))
        {
            $display = mysqli_query($this->conn,"SELECT * FROM manager WHERE managerid = '$id'");
        }   
        else
        {
            $display = mysqli_query($this->conn,"SELECT * FROM manager");
        }
        return $display;
    }

    public function updateManager($id,$name,$email,$password,$number,$Sno)
    {   
        $update = mysqli_query($this->conn,"UPDATE manager SET managername = '$name',email = '$email',password = md5('$password'),phonenumber = '$number' WHERE $Sno = '$id'");
        return $update;
    }

    public function deleteManager($id,$Sno)
    {
        $delete = mysqli_query($this->conn,"DELETE FROM manager WHERE $Sno = '$id'");
        return $delete;
    }

    public function deleteAssoc($id,$Sno)
    {
        $deleteAssoc = mysqli_query($this->conn,"DELETE from assoc WHERE $Sno = '$id'");
        return $deleteAssoc;
    }

    public function dropDown()
    {
        $dropDown = mysqli_query($this->conn,"SELECT id,name FROM employee WHERE managerid IS NUll");
        return $dropDown;
    }

    public function dropDownSelected($id)
    {
        
        $dropDownSelect = mysqli_query($this->conn,"SELECT id,name FROM employee WHERE managerid = '$id'");
        return $dropDownSelect;
    }

    public function removeEmployee($employeeid)
    {
        $removeEmp = "UPDATE assoc,employee SET assoc.managerid = NULL , employee.managerId = NULL WHERE assoc.employeeid = '$employeeid' AND employee.id = '$employeeid'";
        $removeEmployee = mysqli_query($this->conn,$removeEmp);
        return $removeEmployee;
    }
    
    public function display_login($name)
    {
        $display_login = mysqli_query($this->conn,"SELECT * FROM manager WHERE ManagerName = '$name'");
        return $display_login;
    }

    public function assignEmployee($table,$managerId,$assignName)
    {
        // $assigning = "UPDATE $table SET ManagerId = '$managerId' WHERE id = '$assignName'";
        $assign = mysqli_query($this->conn,"UPDATE $table SET managerid = '$managerId' WHERE id = '$assignName'");
        return $assign;
    }

    public function assocEmployee($table,$managerId,$assignName)
    {
        // echo $assigning = "UPDATE $table SET ManagerId = '$managerId' WHERE employeeid = '$assignName'";
        $assign = mysqli_query($this->conn,"UPDATE $table SET managerid = '$managerId' WHERE employeeid = '$assignName'");
        return $assign;
    }
    
    public function pagination()
    {
        $page_per_record = 4;

        if(isset($_GET['page']))
        {
            $page = $_GET['page'];
            $_SESSION['managerpage'] = $page;
        }
        else
        {
            $page = 1;
            $_SESSION['managerpage'] = $page;
        }

        $start_from = ($page - 1) * $page_per_record;
        $query = "SELECT * FROM manager LIMIT $start_from,$page_per_record";
        $rs_result = mysqli_query($this->conn,$query);
        return $rs_result;
    }

    public function page()
    {
        $pageNo = "SELECT COUNT(*) FROM manager";
        $result = mysqli_query($this->conn,$pageNo);
        return $result;
    }
    
}



?>