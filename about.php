<?php
session_start();
	include_once "Header.php";	
if(isset($_GET["task"]))
{
	if($_GET["task"]=="kill")
		echo "<center><h3 style='color:green'>You Have Been Successfully Logged Out</h3></center>";
}
?>
<html>
<head>
  <title>MADE IN HEAVEN</title>
  
  		<script src="jquery-1.11.0.min.js"></script>
		<script src="bootstrap.js"></script>
		<link rel="stylesheet" href="bootstrap.css">
		<script src="jquery.min.js"></script>
	 <style>
			 h3{
			 color:#DE0443;
			 font-weight:bold;
			 font-FAMILY:Comic Sans MS;
			 }
			 p{
				 font-size:25px;
			 }
			
    </style>
<head>	
<body>
 <center><h1 style="color:#DE0443;font-weigth:900;font-size:80px">ABOUT US</h1></center>
           <div >
				 <h3>Who Are We</h3>
                 <p> MADE IN HEAVEN is an Indian Wedding Planning Website where you can find the best wedding vendors, with prices in six best cities for destinatiom wedding at the click of a button. Whether you are looking to hire wedding planners in India, or looking for the top photographers, or just some ideas and inspiration for your wedding.</p>
            </div>
			<div >
				 <h3>Vendors</h3>
                 <p>From the fairly significant Mehendi Artist to the absolutely necessary Candid Photographer, we have a wedding vendor for all your needs! And for your comfort, you can find profile details, photos and reviews for all of these wedding vendors!
Photos </p>
            </div>			  
				 			</body>
</html>
		
<?php
	include_once "Footer.php";
?>
</div>