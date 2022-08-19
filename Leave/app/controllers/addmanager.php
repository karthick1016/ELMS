<?php

class Addmanager extends Controller
{
    function index()
    {
        $this->model("managerData");
        $this->view("admin/addManager");
    }

    public function insertManager()
    {
        $insert = new ManagerData();

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $number = $_POST['phone'];
        $Name = $_POST['employee_name'];
        
        $sql = $insert->insertManager($name,$email,$password,$number);
        // $login_table = $insert->login_table($name,$password);

        if($sql)
        {
                // if($login_table)
                // {
                    $_SESSION['addmanager'] = "Added Successfully";
                    header("location:manager");
                // }
        }
        echo "No";
    }

    public function nameValid()
    {
        if(isset($_POST['sub_btn']))
        {
            $name = $_POST['name'];
            if($name == "")
            {
                echo $error_name = "<span class = 'error'>Please enter your Name</span>"; 
            }
        }
    }

    function emailValid()
    {
        if(isset($_POST['sub_btn']))
        {
            $email = $_POST['email'];
            if($email == "")
            {
                echo $error_email=  "<span class = 'error'>Please enter your email</span>"; 
            }
            elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
                echo $error_email= "<span class='error'>Please enter valide email, like your@abc.com</span>";
                }
        }
    }

    function passwordValid()
    {
        if(isset($_POST['sub_btn']))
        {
            $password = $_POST['password'];
            if($password == "")
            {
               echo $error_password =  "<span class='error'>Please enter password</span>";
            }
        }
    }

    function numberValid()
    {
        if(isset($_POST['sub_btn']))
        {
            $phonenumber = $_POST['phone'];
            if($phonenumber == "")
            {
                echo $error_number =  "<span class='error'>Please enter PhoneNumber </span>";
            }
        }
    }
}




?>