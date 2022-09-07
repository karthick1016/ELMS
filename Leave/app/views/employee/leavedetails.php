<?php
$this->view("employee/employeenavbar");
$this->view("employee/employeeheader");
$displayObj = new Leaveapproval();
$sql = $displayObj->employeeleaveDetails($_SESSION['name']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="<?php "echo BASEURL";?>assets/javascript/sweetalert.min.js"></script>
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
        .tooltip
        {
            position: relative;
            display: inline-block;
        }
        .tooltip .tooltiptext
        {
            visibility: hidden;
            width: 10px;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
        }
        .tooltip:hover .tooltiptext{
            visibility: visible;
        }
    </style>
</head>
<body>
<?php
        if(isset($_SESSION['request']))
        {
            ?>
            <script>
            swal({
            title: "<?php echo $_SESSION['request']; ?>",
            icon: "success",
            button: "Aww yiss!",
            });
            </script>
            
    <?php
        unset($_SESSION['request']);    
        }
    ?>
    <?php
    if(mysqli_num_rows($_SESSION['details'])==0) { ?>
        <div class="message">
                Empty!There is no record
            </div>
   <?php } else {?>
    <div class="sheet">
        <table class="table">
            <thead>
                <tr>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Number of Days</th>
                    <th>Leave Typee</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Approved By</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = $displayObj->employeeleaveDetails($_SESSION['name']);
                    $count = 0;
                    while($row = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $row['fromdate'];  ?></td>
                    <td><?php echo $row['todate'];  ?></td>
                    <td><?php echo $row['days'];  ?></td>
                    <td><?php echo $row['leavetypes'];  ?></td>
                    <td><?php echo $row['description'];  ?></td>
                    <td>
                    <?php  if($row['status'] == 2)   { ?>
                                <div class="tooltip">Approved
                                <span class="tooltiptext"><img src="<?php "echo BASEURL";?>assets/images/approved.jpg" alt="Approved"></span>
                                </div> 
                            <?php  } ?>
                            <?php  if($row['status'] == 1) { ?>
                                <div class="tooltip">Declined
                                <span class="tooltiptext"><img src="<?php "echo BASEURL";?>assets/images/declined.jpg" alt="Declined"></span>
                                </div>
                            <?php } ?>
                            <?php  if($row['status'] == 0) { ?>
                                <div class="tooltip">Pending
                                <span class="tooltiptext"><img src="<?php "echo BASEURL";?>assets/images/pending.jpg" alt="Pending"></span>
                                </div>
                            <?php } ?>
                    </td>
                    <td><?php echo $row['managername']; ?></td>
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