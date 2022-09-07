<?php

spl_autoload_register(function($className){
    include $className.".php";
});

session_start();
class AllLogin extends Database implements adminlogin{

    public function adminLogin()
    {
        if(isset($_POST['sub_btn']))
        {
            $username = mysqli_real_escape_string($this->conn,$_POST['username']);
            $password = mysqli_real_escape_string($this->conn,$_POST['password']);
           
            $sql = "SELECT * FROM admin WHERE name = '$username' AND password = '$password'";
            
            $result = mysqli_query($this->conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
                $_SESSION['username'] = $username;
                header("location:http://localhost/Leave/public/adminpage");
            }
            else{
                header("location:http://localhost/Leave/public/admin");
                exit(0);
                }
        }
    }

    public function employeeLogin()
    {
        if(isset($_POST['login_btn']))
        {
            $email = mysqli_real_escape_string($this->conn,$_POST['email']);
            $password = mysqli_real_escape_string($this->conn,$_POST['password']);
            $sql = "SELECT * from employee WHERE email = '$email' AND password = md5('$password')";
            $result = mysqli_query($this->conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
                $row = mysqli_fetch_array($result);
                $_SESSION['name']=$row['name'];
                header("location:http://localhost/Leave/public/employeedashboard");
            }
        }
    }

    public function managerlogin()
    {
        if(isset($_POST['login_btn']))
        {
            $email = mysqli_real_escape_string($this->conn,$_POST['email']);
            $password = mysqli_real_escape_string($this->conn,$_POST['password']);

            $sql = "SELECT * from manager WHERE email = '$email' AND password = md5('$password')";

            $result = mysqli_query($this->conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
                $row = mysqli_fetch_array($result);
                $_SESSION['managername'] = $row['managername'];
                header("location:http://localhost/Leave/public/managerdashboard");
            }
        }
    }

}


?>