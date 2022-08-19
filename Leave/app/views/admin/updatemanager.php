<?php
$id = $_GET['updateManager'];
$display = new ManagerData();
$sql = $display->displayManager($id);
$count = 0;
while($row = mysqli_fetch_array($sql))
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update_Manager</title>
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/addpage.css">
    <style>
        .check{
            background-color: grey;
        }
    </style>
</head>
<body>
<div class="container">
        <h2>Update Manager</h2>
        <form action="" method="POST">
            <div class="elements">
                <label for="name">Name</label>
                <input type="text" value="<?php echo $row['managername']; ?>" name="name" id="name" onchange="nameValid()">
            </div>
            <div class="errormessage" id="nameerr"></div>
            <div class="elements">
                <label for="email">Email</label>
                <input type="email" value="<?php echo $row['email']; ?>" name="email" id="email" onchange="emailValid()">
            </div>
            <div class="errormessage" id="emailerr"></div>
            <div class="elements">
                <label for="password">Password</label>
                <input type="password" value="<?php echo $row['password']; ?>" name="password" id="password" onchange="passValid()">
            </div>
            <div class="errormessage" id="passworderr"></div>
            <div class="elements">
                <label for="phone">Phone_Number</label>
                <input type="tel" value="<?php echo $row['phonenumber']; ?>" name="phone" id="phone" onchange="numberValid()">
            </div>
            <div class="errormessage" id="numbererr"></div>
            <?php $count++;
            }   
            ?>
            <div class="elements">
                <label for="">Assign Employee</label>
                <select name="assign_emp" id="assign_emp" multiple>
                    <option value="">Select Employee</option>
                    <?php
                        $displayObj = new ManagerData();
                        $dropDownSelect = $displayObj->dropDownSelected($id);
                        $count = 0;
                        while($row = mysqli_fetch_array($dropDownSelect)){
                            
                    ?>
                    <option value="<?php echo $row['id'];?>" class="check"> <?php echo $row['name'];?></option>
                    <?php
                        $_SESSION['employeeid'] = $row['id'];
                        $count++;
                        }
                        
                    ?>
                    <?php 
                        $sql = $displayObj->dropDown();
                        $count = 0;
                        while($row = mysqli_fetch_array($sql)){
                    ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                    <?php
                        $count++;
                        }
                    ?>
                </select>
            </div>
            <div>
                <button class="butn">Submit</button>
            </div>
        </form>
    </div>
    <script src="<?php "echo BASEURL";?>assets/javascript/validate.js"></script>
    <?php
        $update = new UpdateManager();
        $update->update();
    ?>
</body>
</html>