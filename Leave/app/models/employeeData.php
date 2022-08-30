<?php
class Employeedata extends Database
{
    public function insertEmployee($name,$email,$password,$number)

    {
        $inserting = mysqli_query($this->conn,"INSERT INTO employee (name,email,password,phonenumber,usertype) VALUES ('".$name."','".$email."',md5('".$password."'),'".$number."',1)");
        return $inserting;
    }

    public function displayEmployee($id = NULL)
    {
        if(!empty($id))
        {
            $result = $this->conn->query("SELECT * FROM employee WHERE id = '$id'");
            
        }
        else{
            $result = $this->conn->query("SELECT * FROM employee");
        }
        
        return $result;
    }

    public function updateEmployee($id,$name,$email,$password,$number,$Sno)
    {
        $update = mysqli_query($this->conn,"UPDATE employee SET name = '$name', email = '$email',password = MD5('$password'),phonenumber = '$number' WHERE $Sno = '$id'");
        return $update;
    }
    public function deleteEmployee($id,$Sno)
    {
        
        $delete = mysqli_query($this->conn,"DELETE from employee where $Sno = '$id'");
        return $delete;
    }

    public function deleteAssoc($id,$Sno)
    {
        $deleteAssoc = mysqli_query($this->conn,"DELETE from assoc WHERE $Sno = '$id'");
        return $deleteAssoc;
    }

    public function insertId($name)
    {
        $ins = "INSERT INTO assoc(employeeid) SELECT id from employee WHERE name = '$name'";
        $insertId = mysqli_query($this->conn,$ins);
        return $insertId;
    }
    public function display_logindata($name)
    {
        $display_login = "SELECT * FROM employee WHERE Name = '$name'" ;
        $result = mysqli_query($this->conn,$display_login);
        return $result;
    }

    public function pagination()
    {
        $page_per_record = 4;

        if(isset($_GET['page']))
        {
            $page = $_GET['page'];
            $_SESSION['pages'] = $page;
        }
        else
        {
            $page = 1;
            $_SESSION['pages'] = $page;
        }

        $start_from = ($page - 1) * $page_per_record;
        $query = "SELECT * FROM employee LIMIT $start_from,$page_per_record";
        $rs_result = mysqli_query($this->conn,$query);
        return $rs_result;
    }

    public function page()
    {
        $pageNo = "SELECT COUNT(*) FROM employee";
        $result = mysqli_query($this->conn,$pageNo);
        return $result;
    }
}


?>