<?php
$this->view("manager/managernavbar");
$this->view("manager/managerheader");
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
                    <th>SNo</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone_Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $data = new ManagerData();
                    $sql = $data->display_logindata($_SESSION['managername']);
                    $count = 1;
                    while($row = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $row['managerid']; ?></td>
                    <td><?php echo $row['managername']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['phonenumber']; ?></td>
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