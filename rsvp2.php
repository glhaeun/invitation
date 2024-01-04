User
<?php include 'connect.php'; 
	  include 'session.php';
?>
<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wedding</title>

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/styl.css">
	<link rel="stylesheet" href="css/photo.css">
	<link rel="stylesheet" href="css/story.css">

	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>

	<audio autoplay id="myautoload">
		<source src="Canon in D (Pachelbels Canon) - Cello .ogg" type="audio/ogg">
		<source src="Canon in D (Pachelbels Canon) - Cello .mp3" type="audio/mpeg">
	</audio>
		  
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				
			<div class="col-xs-5">
					<div id="fh5co-logo" style="display: flex; align-items: right;"><a href="index.html">Logo<strong>.</strong></a></div>
				</div>

				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="index.html">JE<strong>.</strong></a></div>
				</div>
				<div class="col-xs-5 text-right menu-1">
					<ul>
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="#location">Location</a></li>
						<li><a href="#story">Story</a></li>
						<li class="has-dropdown"><a href="#fh5co-gallery">Gallery</a></li>
						<li><a href="#attendance">RSVP</a></li>
						<li><a href="#gift">Gifts</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>


	<div id="fh5co-testimonial">
		<div class="container" id="message">
			<div class="row">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<span>Best Wishes</span>
						<h2 style="margin-bottom: -80px;">Friends Wishes</h2>
					</div>
				</div>
				<?php
					require 'message.php';
				?>
				<!-- <div class="row">
					<div class="col-md-12 animate-box">
						<div class="wrap-testimony">
							<div class="owl-carousel-fullwidth">
							<?php
							// Display comments on initial load
							// if ($_SERVER["REQUEST_METHOD"] != "POST") {
							// 	displayComments();
							// }
							?>
							</div>
						</div>
					</div>
				</div> -->
				<div class="items-pagination" id="paginationContainer" >
					<div class="item">
						<div class="testimony-slide active text-center"><span style="margin-bottom: 0px;">c</span><p>2023-12-05 08:31:43</p><blockquote style="background-color: #8f989f"><p style="color: white;">Bless</p></blockquote></div>
					</div>
					<div class="item">
						<div class="testimony-slide active text-center"><span style="margin-bottom: 0px;">d</span><p>2023-12-05 08:31:43</p><blockquote style="background-color: #8f989f"><p style="color: white;">Bless</p></blockquote></div>
					</div>
                    <div class="item">
						<div class="testimony-slide active text-center"><span style="margin-bottom: 0px;">d</span><p>2023-12-05 08:31:43</p><blockquote style="background-color: #8f989f"><p style="color: white;">Bless</p></blockquote></div>
					</div><div class="item">
						<div class="testimony-slide active text-center"><span style="margin-bottom: 0px;">Nathan</span><p>2023-12-05 08:31:43</p><blockquote style="background-color: #8f989f"><p style="color: white;">Bless</p></blockquote></div>
					</div>
					<div class="item">
						<div class="testimony-slide active text-center"><span style="margin-bottom: 0px;">B</span><p>2023-12-05 08:31:43</p><blockquote style="background-color: #8f989f"><p style="color: white;">Bless</p></blockquote></div>
					</div>
					<div class="item">
						<div class="testimony-slide active text-center"><span style="margin-bottom: 0px;">c</span><p>2023-12-05 08:31:43</p><blockquote style="background-color: #8f989f"><p style="color: white;">Bless</p></blockquote></div>
					</div>
					<div class="item">
						<div class="testimony-slide active text-center"><span style="margin-bottom: 0px;">d</span><p>2023-12-05 08:31:43</p><blockquote style="background-color: #8f989f"><p style="color: white;">Bless</p></blockquote></div>
					</div>
					<div class="item">
						<div class="testimony-slide active text-center"><span style="margin-bottom: 0px;">Nathan</span><p>2023-12-05 08:31:43</p><blockquote style="background-color: #8f989f"><p style="color: white;">Bless</p></blockquote></div>
					</div>
					<div class="item">
						<div class="testimony-slide active text-center"><span style="margin-bottom: 0px;">B</span><p>2023-12-05 08:31:43</p><blockquote style="background-color: #8f989f"><p style="color: white;">Bless</p></blockquote></div>
					</div>
					<div class="item">
						<div class="testimony-slide active text-center"><span style="margin-bottom: 0px;">c</span><p>2023-12-05 08:31:43</p><blockquote style="background-color: #8f989f"><p style="color: white;">Bless</p></blockquote></div>
					</div>
					<div class="item">
						<div class="testimony-slide active text-center"><span style="margin-bottom: 0px;">d</span><p>2023-12-05 08:31:43</p><blockquote style="background-color: #8f989f"><p style="color: white;">Bless</p></blockquote></div>
					</div><div class="item">
						<div class="testimony-slide active text-center"><span style="margin-bottom: 0px;">Nathan</span><p>2023-12-05 08:31:43</p><blockquote style="background-color: #8f989f"><p style="color: white;">Bless</p></blockquote></div>
					</div>
					<div class="item">
						<div class="testimony-slide active text-center"><span style="margin-bottom: 0px;">B</span><p>2023-12-05 08:31:43</p><blockquote style="background-color: #8f989f"><p style="color: white;">Bless</p></blockquote></div>
					</div>
					<div class="item">
						<div class="testimony-slide active text-center"><span style="margin-bottom: 0px;">c</span><p>2023-12-05 08:31:43</p><blockquote style="background-color: #8f989f"><p style="color: white;">Bless</p></blockquote></div>
					</div>
					<div class="item">
						<div class="testimony-slide active text-center"><span style="margin-bottom: 0px;">d</span><p>2023-12-05 08:31:43</p><blockquote style="background-color: #8f989f"><p style="color: white;">Bless</p></blockquote></div>
					</div>
					<div class="item">
						<div class="testimony-slide active text-center"><span style="margin-bottom: 0px;">Nathan</span><p>2023-12-05 08:31:43</p><blockquote style="background-color: #8f989f"><p style="color: white;">Bless</p></blockquote></div>
					</div>
					<div class="item">
						<div class="testimony-slide active text-center"><span style="margin-bottom: 0px;">B</span><p>2023-12-05 08:31:43</p><blockquote style="background-color: #8f989f"><p style="color: white;">Bless</p></blockquote></div>
					</div>
					<div class="item">
						<div class="testimony-slide active text-center"><span style="margin-bottom: 0px;">c</span><p>2023-12-05 08:31:43</p><blockquote style="background-color: #8f989f"><p style="color: white;">Bless</p></blockquote></div>
					</div>
					<div class="item">
						<div class="testimony-slide active text-center"><span style="margin-bottom: 0px;">d</span><p>2023-12-05 08:31:43</p><blockquote style="background-color: #8f989f"><p style="color: white;">Bless</p></blockquote></div>
					</div>
					
				</div>

				<!-- <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination justify-content-center" id="pagination"></ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button id="prev" class="btn btn-primary">Previous</button>
                        <button id="next" class="btn btn-primary">Next</button>
                    </div>
                </div> -->

                <div class="pagination">
                    <button id="prev" class="btn btn-primary" disabled>Previous</button>
                    <button id="next" class="btn btn-primary">Next</button>
                </div>

				
			</div>
		</div>
	</div>



	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script>
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->

    <script>
       
    

    </script>
	</body>
</html>