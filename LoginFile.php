 <?php
$conn=mysqli_connect("localhost","root","","wedding");
if($conn -> connect_error)
{
    die("Connection Failed : ".$conn -> connect_error);
}
echo "<br>";
session_start();
$email=$_POST["email"];
$pass=sha1($_POST["password"]);
$uid="Select * from usermaster where email='$email' and pass='$pass'";
$res=mysqli_query($conn,$uid);
$row=mysqli_fetch_array($res);
if(isset($_SESSION['uid']))
{
	echo"<script> location.href='WED1.php'</script>";
}
 else 
if($row)
{
    if($row['pass'] == $pass)
    {   
        $_SESSION["uid"]=$row[0];
        header("Location: WED1.php");
        exit;
    }
    else
    {
        echo "Wrong Password";
    }
}
else
{  
    echo "<center><h3 style='color:red'> Login Failed. <br>You are not Registered.</h3></center>"; 
   }
$conn -> close();
?>
