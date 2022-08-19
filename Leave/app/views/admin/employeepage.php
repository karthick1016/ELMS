<?php
$this->view("adminnavbar");
$this->model("counters");
$this->view("adminheader");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee_Page</title>
    <script src="<?php "echo BASEURL";?>assets/javascript/sweetalert.min.js""></script>
    
</head>
<body>
    <?php
        if(isset($_SESSION['addmessage']))
        {
            ?>
            <script>
            swal({
            title: "<?php echo $_SESSION['addmessage']; ?>",
            icon: "success",
            button: "Aww yiss!",
            });
            </script>
            
    <?php
        unset($_SESSION['addmessage']);    
        }
    ?>
    <?php
        if(isset($_SESSION['updatemessage']))
        {
            ?>
            <script>
            swal({
            title: "<?php echo $_SESSION['updatemessage']; ?>",
            icon: "success",
            button: "Aww yiss!",
            });
            </script>
    <?php
        unset($_SESSION['updatemessage']);    
        }
    ?>
    ?>
    <div class="sheet">
        <h2>Employees List</h2>
        <button class="add_emp"><a href="addemployee">Add Employee</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone_Number</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $displayObj = new Employeedata();
                    $sql = $displayObj->displayEmployee();  
                    $count = 1;
                    while($row = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['phonenumber'];?></td>
                    <td>
                        <button class="operation_btn" name="update_btn"><a href="updateemployee?updatedata=<?php echo $row['id']; ?>">Update</a></button>
                        <button class="operation_btn" name="delete_btn"><a href="deleteemployee?deletedata=<?php echo $row['id']; ?>">Delete</a></button>
                    </td>
                </tr>
                <?php
                    $count++;
                    }
                ?>
            </tbody>
        </table>
    </div>
    <?php

    
    ?>
</body>
</html>