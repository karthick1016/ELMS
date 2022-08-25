<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/adminpage.css">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="sidebar">
	<div class = "title">
		<span class="logo_name">Employee Leave Management</span>
	</div>
	<ul class="nav-links">
		<li>
			<a href="employeedashboard">
			    <i class='bx bx-grid-alt' ></i>
			    <span class="link">Employee DashBoard<span>
			</a>
		</li>
		<li>
			<a href="employeeleave">
                <i class='bx bx-user'></i>
			    <span class="link">Leave Apply</span>
			</a>
		</li>
		<li>
			<a href="leavedetails">
		        <i class='bx bx-user'></i>
			    <span class=link>Leave Details</span>
			</a>
		</li>
		<li class="logout">
			<a href="home">
			    <i class='bx bx-log-out'></i>
			    <span class="link">Logout</span>
			</a>
		</li>
	</ul>
</div> 
</body>
</html>