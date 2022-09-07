<?php
$id = $_GET['updateManager'];
// $display = new ManagerData();
$data = new ManagerData();
$sql = $data->display($id);
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
</head>
<body>
<div class="container">
        <h2>Update Manager</h2>
        <form action="" method="POST">
            <div class="elements">
                <label for="name">Name</label>
                <input type="text" value="<?php echo $row['managername']; ?>" name="name" id="name" onchange="userName()" autocomplete="off">
            </div>
            <div class="errormessage" id="nameerr"></div>
            <div class="elements">
                <label for="email">Email</label>
                <input type="email" value="<?php echo $row['email']; ?>" name="email" id="email" onchange="checkEmail()" autocomplete="off">
            </div>
            <div class="errormessage" id="emailerr"></div>
            <div class="elements">
                <label for="password">Password</label>
                <input type="password" value="<?php echo $row['password']; ?>" name="password" id="password" onchange="password()" autocomplete="off">
            </div>
            <div class="errormessage" id="passworderr"></div>
            <div class="elements">
                <label for="phone">Phone_Number</label>
                <input type="tel" value="<?php echo $row['phonenumber']; ?>" name="phone" id="phone" onchange="checkPhone()" autocomplete="off">
            </div>
            <div class="errormessage" id="numbererr"></div>
            <?php $count++;
            }   
            ?>
            <div class="elements">
                <label for="">Assign Employee</label>
                <select name="assign_emp[]" id="assign_emp" multiple>
                    <option value="">Select Employee</option>
                    <?php
                        
                        $displayObj = new ManagerData();
                       
                        $dropDownSelect = $data->dropDownselected($id);
                        $count = 0;
                        while($row = mysqli_fetch_array($dropDownSelect)){
                            
                    ?>
                    <option value="<?php echo $row['id'];?>" selected> <?php echo $row['name'];?></option>
                    <?php
                        $_SESSION['employeeid'] = $row['id'];
                        $count++;
                        }
                    ?>
                    <?php 
                        $sql = $data->dropdown();
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
                <button class="butn" id="btn">Submit</button>
            </div>
        </form>
    </div>
    <script src="<?php "echo BASEURL";?>assets/javascript/validate.js"></script>
    <?php
        $update = new Managerallcrud();
        $update->update();
    ?>
</body>
</html>