<?php
session_start();
	include_once "Header.php";	
if(isset($_GET["task"]))
{
	if($_GET["task"]=="kill")
		echo "<center><h3 style='color:green'>You Have Been Successfully Logged Out</h3></center>";
}
if(empty($_SESSION["uid"]))
{
	header("Location:Login.php");
}

    $con=mysqli_connect("localhost","root","","wedding");
 
		$UID=$_SESSION["uid"];
		
		$a="select * from bookings where  UID='$UID'";
		$b=mysqli_query($con,$a);
	 
	 while($row=mysqli_fetch_array($b))
	{
		echo "<table border=2 style=\"margin:30px 60px 00 60px;width:85%;text-align:center\">";	
        echo "<tr>";
	    echo "<th>DATE</th>";
   	    echo "<td>".$row[2]."</td>";
        echo "</tr>";		
		echo "<tr>";
	    echo "<th>CODE FOR VENUES OR VENDORS</th>";
   	    echo "<td>".$row[3]."</td>";
        echo "</tr>";
	    echo "</table>";
		$id=$row[1];
    }
?> 
    
    
	
<?php

	include_once "Footer.php";

?>
 