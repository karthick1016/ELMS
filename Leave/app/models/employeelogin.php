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
            // var_dump(mysqli_num_rows($result));
            if(mysqli_num_rows($result)>0)
            {
                foreach($result as $data)
                {
                    $employeeid = $data['id'];
                    $username = $data['name'];
                    $email = $data['email'];
                    $usertype = $data['usertype'];
                }
                $_SESSION['auth'] = true;
                $_SESSION['auth_id'] = $employeeid;
                $_SESSION['auth_role'] = $usertype;
                $_SESSION['auth_user'] = [
                    'id'=>$employeeid,
                    'name' =>$username,
                    'usertype'=>$usertype
                ];
                if($_SESSION['auth_role'] == '1')
                {
                     header("location:http://localhost/Leave/public/employeedashboard");
                }
                else{
                    header("location:http://localhost/Leave/public/home");
                }
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
            // echo "hi";
            // var_dump(mysqli_num_rows($result));
            if(mysqli_num_rows($result)>0)
            {
                foreach($result as $data)
                {
                    $employeeid = $data['managerid'];
                    $username = $data['managername'];
                    $email = $data['email'];
                    $usertype = $data['usertype'];
                }
                $_SESSION['auth'] = true;
                $_SESSION['auth_id'] = $employeeid;
                $_SESSION['auth_role'] = $usertype;
                $_SESSION['auth_user'] = [
                    'id'=>$employeeid,
                    'name' =>$username,
                    'usertype'=>$usertype
                ];
                if($_SESSION['auth_role'] == '0')
                {
                    header("location:http://localhost/Leave/public/managerdashboard");
                }
                else{
                    header("location:http://localhost/Leave/public/home");
                }
            }
        }
    }
}








?>