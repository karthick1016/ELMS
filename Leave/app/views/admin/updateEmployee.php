<?php
$id = $_GET['updatedata'];
$display = new Employeedata();
$sql = $display->displayEmployee($id);
$count = 0;

while($row = mysqli_fetch_array($sql)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update_Employee</title>
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/addpage.css">
</head>
<body>
<div class="container">
        <h2>Update Employee</h2>
        <form action="" method="POST">
            <div class="elements">
                <label for="name">Name</label>
                <input type="text" value="<?php echo $row['name']; ?>" name="name" id="name" onchange="nameValid()">
            </div>
            <div class="errormessage" id="nameerr"></div>
            <div class="elements">
                <label for="email">Email</label>
                <input type="email" value="<?php echo $row['email']; ?>"  name="email" id="email" onchange="emailValid()">
            </div>
            <div class="errormessage" id="emailerr"></div>
            <div class="elements">
                <label for="password">Password</label>
                <input type="password" value="<?php echo $row['password'];?>" name="password" id="password" onchange="passValid()">
            </div>
            <div class="errormessage" id="passworderr"></div>
            <div class="elements">
                <label for="phone">Phone_Number</label>
                <input type="tel" value="<?php echo $row['phonenumber']; ?>" name="phone" id="phone" onchange="numberValid()">
            </div>
            <div class="errormessage" id="numbererr"></div>
            <?php $count++;
}   ?>
            <div>
                <button class="btn">Submit</button>
            </div>
        </form>
    </div>
    <script src="<?php "echo BASEURL";?>assets/javascript/validate.js"></script>
    <?php
        $update = new Updateemployee();
        $update->updateEmployee();
    ?>

</body>
</html>