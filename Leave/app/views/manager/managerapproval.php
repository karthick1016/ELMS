<?php
$this->view("manager/managernavbar");
$this->view("manager/managerheader");
// var_dump(isset($_GET['id']));
if(isset($_GET['id']) && isset($_GET['status']))
{
    $id = $_GET['id'];
    $status = $_GET['status'];
    $set = new Leaveapproval();
    $set->approveUpdate($id,$status);
    // $set->delete($id);
}
$display = new Leaveapproval();
$display->display($_SESSION['managername']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manager Approval</title>
    <style>
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
        if(mysqli_num_rows($_SESSION['results']) == 0)  {
        ?>
            <div class="message">
                Empty!There is no record
            </div>
       <?php 
       }
        else
        {
       ?>
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
                    <th>Action</th>
                    <th>Manager Name</th>
                </tr>
            </thead>
            <tbody>
            <?php
                        
                        $sql = $display->display($_SESSION['managername']);
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
                        <select onchange="status_update(this.options[this.selectedIndex].value,'<?php echo $row['id']; ?>')">
                                <option>--SELECT OPTION--</option>
                                <option value="2">Approved</option>
                                <option value="1">Declined</option>
                        </select>
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
    <?php }?>
<script>
    function status_update(value,id)
    {
        let url = "managerapproval";
        window.location.href = url+"?id="+id+"&status="+value;
    }
</script>
</body>
</html>
