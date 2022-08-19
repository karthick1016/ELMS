<?php
$validation = new Login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/login.css">
    <style>.error { color: red;}</style>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <div class="login_head">
                <h4>Login System</h4>
                <p>Leave Management System</p>
            </div>
            <div class="login_body"> 
                <div class="elements">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" onchange="emailValid()">
                </div>
                    <span><?php $validation->emailValid();?></span>
                <div class="errormessage" id="emailerr"></div>
                <div class="elements">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" onchange="passValid()">
                </div>
                <span><?php $validation->passwordValid();?></span>
                <div class="errormessage" id="passworderr"></div>
                <div class="btn">
                    <button name="login_btn">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script src="<?php "echo BASEURL";?>assets/javascript/validate.js"></script>
</body>
</html>

<?php
$login = new Employeelogin();
$login->employeelogin();
$login->managerLogin();
?>