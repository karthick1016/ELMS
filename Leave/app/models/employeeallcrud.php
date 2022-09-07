<?php

include "employeecrud.php";

class Employeeallcrud extends Employeedata implements Employeecrud
{
    public function insert()
    {
        $disp = new Employeedata();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $number = $_POST['phone'];
        $sql = $disp->inserting($name,$email,$password,$number);
        $assocId = $disp->insertingAssoc($name);
        
        if($sql)
        {
            if($assocId)
            {
                $_SESSION['addmessage'] = "Added Successfully";
                header("location:employee");
            }
        }
    }

    public function update()
    {
        $disp = new Employeedata();
        $id = $_GET['updatedata'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $number = $_POST['phone'];
        $sql = $disp->updating($id,$name,$email,$password,$number,"id");
        if($sql)
        {
            $_SESSION['updatemessage'] = "Updated Successfully";
            header("location:employee");           
        }
        echo "Not";
    }

    public function delete()
    {
        $disp = new Employeedata();
        $id = $_GET['deletedata'];
        $deleteAssoc=$disp->deletingAssoc($id,"assoc.employeeid");
        $sql = $disp->deleting($id,"id");
        if($deleteAssoc)
        {
            if($sql)
            {
                header("location:employee");
            }
            echo "Not";
         }
              
    }
}

?>