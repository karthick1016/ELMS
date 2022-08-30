<?php

class Employeelogin extends Database
{
    public function employeelogin()
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
            else
            {
                header("location:http://localhost/Leave/public/home");
            }
        }
        
    }

    public function managerLogin()
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
            else{
                header("location:http://localhost/Leave/public/home");
            }
        }
    }
}








?>