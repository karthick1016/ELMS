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
	<style>
	.login_img img{
    width: 60px;
  	}
	.boxes{
      /* border: 1px solid black; */
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      padding: 0 20px;
      margin-bottom: 26px;
      width: 1600px;
      position: relative;
      left: 300px;
      top: 140px;
  }
  .boxes .box{
      display: flex;
      /* align-items: center; */
      justify-content: center;
	  width: 400px;
      background: #fff;
	  margin-top: 15px;
      padding: 15px 14px;
      border-radius: 12px;
      box-shadow:  4.9px 9.8px 9.8px hsl(0deg 0% 0% / 0.35);
  }
	</style>
</head>
<body>
<div class="page-title">
	<div>
		<h4 class="page-heading">DashBoard</h4>
		<ul class="small-title">
			<li><a href="adminpage">Home</a></li>
			<li><span>Admin's DashBoard</span></li>
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
				Declined Leaves
				<?php
					$counts = new Counters();
					$counts->countLeaves(0);
   				?> 	
			</div>
			<div class="indicator"><span class="text">Employees</span></div>
		</div>
	</div>
</div>

</body>
</html>