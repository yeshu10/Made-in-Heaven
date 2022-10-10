<?php
session_start();
if(empty($_SESSION["uid"]))
{
	header("Location:Login.php");
}
//$mysqli=new mysqli('localhost','root','','wedding');
echo $_SESSION['uid'];


     echo $ID;
	
 ?>