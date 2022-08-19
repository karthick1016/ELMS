<?php
session_start();
class Logincode extends Database
{
    public function login()
    {
        if(isset($_POST['login_btn']))
        {
            $username = mysqli_real_escape_string($this->conn,$_POST['username']);
            $password = mysqli_real_escape_string($this->conn,$_POST['password']);
            echo "hlo";
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
}
?>
