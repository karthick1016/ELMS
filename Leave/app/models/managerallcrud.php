<?php

include "managercrud.php";

class Managerallcrud extends ManagerData implements Managercrud
{
    public function insert()
    {
        $data = new ManagerData();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $number = $_POST['phone'];
        $sql = $data->inserting($name,$email,$password,$number);
        echo "hi";
        if($sql)
        {
            echo "hlo";
            $_SESSION['addmanager'] = "Added Successfully";
            header("location:manager");
        }
        echo "No";
    }

    public function update()
    {
        $data = new ManagerData();
        $managerId = $_GET['updateManager'];
        $managerName = $_POST['name'];
        $managerEmail = $_POST['email'];
        $managerPassword = $_POST['password'];
        $managerNumber = $_POST['phone'];
        $assignEmp = $_POST['assign_emp'];
        $managerSql = $data->updating($managerId,$managerName,$managerEmail,$managerPassword,$managerNumber,"managerid");
        $removeEmployee = $data->removingEmployee($_SESSION['employeeid']);
        if(!empty($assignEmp))
        {
            foreach($assignEmp as $value)
            {
                if(!empty($value))
                {
                    $assignEmployee = $data->assigningEmployee("employee",$managerId,$value);
                    $assocemployee = $data->assocemployee("assoc",$managerId,$value);
                }
            }
        }
        if($managerSql)
        {
            if($assignEmployee)
            {
                if($removeEmployee)
                {
                if($assocemployee)
                {
                        $_SESSION['updatemanager'] = "Update Successfully";
                        header("location:manager");                        
                }
            }
            }
            
        }echo "Not";   
    }

    public function delete()
    {
        $data = new ManagerData();
        $id = $_GET['deleteManager'];
        $deleteAssoc = $data->deletingAssoc($id,"managerid");
        $sql = $data->deleting($id,"managerid");
        if($deleteAssoc)
        {
            if($sql)
            {
                header("location:manager");
            }
            echo "Not";
        }
    }
}

?>