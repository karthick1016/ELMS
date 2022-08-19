<?php

class Login extends Controller
{
    function index()
    {
        $this->model("employeelogin");
        $this->view("login");
    }

    function emailValid()
    {
        if(isset($_POST['login_btn']))
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
        if(isset($_POST['login_btn']))
        {
            $password = $_POST['password'];
            
            if($password == "")
            {
               echo $error_password=  "<span class='error'>Please enter password</span>";
            }
        }
    }
    
    
}





?>