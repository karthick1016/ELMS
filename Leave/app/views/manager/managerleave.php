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
                    <th>Fromdate</th>
                    <th>LastDate</th>
                    <th>LeaveTypes</th>
                    <th>Days</th>
                    <th>Description</th>
                    <th>Name</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        $display = new Leaveapproval();
                        $sql = $display->leaveDetails($_SESSION['auth_user']['name']);
                        $count = 0;
                        while($row = mysqli_fetch_array($sql)){
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['fromdate']; ?></td>
                        <td><?php echo $row['todate']; ?></td>
                        <td><?php echo $row['leavetypes']; ?></td>
                        <td><?php echo $row['days']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['status'];?></td>
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