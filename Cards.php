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
            
			
            .container-fluid
			{
				display:inline-block;
				 margin: 00px 100px 00px 100px;
				padding: 00px 00px 00px 00px;
			}
		   .card {
			  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			   margin:00px 10px 00px 10px;;
			    padding: 15px;
			   width:400px;
			  text-align: center;
			  font-family: arial;
			   
			}
			.card:hover
	        {
				transform:scale(1.1);
	        }
            p{
				 font-style: italic;
				 font-size: 15px;
				 text-align:left;
				 
			 }
			 
			.contact {
			  color: grey;
			  font-size: 17px;
			   font-weigth:bold;
			}

			.card button {
			  border: none;
			  outline: 0;
			  padding: 12px;
			  color: white;
			  background-color:black;
			  text-align: center;
			  cursor: pointer;
			  width: 100%;
			  font-size: 18px;
			}

			.card button:hover {
			  opacity: 0.7;
			}
	         img{
				 height:270px;
				 width:400px;
			 }
			 p{
				 font-style: italic;
				 font-size: 15px;
				 text-align:left;
			 }
			 h3{
			 color:#DE0443;
			 font-weight:bold;}
			
    </style>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
<body>     
<div >    
     <center><h1 style="color:#DE0443;font-weigth:900;font-FAMILY:Segoe Print;font-size:90px">WEDDING CARDS</h1></center> 
  </div>
    <div class="container-fluid" style="margin-top:150px">
		   
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="Cards/1.JPG"  style="width:100%" "Height:100%">
							 <h3>Perfect Invites</h3>
							 <p>South Bangalore, Bangalore</p>
                             <p class="price">₹ 500 Onwards </p>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="Cards/2.JPG"  style="width:100%" "Height:100%">
							  <h3>Pink Pastures</h3>
							 <p> Bangalore</p>
                             <p class="contact">₹ 600 Onwards </p>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="Cards/3.JPG"  style="width:100%" "Height:100%">
							  <h3> Pixel Blush Design Studio</h3>
							 <p> Worli, Mumbai</p>
                             <p class="contact">₹ 1000 Onwards </p>
						 </div>
				</div>
				
	</div> 
<div class="container-fluid" style="margin-top:150px">
		   
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="Cards/4.JPG"  style="width:100%" "Height:100%">
							  <h3> Rare N Right</h3>
							 <p> Worli, Mumbai</p>
                             <p class="contact">₹ 500 Onwards </p>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="Cards/5.JPG"  style="width:100%" "Height:100%">
							 <h3>By Invitation</h3>
							 <p> Worli, Mumbai</p>
                             <p class="contact">₹ 500 Onwards </p>
							


						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="Cards/6.JPG"  style="width:100%" "Height:100%">
							  <h3> Creative Mongers</h3>
							 <p> Worli, Mumbai</p>
                             <p class="contact">₹ 500 Onwards </p>
						 </div>
				</div>
				
	</div> 
<div class="container-fluid" style="margin-top:150px">
		   
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="Cards/7.JPG"  style="width:100%" "Height:100%">
							  <h3> Paperplanes</h3>
							 <p> Jaipur</p>
                             <p class="contact">₹ 500 Onwards </p>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="Cards/8.JPG"  style="width:100%" "Height:100%">
							  <h3> The Exotic Invites</h3>
							 <p> Jaipur</p>
                             <p class="contact">₹ 500 Onwards </p>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="Cards/9.JPG"  style="width:100%" "Height:100%">
							  <h3> Parekh Cards</h3>
							 <p> Andheri East, Mumbai</p>
                             <p class="contact">₹ 500 Onwards </p>
						 </div>
				</div>
				
	</div> 	
	<div class="container-fluid" style="margin-top:150px">
		   
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="Cards/10.JPG"  style="width:100%" "Height:100%">
							  <h3> Customizing Creativity</h3>
							 <p> Worli, Mumbai</p>
                             <p class="contact">₹ 500 Onwards </p>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="Cards/11.JPG"  style="width:100%" "Height:100%">
							  <h3> Lovenote</h3>
							 <p> Worli, Mumbai</p>
                             <p class="contact">₹ 500 Onwards </p>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="Cards/12.JPG"  style="width:100%" "Height:100%">
							  <h3> Kapstone Designs</h3>
							 <p> Worli, Mumbai</p>
                             <p class="contact">₹ 500 Onwards </p>
						 </div>
				</div>
				
	</div> 
	
				           				 
</body>
<br><br>
</html>
<div>
<?php
	include_once "Footer.php";
?>
</div>	
