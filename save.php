<?php
    session_start();
	$con=mysqli_connect("localhost","root","","wedding");
	if(isset($_POST["fname"]))
	{
		$fnam=$_POST["fname"];
		$fname=filter_var($fnam,FILTER_SANITIZE_SPECIAL_CHARS);
		$lnam=$_POST["lname"];
		$lname=filter_var($lnam,FILTER_SANITIZE_SPECIAL_CHARS);
		$mobile=$_POST["mobile"];
		$mail=$_POST["email"];
		$email=filter_var($mail,FILTER_SANITIZE_EMAIL);
		$pass=sha1($_POST["password"]);
		$add=$_POST["addr"];
		$addr=filter_var($add,FILTER_SANITIZE_SPECIAL_CHARS);
		include_once "Conn.php";
		include_once "Header.php";
		echo "<script src=\"jquery.min.js\"></script>";
		echo "<script src=\"bootstrap.js\"></script>";
		$sql="SELECT * FROM usermaster Where email='$email'";
		$result=mysqli_query($con,$sql);
		$present=mysqli_num_rows($result);
		if($present>0)
		{
			$_SESSION['email_alert']='1';
			header("Location:Register.php");
		}
		else
		{
			$ins="Insert into usermaster(fname,lname,mobile,email,pass,address) values('$fname','$lname','$mobile','$email','$pass','$addr')";
			if(mysqli_query($con,$ins))
			{
			echo "<center><h3 style='color:Green'>Now You are registered in our site.</h3></center>";
			}
	        else
			{	
			echo mysqli_error($con);
			echo "<center><h3 style='color:Red'>Sorry for the inconvenience caused. Please try again after some time.</h3></center>";
			//echo mysqli_error($this->con);
		    }
	
	// else
	// 	header("Location:Register.php");
		}
	}
	 else
	 header("Location:Register.php");
?>