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
        <?php 
            //  $displayObj = new ManagerData();
             $data = new ManagerData();
            $sql = $data->pagination();

        ?>
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
                    while($row = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $row['managerid'];  ?></td>
                    <td><?php echo $row['managername'];  ?></td>
                    <td><?php echo $row['email'];  ?></td>
                    <td><?php echo $row['phonenumber'];  ?></td>
                    <td>
                        <button class="operation_btn" name="update_btn"><a href="updatemanager?updateManager=<?php echo $row['managerid']; ?>">Update</a></button>
                        <button class="operation_btn" name="delete_btn"><a href="deletemanager?deleteManager=<?php echo $row['managerid']; ?>" onclick="return confirm('Are You sure you want to delete this item?')">Delete</a></button>

                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div class="container">
            <?php 
                $pageNo = new Manager();
                $pageNo->pageNo();
            ?>
    </div>
    <div class="inline">
        <input type="number" id="page" min="1" max="<?php echo $_SESSION['totalmanagerpage'] ; ?>" required>
        <button onclick="goPage()">Go</button>
    </div>
    <script>
        function goPage()
        {
            var page = document.getElementById("page").value;
            page = ((page> <?php echo $_SESSION['totalmanagerpage']; ?>)? <?php echo $_SESSION['totalmanagerpage']; ?>:((page<1)?1:page));
            window.location.href = 'manager?page='+page;
        }
    </script>

</body>
</html>