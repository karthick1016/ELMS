<?php

class Updateemployee extends Controller
{
    function index()
    {
        $this->model("employeeData");
        $this->view("admin/updateEmployee");
    }

    public function updateEmployee()
    {
        $update = new Employeedata();

        $id = $_GET['updatedata'];
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $number = $_POST['phone'];
        $sql=$update->updateEmployee($id,$name,$email,$password,$number,"id");
        $updateLogin = $update->updateLogin($name,$password,"Employee");
        if($sql)
        {
            if($updateLogin){
                $_SESSION['updatemessage'] = "Updated Successfully";
                header("location:employee");
            }
           
        }
        echo "Not";
    }
}

?>