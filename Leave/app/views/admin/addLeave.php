<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add-Employee</title>
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/addpage.css">
</head>
<body>
    <div class="container">
        <h2>Add Leave</h2>
        <form method="POST">
            <div class="elements">
                <label for="types">Types</label>
                <input type="text" name="types" id="types">
            </div>
            <div>
                <button class="btn" name="sub_btn">Submit</button>
            </div>
        </form>
    </div>
    <?php
        $insert = new Addleave();
        $insert->insert();
?>
</body>
</html>