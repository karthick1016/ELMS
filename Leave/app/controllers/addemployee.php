<?php

class Addemployee extends Controller
{

    function index()
    {   
        $this->model("employeeData");
        $this->view("admin/addemployee");
    }

    public function insert()
    {
        $insert = new Employeedata();
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $number = $_POST['phone'];
        $usertype = $_POST['usertype'];

        
        $sql = $insert->insertEmployee($name,$email,$password,$number,$usertype);
        // $logintable = $insert->login_table($name,$password,$usertype);
        
          
        $assocId= $insert->insertId($name);
       if($sql)
       {
            if($assocId)
            {
                $_SESSION['addmessage'] = "Added Successfully";
                header("location:employee");
            }
       }
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