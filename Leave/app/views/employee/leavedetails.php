<?php
$this->view("employee/employeenavbar");
$this->view("employee/employeeheader");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="<?php "echo BASEURL";?>assets/javascript/sweetalert.min.js"></script>
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
                
                    $displayObj = new Leaveapproval();
                    $sql = $displayObj->employeeleaveDetails($_SESSION['auth_user']['name']);
                    $count = 0;
                    while($row = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $row['fromdate'];  ?></td>
                    <td><?php echo $row['todate'];  ?></td>
                    <td><?php echo $row['days'];  ?></td>
                    <td><?php echo $row['leavetypes'];  ?></td>
                    <td><?php echo $row['description'];  ?></td>
                    <td><?php echo $row['status']; ?></td>
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