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
            .h4			{
			 font-style: italic;
				 font-size: 15px;
				 text-align:left;	
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
			   text-align:left;
			 }
    </style>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
<body>  
      <div >    
     <center><h1 style="color:#DE0443;font-weigth:900;font-size:80px">PHOTOGRAPHERS</h1></center> 
  </div> 
          <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						     <a href="P_Detail.php?ID=P01">
					         <img src="PHOTOGRAPHS/1.JPG" style="width:100%" "Height:100%">
					         <h3>Weddingcinemas</h3>
                              <h4> Bangalore </h4>              
							  <p class="price">Photo + Video ₹90,000 per day  </p>
							  </a>
					         
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="P_Detail.php?ID=P02">
					         <img src="PHOTOGRAPHS/2.JPG" style="width:100%" "Height:100%">
					         <h3>Cinnamon Pictures</h3>
                              <h4> Indiranagar, Bangalore </h4>              
							  <p class="price">Photo + Video ₹1,700 perday </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="P_Detail.php?ID=P03">
					         <img src="PHOTOGRAPHS/3.JPEG" style="width:100%" "Height:100%">
					         <h3>Gold Fish Productions</h3>
                              <h4> Bangalore </h4>              
							  <p class="price">Photo + Video  ₹60,000 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
                            <a href="P_Detail.php?ID=P04">
          					    <img src="PHOTOGRAPHS/4.JPG" style="width:100%" "Height:100%">
					         <h3>The Shutter House</h3>
                              <h4> Bangalore </h4>              
							  <p class="price">Photo + Video ₹ 4500 per day  </p>
					         </a>
						</div>
				</div>	
				
				
					 
		</div>	
         <div class="container-fluid" style="margin-top:150px">
		
               
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="P_Detail.php?ID=P05">
					         <img src="PHOTOGRAPHS/5.JPEG" style="width:100%" "Height:100%">
					         <h3>Twin Flame Productions</h3>
                              <h4> Bangalore </h4>              
							  <p class="price">Photo + Video ₹ 1,00,00 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="P_Detail.php?ID=P06">
					         <img src="PHOTOGRAPHS/6.JPEG" style="width:100%" "Height:100%">
					         <h3>Pixbricks</h3>
                              <h4>Naagarabhaavi, Bangalore </h4>              
							  <p class="price">Photo + Video ₹ 60,000 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="P_Detail.php?ID=P07">
					         <img src="PHOTOGRAPHS/7.JPG" style="width:100%" "Height:100%">
					         <h3>Focus Wala</h3>
                              <h4>  Koramangal,Bangalore </h4>              
							  <p class="price">Photo + Video ₹1,00,00 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">  
						   <a href="P_Detail.php?ID=P08">
					         <img src="PHOTOGRAPHS/8.JPG" style="width:100%" "Height:100%">
					         <h3>Fog Media</h3>
                              <h4>Koramangala, Bangalore </h4>              
							  <p class="price">Photo + Video ₹60,000 per day  </p>
					         </a>
						</div>
				</div>	
				
				
					 
		</div>		    
			    
<h1>Mumbai</h1>	

         <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P09">
					         <img src="PHOTOGRAPHS/9.JPG" style="width:100%" "Height:100%">
					         <h3>The Wedding Fellas</h3>
                              <h4>Chennai </h4>              
							  <p class="price">Photo + Video ₹ 65000 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P10">
					         <img src="PHOTOGRAPHS/10.JPG" style="width:100%" "Height:100%">
					         <h3>Rolls & Reels</h3>
                              <h4>  Mylapore,Chennai  </h4>              
							  <p class="price">Photo + Video ₹ 80,00 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P11">
					         <img src="PHOTOGRAPHS/11.JPG" style="width:100%" "Height:100%">
					         <h3>Moments Photography</h3>
                              <h4>Koyambedu,Chennai </h4>              
							  <p class="price">Photo + Video ₹ 65000 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P12">
					         <img src="PHOTOGRAPHS/12.JPG" style="width:100%" "Height:100%">
					         <h3>The Triangle Services</h3>
                              <h4>  Chennai  </h4>              
							  <p class="price">Photo + Video ₹ 80,00 per day  </p>
					         </a>
						</div>
				</div>	
         </div>			  
        	    	
			 
				
				
					 
		</div>		    	
			 <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P13">
					         <img src="PHOTOGRAPHS/13.JPG" style="width:100%" "Height:100%">
					         <h3>Photontalkies</h3>
                              <h4>Chennai</h4>              
							  <p class="price">Photo + Video ₹ 38,000 per day  </p>
					         </a>
						</div>
				</div>
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P14">
					         <img src="PHOTOGRAPHS/14.JPG" style="width:100%" "Height:100%">
					         <h3>Incognito Frames</h3>
                              <h4>Chennai </h4>              
							  <p class="price">Photo + Video ₹ 75000 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P15">
					         <img src="PHOTOGRAPHS/15.JPG" style="width:100%" "Height:100%">
					         <h3>Candle Light's</h3>
                              <h4>  Chennai  </h4>              
							  <p class="price">Photo + Video ₹ 80,00 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						     <a href="P_Detail.php?ID=P16">
					         <img src="PHOTOGRAPHS/16.JPG" style="width:100%" "Height:100%">
					         <h3>Out of Focus </h3>
                              <h4> Koyambedu,Chennai</h4>              
							  <p class="price">Photo + Video ₹ 38,000 per day  </p>
					         </a>
						</div>
				</div>	
		</div>	
       <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P17">
					         <img src="PHOTOGRAPHS/17.JPG" style="width:100%" "Height:100%">
					         <h3> We Dont Say Cheese</h3>
                              <h4> South Delhi, Delhi NCR</h4>              
							  <p class="price">Photo + Video ₹ 1,00,000 per day  </p>
					         </a>
						</div>
				</div>	
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P18">
					         <img src="PHOTOGRAPHS/18.JPG" style="width:100%" "Height:100%">
					         <h3> Eye of Turtle</h3>
                              <h4>Gurgaon, Delhi NCR</h4>              
							  <p class="price">Photo + Video ₹ 65,00 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="P_Detail.php?ID=P19">
					         <img src="PHOTOGRAPHS/19.JPG" style="width:100%" "Height:100%">
					         <h3>Bright Photographers </h3>
                              <h4>North Delhi, Delhi NCR</h4>              
							  <p class="price">Photo + Video ₹ 80,000 per day  </p>
					         </a>
						</div>
				</div>	
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P20">
					         <img src="PHOTOGRAPHS/20.JPG" style="width:100%" "Height:100%">
					         <h3> The Wedding Rhymer</h3>
                              <h4>Gurgaon, Delhi NCR</h4>              
							  <p class="price">Photo + Video ₹ 78,000 per day  </p>
					         </a>
						</div>
				</div>
		</div>		
		<div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P21">
					         <img src="PHOTOGRAPHS/21.JPG" style="width:100%" "Height:100%">
					         <h3> Lovers Films</h3>
                              <h4> North Delhi, Delhi NCR</h4>              
							  <p class="price">Photo + Video ₹ 1,00,000 per day  </p>
					         </a>
						</div>
				</div>	
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P22">
					         <img src="PHOTOGRAPHS/22.JPG" style="width:100%" "Height:100%">
					         <h3> Eye of Turtle</h3>
                              <h4>Gurgaon, Delhi NCR</h4>              
							  <p class="price">Photo + Video ₹ 65,00 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P23">
					         <img src="PHOTOGRAPHS/23.JPG" style="width:100%" "Height:100%">
					         <h3>Safarnama Films </h3>
                              <h4>North Delhi, Delhi NCR</h4>              
							  <p class="price">Photo + Video ₹ 80,000 per day  </p>
					         </a>
						</div>
				</div>	
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P24">
					         <img src="PHOTOGRAPHS/24.JPEG" style="width:100%" "Height:100%">
					         <h3> Video Tailor</h3>
                              <h4>Gurgaon, Delhi NCR</h4>              
							  <p class="price">Photo + Video  ₹78,000 per day  </p>
					         </a>
						</div>
				</div>
        </div>			
		<div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P25">
					         <img src="PHOTOGRAPHS/25.JPG" style="width:100%" "Height:100%">
					         <h3>Life Moments  </h3>
                              <h4>Mansarovar, Jaipur</h4>              
							  <p class="price">Photo + Video ₹60,000 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P26">
					         <img src="PHOTOGRAPHS/26.JPG" style="width:100%" "Height:100%">
					         <h3>Studio Cameraon</h3>
                              <h4>Pratap Nagar, Jaipur</h4>              
							  <p class="price">Photo + Video ₹48,00 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P27">
					         <img src="PHOTOGRAPHS/27.JPG" style="width:100%" "Height:100%">
					         <h3>TheWeddingShoot</h3>
                              <h4> Jaipur</h4>              
							  <p class="price">Photo + Video ₹ 40,000 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P28">
					         <img src="PHOTOGRAPHS/28.JPG" style="width:100%" "Height:100%">
					         <h3>North Water Star</h3>
                              <h4> Jaipur</h4>              
							  <p class="price">Photo + Video ₹ 50,000 per day  </p>
					         </a>
						</div>
				</div>	
		</div>		 		 
        <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P29">
					         <img src="PHOTOGRAPHS/29.JPG" style="width:100%" "Height:100%">
					         <h3>Creative Framebox </h3>
                              <h4>Mansarovar, Jaipur</h4>              
							  <p class="price">Photo + Video ₹ 46,000 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="P_Detail.php?ID=P30">
					         <img src="PHOTOGRAPHS/30.JPG" style="width:100%" "Height:100%">
					         <h3>PC Photography</h3>
                              <h4>Jaipur</h4>              
							  <p class="price">Photo + Video ₹ 48,00 per day  </p>
					        </a> 
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="P_Detail.php?ID=P31">
					         <img src="PHOTOGRAPHS/31.JPG" style="width:100%" "Height:100%">
					         <h3>Wedding Gala </h3>
                              <h4> Sanganer,Jaipur</h4>              
							  <p class="price">Photo + Video ₹ 40,000 per day  </p>
					        </a> 
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P32">
					         <img src="PHOTOGRAPHS/32.JPG" style="width:100%" "Height:100%">
					         <h3>Photosailors</h3>
                              <h4> Jaipur</h4>              
							  <p class="price">Photo + Video ₹ 45,000 per day  </p>
					         </a>
						</div>
				</div>	
		</div>	
		  <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="P_Detail.php?ID=P33">
					         <img src="PHOTOGRAPHS/33.JPG" style="width:100%" "Height:100%">
					         <h3>The Memory Writers</h3>
                              <h4>Bandra, Mumbai</h4>              
							  <p class="price">Photo + Video ₹ 2,50,000 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="P_Detail.php?ID=P34">
					         <img src="PHOTOGRAPHS/34.JPG" style="width:100%" "Height:100%">
					         <h3> Camera Crew </h3>
                              <h4>Vile Parle, Mumbai</h4>              
							  <p class="price">Photo + Video ₹ 65,00 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						     <a href="P_Detail.php?ID=P35">
					         <img src="PHOTOGRAPHS/35.JPG" style="width:100%" "Height:100%">
					         <h3>Happyframes</h3>
                              <h4>  Mumbai </h4>              
							  <p class="price">Photo + Video ₹ 1,40,000 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="P_Detail.php?ID=P36">
					         <img src="PHOTOGRAPHS/36.JPG" style="width:100%" "Height:100%">
					         <h3>Frozen Memories</h3>
                              <h4>  Mumbai </h4>              
							  <p class="price">Photo + Video ₹ 1,25,000 per day  </p>
					         </a>
						</div>
				</div>	
		</div>
		<div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P37">
					         <img src="PHOTOGRAPHS/37.JPG" style="width:100%" "Height:100%">
					         <h3>Shutter Magik</h3>
                              <h4>Bandra, Mumbai</h4>              
							  <p class="price">Photo + Video ₹ 1,50,000 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P38">
					         <img src="PHOTOGRAPHS/38.JPG" style="width:100%" "Height:100%">
					         <h3> Filming B </h3>
                              <h4>Kandivali, Mumbai</h4>              
							  <p class="price">Photo + Video ₹ 75,00 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="P_Detail.php?ID=P39">
					         <img src="PHOTOGRAPHS/39.JPG" style="width:100%" "Height:100%">
					         <h3>That Big Day</h3>
                              <h4>  Mumbai </h4>              
							  <p class="price">Photo + Video ₹ 85,000 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="P_Detail.php?ID=P40">
					         <img src="PHOTOGRAPHS/40.JPG" style="width:100%" "Height:100%">
					         <h3>Khicchik</h3>
                              <h4>  Mumbai </h4>              
							  <p class="price">Photo + Video ₹ 1,00,000 per day  </p>
					        </a> 
						</div>
				</div>	
				
		</div>
			      
		
        <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="P_Detail.php?ID=P41">
					         <img src="PHOTOGRAPHS/41.JPG" style="width:100%" "Height:100%">
					         <h3>Just Candid </h3>
                              <h4>Udaipur</h4>              
							  <p class="price">Photo + Video ₹ 46,000 per day  </p>
					        </a> 
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="P_Detail.php?ID=P42">
					         <img src="PHOTOGRAPHS/42.JPG" style="width:100%" "Height:100%">
					         <h3>Speaking Frame</h3>
                              <h4>Udaipur</h4>              
							  <p class="price">Photo + Video ₹ 48,00 per day  </p>
					        </a> 
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="P_Detail.php?ID=P43">
					         <img src="PHOTOGRAPHS/43.JPG" style="width:100%" "Height:100%">
					         <h3>PDS Click's </h3>
                              <h4> Udaipur</h4>              
							  <p class="price">Photo + Video ₹ 40,000 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="P_Detail.php?ID=P44">
					         <img src="PHOTOGRAPHS/44.JPG" style="width:100%" "Height:100%">
					         <h3>Pixel Studio </h3>
                              <h4> Udaipur</h4>              
							  <p class="price">Photo + Video ₹ 40,000 per day  </p>
					         </a>
						</div>
				</div>	
				
				
					 
		</div>
         <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P45">
					         <img src="PHOTOGRAPHS/45.JPG" style="width:100%" "Height:100%">
					         <h3> LensKing Photography</h3>
                              <h4>Udaipur</h4>              
							  <p class="price">Photo + Video ₹ 60,000 per day  </p>
					         </a>
						</div>
				</div>	
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						       <a href="P_Detail.php?ID=P46">
					         <img src="PHOTOGRAPHS/46.JPG" style="width:100%" "Height:100%">
					         <h3> Bansal Studio</h3>
                              <h4>Udaipur</h4>              
							  <p class="price">Photo + Video ₹ 65,00 per day  </p>
					         </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P47">
					         <img src="PHOTOGRAPHS/47.JPG" style="width:100%" "Height:100%">
					         <h3>The Wedding Fairytale </h3>
                              <h4> Udaipur</h4>              
							  <p class="price">Photo + Video ₹ 40,000 per day  </p>
					         </a>
						</div>
				</div>	
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						      <a href="P_Detail.php?ID=P48">
					         <img src="PHOTOGRAPHS/48.JPG" style="width:100%" "Height:100%">
					         <h3> Star Photoworks</h3>
                              <h4>Udaipur</h4>              
							  <p class="price">Photo + Video ₹ 20,000 per day  </p>
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
