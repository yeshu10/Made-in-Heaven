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
	$ID="";
	$id="";
    $con=mysqli_connect("localhost","root","","wedding");
 if(isset($_GET["ID"]))
	{
		$ID=$_GET["ID"];
		
		$a="select * from decors where  ID='$ID'";
		$b=mysqli_query($con,$a);
	 
	 while($row=mysqli_fetch_array($b))
	{
		echo "<table border=2 style=\"margin:30px 60px 00 60px;width:85%;text-align:center\">";
		echo "<tr>";
		echo "<th>Name</th>";
		echo "<td>".$row[2]."</td>";
		echo "<td rowspan=\"3\" style=\"text-align:right;width:400px\"><img src='".$row[0]."' style=\"width:500px;height:500px;\"/></td>";	
	    echo "</tr>";	
        echo "<tr>";
	    echo "<th>Address</th>";
   	    echo "<td>".$row[3]."</td>";
        echo "</tr>";		
		echo "<tr>";
	    echo "<th>Price</th>";
   	    echo "<td>".$row[4]."</td>";
        echo "</tr>";
	    echo "</table>";
		$id=$row[1];
    }
    }
?> 
    
    <form action="D_Detail.php"method="GET">
          <input type="date" name="D_DATE" min=<?php echo date('Y-m-d');?> required style="float: left;
height: 70px;width: 350px;margin-top:10px;margin-left:80px;font-size:22pt;font-weight:bold">
        <input type="submit" name="BOOK" value="BOOK" style="font-size:20pt;color:white; background-color:green;border:2px solid #336600;padding:10px;margin-top:10px;margin-left:80px;">  
		<input type="hidden"  name="DID" value="<?php echo $id; ?>" >
    </form><br><br>
	
<?php

  if(isset($_GET["BOOK"]))
  {
  $uid= $_SESSION["uid"];
  $date = $_GET["D_DATE"];
  $id= $_GET["DID"];
  $sql="Select * from bookings where ID='$id' and DATE='$date'";
  $result = $con -> query($sql);
    echo "<div class='container'>";
    echo "<div class='jumbotron'>"; 
    if($result -> num_rows > 0)
    {
       echo "<center><h4 style='font-weight:bold;font-style:arial'>Vennue is already booked on this day. Try another one.</h4></center>";
    }
    else
    {
        $sql = "INSERT INTO BOOKINGS(UID,DATE, ID) VALUES('$uid','$date','$id')";

        if($con -> query($sql) === TRUE)
        {
             echo "<center><h4 style='font-weight:bold;font-style:arial'>BOOKED SUCESSEFULLY</h4></center>";
        }
        else
        {
            echo "Error : " . $sql . "<br>" . $conn -> error;
        }
    }
	    	echo "</div>";
		echo "</div>";
  $con -> close();
  }
	include_once "Footer.php";

?>
 