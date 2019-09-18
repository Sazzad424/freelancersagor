<?php
// Free Bootstrap Themes : www.Zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by Zerotheme dot com - Free Responsive Html5 Templates">
    <meta name="author" content="https://www.Zerotheme.com">
	
    <title>Dancing | Free Bootstrap Chocolate Templates</title>
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- jQuery and Modernizr-->
	<script src="js/jquery-2.1.1.js"></script>

	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!--Top-->
	<header class="sub-header">
		
		<!--Navigation-->
		<nav id="menu" class="navbar">
			<div class="container">
				<div class="navbar-header">
					<div class="navbar-brand">
						<a class="navbar-brand-link" href="index.html">
							<img src="images/logo.png" />
						</a>
					</div>
					<center><button type="button" class="btn btn-navbar navbar-toggle visible-xs" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button></center>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li>
							<a href="index.html">
								Home
								<div class="menu-item__desc">Dancing theme</div>
							</a>
						</li>
						<li>
							<a href="single.html">
								About
								<div class="menu-item__desc">information about us</div>
							</a>
						</li>
						<li class="dropdown">
						<a href="archive.html" class="dropdown-toggle" data-toggle="dropdown">
							Blog
							<div class="menu-item__desc">categories</div>
						</a>
							<div class="dropdown-menu" style="margin-left: -203.625px;">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li><a href="archive.html">Text 301</a></li>
										<li><a href="archive.html">Text 302</a></li>
										<li><a href="archive.html">Text 303</a></li>
										<li><a href="archive.html">Text 304</a></li>
										<li><a href="archive.html">Text 305</a></li>
									</ul>
									<ul class="list-unstyled">
										<li><a href="archive.html">Text 306</a></li>
										<li><a href="archive.html">Text 307</a></li>
										<li><a href="archive.html">Text 308</a></li>
										<li><a href="archive.html">Text 309</a></li>
										<li><a href="archive.html">Text 310</a></li>
									</ul>
									<ul class="list-unstyled">
										<li><a href="archive.html">Text 311</a></li>
										<li><a href="archive.html">Text 312</a></li>
										<li><a href="archive.html#">Text 313</a></li>
										<li><a href="archive.html#">Text 314</a></li>
										<li><a href="archive.html">Text 315</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="contact.html">
								Contact
								<div class="menu-item__desc">get in touch</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
	</header>
	<!-- /Section: intro -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content">
		
		<!---------------Breadcrumb------------------>
		<ul class="breadcrumb container">
			<li><a href="index.html">Home</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
		
		<!-----------------Content-------------------->
		<section class="box-content">
			<div class="container">
				<div class="row heading">
					<div class="col-lg-12">	
						<h2>CONTACT US</h2>
						<div class="intro">Lorem ipsum dolor sit amet</div>
					</div>
				</div>
				<div class="row">
					<!--Start Map-->
					<div id="map" style="height: 450px;"></div>
					<!--End Map-->
					<div class="col-md-4 box-item">
						<h3>Contact Info</h3>
						<span>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS ERROR SIT VOLUPTATEM ACCUSANTIUM DOLOREMQUE LAUDANTIUM, TOTAM REM APERIAM.</span><br> <br>
						<p>JL.Kemacetan timur no.23. block.Q3<br>
							Jakarta-Indonesia</p>
						   <p>+6221 888 888 90 <br>
							+6221 888 88891</p>
						<p>info@yourdomain.com</p>
					</div>
					<div class="col-md-8">
						<h3>Contact Form</h3>
						<!--Warning-->
						<center><?php echo $text;?></center>
						<!---->
						<form name="form1" method="post" action="contact.php">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Enter name" required="required" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Enter email" required="required" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control input-lg" name="subject" id="subject" placeholder="Subject" required="required" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required" placeholder="Message" style="height: 170px;"></textarea>
									</div>						
									<button type="submit" class="btn btn-skin btn-block" name="submitcontact" id="submitcontact">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
		
	<footer>
		<div class="top-footer">
			<div class="container">
				<div class="row">
					<h4>Sign up and get first-hand</h4>
					<p>discounts & dancing tips!</p>
					<div class="subcribe-form">
						<form name="subcribe-email" action="subcribe.php" id="subcribe" class="input-group">
							<input type="text" name="subcribe" value="" placeholder="Your e-mail address" class="form-control" />
							<span class="input-group-btn">
								<button type="button" class="btn btn-default btn-lg"><i class="fa fa-chevron-right"></i></button>
							</span>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="wrap-footer">
			<div class="container">
				<div class="row"> 
					<div class="col-footer footer-1 col-md-3">
						<h2 class="footer-title">About Us</h2>
						<div class="footer-content">
							Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non. Pellentesque rutrum. Tincidunt porta lorem vitae . <br> <br> 
							<i class="fa fa-phone"> </i> (+386) 40 123 456 <br> 
							<i class="fa fa-envelope"> </i> info@barber.com  <br>
							<i class="fa fa-home"> </i> www.barber.com 
						</div>
					</div> 
					<div class="col-footer footer-2 col-md-3">
						<h2 class="footer-title">Recent Posts</h2>
						<div class="footer-content">
							<ul>
								<li><a href="#">MOST VISITED COUNTRIES</a></li>
								<li><a href="#">5 PLACES THAT MAKE A GREAT HOLIDAY</a></li>
								<li><a href="#">PEBBLE TIME STEEL IS ON TRACK TO SHIP IN JULY</a></li>
								<li><a href="#">STARTUP COMPANY&#8217;S CO-FOUNDER TALKS ON HIS NEW PRODUCT</a></li>
							</ul>
						</div>
					</div>
					<div class="col-footer footer-3 col-md-3">
						<h2 class="footer-title">OUR FLICKR</h2>
						<div class="footer-content">
							<div class="row">
								<div class="col-md-4 nopadding">
									<a href="#"><img src="images/footer1.jpg" /></a>
									<a href="#"><img src="images/footer4.jpg" /></a>
									<a href="#"><img src="images/footer2.jpg" /></a>
								</div>
								<div class="col-md-4 nopadding">
									<a href="#"><img src="images/footer2.jpg" /></a>
									<a href="#"><img src="images/footer5.jpg" /></a>
									<a href="#"><img src="images/footer3.jpg" /></a>
								</div>
								<div class="col-md-4 nopadding">
									<a href="#"><img src="images/footer3.jpg" /></a>
									<a href="#"><img src="images/footer6.jpg" /></a>
									<a href="#"><img src="images/footer1.jpg" /></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-footer footer-4 col-md-3">
						<h2 class="footer-title">Tag Cloud</h2>
						<div class="footer-content">
							<a href="#">animals</a>
							<a href="#">cooking</a>
							<a href="#">countries</a>
							<a href="#">city</a>
							<a href="#">children</a>
							<a href="#">home</a>
							<a href="#">likes</a>
							<a href="#">photo</a>
							<a href="#">link</a>
							<a href="#">law</a>
							<a href="#">shopping</a>
							<a href="#">skate</a>
							<a href="#">scholl</a>
							<a href="#">video</a>
							<a href="#">travel</a>
							<a href="#">images</a>
							<a href="#">love</a>
							<a href="#">lists</a>
							<a href="#">makeup</a>
							<a href="#">media</a>
							<a href="#">password</a>
							<a href="#">pagination</a>
							<a href="#">wildlife</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<div class="copyright text-center">
					<span>Copyright ?? 20xx - Designed by <a href="https://www.Zerotheme.com" target="_blank">Zerotheme</a></span>
				</div>
			</div>
		</div> 
	</footer>
	<!-- Footer -->
	
	<!-- JS -->
	<script src="js/bootstrap.min.js"></script>
	
	<!-- Google Map -->
	<script>
	  var marker;
	  var image = 'images/map-marker.png';
      function initMap() {
        var myLatLng = {lat: 39.79, lng: -86.14};

		// Specify features and elements to define styles.
        var styleArray = [
          {
            featureType: "all",
            stylers: [
             { saturation: -80 }
            ]
          },{
            featureType: "road.arterial",
            elementType: "geometry",
            stylers: [
              { hue: "#000000" },
              { saturation: 50 }
            ]
          },{
            featureType: "poi.business",
            elementType: "labels",
            stylers: [
              { visibility: "off" }
            ]
          }
        ];
		
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          scrollwheel: false,
		   // Apply the map style array to the map.
          styles: styleArray,
          zoom: 7
        });

        var directionsDisplay = new google.maps.DirectionsRenderer({
          map: map
        });

		// Create a marker and set its position.
        marker = new google.maps.Marker({
          map: map,
		  icon: image,
		  draggable: true,
          animation: google.maps.Animation.DROP,
          position: myLatLng
        });
		marker.addListener('click', toggleBounce);
      }
	  
	  function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>
	
</body>
</html>