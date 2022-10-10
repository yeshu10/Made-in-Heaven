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
			    padding: 7px;
			   width:350px;
			  text-align: center;
			  font-family: arial;
			   
			}
            p{
				 font-style: italic;
				 font-size: 15px;
				 text-align:left;
			 }
			 
			.price {
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
			
    </style>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
<body> 
    <div >    
     <center><h1 style="color:#DE0443;font-weigth:900;font-FAMILY:Segoe Print;font-size:60px">JEWELLERY</h1></center> 
  </div>   		  
    <div class="container-fluid" style="margin-top:90px">
		<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J04">
					         <img src="JEWEL/4.JPEG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         </a>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J05">
					           <img src="JEWEL/5.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">1,50,000</p>
					         </a>
						 
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J06">
					         <img src="JEWEL/6.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">1,00,000</p>
					         </a>
						 </div>	
						 </div>
		</div>
		  
    <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J07">
					         <img src="JEWEL/7.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">90,000</p>
					         </a>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J08">
					         <img src="JEWEL/8.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">2,00,000</p>
					         </a>
						 
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J09">
					         <img src="JEWEL/9.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">2,50,000</p>
					         </a>
						 </div>	
						 </div>
		</div> 
              
	<div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J10">
					         <img src="JEWEL/10.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">1,60,000</p>
					         </a>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J11">
					           <img src="JEWEL/11.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">3,50,000</p>
					         </a>
						 
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J12">
					         <img src="JEWEL/12.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">3,00,000</p>
					         </a>
						 </div>	
						 </div>
		</div>
 		<div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J13">
					         <img src="JEWEL/13.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">2,00,000</p>
					         </a>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J14">
					           <img src="JEWEL/14.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">3,60,000</p>
					         </a>
						 
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J15">
					         <img src="JEWEL/15.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">2,50,000</p>
					         </a>
						 </div>	
						 </div>
		</div>	
		<div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J16">
					         <img src="JEWEL/16.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">3,00,000</p>
					         </a>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J17">
					           <img src="JEWEL/17.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">1,00,000</p>
					         </a>
						 
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J18">
					         <img src="JEWEL/18.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">2,00,000</p>
					         </a>
						 </div>	
						 </div>
		</div>		
        <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J19">
					         <img src="JEWEL/19.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">1,00,000</p>
					         </a>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J20">
					           <img src="JEWEL/20.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">4,00,000</p>
					         </a>
						 
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J21">
					         <img src="JEWEL/21.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         </a>
						 </div>	
						 </div>
		</div>		  
        <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J22">
					         <img src="JEWEL/22.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         </a>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J23">
					           <img src="JEWEL/23.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         </a>
						 
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="J_Detail.php?ID=J24">
					         <img src="JEWEL/24.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         </a>
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
