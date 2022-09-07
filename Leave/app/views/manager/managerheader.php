<?php
session_start();
if(!isset($_SESSION['managername']))
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
			<li><a href="managerdashboard">Home</a></li>
			<li><span>Manager DashBoard</span></li>
		</ul>
		<div class="login_img">
		<img src="<?php "echo BASEURL";?>assets/images/login_image.jpg" alt="Declined">
		</div>
		<div class="login_name">
		<?php
				echo $_SESSION['managername'];
			?> 
		</div> 
	</div>
</div>
</body>
</html>