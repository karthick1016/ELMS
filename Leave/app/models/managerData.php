<?php

spl_autoload_register(function($className){
    include $className.".php";
});

class ManagerData extends abstractmodel
{
    public function inserting($name, $email, $password, $number): string
    {
        $insert = mysqli_query($this->conn,"INSERT INTO manager(managername,email,password,phonenumber) VALUES ('".$name."','".$email."',md5('".$password."'),'".$number."')");
        return $insert;
    }

    public function display($id)
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

    public function updating($id, $name, $email, $password, $number, $Sno): string
    {
        $update = mysqli_query($this->conn,"UPDATE manager SET managername = '$name',email = '$email',password = md5('$password'),phonenumber = '$number' WHERE $Sno = '$id'");
        return $update;
    }

    public function deleting($id, $Sno): string
    {
        $delete = mysqli_query($this->conn,"DELETE FROM manager WHERE $Sno = '$id'");
        return $delete;
    }

    public function deletingAssoc($id, $Sno): string
    {
        $deleteAssoc = mysqli_query($this->conn,"DELETE from assoc WHERE $Sno = '$id'");
        return $deleteAssoc;
    }

    public function display_logindata($name)
    {
        $display_login = mysqli_query($this->conn,"SELECT * FROM manager WHERE ManagerName = '$name'");
        return $display_login;
    }

    public function pagination()
    {
        $print = new Database();
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
        $rs_result = mysqli_query($print->conn,$query);
        return $rs_result;
    }

    public function page()
    {
        $pageNo = "SELECT COUNT(*) FROM manager";
        $result = mysqli_query($this->conn,$pageNo);
        return $result;
    }

    public function dropdown()
    {
        $print = new Database();
        $dropDown = mysqli_query($print->conn,"SELECT id,name FROM employee WHERE managerid IS NUll");
        return $dropDown;
    }

    public function dropDownselected($id)
    {
        $print = new Database();
        $dropDownSelect = mysqli_query($print->conn,"SELECT id,name FROM employee WHERE managerid = '$id'");
        return $dropDownSelect;
    }

    public function removingEmployee($employeeid): string
    {
        $print = new Database();
        $removeEmp = "UPDATE assoc,employee SET assoc.managerid = NULL , employee.managerId = NULL WHERE assoc.employeeid = '$employeeid' AND employee.id = '$employeeid'";
        $removeEmployee = mysqli_query($print->conn,$removeEmp);
        return $removeEmployee;
    }

    public function assigningEmployee($table, $managerId, $assignName): string
    {
        $print = new Database();
        $assign = mysqli_query($print->conn,"UPDATE $table SET managerid = '$managerId' WHERE id = '$assignName'");
        return $assign;
    }

    public function assocemployee($table, $managerId, $assignName): string
    {
        $print = new Database();
        $assign = mysqli_query($print->conn,"UPDATE $table SET managerid = '$managerId' WHERE employeeid = '$assignName'");
        return $assign;
    }


}



?>