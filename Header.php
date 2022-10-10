<head>
<link href="bootstrap.css" rel="stylesheet" type="text/css">
<div>
<nav class="navbar navbar-inverse navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="WED1.php">MADE IN HEAVEN</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="WED1.php">HOME</a></li>
      <li class="dropdown" class="active"><a class="dropdown-toggle" data-toggle="dropdown" href="#">VENUES <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Venues.php#BANGLORE">BANGLORE</a></li>
          <li><a href="Venues.php#CHENNAI">CHENNAI</a></li>
          <li><a href="Venues.php#DELHI">DELHI</a></li>
		  <li><a href="Venues.php#JAIPUR">JAIPUR</a></li>
		  <li><a href="Venues.php#MUMBAI">MUMBAI</a></li>
          <li><a href="Venues.php#UDAIPUR">UDAIPUR</a></li>

        </ul>
      </li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">VENDORS <span class="caret"></span></a>
        <ul class="dropdown-menu">
		  <li><a href="Photographer.php">PHOTOGRAPHERS</a></li>
          <li><a href="Decors.php">DECORATORS</a></li>
          <li><a href="Mehndi.php">MEHENDI ARTIST</a></li>
		  <li><a href="Makeup.php">MAKEUP ARTIST</a></li>
          <li><a href="Catrers.php">CATRERS</a></li>
       </ul>
	   </li>		
		 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">BELONGINGS<span class="caret"></span></a>
        <ul class="dropdown-menu">
		  <li><a href="Dress.php">BRIDAL LEHNGA</a></li>
          <li><a href="Jewel.php">BRIDAL JEWELLERY</a></li>
          <li><a href="Groom.php">GROOMS WEAR</a></li>
          <li><a href="Cards.php">WEDDING CARDS</a></li>
       </ul>
	   </li>
		<li><a href="About.php">ABOUT US</a></li>
<?php	
		if(empty($_SESSION["uid"]))
		{	
?>		<li><a href="Register.php">REGISTER</a></li>	
		<li><a href="Login.php">LOGIN</a></li>	
<?php	
		}
		if(!empty($_SESSION["uid"]))
		{
?>
		<li><a href="booking.php">MY BOOKINGS</a></li>
		<li><a href="Logout.php">LOGOUT</a></li>
<?php	
		}
?>		
    </ul>
  </div>
 
   
</nav>
</div>
<style>     
            .navbar navbar-inverse navbar
			{
			background-color:red;
			 text-color:;	
			}	
              
		
		.carouselGrid-inner img
	       {
			transition:1s;
		    cursor:pointer;	 
	       }
	    .carouselGrid-inner img:hover
	       {
		    transform:scale(1.1);
	       }
	    .carouselGrid-inner h4,h5 
		  {
           font-weight: bold;
           font-family: "Comic Sans MS";
           color:2B0B33;
          } 
		 h3
		  {
		   font-family:"Cooper Black";
		  }
</style>
</head>