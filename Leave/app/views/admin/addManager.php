<?php
$this->view("adminnavbar");
$this->model("counters");
$this->view("adminheader");
$validation = new Addmanager();
?>

<!DOCTYPE html
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add-Employee</title>
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/addpage.css">
    <style>.error { color: red;}</style>
</head>
<body>
    <div class="container">
        <h2>Add Manager</h2>
        <form method="POST">
            <div class="elements">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" onchange="nameValid()">
            </div>
            <span><?php $validation->nameValid();?></span>
            <div class="errormessage" id="nameerr"></div>
            <div class="elements">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" onchange="emailValid()">
            </div>
            <span><?php $validation->emailvalid();?></span>
            <div class="errormessage" id="emailerr"></div>
            <div class="elements">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" onchange="passValid()">
            </div>
            <span><?php $validation->passwordvalid();?></span>
            <div class="errormessage" id="passworderr"></div>
            <div class="elements">
                <label for="phone">Phone_Number</label>
                <input type="tel" name="phone" id="phone" onchange="numberValid()">
            </div>
            <span><?php $validation->numbervalid();?></span>
            <div class="errormessage" id="numbererr"></div>
            <div>
                <button class="butn" name="sub_btn">Submit</button>
            </div>
        </form>
        
    </div>
    <script src="<?php "echo BASEURL";?>assets/javascript/validate.js"></script>
    <?php
        $insert = new Addmanager();
        $insert->insertManager();

    ?>
</body>
</html>