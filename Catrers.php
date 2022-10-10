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
			  text-align: center;
			  font-family: arial;
			  height:400px;
				 width:300px;
			}

			.price {
			  color: grey;
			  font-size: 17px;
			}

			

			
	       <!--  img{
				 height:270px;
				 width:400px;
			 }--->
			 p{
				 font-style: italic;
				 font-size: 15px;
				 text-align:left;
			 }
			 .price
			 {
			   color:red;
			   font-weigth:bold;
			 }
    </style>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
<body> <div >    
     <center><h1 style="color:#DE0443;font-weigth:900;font-FAMILY:Segoe Print;font-size:100px">CATRERS</h1></center> 
  </div>   
	<div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
			           
						 <div class="card">
					          <a href="C_Detail.php?ID=C01"> <img src="CATRERS/1.JPG" style="width:100%" "Height:100%">
					         <h3>Freso Foods</h3>
                             <p>  South Bangalore, Bangalore </p>
                             <p class="price">₹ 200 Onwards </p>
							  </a>
					      </div>
						  
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
				        <a href="C_Detail.php?ID=C02">
						<div class="card">
					         <img src="CATRERS/2.JPG" style="width:100%" "Height:100%">
					         <h3>SFM Caterers</h3>
                             <p>  South Bangalore, Bangalore </p>
                             <p class="price">₹ 200 Onwards </p>
					    </div>
						 </a>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						  <a href="C_Detail.php?ID=C03">
						  <div class="card">
					         <img src="CATRERS/3.JPG" style="width:100%" "Height:100%">
					         <h3>Blue Bell Caterers</h3>
                             <p>  South Bangalore, Bangalore </p>
                             <p class="price">₹ 350 Onwards </p>
						</div>
						 </a>
				</div>		
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						  <a href="C_Detail.php?ID=C04">
						 <div class="card">
					         <img src="CATRERS/4.JPG" style="width:100%" "Height:100%">
					         <h3>The Colony Catering</h3>
                             <p>   Koramangala, Bangalore </p>
                             <p class="price">₹ 450 Onwards </p>
						</div>
						 </a>
				</div>					
	 </div>
	 <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/5.JPG" style="width:100%" "Height:100%">
					         <h3>Petoo</h3>

					         <p>  Bangalore </p>
                             <p class="price">₹ 200 Onwards </p>
					         
						</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/6.JPG" style="width:100%" "Height:100%">
					         <h3>Swathi Caterer</h3>

					         <p> Bangalore </p>
                              <p class="price">₹ 200 Onwards </p>
					         
						</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/7.JPG" style="width:100%" "Height:100%">
					         <h3>Heera Caterers</h3>

					         <p>  South Bangalore, Bangalore </p>
                              <p class="price">₹ 450 onwards </p>
						</div>
				</div>		
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/8.JPG" style="width:100%" "Height:100%">
					         <h3>Swaad Group</h3>

					         <p>   South Bangalore </p>
                              <p class="price">₹ 450 Onwards </p>
						</div>
				</div>					
	 </div>
	 <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/9.JPG" style="width:100%" "Height:100%">
					         <h3>The Creative Kitchen</h3>
							 <p>    Chennai </p>
                             <p class="price">₹ 200 Onwards </p>
					         
						</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/10.JPG" style="width:100%" "Height:100%">
					         <h3>First Fruit</h3>

					         <p> Tambaram, Chennai </p>
                              <p class="price">₹ 200 Onwards </p>
					         
						</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/11.JPG" style="width:100%" "Height:100%">
					         <h3>Paramparika</h3>

					         <p> Chennai</p>
                              <p class="price">₹ 350 Onwards </p>
						</div>
				</div>		
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/12.JPG" style="width:100%" "Height:100%">
					         <h3>Grace Caterers</h3>

					         <p>   Pallavaram, Chennai </p>
                              <p class="price">₹ 450 Onwards </p>
						</div>
				</div>					
	 </div>
	 <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/13.JPG" style="width:100%" "Height:100%">
					         <h3>Sam Carters</h3>
							 <p>Egmore, Chennai</p>
                             <p class="price">₹ 200 Onwards </p>
					         
						</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/14.JPG" style="width:100%" "Height:100%">
					         <h3>Satkar CatererS</h3>

					         <p> Tambaram, Chennai </p>
                              <p class="price">₹ 200 Onwards </p>
					         
						</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/15.JPG" style="width:100%" "Height:100%">
					         <h3>Seasons Catering </h3>

					         <p> Chennai</p>
                              <p class="price">₹ 350 Onwards </p>
						</div>
				</div>		
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/48.JPG" style="width:100%" "Height:100%">
					         <h3>Goldline Catering</h3>

					         <p>   Pallavaram, Chennai </p>
                              <p class="price">₹ 450 Onwards </p>
						</div>
				</div>					
	 </div>
	 <div class="container-fluid" style="margin-top:150px">
		
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/16.JPG" style="width:100%" "Height:100%">
					         <h3>Delli Delicacies</h3>
							 <p> Gurgaon, Delhi NCR </p>
                             <p class="price">₹ 1500 Onwards </p>
					         
						</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/17.JPG" style="width:100%" "Height:100%">
					         <h3>Fossetta Gourmet</h3>

					         <p> Delhi NCR </p>
                              <p class="price">₹ 200 Onwards </p>
					         
						</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/18.JPG" style="width:100%" "Height:100%">
					         <h3>The Embassy Catering</h3>

					         <p>South Delhi, Delhi NCR</p>
                              <p class="price">₹ 350 Onwards </p>
						</div>
				</div>		
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/19.JPG" style="width:100%" "Height:100%">
					         <h3>Karachi Caterers</h3>

					         <p> Delhi NCR </p>
                              <p class="price">₹ 450 Onwards </p>
						</div>
				</div>					
	 </div>
	 
		 <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/20.JPG" style="width:100%" "Height:100%">
					         <h3>The Basil Kitchen</h3>
							 <p>  Delhi NCR </p>
                             <p class="price">₹ 1700 Onwards </p>
					         
						</div>
				</div>
                 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/21.JPG" style="width:100%" "Height:100%">
					         <h3>Masala Artz Catering</h3>

					         <p>South Delhi, Delhi NCR</p>
                              <p class="price">₹ 350 Onwards </p>
						</div>
				</div>		
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/22.JPG" style="width:100%" "Height:100%">
					         <h3>Daawat Caterers</h3>

					         <p>South Delhi, Delhi NCR</p>
                              <p class="price">₹ 350 Onwards </p>
						</div>
				</div>		
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/23.JPG" style="width:100%" "Height:100%">
					         <h3>The Food Affairs</h3>

					         <p> Delhi NCR </p>
                              <p class="price">₹ 1450 Onwards </p>
						</div>
				</div>					
	 </div>	   
	 
				
               	
       <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/24.JPG" style="width:100%" "Height:100%">
					         <h3>Ganpati Caterer</h3>
							 <p>Jaipur</p>
                             <p class="price">₹ 500 Onwards </p>
					         
						</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/25.JPG" style="width:100%" "Height:100%">
					         <h3>Partywala</h3>

					         <p>Sanganer</p>
                              <p class="price">₹ 600 Onwards </p>
					         
						</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/26.JPG" style="width:100%" "Height:100%">
					         <h3>Shree Caterers</h3>

					         <p>Jaipur</p>
                              <p class="price">₹ 450 Onwards </p>
						</div>
				</div>		
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/27.JPG" style="width:100%" "Height:100%">
					         <h3>Dining Solution</h3>

					         <p> JLN Marg,Jaipur </p>
                              <p class="price">₹ 450 Onwards </p>
						</div>
				</div>					
	 </div>		
	 <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/28.JPG" style="width:100%" "Height:100%">
					         <h3>Jaipuria Caterers</h3>
							 <p>Sindhi Camp,Jaipur</p>
                             <p class="price">₹ 500 Onwards </p>
					         
						</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/29.JPG" style="width:100%" "Height:100%">
					         <h3>Manna Caters</h3>

					         <p>Sanganer</p>
                              <p class="price">₹ 600 Onwards </p>
					         
						</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/30.JPG" style="width:100%" "Height:100%">
					         <h3>Unique Cateres</h3>

					         <p>Jaipur</p>
                              <p class="price">₹ 850 Onwards </p>
						</div>
				</div>		
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/31.JPG" style="width:100%" "Height:100%">
					         <h3>Gyanjee Caterers</h3>

					         <p> JLN Marg,Jaipur </p>
                              <p class="price">₹ 450 Onwards </p>
						</div>
				</div>					
	 </div>		
	   <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/32.JPG" style="width:100%" "Height:100%">
					         <h3>Trishaa Catering Services</h3>
							 <p>  Vasai Virar , Mumbai</p>
                             <p class="price">₹ 1800 Onwards </p>
					         
						</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/33.JPG" style="width:100%" "Height:100%">
					         <h3>Fusion Foods India</h3>

					         <p> Mumbai </p>
                              <p class="price">₹ 1700 Onwards </p>
					         
						</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/34.JPG" style="width:100%" "Height:100%">
					         <h3>Crumbs to Gourmet</h3>

					         <p>Mumbai</p>
                              <p class="price">₹ 350 Onwards </p>
						</div>
				</div>		
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/35.JPG" style="width:100%" "Height:100%">
					         <h3>Rasoi Caterer</h3>

					         <p> Malad, Mumbai </p>
                              <p class="price">₹ 450 Onwards </p>
						</div>
				</div>					
	 </div>
       <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/36.JPG" style="width:100%" "Height:100%">
					         <h3>Arora Catering Services</h3>
							 <p>   Mumbai</p>
                             <p class="price">₹ 1800 Onwards </p>
					         
						</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/37.JPG" style="width:100%" "Height:100%">
					         <h3>Little Food Co</h3>

					         <p> Mumbai </p>
                              <p class="price">₹ 1000 Onwards </p>
					         
						</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/38.JPG" style="width:100%" "Height:100%">
					         <h3>Eat Drink Design</h3>

					         <p>Mumbai</p>
                              <p class="price">₹ 1550 Onwards </p>
						</div>
				</div>		
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/39.JPG" style="width:100%" "Height:100%">
					         <h3>Aurum Foods</h3>

					         <p> Andheri West, Mumbai </p>
                              <p class="price">₹ 1150 Onwards </p>
						</div>
				</div>					
	 </div>	
  <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/40.JPG" style="width:100%" "Height:100%">
					         <h3>Seven Skyes</h3>
							 <p>Udaipur</p>
                             <p class="price">₹ 1800 Onwards </p>
					         
						</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/41.JPG" style="width:100%" "Height:100%">
					         <h3>Wedding Junction</h3>

					         <p>  Udaipur </p>
                              <p class="price">₹ 700 Onwards </p>
					         
						</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/42.JPG" style="width:100%" "Height:100%">
					         <h3>Suri Caterers</h3>

					         <p> Udaipur</p>
                              <p class="price">₹ 650 Onwards </p>
						</div>
				</div>		
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/43.JPG" style="width:100%" "Height:100%">
					         <h3>Food Creatives</h3>

					         <p> Udaipur</p>
                              <p class="price">₹ 450 Onwards </p>
						</div>
				</div>					
	 </div>		 
	    <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/44.JPG" style="width:100%" "Height:100%">
					         <h3>Apple Caterers</h3>
							 <p>Udaipur</p>
                             <p class="price">₹ 1800 Onwards </p>
					         
						</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/45.JPEG" style="width:100%" "Height:100%">
					         <h3>Best Serve Caterers</h3>

					         <p>  Civil Lines,Udaipur </p>
                              <p class="price">₹ 700 Onwards </p>
					         
						</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/46.JPG" style="width:100%" "Height:100%">
					         <h3>Ronak Caterers</h3>

					         <p> Udaipur</p>
                              <p class="price">₹ 650 Onwards </p>
						</div>
				</div>		
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="CATRERS/47.JPG" style="width:100%" "Height:100%">
					         <h3>Archillies Catering</h3>

					         <p> Udaipur</p>
                              <p class="price">₹ 450 Onwards </p>
						</div>
				</div>					
	 </div>		 
		
			</body>
<br> <br>
</html>
<div>


</div>	
