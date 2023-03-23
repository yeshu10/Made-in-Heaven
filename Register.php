<?php
	session_start();
	$message='';
	if(isset($_SESSION['email_alert']))
	{
	$message='Email already exists';
    }
	?>
<html>
	<head>
		<title>Register</title>
<?php
	include_once "Header.php";
	include_once "Validate.js";
?>
	<script src="jquery.min.js"></script>
	<script src="bootstrap.js"></script>
	<style>
	   body {
	        background-image:url(Register.JPG);
			background-repeat: no-repeat;
			background-size: 100% 100%;
	        }
	</style>
	</head>
	<body>
	<div style="width:400px; margin-top:6%;margin-left:7%;border:3px solid black;padding:15px;">
	<div><h2> <?php echo $message; ?></h2>	</div> 
	
	<form action="save.php" method="POST" autocomplete="off">
			<input type="text" name="fname" placeholder="First Name" required class="form-control">
			<br>
			<input type="text" name="lname" placeholder="Last Name" required class="form-control">
			<br>
			<input type="text" name="mobile" placeholder="Mobile No." required class="form-control" onkeyup="checknum(this.value)">
			<span id="chck2"></span>
			<br>			
			<input type="email" name="email" placeholder="Email" required class="form-control" onchange="checkmmail(this.value)">
			<span id="chck1"></span>
			<br>			
			<textarea cols=42 rows=2 name="addr" placeholder="Address" class="form-control"></textarea>
			<br>			
			<input type="password" name="password" placeholder="Password" required class="form-control" onkeyup="checkpass(this.value)">
			<span id="chck0"></span>
			<br>
			<center><button class="btn btn-info btn-medium" id="but">Register</button></center>
		</form>
	</div>
	<div style="margin-top:5.3%">
	</div>
	</body>
</html>
<?php
	include_once "Footer.php";
?>	