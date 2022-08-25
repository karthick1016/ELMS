<?php
session_start();
if(!isset($_SESSION['auth_user']['name']))
{
	header("location:login");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/adminpage.css">
</head>
<body>
<div class="page-title">
	
	<div>
		<h4 class="page-heading">DashBoard</h4>
		<ul class="small-title">
			<li><a href="employeedashboard">Home</a></li>
			<li><span>Employee DashBoard</span></li>
		</ul>
		<div class="login_img">
			<img src="<?php "echo BASEURL";?>assets/images/login_image.jpg" alt="Login">
		</div>
		<div class="login_name">
		<?php
				echo $_SESSION['auth_user']['name'];
			?> 
		</div> 
	</div>
</div>
</body>
</html>