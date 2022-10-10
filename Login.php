<html>
	<head>
		<title>Login</title>
<?php
	include_once "Header.php";
	include_once "Validate.js";
?>
	<script src="jquery.min.js"></script>
	<script src="bootstrap.js"></script>
	<style>
	   body {
	        background-image:url(log.jpg);
			background-repeat: no-repeat;
			background-size: 100% 100%;
	   }
	</style>
	</head>
	<body>
	
	<div style="width:500px; margin-top:15%;margin-left:30%;border:3px solid black;padding:15px;">
		<form action="LoginFile.php" method="POST" autocomplete="off">
			<input type="email" name="email" placeholder="Email" required class="form-control" onchange="checkmail(this.value)">
			<span id="chck1"></span>
			<br>
			<input type="password" name="password" placeholder="Password" required class="form-control">
			<br>
			<center><button class="btn btn-info btn-medium">Login</button></center>
		</form>
	</div>
	<div style="margin-top:16%">
	</div>
	</body>
<br><br>
</html>
<?php
	include_once "Footer.php";
?>	