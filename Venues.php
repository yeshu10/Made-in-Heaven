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
     <center><h1 style="color:#DE0443;font-weigth:900;font-size:90px">VENUES</h1></center> 
  </div>
    <div class="container-fluid" style="margin-top:110px">
		  <center><h1 id="BANGLORE" style="color:#D4042A;font-FAMILY:Comic Sans MS;font-weigth:900;font-size:40px">BANGALORE</h1></center>
			     <BR> 
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="V_Detail.php?ID=V01">
					         <img src="VENUES/Tamarind Tree.JPG" alt="Udman By Ferns N Petals" style="width:100%" "Height:100%">
					         <h3>The Tamarind Tree</h3>
					         <p> South Bangalore, Bangalore</p>
                             <p class="price"> Rental Only </p>
							</a>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="V_Detail.php?ID=V02">
					         <img src="VENUES/White Hall.JPG" alt="The White Hall" style="width:100%" "Height:100%">
					         <h3>The White Hall</h3>
					         <p> South Bangalore, Bangalore</p>
                             <p class="price"> Rental Only</p>
							</a>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="V_Detail.php?ID=V03">
					         <img src="VENUES/Udman By Ferns N Petals.JPG" alt="Udman By Ferns N Petals" style="width:100%" "Height:100%">
					         <h3>Signature Club Resort</h3>
					         <p>Devanahalli, Bangalore</p>
                             <p class="price"> PER PLATE (VEG & NON-VEG) ₹ 3,000 - 2,000 </p>
							</a>
						 </div>
				</div>
		</div>				
    <div class="container-fluid" style="margin-top:150px">
				
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="V_Detail.php?ID=V04">
						   
					         <img src="VENUES/The Groves.JPG" alt="Udman By Ferns N Petals" style="width:100%" "Height:100%">
					         <h3>The Groves</h3>
					         <p> K R Puram, Bangalore</p>
                             <p class="price"> Rental Only </p>
							</a>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="V_Detail.php?ID=V05">
					         <img src="VENUES/MoonGate.JPG" alt="MoonGate" style="width:100%" "Height:100%">
					         <h3>MoonGate</h3>
					         <p> South Bangalore, Bangalore</p>
                             <p class="price"> Rental Only  </p>
							</a>
						 </div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="V_Detail.php?ID=V06">
					         <img src="VENUES/Royalton Leisure.JPG" alt="Royalton Leisure" style="width:100%" "Height:100%">
					         <h3>Royalton Leisure</h3>
					         <p> South Bangalore, Bangalore</p>
                             <p class="price"> Rental Only  </p>
							</a>
						 </div>
				</div>
    </div>	
	<BR>

  	
    <div class="container-fluid" style="margin-top:150px">
	       	 <center><h3 id="CHENNAI" style="color:#D4042A;font-style:Comic Sans;font-weigth:800;font-size:40px">CHENNAI</h3></center>
			 <BR>
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="V_Detail.php?ID=V07">
					         <img src="VENUES/Ambassador Pallava Hotel.JPG" alt="Ambassador Pallava Hotel" style="width:100%" "Height:100%">
					         <h3>Ambassador Pallava Hotel</h3>
					         <p>   Purasaiwakkam, Chennai</p>
                             <p class="price"> PER PLATE ₹ 900 </p>
											</div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="V_Detail.php?ID=V08">
					         <img src="VENUES/Radisson Blu.JPG" alt="Radisson Blu Chennai" style="width:100%" "Height:100%">
					         <h3>Radisson Blu Chennai</h3>
					         <p> Chennai</p>
                             <p class="price"> PER PLATE ₹ 1,200  </p>
				</div>	
				</div>
                <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="V_Detail.php?ID=V09">
					         <img src="VENUES/The Palace House.JPG" alt="The Palace House" style="width:100%" "Height:100%">
					         <h3>The Palace House</h3>
					         <p> Ecr East Coast Road,Chennai</p>
                             <p class="price"> Rental only</p>
					         
						</div>
				</div>					
								
					  
    </div>
	<div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="V_Detail.php?ID=V10">

					         <img src="VENUES/Trident.JPG" alt="Udman By Ferns N Petals" style="width:100%" "Height:100%">
					         <h3>The Trident</h3>
					         <p> Chennai </p>
                             <p class="price"> PER PLATE ₹ 1,300 </p>
					         						</div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="V_Detail.php?ID=V11">
					         <img src="VENUES/Rina's Venue.JPG" alt="Rina's Venue" style="width:100%" "Height:100%">
					         <h3>Rina's Venue</h3>
					         <p> Chennai </p>
                             <p class="price"> PER PLATE  2,400 </p>
					         						</div>
				</div>	
                <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="V_Detail.php?ID=V12">
					         <img src="VENUES/Striplex Banquet.JPG" alt="Striplex Banquet" style="width:100%" "Height:100%">
					         <h3>Striplex Banquet</h3>
					         <p>  Chennai </p>
                             <p class="price"> PER PLATE (VEG & NON-VEG) ₹ 1,150 - 1,250 </p>
					         
						</div>
				</div>					
								
					  
    </div>
	<div class="container-fluid" style="margin-top:150px">
		<center><h3 id="DELHI" style="color:#D4042A;font-style:Comic Sans;font-weigth:800;font-size:40px">DELHI</h3></center>
		<BR>
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="V_Detail.php?ID=V13">
					         <img src="VENUES/Yadu Greens.JPG" alt="Yadu Greens" style="width:100%" "Height:100%">
					         <h3>Yadu Greens</h3>
					         <p> DELHI Gt Karnal Road Industrial Area </p>
                             <p class="price"> PER PLATE (VEG & NON-VEG) ₹ 3,000 - 2,000 </p>
					         						</div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="V_Detail.php?ID=V14">
					         <img src="VENUES/MOSAIC.JPG" alt="MOSAIC" style="width:100%" "Height:100%">
					         <h3>Mosaic banquet</h3>
					         <p> DELHI Ashok Vihar</p>
                             <p class="price"> PER PLATE (VEG & NON-VEG)₹ 1,200 - 1,400 </p>
					         
						</div>
				</div>	
                <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="V_Detail.php?ID=V15">
					         <img src="VENUES/CALISTA RESORT.JPG" alt="CALISTA RESORT" style="width:100%" "Height:100%">
					         <h3>CALISTA RESORT</h3>
					         <p> DELHI Kapashera</p>
                             <p class="price"> PER PLATE (VEG & NON-VEG) ₹ 1,500 - 2,000</p>
					         
						</div>
				</div>					
								
					  
    </div>
	<div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="V_Detail.php?ID=V16">
					         <img src="VENUES/Udman By Ferns N Petals.JPG" alt="Udman By Ferns N Petals" style="width:100%" "Height:100%">
					         <h3>Udman By Ferns N Petals</h3>
					         <p> DELHI Mahipalpur </p>
                             <p class="price"> PER PLATE (VEG & NON-VEG) ₹ 3,000 - 2,000 </p>
					         
						</div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="V_Detail.php?ID=V17">
					         <img src="VENUES/Opulent Hotel.JPG" alt="Opulent Hotel" style="width:100%" "Height:100%">
					         <h3>Opulent Hotel</h3>
					         <p> DELHI Chattarpur </p>
                             <p class="price"> PER PLATE (VEG & NON-VEG) ₹ 1,300 - 1,400 </p>
					         
						</div>
				</div>	
                <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="V_Detail.php?ID=V18">
					         <img src="VENUES/Striplex Banquet.JPG" alt="Striplex Banquet" style="width:100%" "Height:100%">
					         <h3>Striplex Banquet</h3>
					         <p> DELHI Inderlok </p>
                             <p class="price"> PER PLATE (VEG & NON-VEG) ₹ 1,150 - 1,250 </p>
					       
						</div>
				</div>					
								
					  
    </div>						
					  
    </div>
	           <div class="container-fluid" style="margin-top:150px">
			 <center><h3 id="JAIPUR" style="color:#D4042A;font-style:Comic Sans;font-weigth:800;font-size:40px">JAIPUR</h3></center>
			 <BR>
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="V_Detail.php.php?ID=V19">
					         <img src="VENUES/Swarn Mahal.JPG" alt="Swarn Mahal" style="width:100%" "Height:100%">
					         <h3>Swarn Mahal, The Banquet</h3>
					         <p>Vaishali Nagar, Jaipur </p>
                             <p class="price"> PER PLATE 1,100 </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="V_Detail.php.php?ID=V20">
					         <img src="VENUES/Chomu.jpg" alt=" Chomu" style="width:100%" "Height:100%">
					         <h3>Chomu Palace Hotel</h3>
					         <p> Chomu, Jaipur</p>
                             <p class="price"> PER PLATE 1200</p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="V_Detail.php.php?ID=V21">
					         <img src="VENUES/Sterling Atharva.JPG" alt="Sterling Atharva," style="width:100%" "Height:100%">
					         <h3>Sterling Atharva Resorts</h3>
					         <p>Bhankrota,Jaipur </p>
                             <p class="price"> PER PLATE 1,200</p>
					         </a>
						</div>
				</div>	
         </div>
		             <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="V_Detail.php.php?ID=V21">
					         <img src="VENUES/Dee Boat.JPG" alt="Swarn Mahal" style="width:100%" "Height:100%">
					         <h3>Dee Boat House</h3>
					         <p>Vidhyadhar Nagar,jaipur </p>
                             <p class="price"> PER PLATE 1,100 </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="V_Detail.php?ID=V22">
					         <img src="VENUES/Jaibagh Palace.JPG" alt="Jaibagh Palace" style="width:100%" "Height:100%">
					         <h3>Jaibagh Palace</h3>
					         <p> Kukas , Jaipur </p>
                             <p class="price"> PER PLATE 2,000 </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="V_Detail.php?ID=V23">
					         <img src="VENUES/Rajwada Resort.JPG" alt="The Rajwada Resort" style="width:100%" "Height:100%">
					         <h3>The Rajwada Resort and Spa</h3>
					         <p>Vaishali Nagar, Jaipur </p>
                             <p class="price"> PER PLATE 1,500 </p>
					         </a>
						</div>
				</div>	
         </div>
	<div class="container-fluid" style="margin-top:150px">
		<center><h3 id="MUMBAI" style="color:#D4042A;font-style:Comic Sans;font-weigth:800;font-size:40px">MUMBAI</h3></center>
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="V_Detail.php?ID=V24">
					         <img src="VENUES/Four Season.JPG" alt="Four Seasons Hotel" style="width:100%" "Height:100%">
					         <h3>Four Seasons Hotel</h3>
					         <p> Worli, Mumbai </p>
                             <p class="price"> PER PLATE 3,500 </p>
					          </a>
						</div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="V_Detail.php?ID=V25">
					         <img src="VENUES/Omega Banquet.JPG" alt="Omega Banquet" style="width:100%" "Height:100%">
					         <h3>Omega Banquet</h3>
					         <p>  Mira Road, Mumbai</p>
                             <p class="price"> PER PLATE 1400-1700 </p>
					          </a>
						</div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="V_Detail.php?ID=V26">
					         <img src="VENUES/Royal Halls.JPG" alt="The Royal Halls" style="width:100%" "Height:100%">
					         <h3>The Royal Halls</h3>
					         <p>  Worli, Mumbai</p>
                             <p class="price"> PER PLATE 1900 </p>
							  </a>
					     </div>
				</div>	
		</div>
	<div class="container-fluid" style="margin-top:150px">		
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="V_Detail.php?ID=V27">
					         <img src="VENUES/The Club.JPG" alt="The Club" style="width:100%" "Height:100%">
					         <h3>The Club</h3>
					         <p>   Andheri West, Mumbai</p>
                             <p class="price"> PER PLATE 1650 </p>
							  </a>
					    </div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="V_Detail.php?ID=V28">
					         <img src="VENUES/River Winds Resort.JPG" alt="River Winds Resort" style="width:100%" "Height:100%">
					         <h3>River Winds Resort</h3>
					         <p>  Ulhasnagar, Mumbai</p>
                             <p class="price"> PER PLATE 2000 </p>
					          </a>
						</div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="V_Detail.php?ID=V29">
					         <img src="VENUES/B K Resort.JPG" alt="B K Resort" style="width:100%" "Height:100%">
					         <h3>B K Resort</h3>
					         <p>  Thane, Mumbai</p>
                             <p class="price"> PER PLATE 500 </p>
							  </a>
						</div>
				</div>
            </div>	
			<div class="container-fluid" style="margin-top:150px">		
			   <center><h3 id="UDAIPUR" style="color:#D4042A;font-style:Comic Sans;font-weigth:800;font-size:40px">UDAIPUR</h3></center>
			   <BR>
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="V_Detail.php?ID=V30">
					         <img src="VENUES/Chunda Palace.JPG" alt="Chunda Palace" style="width:100%" "Height:100%">
					         <h3>Chunda Palace</h3>
					         <p>  Titardi, Udaipur</p>
                             <p class="price"> PER PLATE 1200</p>
							  </a>
					    </div>
				</div>	
								<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="V_Detail.php?ID=V31">
					         <img src="VENUES/Leela Palace.JPG" alt="Leela Palace" style="width:100%" "Height:100%">
					         <h3>The Leela Palace</h3>
					         <p>  Surajpole,Udaipur</p>
                             <p class="price"> PER PLATE 4000</p>
							  </a>
					    </div>
				</div>	
								<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="V_Detail.php?ID=V32">
					         <img src="VENUES/Labh Garh.JPG" alt="Labh Garh Resort" style="width:100%" "Height:100%">
					         <h3>Labh Garh Resort</h3>
					         <p>  Udaipur</p>
                             <p class="price"> PER PLATE 1000</p>
							  </a>
					    </div>
				</div>	
			</div>
			<div class="container-fluid" style="margin-top:150px">		
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="V_Detail.php?ID=V33">
					         <img src="VENUES/Udai Bagh.JPG" alt="Udai Bagh" style="width:100%" "Height:100%">
					         <h3>Udai Bagh</h3>
					         <p>  Udaipur</p>
                             <p class="price"> PER PLATE 2000</p>
							  </a>
					    </div>
				</div>	
								<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="V_Detail.php?ID=V34">
					         <img src="VENUES/Oberoi.JPG" alt="Oberoi" style="width:100%" "Height:100%">
					         <h3>The Oberoi Udaivilas</h3>
					         <p>  Surajpole,Udaipur</p>
                             <p class="price"> PER PLATE 8500</p>
							  </a>
					    </div>
				</div>	
								<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="V_Detail.php?ID=V35">
						
					         <img src="VENUES/Hotel Udai Kothi.JPG" alt="Artist House" style="width:100%" "Height:100%">
					         <h3>Hotel Udai Kothi</h3>
					         <p>  Udaipur</p>
                             <p class="price"> PER PLATE 1500</p>
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
