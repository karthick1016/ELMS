<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
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
			<a href="adminpage">
			    <i class='bx bx-grid-alt' ></i>
			    <span class="link">DashBoard<span>
			</a>
		</li>
		<li>
			<a href="employee">
                <i class='bx bx-user'></i>
			    <span class="link">Employee Details</span>
			</a>
		</li>
		<li>
			<a href="manager">
		        <i class='bx bx-user'></i>
			    <span class=link>Manager Details</span>
			</a>
		</li>
		<li>
			<a href="leave">
			    <i class='bx bx-list-ul' ></i>
			    <span class="link">Leave Types</span>
			</a>
		</li>
		<li class="logout">
			<a href="admin">
			    <i class='bx bx-log-out'></i>
			    <span class="link">Logout</span>
				<!-- <?php 
				// session_unset(); ?> -->
			</a>
		</li>
	</ul>
</div> 
</body>
</html>