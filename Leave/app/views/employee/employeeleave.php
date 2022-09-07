<?php
$this->view("employee/employeenavbar");
$this->view("employee/employeeheader");

$leaveApply = new Employeeleave();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request Leave</title>
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/leaveApply.css">
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/jquery-ui.css">
    <script type="text/javascript" src="<?php "echo BASEURL";?>assets/javascript/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="<?php "echo BASEURL";?>assets/javascript/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#from_date").datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1,
                beforeShowDay: $.datepicker.noWeekends
            });
        });
        $(function () {
            $("#to_date").datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1,
                beforeShowDay: $.datepicker.noWeekends
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <div class="title-leave">
            <h4>Request Leave</h4>
        </div>
        <div>
            <form method="POST">
                <div class="elements">
                <label for="from_date">From Date (dd-mm-yyyy)</label>
                <input type="text" name="fromdate" id="from_date" value="<?php echo $_POST['fromdate']; ?>">
                </div>
                <div><?php $leaveApply->checkdate();?></div>
                <div class="elements">
                <label for="to_date">To Date (dd-mm-yyyy)</label>
                <input type="text" name="to_date" id="to_date" value="<?php echo $_POST['to_date'] ?>">
                </div>
                <div><?php $leaveApply->toDate();?></div>
                <div class="elements">
                <label for="select_leaves">Leave Types</label>
                <select name="leave_types" id="leave_types"  required>
                    <option value=""><--SELECT LEAVE TYPE--></option>
                    <?php
                        $dropdown = new Leaveapproval();
                        $sql = $dropdown->dropDown();
                        $count = 0;
                        while($row = mysqli_fetch_array($sql)){
                    ?>
                    <option value="<?php echo $row['types'];  ?>"><?php echo $row['types']; ?></option>
                    <?php
                        $count++;
                        }
                    ?>
                </select>
                <script>
                    document.getElementById('leave_types').value = "<?php echo $_POST['leave_types']; ?>"
                </script>
                </div>
                <div class="elements">
                <label for="number">Number Of Days</label>
                <input type="number" name="number" id="number" value="<?php echo $_POST['number']; ?>">
                </div>
                <div><?php $leaveApply->days();?></div>
                <div class="elements">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="20" rows="4" required>
                    <?php 
                        if(isset($_POST['description']))
                        {
                            echo htmlentities(trim($_POST['description']));
                        }
                    ?>
                </textarea>
                </div>
                <div><?php $leaveApply->description();?></div>
                <div>
                    <button class="btn" name = "sub_btn" onclick="date()"><h3>Apply</h3></button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function date()
        {
            var dates1 = document.getElementById('from_date').value;
            var dates2 = document.getElementById('to_date').value;
            var date1 = new Date(dates1);
            var date2 = new Date(dates2);
            var Difference_In_Time = date2.getTime() - date1.getTime();
            var Difference_In_Days = (Difference_In_Time / (1000 * 3600 * 24))+1;

            var days = document.getElementById('number').value;
            if(days>Difference_In_Days)
            {
                alert("Error");
            }
        }
    </script>
    <?php
        $leaveApply->leaveApply();
    ?>

</body>
</html>