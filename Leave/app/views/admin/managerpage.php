<?php
$this->view("adminnavbar");
$this->model("counters");
$this->view("adminheader");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manager</title>
    <script src="<?php "echo BASEURL";?>assets/javascript/sweetalert.min.js""></script>
</head>
<body>
<?php
        if(isset($_SESSION['addmanager']))
        {
            ?>
            <script>
            swal({
            title: "<?php echo $_SESSION['addmanager']; ?>",
            icon: "success",
            button: "Aww yiss!",
            });
            </script>
            
    <?php
        unset($_SESSION['addmanager']);    
        }
    ?>

<?php
        if(isset($_SESSION['updatemanager']))
        {
            ?>
            <script>
            swal({
            title: "<?php echo $_SESSION['updatemanager']; ?>",
            icon: "success",
            button: "Aww yiss!",
            });
            </script>
            
    <?php
        unset($_SESSION['updatemanager']);    
        }
    ?>
    <div class="sheet">
        <h2>Manager List</h2>
        <button class="add_emp"><a href="addmanager">Add Manager</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone_Number</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $displayObj = new ManagerData();
                    $sql = $displayObj->displayManager();
                    $count = 1;
                    while($row = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $row['managerid'];  ?></td>
                    <td><?php echo $row['managername'];  ?></td>
                    <td><?php echo $row['email'];  ?></td>
                    <td><?php echo $row['phonenumber'];  ?></td>
                    <td>
                        <button class="operation_btn" name="update_btn"><a href="updatemanager?updateManager=<?php echo $row['managerid']; ?>">Update</a></button>
                        <button class="operation_btn" name="delete_btn"><a href="deletemanager?deleteManager=<?php echo $row['managerid']; ?>">Delete</a></button>

                    </td>
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