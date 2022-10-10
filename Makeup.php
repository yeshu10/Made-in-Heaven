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
			}

			.price {
			  color: grey;
			  font-size: 17px;
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
			 }
    </style>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
<body>
<div >    
     <center><h1 style="color:#DE0443;font-weigth:900;font-size:100px">MAKEUP ARTIST</h1></center> 
  </div>
    <div class="container-fluid" style="margin-top:150px">
          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="M_Detail.php?ID=M01">
					         <img src="MAKEUP/1.JPEG" style="width:100%" "Height:100%">
					         <h3>Radiance - Beautiful Colorful You </h3>
					         <p>  Bangalore </p>
                             <p class="price">₹ 5,000 For Bridal Makeup </p>	
                            </a>							 
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="M_Detail.php?ID=M02">
					         <img src="MAKEUP/2.JPG" style="width:100%" "Height:100%">
					         <h3>Beauty Tales </h3>
					         <p>  Bangalore </p>
                             <p class="price">₹ 8,000 For Bridal Makeup </p>
							    </a>
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M03">
					         <img src="MAKEUP/3.JPEG" style="width:100%" "Height:100%">
					         <h3>GlossNGlass </h3>
					         <p>  Indiranagar, Bangalore </p>
                             <p class="price">₹ 5,000 For Bridal Makeup </p>	
                         </a>							 
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M04">
					         <img src="MAKEUP/4.JPG" style="width:100%" "Height:100%">
					         <h3>MN Makeup Artist </h3>
					         <p>  Koramangala,Bangalore </p>
                             <p class="price">₹ 15,000 For Bridal Makeup </p>				         
						</a>
						</div>
				</div>
    </div>
    <div class="container-fluid" style="margin-top:150px">
          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="M_Detail.php?ID=M05">
					         <img src="MAKEUP/5.JPG" style="width:100%" "Height:100%">
					         <h3>Makeup by Disha </h3>
					         <p> South Bangalore,Bangalore </p>
                             <p class="price">₹ 5,000 For Bridal Makeup </p>				         
						</a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M06">
					         <img src="MAKEUP/6.JPG" style="width:100%" "Height:100%">
					         <h3>Beauty Tales </h3>
					         <p>  Bangalore </p>
                             <p class="price">₹ 8,000 For Bridal Makeup </p>
						</a>
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M07">
					         <img src="MAKEUP/7.JPG" style="width:100%" "Height:100%">
					         <h3>Diva Makeovers </h3>
					         <p>   Koramangala, Bangalore </p>
                             <p class="price">₹ 5,000 For Bridal Makeup </p>				         
						</a>
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M08">
					         <img src="MAKEUP/8.JPG" style="width:100%" "Height:100%">
					         <h3>Asha Makeover </h3>
					         <p>  Koramangala Bangalore </p>
                             <p class="price">₹ 20,000 For Bridal Makeup </p>				         
						</a>
						</div>
				</div>
    </div>	
	 <div class="container-fluid" style="margin-top:150px">
	     <center><h3 id="CHENNAI" style="color:#D4042A;font-style:Comic Sans;font-weigth:800;font-size:40px">CHENNAI</h3></center>
          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M09">
					         <img src="MAKEUP/9.JPG" style="width:100%" "Height:100%">
					         <h3>Makeover by Thanu </h3>
					         <p>  Mylapore, Chennai </p>
                             <p class="price">₹ 15,000 For Bridal Makeup </p>				         
						</a>
						</div>
			</div>	
			          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M10">
					         <img src="MAKEUP/10.JPG" style="width:100%" "Height:100%">
					         <h3>Kanchi Makeovers </h3>
					         <p> Medavakkam,, Chennai </p>
                             <p class="price">₹ 25,000 For Bridal Makeup </p>				         
						</a>
						</div>
			</div>	
			          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="M_Detail.php?ID=M11">
					         <img src="MAKEUP/11.JPG" style="width:100%" "Height:100%">
					         <h3>Magicwand Makeovers </h3>
					         <p>  Chennai </p>
                             <p class="price">₹ 20,000 For Bridal Makeup </p>				         
						</a>
						</div>
			</div>	
			          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						   <a href="M_Detail.php?ID=M12">
					         <img src="MAKEUP/12.JPG" style="width:100%" "Height:100%">
					         <h3>AJ Makeover</h3>
					         <p>  Koyambedu, Chennai </p>
                             <p class="price">₹ 15,000 For Bridal Makeup </p>				         
						</a>
						</div>
			</div>	
	</div>		
		 <div class="container-fluid" style="margin-top:150px">
          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						     <a href="M_Detail.php?ID=M12">
					         <img src="MAKEUP/13.JPG" style="width:100%" "Height:100%">
					         <h3>Jaanus Makeover </h3>
					         <p>  Chennai </p>
                             <p class="price">₹ 15,000 For Bridal Makeup </p>				         
						</a>
						</div>
			</div>	
			          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="M_Detail.php?ID=M13">
					         <img src="MAKEUP/14.JPG" style="width:100%" "Height:100%">
					         <h3>Bliss Makeup by Priya </h3>
					         <p> Kilpauk, Chennai </p>
                             <p class="price">₹ 8,000 For Bridal Makeup </p>				         
						</a>
						</div>
			</div>	
			          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M15">
					         <img src="MAKEUP/15.JPEG" style="width:100%" "Height:100%">
					         <h3>The Beauty Portrait</h3>
					         <p>  Chennai </p>
                             <p class="price">₹ 9,000 For Bridal Makeup </p>				         
						</a>
						</div>
			</div>	
			          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						    <a href="M_Detail.php?ID=M16">
					         <img src="MAKEUP/16.JPG" style="width:100%" "Height:100%">
					         <h3>J Bridal Works</h3>
					         <p>  Koyambedu, Chennai </p>
                             <p class="price">₹ 15,000 For Bridal Makeup </p>				         
						</a>
						</div>
			</div>	
	</div>
        <div class="container-fluid" style="margin-top:150px">
          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M17">
					         <img src="MAKEUP/17.JPG" style="width:100%" "Height:100%">
					         <h3>Madmascara India </h3>
					         <p> Gurgaon, Delhi NCR </p>
                             <p class="price">₹ 15,000 For Bridal Makeup </p>				         
						</a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M18">
					         <img src="MAKEUP/18.JPG" style="width:100%" "Height:100%">
					         <h3>Arvind Kaur Makeover</h3>
					         <p> East Delhi, Delhi NCR</p>
                             <p class="price">₹ 18,000 For Bridal Makeup </p>
						</a>
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M19">
					         <img src="MAKEUP/19.JPG" style="width:100%" "Height:100%">
					         <h3>Blush Lounge </h3>
					         <p>   Saket, Delhi NCR </p>
                             <p class="price">₹ 20,000 For Bridal Makeup </p>				         
						</a>
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M20">
					         <img src="MAKEUP/20.JPG" style="width:100%" "Height:100%">
					         <h3>Fabulous Faces By Disha </h3>
					         <p>  Gurgaon, Delhi NCR </p>
                             <p class="price">₹ 30,000 For Bridal Makeup </p>				         
						</a>
						</div>
				</div>
    </div>
    <div class="container-fluid" style="margin-top:150px">
          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M21">
					         <img src="MAKEUP/21.JPG" style="width:100%" "Height:100%">
					         <h3>Madmascara India </h3>
					         <p> Gurgaon, Delhi NCR </p>
                             <p class="price">₹ 15,000 For Bridal Makeup </p>				         
						</a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M22">
					         <img src="MAKEUP/22.JPG" style="width:100%" "Height:100%">
					         <h3>NOOR by Aastha</h3>
					         <p> Gurgaon, Delhi NCR</p>
                             <p class="price">₹ 18,000 For Bridal Makeup </p>
						</a>
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M23">
					         <img src="MAKEUP/23.JPG" style="width:100%" "Height:100%">
					         <h3>Glamour Makeup by Kanika </h3>
					         <p>  East Delhi, Delhi NCR </p>
                             <p class="price">₹ 20,000 For Bridal Makeup </p>				         
						</a>
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M24">
					         <img src="MAKEUP/24.JPG" style="width:100%" "Height:100%">
					         <h3>Yoshita</h3>
					         <p> South Delhi, Delhi NCR </p>
                             <p class="price">₹ 30,000 For Bridal Makeup </p>				         
						</a>
						</div>
				</div>
    </div>	
	<div class="container-fluid" style="margin-top:150px">
	 <center><h3 id="JAIPUR" style="color:#D4042A;font-style:Comic Sans;font-weigth:800;font-size:40px">JAIPUR</h3></center>
			 <BR>
          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M25">
					         <img src="MAKEUP/25.JPG" style="width:100%" "Height:100%">
					         <h3>Flames of Hue </h3>
					         <p> JLN Marg, Jaipur</p>
                             <p class="price">₹ 19,000 For Bridal Makeup </p>				         
						</a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M26">
					         <img src="MAKEUP/26.JPG" style="width:100%" "Height:100%">
					         <h3>Maashra Makeup Artist </h3>
					         <p> Vaishali Nagar, Jaipur</p>
                             <p class="price">₹ 10,000 For Bridal Makeup </p>				         
						</a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						  <a href="M_Detail.php?ID=M27">
					         <img src="MAKEUP/27.JPG" style="width:100%" "Height:100%">
					         <h3>WOW Beauty Salon</h3>
					         <p> JLN Marg, Jaipur</p>
                             <p class="price">₹ 11,000 For Bridal Makeup </p>				         
						</a>
						</div>
				</div>	<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M28">
					         <img src="MAKEUP/28.JPG" style="width:100%" "Height:100%">
					         <h3>Tangerine Salon </h3>
					         <p>  Jaipur</p>
                             <p class="price">₹ 12,000 For Bridal Makeup </p>				         
						</a>
						</div>
				</div>	
	</div>			
	<div class="container-fluid" style="margin-top:150px">
          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M29">
					         <img src="MAKEUP/29.JPG" style="width:100%" "Height:100%">
					         <h3>Makeup by Annie </h3>
					         <p> JLN Marg, Jaipur</p>
                             <p class="price">₹ 20,000 For Bridal Makeup </p>				         
						</a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M30">
					         <img src="MAKEUP/30.JPEG" style="width:100%" "Height:100%">
					         <h3>Akdairies Makeover</h3>
					         <p> Malviya Nagar,,Jaipur</p>
                             <p class="price">₹ 30,000 For Bridal Makeup </p>				         
						</a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M31">
					         <img src="MAKEUP/31.JPG" style="width:100%" "Height:100%">
					         <h3>D-Day Makeovers </h3>
					         <p> Vidhyadhar Nagar,Jaipur</p>
                             <p class="price">₹ 15,000 For Bridal Makeup </p>				         
						</a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M32">
					         <img src="MAKEUP/32.JPG" style="width:100%" "Height:100%">
					         <h3>Makeup by Navya </h3>
					         <p> Vidhyadhar Nagar,Jaipur</p>
                             <p class="price">₹ 14,000 For Bridal Makeup </p>				         
						</a></div>
				</div>	
	</div>
    <div class="container-fluid" style="margin-top:150px">
		 <center><h3 id="MUMBAI" style="color:#D4042A;font-style:Comic Sans;font-weigth:800;font-size:40px">MUMBAI</h3></center>
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M33">
					         <img src="MAKEUP/33.JPEG" style="width:100%" "Height:100%">
					         <h3>Makeupartistic</h3>
					         <p> Tardeo, Mumbai</p>
                             <p class="price">₹ 15,000 For Bridal Makeup </p>
	        			</a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M34">
					         <img src="MAKEUP/34.JPG" style="width:100%" "Height:100%">
					         <h3>Neha Seehra </h3>
					         <p> Bandra, Mumbai</p>
                             <p class="price">₹ 16,000 For Bridal Makeup </p>
					   	</a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M35">
					         <img src="MAKEUP/35.JPG" style="width:100%" "Height:100%">
					         <h3>Crown Stone</h3>
					         <p>  Ghatkopar, Mumbai</p>
                             <p class="price">₹ 22,000 For Bridal Makeup </p>
					        </a>
							</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6"> 				
						<div class="card">
						<a href="M_Detail.php?ID=M36">
					         <img src="MAKEUP/36.JPG" style="width:100%" "Height:100%">
					         <h3>Liberté By Hiral</h3>
                             <p>  Ghatkopar, Mumbai</p>
                             <p class="price">₹ 12,000 For Bridal Makeup </p>				         
						</a>
						</div>
				</div>	
			</div>	
    <div class="container-fluid" style="margin-top:150px">
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
					   <div class="card">
					   <a href="M_Detail.php?ID=M37">
					         <img src="MAKEUP/37.JPG" style="width:100%" "Height:100%">
					         <h3>Remarkable You</h3>
							 <p>  Worli, Mumbai</p>
                             <p class="price">₹ 15,000 For Bridal Makeup </p>
					    </a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M38">
					         <img src="MAKEUP/38.JPG" style="width:100%" "Height:100%">
					         <h3>Glamup by Sonali </h3>
                             <p>Andheri East, Mumbai</p>
                             <p class="price">₹ 8,000 For Bridal Makeup </p>
					     </a>
						 </div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php?ID=M39">
					         <img src="MAKEUP/39.JPG" style="width:100%" "Height:100%">
					         <h3>Makeover by Manisha</h3>
					         <p>Bandra, Mumbai</p>
                             <p class="price">₹ 6,500 For Bridal Makeup </p>
					      </a>
						  </div>
				</div>	
		        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 <div class="card"><a href="M_Detail.php?ID=M40">
					         <img src="MAKEUP/40.JPG" style="width:100%" "Height:100%">
					         <h3>Tangerine Salon</h3>
					         <p>Bandra, Mumbai</p>
                             <p class="price">₹ 16,500 For Bridal Makeup </p>
					      </a>
						  </div>
				</div>	
		</div>		    
			 

	<div class="container-fluid" style="margin-top:150px">
	      <center><h3 id="UDAIPUR" style="color:#D4042A;font-style:Comic Sans;font-weigth:800;font-size:40px">UDAIPUR</h3></center>
			   <BR> 
         	<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 						  <div class="card"><a href="M_Detail.php?ID=M41">
					         <img src="MAKEUP/41.JPG" style="width:100%" "Height:100%">
					         <h3>Maashra Makeup Artist </h3>
					         <p> Udaipur, Ahmedabad </p>
                             <p class="price">₹ 20,000 For Bridal Makeup </p>
						</a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 						  <div class="card"><a href="M_Detail.php?ID=M42">
					         <img src="MAKEUP/42.JPG" style="width:100%" "Height:100%">
					         <h3>Shilpas Styling Strokes </h3>
					         <p> Udaipur, Ahmedabad </p>
                             <p class="price">₹ 15,000 For Bridal Makeup </p>
						</a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 
						  <div class="card"><a href="M_Detail.php?ID=M43">
					         <img src="MAKEUP/43.JPG" style="width:100%" "Height:100%">
					         <h3>Makeovers By Kamakshi </h3>
					         <p> Udaipur, Ahmedabad </p>
                             <p class="price">₹ 20,000 For Bridal Makeup </p>
					     </a>
						 </div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 
						  <div class="card"><a href="M_Detail.php?ID=M44">
					         <img src="MAKEUP/44.JPG" style="width:100%" "Height:100%">
					         <h3>Mesmerizing Touch </h3>
					         <p> Udaipur, Ahmedabad </p>
                             <p class="price">₹ 12,000 For Bridal Makeup </p>
					     </a>
						 </div>
				</div>	
										
					  
    </div>
	<div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 
						  <div class="card"><a href="M_Detail.php?ID=M45">
					         <img src="MAKEUP/45.JPG" style="width:100%" "Height:100%">
					         <h3>Get Gorgeous Makeup Studio </h3>
					         <p> Udaipur, Ahmedabad </p>
                             <p class="price">₹ 12,000 For Bridal Makeup </p>
					  	</a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 
						  <div class="card"><a href="M_Detail.php?ID=M46">
					         <img src="MAKEUP/46.JPG" style="width:100%" "Height:100%">
					         <h3>First Impression  </h3>
					         <p> Udaipur, Ahmedabad </p>
                             <p class="price">₹ 16,000 For Bridal Makeup </p>
						</a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 
						  <div class="card"><a href="M_Detail.php?ID=M47">
					         <img src="MAKEUP/47.JPG" style="width:100%" "Height:100%">
					         <h3>Lush Looks  </h3>
					         <p> Udaipur, Ahmedabad </p>
                             <p class="price">₹ 10,000 For Bridal Makeup </p>				        
						</a>
						</div>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
						 						  <div class="card"><a href="M_Detail.php?ID=M48">
					         <img src="MAKEUP/48.JPG" style="width:100%" "Height:100%">
					         <h3>Beautyline </h3>
					         <p> Udaipur, Ahmedabad </p>
                             <p class="price">₹ 20,000 For Bridal Makeup </p>	
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
