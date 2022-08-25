<?php
$this->view("employee/employeenavbar");
$this->view("employee/employeeheader");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="sheet">
        <table class="table">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone_Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $displayObj = new Employeedata();
                    $sql =  $displayObj->display_logindata($_SESSION['auth_user']['name']);
                    $count =1;
                    while($row = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $row['id'];  ?></td>
                    <td><?php echo $row['name'];  ?></td>
                    <td><?php echo $row['email'];  ?></td>
                    <td><?php echo $row['password'];  ?></td>
                    <td><?php echo $row['phonenumber'];  ?></td>
                </tr>
                <?php
                    $count++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>