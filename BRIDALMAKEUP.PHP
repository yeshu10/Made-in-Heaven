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
       .slide1,.slide2,.slide3,.slide4,.slide5
			{
				
				height:400px;
				repeat:no-repeat;
				background-position:center;
				background-size:cover;
			}
			.slide1
			{
				background-image: url(JEWELLARY/J0.JPG);
			}
			.slide2
			{
				background-image: url(JEWELLARY/J2.JPG);
			}
			.slide3
			{
				background-image: url(JEWELLARY/J3.JPG);
			}
			.slide4
			{
				background-image: url(JEWELLARY/J8.JPG);
			}
			.slide5
			{
				background-image: url(JEWELLARY/J1.JPG);
			}
			
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

 <div class="container-fluid" style="margin-top:30px">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
	 
	  
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
				<div class="item active">
					<div class="slide1"></div>
					<div class="carousel-caption"></div>
				</div>
				
				<div class="item">
					<div class="slide2"></div>
					<div class="carousel-caption">
					</div>
				</div>
				
				<div class="item">
					<div class="slide3"></div>
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<div class="slide4"></div>
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<div class="slide5"></div>
					<div class="carousel-caption">
					</div>
				</div>
				
				
    </div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right"></span>
		  <span class="sr-only">Next</span>
		</a>
	</div>
</div>   
         


	<div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
						 <a href="M_Detail.php.php?ID=M01">
					         <img src="MAKEUP/1.JPEG" style="width:100%" "Height:100%">
					         <h3>Makeovers By Kamakshi </h3>

					         <p> Udaipur, Ahmedabad </p>
                             <p class="price">₹ 20,000 For Bridal Makeup </p>
					        </a> 
						</div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MAKEUP/2.JPG" style="width:100%" "Height:100%">
					         <h3>Shilpas Styling Strokes </h3>

					         <p> Udaipur, Ahmedabad </p>
                             <p class="price">₹ 15,000 For Bridal Makeup </p>
					         
						</div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MAKEUP/3.JPEG" style="width:100%" "Height:100%">
					         <h3>Makeovers By Kamakshi </h3>

					         <p> Udaipur, Ahmedabad </p>
                             <p class="price">₹ 20,000 For Bridal Makeup </p>
					        
						</div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MAKEUP/4.JPG" style="width:100%" "Height:100%">
					         <h3>Mesmerizing Touch </h3>

					         <p> Udaipur, Ahmedabad </p>
                             <p class="price">₹ 12,000 For Bridal Makeup </p>
					         
						</div>
				</div>	
										
					  
    </div>
	<div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MAKEUP/5.JPG" style="width:100%" "Height:100%">
					         <h3>Mesmerizing Touch </h3>

					         <p> Udaipur, Ahmedabad </p>
                             <p class="price">₹ 12,000 For Bridal Makeup </p>
					         
						</div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MAKEUP/6.JPG" style="width:100%" "Height:100%">
					         <h3>Radiance - Beautiful Colorful You </h3>

					         <p> Udaipur, Ahmedabad </p>
                             <p class="price">₹ 5,000 For Bridal Makeup </p>
					         
						</div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MAKEUP/7.JPG" style="width:100%" "Height:100%">
					         <h3>Beauty Tales </h3>

					         <p> Udaipur, Ahmedabad </p>
                             <p class="price">₹ 8,000 For Bridal Makeup </p>
						</div>
				</div>	
										
					  
    </div>
	<div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MAKEUP/8.JPG" style="width:100%" "Height:100%">
					         <h3>Makeupartistic</h3>

					         <p> Tardeo, Mumbai</p>
                             <p class="price">₹ 15,000 For Bridal Makeup </p>
					         
						</div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MAKEUP/9.JPG" style="width:100%" "Height:100%">
					         <h3>Neha Seehra </h3>

					         <p> Bandra, Mumbai</p>
                             <p class="price">₹ 16,000 For Bridal Makeup </p>
					         
						</div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MAKEUP/10.JPG" style="width:100%" "Height:100%">
					         <h3>Liberté By Hiral<h3>

					         <p>  Ghatkopar, Mumbai</p>
                             <p class="price">₹ 20,000 For Bridal Makeup </p>
					         
						</div>
				</div>	
	
				
					 
		</div>	
            <div class="container-fluid" style="margin-top:150px">
		
               <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MAKEUP/11.JPG" style="width:100%" "Height:100%">
					         <h3>Reemarkable You</h3>
							 <p>  Worli, Mumbai</p>
                             <p class="price">₹ 15,000 For Bridal Makeup </p>
					         
						</div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MAKEUP/12.JPG" style="width:100%" "Height:100%">
					         <h3>Glamup by Sonali </h3>
                             <p>Andheri East, Mumbai</p>
                             <p class="price">₹ 8,000 For Bridal Makeup </p>
					         
						</div>
				</div>	
				<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
						 <div class="card">
					         <img src="MAKEUP/13.JPG" style="width:100%" "Height:100%">
					         <h3>Makeover by ManishaS</h3>
					         <p>Bandra, Mumbai</p>
                             <p class="price">₹ 6,500 For Bridal Makeup </p>
					         
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
