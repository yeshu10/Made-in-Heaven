 <?php
$conn=mysqli_connect("localhost","root","","wedding");


if($conn -> connect_error)
{
    die("Connection Failed : ".$conn -> connect_error);
}
echo "Connected Successful";

echo "<br>";
session_start();
$email=$_POST["email"];
$pass=sha1($_POST["password"]);



$sql = "SELECT pass FROM usermaster WHERE email='$email'";

$result = $conn -> query($sql);
$row = $result -> fetch_assoc();

if(isset($_SESSION['email']))
{
	echo"<script> location.href='WED1.php'</script>";
}
 else 
if($result -> num_rows > 0)
{
    
    
    if($row['pass'] == $pass)
    {   
        $_SESSION['email']=$email;
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
    echo "You are not Registered.";
}

$conn -> close();
?>
