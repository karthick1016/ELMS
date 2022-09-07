<?php
$id = $_GET['updatedata'];
$display = new Employeedata();
$sql = $display->display($id);
$row = mysqli_fetch_array($sql)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update_Employee</title>
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/addpage.css">
</head>
<body>
    <?php $validation = new Updateemployee(); ?>
<div class="container">
        <h2>Update Employee</h2>
        <form id="formvalid" method="POST" onsubmit="return validateform()">
            <div class="elements">
                <label for="name">Name</label>
                <input type="text" value="<?php echo $row['name']; ?>" name="name" id="name" onchange="userName()" autocomplete="off">
            </div>
            <span class="error"><?php $validation->nameValid();?></span>
            <div class="errormessage" id="nameerr"></div>
            <div class="elements">
                <label for="email">Email</label>
                <input type="email" value="<?php echo $row['email']; ?>"  name="email" id="email" onchange="checkEmail()" autocomplete="off">
            </div>
            <span class="error"><?php $validation->emailValid();?></span>
            <div class="errormessage" id="emailerr"></div>
            <div class="elements">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="<?php echo $_POST['password']; ?>" onchange="password()" autocomplete="off">
            </div>
            <span class="error"><?php $validation->passwordValid();?></span>
            <div class="errormessage" id="passworderr"></div>
            <div class="elements">
                <label for="phone">PhoneNumber</label>
                <input type="tel" value="<?php echo $row['phonenumber']; ?>"  name="phone" id="phone" onchange="checkPhone()" autocomplete="off">
            </div>
            <span class="error"><?php $validation->numberValid();?></span>
            <div class="errormessage" id="numbererr"></div>
            <?php     ?>
                <div>
                    <button name="sub_btn" class="butn" id="btn">Submit</button>
                </div>
        </form>
    </div>
    <script src="<?php "echo BASEURL";?>assets/javascript/validatio.js"></script>
    <?php
        // $validation->updateEmployee();
        $update = new Employeeallcrud();
        $update->update();
    ?>

</body>
</html>