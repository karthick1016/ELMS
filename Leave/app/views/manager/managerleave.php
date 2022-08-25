<?php
$this->view("manager/managernavbar");
$this->view("manager/managerheader");
$display = new Leaveapproval();
$sql = $display->leaveDetails($_SESSION['auth_user']['name']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        img{
            width: 40px;
            margin-left: 20px;
        }
        .message
        {
            border: 1px solid #d6e9c6;
            position: relative;
            left: 300px;
            top: 150px;
            width: 1600px;
            padding: 30px;
            background-color: #dff0d8;
            color: #3c763d;
        }
    </style>
</head>
<body>
<?php
    if(mysqli_num_rows($_SESSION['message'])==0) { ?>
        <div class="message">
                Empty!There is no record
            </div>
   <?php } else {?>
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
                        <td>
                            <?php  if($row['status'] == 2)   { ?>
                                <img src="<?php "echo BASEURL";?>assets/images/approved.jpg" alt="Approved">
                            <?php  } ?>
                            <?php  if($row['status'] == 1) { ?>
                                <img src="<?php "echo BASEURL";?>assets/images/declined.jpg" alt="Declined">
                            <?php } ?>
                            <?php  if($row['status'] == 0) { ?>
                                <img src="<?php "echo BASEURL";?>assets/images/pending.jpg" alt="Pending">
                            <?php } ?>
                        </td>
                    </tr>
                    <?php
                        $count++;
                        }
                    ?>
            </tbody>   
        </table>
    </div>
    <?php } ?>
</body>
</html>