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
<body>   
   <center><h1 style="color:#DE0443;font-FAMILY:Segoe Print;font-weigth:900;font-size:100px">MEHNDI ARTIST</h1></center>
   <div class="container-fluid" style="margin-top:150px">
		     <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="H_Detail.php?ID=H01">
					         <img src="MEHNDI/1.JPG" style="width:100%" "Height:100%">
					         <h3>Glamourous Floral </h3>
							 <p>  South Bangalore, Bangalore </p>
                             <p class="price">1,00,000-30,00,000</p>
					        </a> 
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="H_Detail.php?ID=H01">
					         <img src="MEHNDI/2.JPG" style="width:100%" "Height:100%">
					         <h3>Mehandi by Aleena</h3>
							 <p>  Bangalore </p>
                             <p class="price">1,00,000-15,00,000</p>
					         
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						     <a href="H_Detail.php?ID=H01">
					         <img src="MEHNDI/3.JPG" style="width:100%" "Height:100%">
					         <h3>Khushii Mehendi Art</h3>
							 <p>  South Bangalore, Bangalore </p>
                             <p class="price">1,50,000-35,00,000</p>
					         
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="H_Detail.php?ID=H01">
					         <img src="MEHNDI/4.JPG" style="width:100%" "Height:100%">
					         <h3>Henna Strings</h3>
							 <p>  South Bangalore, Bangalore </p>
                             <p class="price">80,000-2,00,000</p>
					         
						</div>
				</div>
        </div>					
	    <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="H_Detail.php?ID=H01">
					         <img src="MEHNDI/5.JPG" style="width:100%" "Height:100%">
					         <h3>Mehendi Delight</h3>
							 <p>  South Bangalore, Bangalore </p>
                             <p class="price">1,00,000-30,00,000</p>
					         
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="H_Detail.php?ID=H01">
					         <img src="MEHNDI/6.JPG" style="width:100%" "Height:100%">
					         <h3>The Bridal Stain</h3>
							 <p>  South Bangalore, Bangalore </p>
                             <p class="price">90,000-3,00,000</p>
					         
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="H_Detail.php?ID=H01">
					         <img src="MEHNDI/7.JPG" style="width:100%" "Height:100%">
					         <h3>Elegant Mehendi</h3>
							 <p>  South Bangalore, Bangalore </p>
                             <p class="price">1,00,000-30,00,000</p>
					         
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="H_Detail.php?ID=H01">
					         <img src="MEHNDI/8.JPG" style="width:100%" "Height:100%">
					         <h3>Almaz Mehendi</h3>
							 <p>   Bangalore </p>
                             <p class="price">2,00,000-20,00,000</p>
					         
						</div>
				</div>
        </div>	
        
        				
	<div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/9.JPG" style="width:100%" "Height:100%">
					         <h3>Alluring Designs</h3>

					         <p>  Guindy, Chennai </p>
                             <p class="price">₹ 75,00,000-3,00,000 </p>
					         
						</div>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/10.JPG" style="width:100%" "Height:100%">
					         <h3>Abi Bridal Mehndi</h3>

					         <p>  Chennai </p>
                             <p class="price">₹ 1,60,00,000-10,00,000 </p>
					         
						</div>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/11.JPG" style="width:100%" "Height:100%">
					         <h3>Fathima Naziya</h3>

					         <p>Egmo,Chennai </p>
                             <p class="price">₹ 2,00,000-23,00,000 </p>
					         
						</div>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/12.JPG" style="width:100%" "Height:100%">
					         <h3>Mehandi by Lulva</h3>
							 <p>  Guindy, Chennai </p>
                             <p class="price">₹ 5,00,000-25,00,000 </p>
					      </div>
				</div>
	</div>	
     <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/13.JPG" style="width:100%" "Height:100%">
					         <h3>Kaveri Professional </h3>
                              <p>   Chennai </p>
                             <p class="price">₹ 85,000-3,00,000 </p>
					         
						</div>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/14.JPG" style="width:100%" "Height:100%">
					         <h3>Creative Henna Arts</h3>
							 <p>   Vadapalani, Chennai </p>
                             <p class="price">₹ 70,000-5,00,000 </p>
					         
						</div>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/15.JPG" style="width:100%" "Height:100%">
					         <h3>The Perfect Stain</h3>
					         <p> Koyambedu,, Chennai </p>
                             <p class="price">₹ 1,00,000-20,00,000 </p>
					         
						</div>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/16.JPG" style="width:100%" "Height:100%">
					         <h3>White Reflections</h3>
					         <p> Koyambedu,, Chennai </p>
                             <p class="price">₹ 5,00,000-20,00,000 </p>
					         
						</div>
				</div>
	</div>	
      <div class="container-fluid" style="margin-top:150px">
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/17.JPG" style="width:100%" "Height:100%">
					         <h3>Gautmi Khanna Designs</h3>
					         <p> Delhi NCR </p>
                              <p class="price">₹ 5,00,000-10,00,000 </p>
					         
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/18.JPG" style="width:100%" "Height:100%">
					         <h3>Sepia Events</h3>
					         <p> Central ,Delhi NCR </p>
                              <p class="price">₹ 5,00,000-30,00,000 </p>
					         
						 </div>
				</div><div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/19.JPG" style="width:100%" "Height:100%">
					         <h3>With Love Noor</h3>
					         <p> Delhi NCR </p>
                              <p class="price">₹ 3,00,000-18,00,000 </p>
					         
						 </div>
				</div><div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/20.JPG" style="width:100%" "Height:100%">
					         <h3>Eventalya</h3>
					         <p> Delhi NCR </p>
                              <p class="price">₹ 5,00,000-10,00,000 </p>
					         
						 </div>
				</div>
       </div>	
	    <div class="container-fluid" style="margin-top:150px">
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/21.JPG" style="width:100%" "Height:100%">
					         <h3>Decor by Makebestday</h3>
					         <p>  West Delhi</p>
                              <p class="price">₹ 1,00,000-10,00,000 </p>
					         
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/22.JPG" style="width:100%" "Height:100%">
					         <h3>Wedding Craft</h3>
					         <p> Delhi NCR </p>
                              <p class="price">₹ 2,50,000-20,00,000 </p>
					         
						 </div>
				</div><div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/23.JPG" style="width:100%" "Height:100%">
					         <h3>The Eventwalaz</h3>
					         <p> Delhi NCR </p>
                              <p class="price">₹ 5,50,000-15,00,000 </p>
					         
						 </div>
				</div><div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/24.JPG" style="width:100%" "Height:100%">
					         <h3>Nas Mehendhi</h3>
					         <p>  West Delhi </p>
                              <p class="price">₹ 3,50,000-25,00,000 </p>
					         
						 </div>
				</div>
       </div>	     
        <div class="container-fluid" style="margin-top:150px">
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/25.JPG" style="width:100%" "Height:100%">
					         <h3>Expectations</h3>
					         <p>  Jaipur </p>
                              <p class="price">₹ 11,000 Onwards </p>
					         
						 </div>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/26.JPG" style="width:100%" "Height:100%">
					         <h3>Shalini Mehendi Artist</h3>
					         <p>  Jaipur </p>
                              <p class="price">₹ 1,50,000-20,00,000 </p>
					         
						 </div>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/27.JPG" style="width:100%" "Height:100%">
					         <h3>Sara Mehendi Art</h3>
					         <p>  Jaipur </p>
                              <p class="price">₹ 2,50,000-40,00,000 </p>
					         
						 </div>
				</div> <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/28.JPG" style="width:100%" "Height:100%">
					         <h3>Raj Mehandi Artist</h3>
					         <p>  Jaipur </p>
                              <p class="price">₹ 1,00,000-25,00,000 </p>
					         
						 </div>
				</div>
       </div>
	       <div class="container-fluid" style="margin-top:150px">
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/29.JPG" style="width:100%" "Height:100%">
					         <h3>Sara Mehendi Art</h3>
					         <p>  Vaishali Nagar,Jaipur </p>
                              <p class="price">₹ 3,50,000-15,00,000 </p>
					         
						 </div>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/30.JPG" style="width:100%" "Height:100%">
					         <h3>Payal Mehandi</h3>
					         <p> Vaishali Nagar, Jaipur </p>
                              <p class="price">₹ 3,00,000-20,00,000 </p>
					         
						 </div>
				</div>
				 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/31.JPG" style="width:100%" "Height:100%">
					         <h3>Aditis Mehendi Art</h3>
					         <p>  Jaipur </p>
                              <p class="price">₹ 1,50,000-9,00,000 </p>
					         
						 </div>
				</div> <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/32.JPG" style="width:100%" "Height:100%">
					         <h3>Harin's Mehndi</h3>
					         <p>  Jaipur </p>
                              <p class="price">₹ 1,50,000-10,00,000 </p>
					         
						 </div>
				</div>
       </div>
        <div class="container-fluid" style="margin-top:150px">
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/33.JPG" style="width:100%" "Height:100%">
					         <h3>Mehendi Order</h3>
					         <p>Andheri,Mumbai</p>
                              <p class="price">₹ 80,000-40,00,000 </p>					         
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/34.JPG" style="width:100%" "Height:100%">
					         <h3>Naaz Art</h3>
					         <p>Mumbai</p>
                              <p class="price">₹ 5,00,000-50,00,000 </p>					         
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/35.JPG" style="width:100%" "Height:100%">
					         <h3>The Brown Ink</h3>
					         <p>Mumbai</p>
                              <p class="price">₹ 5,00,000-10,00,000 </p>					         
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/36.JPG" style="width:100%" "Height:100%">
					         <h3>Poonam's Mehendi</h3>
					         <p>Santacruz,Mumbai</p>
                              <p class="price">₹ 3,00,000-10,00,000 </p>					         
						 </div>
				</div>
       </div>	
	   <div class="container-fluid" style="margin-top:150px">
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/37.JPG" style="width:100%" "Height:100%">
					         <h3>Anishree Mehendi</h3>
					         <p>Borivali,Mumbai</p>
                              <p class="price">₹ 2,00,000-20,00,000 </p>					         
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/38.JPG" style="width:100%" "Height:100%">
					         <h3>Lata Mehandi</h3>
					         <p>Mumbai</p>
                              <p class="price">₹ 5,00,000-10,00,000 </p>					         
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/39.JPG" style="width:100%" "Height:100%">
					          <h3>Shingar Bridal Mehendi</h3>
					         <p>Worli,Mumbai</p>
                              <p class="price">₹ 6,00,000-30,00,000 </p>					         
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/40.JPG" style="width:100%" "Height:100%">
					         <h3>Creation of Mehndhi</h3>
					         <p>Mumbai</p>
                              <p class="price">₹ 5,00,000-25,00,000 </p>					         
						 </div>
				</div>
       </div>
       <div class="container-fluid" style="margin-top:150px">
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/41.JPG" style="width:100%" "Height:100%">
					         <h3>Blue Bridal Mehendi</h3>
					         <p> Udaipur </p>
                              <p class="price">₹ 2,00,000-27,00,000 </p>
					         
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/42.JPG" style="width:100%" "Height:100%">
					         <h3>Henna By Hasna</h3>
					         <p> Udaipur </p>
                              <p class="price">₹ 1,00,000-75,00,000 </p>
					         
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/43.JPG" style="width:100%" "Height:100%">
					         <h3>aksham Mehandi Art</h3>
					         <p> Udaipur </p>
                              <p class="price">₹ 2,00,000-25,00,000 </p>
					         
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MEHNDI/44.JPG" style="width:100%" "Height:100%">
					         <h3>Shalini Mehendi Artist</h3>
					         <p> Udaipur </p>
                              <p class="price">₹ 1,00,000-11,00,000 </p>
					         
						 </div>
				</div>
       </div>		   
	      <div class="container-fluid" style="margin-top:150px">
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="H_Detail.php?ID=H45">
					         <img src="MEHNDI/45.JPG" style="width:100%" "Height:100%">
					         <h3>Vishal Mehandi Art</h3>
							 <p> Udaipur </p>
                              <p class="price">₹ 1,50,000-30,00,000 </p>
					         
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="H_Detail.php?ID=H46">
					         <img src="MEHNDI/46.JPG" style="width:100%" "Height:100%">
					         <h3>Alankritaa</h3>
					         <p> Udaipur </p>
                              <p class="price">₹ 1,00,000-8,00,000 </p>
					         
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="H_Detail.php?ID=H47">
					         <img src="MEHNDI/47.JPG" style="width:100%" "Height:100%">
					         <h3>Sparkling Events</h3>
					         <p> Udaipur </p>
                              <p class="price">₹ 2,00,000-7,00,000 </p>
					         
						 </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="H_Detail.php?ID=H48">
					         <img src="MEHNDI/48.JPG" style="width:100%" "Height:100%">
					         <h3>Kiran Mehandi Art</h3>
					         <p> Udaipur </p>
                              <p class="price">₹ 2,00,000-10,00,000 </p>
					         
						 </div>
				</div>
       </div>
	 
	    
			</body>
<br> <br>
</html>
<div>


</div>	
