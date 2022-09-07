<?php
	session_start();

	if(!isset($_SESSION['username']))
	{
		header("location:admin");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/adminpage.css">
</head>
<body>
<div class="page-title">
	<div>
		<h4 class="page-heading">DashBoard</h4>
		<ul class="small-title">
			<li><a href="adminpage">Home</a></li>
		</ul>
		<div class="login_img">
			<img src="<?php "echo BASEURL";?>assets/images/login_image.jpg" alt="Login">
		</div>
		<div class="login_name">
		<?php
				echo $_SESSION['username'];
		?> 
		</div> 
	</div>
</div>
<div class="boxes">
	<div class="box">
		<div class="right_side">
			<div class="box_topic">
				Available Leave Types
				<?php
					$counts = new Counters();
					$counts->counts("leaves");
   				?> 
			</div>
			<div class="indicator"><span class="text">Leave Types</span></div>
		</div>
	</div>
	<div class="box">
		<div class="right_side">
			<div class="box_topic">
				Available Managers
				<?php
					$counts = new Counters();
					$counts->counts("manager");
   				?> 
			</div>
			<div class="indicator"><span class="text">Managers</span></div>
		</div>
	</div>
	<div class="box">
		<div class="right_side">
			<div class="box_topic">
				Registered Employees
				<?php
					$counts = new Counters();
					$counts->counts("employee");
   				?> 	
			</div>
			<div class="indicator"><span class="text">Employees</span></div>
		</div>
	</div>
	<div class="box">
		<div class="right_side">
			<div class="box_topic">
				Accepted Leaves
				<?php
					$counts = new Counters();
					$counts->countLeaves(2);
   				?> 	
			</div>
			<div class="indicator"><span class="text">Employees</span></div>
		</div>
	</div>
	<div class="box">
		<div class="right_side">
			<div class="box_topic">
				Declined Leaves
				<?php
					$counts = new Counters();
					$counts->countLeaves(1);
   				?> 	
			</div>
			<div class="indicator"><span class="text">Employees</span></div>
		</div>
	</div>
	<div class="box">
		<div class="right_side">
			<div class="box_topic">
				Pending Leaves
				<?php
					$counts = new Counters();
					$counts->countLeaves(0);
   				?> 	
			</div>
			<div class="indicator"><span class="text">Employees</span></div>
		</div>
	</div>
</div>

<?php
// unset($_SESSION['username']);
// session_destroy();
// echo("<script>location.href = './admin';</script>");
?>
</body>
</html>