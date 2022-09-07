<?php
 $this->view("adminnavbar");
 $this->model("counters");
 $this->view("adminheader");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adminpage</title>
</head>
<body>
    <div class="sheet">
        <h2>Employees Under Manager</h2>
        <table class="table"> 
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Employee Name</th>
                    <th>Manager Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $displayObj = new Admindata();
                    $sql=$displayObj->underManager("employee","manager","id","name","managername","managerid");
                    $count =0;
                    while($row = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['managername']; ?></td>
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