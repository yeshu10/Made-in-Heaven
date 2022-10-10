

<?php
session_start();
if(empty($_SESSION["uid"]))
{
	header("Location:Login.php");
}
?>
<head>
    <script src="jquery.min.js"></script>
    <script src="bootstrap.js"></script>
	<script>
		function sub()
		{
			var a=document.getElementById("qty").value;
			var b=document.getElementById("id").value;
			var c=document.getElementById("price").value;
			var d=document.getElementById("uid").value;
			var str=a+","+b+","+c+","+d;
			var v=new XMLHttpRequest();
			v.open("GET","pick.php?str="+str,true);
			v.send();
			v.onreadystatechange=function test()
			{
				if(v.readyState==4)
					document.getElementById("sp").innerHTML=v.responseText;
			}
		}
	</script>
</head>
	<?php

	$ID="";
$con=mysqli_connect("localhost","root","","wedding");
if(isset($_GET["ID"]))
	{
		$ID=$_GET["ID"];
		$a="select * from products where  ID='$ID'";
		$b=mysqli_query($con,$a);
		
	while($row=mysqli_fetch_array($b))
	{
		echo "<table border=2 style=\"margin:30px 60px 00 60px;width:85%;text-align:center\">";
		
		echo "<tr>";
		echo "<th>Name</th>";
		echo "<td>".$row[0]."</td>";
		echo "<td rowspan=\"3\" style=\"text-align:right;width:400px\"><img src='".$row[5]."' style=\"width:500px;height:500px;\"/></td>";
	
	    echo "</tr>";	
        echo "<tr>";
	    echo "<th>Price</th>";
   	    echo "<td>".$row[2]."</td>";
        echo "</tr>";		
		echo "<tr>";
	    echo "<th>Material</th>";
   	    echo "<td>".$row[4]."</td>";
        echo "</tr>";
	   
		$id=$row[1];
		$price=$row[2];
}
 echo "</table>";
	}
echo "<input type=\"hidden\" id='id' value=".$id.">";
	echo "<input type=\"hidden\" id='price' value=".$price.">";
	if(isset($_SESSION["uid"]))
		echo "<input type=\"hidden\" id='uid' value=".$_SESSION["uid"].">";
	
  ?>
<?php 
	if(!empty($_SESSION["uid"]))
	{
?>	
	<div style="margin-left:8px;">
		<h4>Quantity</h4>	
		<input type="number" name="qty" id="qty" placeholder="Quantity" value="1" required>
		<button type="button" class="btn btn-success" onclick="sub()">Add to Cart</button>
		<span id="sp"></span>
	</div>	
<?php 
	}
	echo "<div style='margin-top:19%'></div>";
	include_once "Footer.php";
?> 