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
  <script src="jquery.min.js"></script>
  <script src="bootstrap.js"></script>
  <style>
       .slide1,.slide2,.slide3,.slide4,.slide5,.slide6,.slide7,.slide8
			{
				
				height:600px;
				repeat:no-repeat;
				background-position:center;
				background-size:cover;
			}
			.slide1
			{
				background-image: url(S.JPG);
			}
			.slide2
			{
				background-image: url(B.JPG);
			}
			.slide3
			{
				background-image: url(G.JPG);
			}
			.slide4
			{
				background-image: url(C.JPG);
			}
			.slide5
			{
				background-image: url(D.JPG);
			}
			.slide6
			{
				background-image: url(E.JPG);
			}
			.slide7
			{
				background-image: url(F.JPG);
			}
			.slide8
			{
				background-image: url(H.jpg);
			}
			
            .featured-categories
	        {
	           margin-left:80px;
			   margin-top:10px;
	        }
			.featured-categories img
	        { 
				height:300px;
				width:350px;
				padding:
                 padding: 00px 50px 00px 00px;
				 margin: 50px 100px 20px 100px;
				transition:1s;
				cursor:pointer;	 
	        }
			.featured-categories img:hover
	        {
				transform:scale(1.1);
	        }
			a,a:hover
			{
				text-decoration:none;
				color:black;
			}
			Figcaption
			{
				padding: 00px 00px 00px 00px;
				 margin: 00px 100px 00px 100px;
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
	  <li data-target="#myCarousel" data-slide-to="5"></li>
	   <li data-target="#myCarousel" data-slide-to="6"></li>
	    <li data-target="#myCarousel" data-slide-to="7"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
				<div class="item active">
					<div class="slide1"></div>
					<div class="carousel-caption"> </div>
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
				<div class="item">
					<div class="slide6"></div>
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<div class="slide7"></div>
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<div class="slide8"></div>
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
     
      <section class="featured-categories"> 
            <div class="container-fluid">   
                <div class="row">
                    <div class="col-LG-3">
                        <figure>
						    <a href="Venues.php">
							<img src="VENUES/Chunda.JPG"alt="WEDDING VENUES">
							<figcaption><B>WEDDING VENUES</B></figcaption>
							</a>
						</figure>        
                    </div>
                    <div class="col-LG-3">
					    <figure>
						    <a href="Photographer.php">
							<img src="11.JPG">
							<figcaption><b>WEDDING PHOTOGRAPHERS</b></figcaption>
							</a>
						</figure>     
                    </div>	
					
				    <div class="col-LG-3">
					    <figure>
						    <a href="Decors.php">
							<img src="DECORS\35.JPG">
							<figcaption><b>WEDDING DECORATORS</b></figcaption>
							</a>
						</figure>     
                    </div>
                	
				 </div>	
				 
				
					 <div class="row">
					<div class="col-LG-3">
					    <figure>
						    <a href="Makeup.php">
							<img src="MAKEUP\1.JPEG">
							<figcaption><b>BRIDAL MAKEUP</b></figcaption>
                            </a>							
						</figure>	
                    </div>
					<div class="col-LG-3">
					    <figure>
						    <a href="Mehndi.php">
							<img src="MEHNDI\2.JPG">
							<figcaption><b>MEHNDI ARTIST</b></figcaption>
                            </a>							
						</figure>	
                    </div>
					
				 
				
					<div class="col-LG-3">
					    <figure>
						    <a href="Jewel.php">
							<img src="JEWEL/11.JPG">
							<figcaption><b>BRIDAL JEWELLARY</b></figcaption>
                            </a>							
						</figure>	
                    </div>
				</div>	
				<div class="row">
				    <div class="col-LG-3">
					    <figure>
						    <a href="Dress.php">
							<img src="DRESS\8.JPG">
							<figcaption><b>BRIDAL DRESS</b></figcaption>
                            </a>							
						</figure>	
                    </div>
					<div class="col-LG-3">
					    <figure>
						    <a href="Groom.php">
							<img src="GROOM\3.JPG">
							<figcaption><b>GROOMS DRESS</b></figcaption>
                            </a>							
						</figure>	
                    </div>	
					
                    <div class="col-LG-3">
					    <figure>
						    <a href="Catrers.php">
							<img src="Catrers/30.JPG">
							<figcaption><b>CATRERS</b></figcaption>
                            </a>							
						</figure>	
                    </div>
                    	
                    </div>
					 <div class="row">	
					
					 <div class="col-LG-3">
					    <figure>
						    <a href="Cards.php">
							<img src="Z.JPG">
							<figcaption><b>WEDDING CARDS</b></figcaption>
                            </a>							
						</figure>	
                    </div>
				</div>	
									
                    								
			</div>
             </div>				
      </section>
 
</html>
<?php
	include_once "Footer.php";
?>	