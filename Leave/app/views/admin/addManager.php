<?php
$validation = new Addmanager();
?>

<!DOCTYPE html
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add-Employee</title>
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/addpage.css">
    <style>.error { 
        color: red;
        margin-left: 200px;
        }</style>

</head>
<body>
    <div class="container">
        <h2>Add Manager</h2>
        <form method="POST">
            <div class="elements">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?php echo $_POST['name']; ?>" onchange="userName()" autocomplete="off">
            </div>
            <span class="error"><?php $validation->nameValid();?></span>
            <div class="errormessage" id="nameerr"></div>
            <div class="elements">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $_POST['email']; ?>" onchange="checkEmail()" autocomplete="off">
            </div>
            <span class="error"><?php $validation->emailvalid();?></span>
            <div class="errormessage" id="emailerr"></div>
            <div class="elements">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="<?php echo $_POST['password']; ?>" onchange="password()" autocomplete="off">
            </div>
            <span class="error"><?php $validation->passwordvalid();?></span>
            <div class="errormessage" id="passworderr"></div>
            <div class="elements">
                <label for="phone">Phone_Number</label>
                <input type="tel" name="phone" id="phone" value="<?php echo $_POST['phone']; ?>" onchange="checkPhone()" autocomplete="off">
            </div>
            <span class="error"><?php $validation->numbervalid();?></span>
            <div class="errormessage" id="numbererr"></div>
            <div>
                <button class="butn" name="sub_btn" id= 'btn'>Submit</button>
            </div>
        </form>
    </div>
    <!-- <script src="<?php "echo BASEURL";?>assets/javascript/validation.js"></script> -->
    <?php
        $insert = new Managerallcrud();
        $insert->insert();

    ?>
</body>
</html>