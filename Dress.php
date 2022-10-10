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
		
			 h3{
			 color:#DE0443;
			 font-weight:bold;}
			
    </style>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
<body>   
    <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="DRESS/1.JPG" style="width:90%" "Height:200%">
							  <h3>Perfect Invites</h3>
							 <p>South Bangalore, Bangalore</p>
                             <p class="price">₹ 50,000 </p>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="DRESS/2.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					      
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="DRESS/3.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					      
						 </div>
				</div>
		</div>	
		 <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   
					         <img src="DRESS/4.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					      
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    
					         <img src="DRESS/5.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					        
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  
					         <img src="DRESS/6.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					        
						 </div>
				</div>
		</div>	
        		 <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="B_Detail.php?ID=B07">
					         <img src="DRESS/7.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					       
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="B_Detail.php?ID=B08">
					         <img src="DRESS/8.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         </a>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <img src="DRESS/9.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
							 </div>
				</div>
		</div>
		 <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="B_Detail.php?ID=B10">
					         <img src="DRESS/10.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         </a>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="B_Detail.php?ID=B11">
					         <img src="DRESS/11.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         </a>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="B_Detail.php?ID=B12">
					         <img src="DRESS/12.JPG" style="width:90%" "Height:200%">
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
						    <a href="B_Detail.php?ID=B13">
					         <img src="DRESS/13.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         </a>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="B_Detail.php?ID=B14">
					         <img src="DRESS/14.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         </a>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="B_Detail.php?ID=B15">
					         <img src="DRESS/15.JPG" style="width:90%" "Height:200%">
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
						    <a href="B_Detail.php?ID=B16">
					         <img src="DRESS/16.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         </a>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="B_Detail.php?ID=B17">
					         <img src="DRESS/17.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         </a>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="B_Detail.php?ID=B18">
					         <img src="DRESS/18.JPG" style="width:90%" "Height:200%">
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
						    <a href="B_Detail.php?ID=B19">
					         <img src="DRESS/19.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         </a>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="B_Detail.php?ID=B20">
					         <img src="DRESS/20.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         </a>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						
					         <img src="DRESS/21.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         
						 </div>
				</div>
		</div>
		<div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   
					         <img src="DRESS/22.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						          <img src="DRESS/23.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					     </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="DRESS/24.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					     </div>
				</div>
		</div>
		<div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   
					         <img src="DRESS/25.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					        
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   
					         <img src="DRESS/26.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					       
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    
					         <img src="DRESS/27.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         
						 </div>
				</div>
		</div>
		<div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    
					         <img src="DRESS/28.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					       
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   
					         <img src="DRESS/29.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    
					         <img src="DRESS/30.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         
						 </div>
				</div>
		</div>
		<div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   
					         <img src="DRESS/31.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   
					         <img src="DRESS/32.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					         
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 
					         <img src="DRESS/33.JPG" style="width:90%" "Height:200%">
					         <h3> </h3>
							 <p>   </p>
                             <p class="price">50,000</p>
					       
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
