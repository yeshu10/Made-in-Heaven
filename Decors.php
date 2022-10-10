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
<body>  <div >  
<center><h1 style="color:#DE0443;font-weigth:900;font-FAMILY:Segoe Print;font-size:100px">DECORATORS</h1></center> 
        </div>  
        <div class="container-fluid" style="margin-top:90px">
		    <center><h1 id="BANGLORE" style="color:#D4042A;font-FAMILY:Comic Sans MS;font-weigth:900;font-size:40px">BANGALORE</h1></center>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						     <a href="D_Detail.php?ID=D01">
					         <img src="DECORS/1.JPG" style="width:100%" "Height:100%">
					         <h3>Melting Flowers</h3>
							 <p>  South Bangalore, Bangalore </p>
                             <p class="price">1,00,000-30,00,000</p>
					         </a>
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="D_Detail.php?ID=D02">
					         <img src="DECORS/2.JPG" style="width:100%" "Height:100%">
					         <h3>Flinters Management</h3>
							 <p>  Bangalore </p>
                             <p class="price">1,00,000-15,00,000</p>
					        </a>  
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						     <a href="D_Detail.php?ID=D03">
					         <img src="DECORS/3.JPG" style="width:100%" "Height:100%">
					         <h3>Deebash</h3>
							 <p>  South Bangalore, Bangalore </p>
                             <p class="price">1,50,000-35,00,000</p>
					         </a> 
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="D_Detail.php?ID=D04">
					         <img src="DECORS/4.JPG" style="width:100%" "Height:100%">
					         <h3>Purple Knots</h3>
							 <p>  South Bangalore, Bangalore </p>
                             <p class="price">80,000-2,00,000</p>
					          </a>
						</div>
				</div>
        </div>					
	    <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="D_Detail.php?ID=D05">
					         <img src="DECORS/5.JPG" style="width:100%" "Height:100%">
					         <h3>Petals Event</h3>
							 <p>  South Bangalore, Bangalore </p>
                             <p class="price">1,00,000-30,00,000</p>
					          </a>
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="D_Detail.php?ID=D06">
					         <img src="DECORS/6.JPG" style="width:100%" "Height:100%">
					         <h3>Champagne Confetti</h3>
							 <p>  South Bangalore, Bangalore </p>
                             <p class="price">90,000-3,00,000</p>
					         </a> 
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="D_Detail.php?ID=D07">
					         <img src="DECORS/7.JPG" style="width:100%" "Height:100%">
					         <h3>Ohana Fine Flowers</h3>
							 <p>  South Bangalore, Bangalore </p>
                             <p class="price">1,00,000-30,00,000</p>
					         </a> 
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						       <a href="D_Detail.php?ID=D08">
					         <img src="DECORS/8.JPEG" style="width:100%" "Height:100%">
					         <h3>Katha Weddings</h3>
							 <p>   Bangalore </p>
                             <p class="price">2,00,000-20,00,000</p>
					          </a>
						</div>
				</div>
        </div>	
        
        				
	<div class="container-fluid" style="margin-top:150px">
		       <center><h3 id="CHENNAI" style="color:#D4042A;font-FAMILY:Comic Sans MS;font-weigth:800;font-size:40px">CHENNAI</h3></center>
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="D_Detail.php?ID=D09">
					         <img src="DECORS/9.JPG" style="width:100%" "Height:100%">
					         <h3>Marriage Colours</h3>
					         <p>  Guindy, Chennai </p>
                             <p class="price">₹ 750,000-3,00,000 </p>
					          </a>
						</div>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="D_Detail.php?ID=D10">
					         <img src="DECORS/10.JPG" style="width:100%" "Height:100%">
					         <h3>Wedding Chakra</h3>
							 <p>  Chennai </p>
                             <p class="price">₹ 1,60,00,000-10,00,000 </p>
					          </a>
						</div>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					       <a href="D_Detail.php?ID=D11">
						   <img src="DECORS/11.JPG" style="width:100%" "Height:100%">
					         <h3>Shribha</h3>

					         <p>T Nagar, Chennai </p>
                             <p class="price">₹ 2,00,000-23,00,000 </p>
					          </a>
						</div>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					           <a href="D_Detail.php?ID=D12">
							   <img src="DECORS/12.JPG" style="width:100%" "Height:100%">
					         <h3>Kickheartz Event</h3>
							 <p>  Guindy, Chennai </p>
                             <p class="price">₹ 5,00,000-25,00,000 </p>
							  </a>
					      </div>
				</div>
	</div>	
     <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
                               <a href="D_Detail.php?ID=D13">
							   <img src="DECORS/13.JPG" style="width:100%" "Height:100%">
					         <h3>Kickheartz Event</h3>
                              <p>   Chennai </p>
                             <p class="price">₹ 85,000-3,00,000 </p>
					          </a>
						</div>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					           <a href="D_Detail.php?ID=D14">
							   <img src="DECORS/14.JPG" style="width:100%" "Height:100%">
					         <h3>Lagna Events</h3>
							 <p>   Vadapalani, Chennai </p>
                             <p class="price">₹ 70,000-5,00,000 </p>
					          </a>
						</div>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					            <a href="D_Detail.php?ID=D15">
								<img src="DECORS/15.JPG" style="width:100%" "Height:100%">
					         <h3>Wed Fest</h3>
					         <p> Koyambedu,, Chennai </p>
                             <p class="price">₹ 1,00,000-20,00,000 </p>
					          </a>
						</div>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					            <a href="D_Detail.php?ID=D16">
								<img src="DECORS/16.JPG" style="width:100%" "Height:100%">
					         <h3>White Reflections</h3>
					         <p> Koyambedu,, Chennai </p>
                             <p class="price">₹ 5,00,000-20,00,000 </p>
					          </a>
						</div>
				</div>
	</div>	
      <div class="container-fluid" style="margin-top:150px">
	    <center><h3 id="DELHI" style="color:#D4042A;font-FAMILY:Comic Sans MS;font-weigth:800;font-size:40px">DELHI</h3></center>
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						     <a href="D_Detail.php?ID=D17">
					         <img src="DECORS/17.JPG" style="width:100%" "Height:100%">
					         <h3>Gautmi Khanna Designs</h3>
					         <p> Delhi NCR </p>
                              <p class="price">₹ 5,00,000-10,00,000 </p>
					          </a>
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="D_Detail.php?ID=D18">
					         <img src="DECORS/18.JPG" style="width:100%" "Height:100%">
					         <h3>Sepia Events</h3>
					         <p> Central ,Delhi NCR </p>
                              <p class="price">₹ 5,00,000-30,00,000 </p>
					          </a>
						 </div>
				</div><div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="D_Detail.php?ID=D19">
					         <img src="DECORS/19.JPG" style="width:100%" "Height:100%">
					         <h3>With Love Noor</h3>
					         <p> Delhi NCR </p>
                              <p class="price">₹ 3,00,000-18,00,000 </p>
					          </a>
						 </div>
				</div><div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="D_Detail.php?ID=D20">
					         <img src="DECORS/20.JPG" style="width:100%" "Height:100%">
					         <h3>Eventalya</h3>
					         <p> Delhi NCR </p>
                              <p class="price">₹ 5,00,000-10,00,000 </p>
					           </a>
						 </div>
				</div>
       </div>	
	    <div class="container-fluid" style="margin-top:150px">
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="D_Detail.php?ID=D21">
					         <img src="DECORS/21.JPG" style="width:100%" "Height:100%">
					         <h3>Decor by Makebestday</h3>
					         <p>  West Delhi</p>
                              <p class="price">₹ 1,00,000-10,00,000 </p>
					           </a>
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="D_Detail.php?ID=D22">
					         <img src="DECORS/22.JPG" style="width:100%" "Height:100%">
					         <h3>Wedding Craft</h3>
					         <p> Delhi NCR </p>
                              <p class="price">₹ 2,50,000-20,00,000 </p>
					           </a>
						 </div>
				</div><div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="D_Detail.php?ID=D23">
					         <img src="DECORS/23.JPG" style="width:100%" "Height:100%">
					         <h3>The Eventwalaz</h3>
					         <p> Delhi NCR </p>
                              <p class="price">₹ 5,50,000-15,00,000 </p>
					           </a>
						 </div>
				</div><div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="D_Detail.php?ID=D24">
					         <img src="DECORS/24.JPG" style="width:100%" "Height:100%">
					         <h3>Silver Slate Events</h3>
					         <p>  West Delhi </p>
                              <p class="price">₹ 3,50,000-25,00,000 </p>
					           </a>
						 </div>
				</div>
         <div class="container-fluid" style="margin-top:150px">
		  <center><h3 id="JAIPUR" style="color:#D4042A;font-FAMILY:Comic Sans MS;font-weigth:800;font-size:40px">JAIPUR</h3></center>
			
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="D_Detail.php?ID=D25">
					         <img src="DECORS/25.JPG" style="width:100%" "Height:100%">
					         <h3>House of W</h3>
					         <p>  Jaipur </p>
                              <p class="price">₹ 1,50,000-10,00,000 </p>
					           </a>
						 </div>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					        <a href="D_Detail.php?ID=D26">
							<img src="DECORS/26.JPG" style="width:100%" "Height:100%">
					         <h3>Noon Moon Events</h3>
					         <p>  Jaipur </p>
                              <p class="price">₹ 1,50,000-20,00,000 </p>
					           </a>
						 </div>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="D_Detail.php?ID=D27">
					         <img src="DECORS/27.JPG" style="width:100%" "Height:100%">
					         <h3>Meyraki Events </h3>
					         <p>  Jaipur </p>
                              <p class="price">₹ 2,50,000-40,00,000 </p>
					           </a>
						 </div>
				</div> <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="D_Detail.php?ID=D28">
					         <img src="DECORS/28.JPG" style="width:100%" "Height:100%">
					         <h3>Jazzy Moments Events</h3>
					         <p>  Jaipur </p>
                              <p class="price">₹ 1,00,000-25,00,000 </p>
					           </a>
						 </div>
				</div>
       </div>
	       <div class="container-fluid" style="margin-top:150px">
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						     <a href="D_Detail.php?ID=D29">
					         <img src="DECORS/29.JPG" style="width:100%" "Height:100%">
					         <h3>Shaadi Shagun Events</h3>
					         <p>  Vaishali Nagar,Jaipur </p>
                              <p class="price">₹ 3,50,000-15,00,000 </p>
					           </a>
						 </div>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						     <a href="D_Detail.php?ID=D30">
					         <img src="DECORS/30.JPG" style="width:100%" "Height:100%">
					         <h3>Angel Events</h3>
					         <p> Vaishali Nagar, Jaipur </p>
                              <p class="price">₹ 3,00,000-20,00,000 </p>
					           </a>
						 </div>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="D_Detail.php?ID=D31">
					         <img src="DECORS/31.JPG" style="width:100%" "Height:100%">
					         <h3>P5 Creations</h3>
					         <p>  Jaipur </p>
                              <p class="price">₹ 1,50,000-9,00,000 </p>
					           </a>
						 </div>
				</div> <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						     <a href="D_Detail.php?ID=D32">
					         <img src="DECORS/32.JPG" style="width:100%" "Height:100%">
					         <h3>Shadi Decor</h3>
					         <p>  Jaipur </p>
                              <p class="price">₹ 1,50,000-10,00,000 </p>
					           </a>
						 </div>
				</div>
       </div>
        <div class="container-fluid" style="margin-top:150px">
		<center><h3 id="MUMBAI" style="color:#D4042A;font-FAMILY:Comic Sans MS;font-weigth:800;font-size:40px">MUMBAI</h3></center>
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						     <a href="D_Detail.php?ID=D33">
					         <img src="DECORS/33.JPG" style="width:100%" "Height:100%">
					         <h3>Iris Florals</h3>
					         <p>Andheri,Mumbai</p>
                              <p class="price">₹ 80,000-40,00,000 </p>					         
						   </a>
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="D_Detail.php?ID=D34">
					         <img src="DECORS/34.JPG" style="width:100%" "Height:100%">
					         <h3>Sparklite Entertainment</h3>
					         <p>Mumbai</p>
                              <p class="price">₹ 5,00,000-50,00,000 </p>					         
					      </a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="D_Detail.php?ID=D35">
					         <img src="DECORS/35.JPG" style="width:100%" "Height:100%">
					         <h3>Amaara Decor</h3>
					         <p>Mumbai</p>
                              <p class="price">₹ 5,00,000-10,00,000 </p>					         
						   </a>
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="D_Detail.php?ID=D36">
					         <img src="DECORS/36.JPG" style="width:100%" "Height:100%">
					         <h3>Roop Rang Decorators</h3>
					         <p>Santacruz,Mumbai</p>
                              <p class="price">₹ 3,00,000-10,00,000 </p>					         
						   </a>
						 </div>
				</div>
       </div>	
	   <div class="container-fluid" style="margin-top:150px">
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						     <a href="D_Detail.php?ID=D37">
					         <img src="DECORS/37.JPG" style="width:100%" "Height:100%">
					         <h3>Smart Productions</h3>
					         <p>Borivali,Mumbai</p>
                              <p class="price">₹ 2,00,000-20,00,000 </p>					         
						   </a>
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="D_Detail.php?ID=D38">
					         <img src="DECORS/38.JPG" style="width:100%" "Height:100%">
					         <h3>Vintage Nutters</h3>
					         <p>Mumbai</p>
                              <p class="price">₹ 5,00,000-10,00,000 </p>					         
						  </a>
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="D_Detail.php?ID=D39">
					         <img src="DECORS/39.JPG" style="width:100%" "Height:100%">
					         <h3>Rose Wall Decor</h3>
					         <p>Worli,Mumbai</p>
                              <p class="price">₹ 6,00,000-30,00,000 </p>					         
						   </a>
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						     <a href="D_Detail.php?ID=D40">
					         <img src="DECORS/40.JPEG" style="width:100%" "Height:100%">
					         <h3>Dream Designs</h3>
					         <p>Mumbai</p>
                              <p class="price">₹ 5,00,000-25,00,000 </p>					         
						  </a>
						</div>
				</div>
       </div>
       <div class="container-fluid" style="margin-top:150px">
	        <center><h3 id="UDAIPUR" style="color:#D4042A;font-FAMILY:Comic Sans MS;font-weigth:800;font-size:40px">UDAIPUR</h3></center>
			
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						     <a href="D_Detail.php?ID=D41">
					         <img src="DECORS/41.JPG" style="width:100%" "Height:100%">
					         <h3>Flower By Choice</h3>
					         <p> Udaipur </p>
                              <p class="price">₹ 2,00,000-27,00,000 </p>
					           </a>
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="D_Detail.php?ID=D42">
					         <img src="DECORS/42.JPG" style="width:100%" "Height:100%">
					         <h3>Cupid Events Delight</h3>
					         <p> Udaipur </p>
                              <p class="price">₹ 1,00,000-75,00,000 </p>
					           </a>
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="D_Detail.php?ID=D43">
					         <img src="DECORS/43.JPG" style="width:100%" "Height:100%">
							 <a href="D_Detail.php?ID=D43">
					         <h3>Event Gurus</h3>
					         <p> Udaipur </p>
                              <p class="price">₹ 2,00,000-25,00,000 </p>
					      </a>
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						     <a href="D_Detail.php?ID=D44">
					         <img src="DECORS/44.JPG" style="width:100%" "Height:100%">
					         <h3>The Wed Spark</h3>
					         <p> Udaipur </p>
                              <p class="price">₹ 1,00,000-11,00,000 </p>
					           </a>
						 </div>
				</div>
       </div>		   
	      <div class="container-fluid" style="margin-top:150px">
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="D_Detail.php?ID=D45">
					         <img src="DECORS/45.JPG" style="width:100%" "Height:100%">
					         <h3>Believe Happenings</h3>
					         <p> Udaipur </p>
                              <p class="price">₹ 1,50,000-30,00,000 </p>
					           </a>
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="D_Detail.php?ID=D46">
					         <img src="DECORS/46.JPG" style="width:100%" "Height:100%">
					         <h3>Decor Planners</h3>
					         <p> Udaipur </p>
                              <p class="price">₹ 1,00,000-8,00,000 </p>
					           </a>
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						     <a href="D_Detail.php?ID=D47">
					         <img src="DECORS/47.JPG" style="width:100%" "Height:100%">
					         <h3>WedWingz Events</h3>
					         <p> Udaipur </p>
                              <p class="price">₹ 2,00,000-7,00,000 </p>
					           </a>
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						     <a href="D_Detail.php?ID=D48">
					         <img src="DECORS/48.JPG" style="width:100%" "Height:100%">
					         <h3>Vivaa Events</h3>
					         <p> Udaipur </p>
                              <p class="price">₹ 2,00,000-10,00,000 </p>
					           </a>
						 </div>
				</div>
       </div>
	 
	    
			</body>
<br> <br>
</html>
<div>


</div>	
