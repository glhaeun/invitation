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
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/photo.css">
	<link rel="stylesheet" href="css/story.css">
	<link rel="stylesheet" href="css/modal.css">

	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
	<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>



	</head>
	<body>

	<audio id="myautoload">
		<source src="Canon in D (Pachelbels Canon) - Cello .ogg" type="audio/ogg">
		<source src="Canon in D (Pachelbels Canon) - Cello .mp3" type="audio/mpeg">
	</audio>
		  
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				
			<div class="col-xs-5">
					<div id="fh5co-logo" style="display: flex; align-items: right;"><a href="index.html">RS<strong>.</strong></a></div>
				</div>

				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="index.html"></a></div>
				</div>
				<div class="col-xs-5 text-right menu-1">
					<ul id="myNav">
						<li class="active"><a href="#home">Home</a></li>
						<li><a href="#location">Location</a></li>
						<li><a href="#story">Story</a></li>
						<li><a href="#fh5co-gallery">Gallery</a></li>
						<li><a href="#attendance">RSVP</a></li>
						<li><a href="#gift">Gifts</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container" id="home">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Robertus &amp; Sharon</h1>
							<h2></h2>
							<?php
								// $records = readData();
								// if (isset($_GET['for'])) {
								// 	$index = $_GET['for'];
									
								// 	echo "<h2>We Invite you to our wedding, "; echo $records[$index]['name']; echo"!</h2>";
								// } else {
								// 	echo "<h2>We Are Getting Married</h2>";
								// }
							?>
							<div class="simply-countdown simply-countdown-one"></div>
							<p><a href="#" class="btn btn-default btn-sm">Dear <?=$_SESSION['user']?></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-couple">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Come to our wedding!</h2>
					<h3>November 28th, 2023 Medan</h3>
					<p>We invited you to celebrate our wedding</p>
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="images/groom.jpg" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3>Robertus Wilson</h3>
						<p>First Son of Mr. Samsudin Raylee & Ms. Yek Min</p>
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="images/bride.jpg" alt="groom" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>Sharon Brown</h3>
						<p>Second daughter of Mr. So ewanto Liang & Ms. Friska</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-event" class="fh5co-bg" style="background-image:url(images/img_bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container" id="location">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>Our Special Events</span>
					<h2>Wedding Events</h2>
				</div>
			</div>
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Main Ceremony</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>4:00 PM</span>
										<span>6:00 PM</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Monday 28</span>
										<span>November, 2023</span>
									</div>
									<p><a href="https://www.bing.com/maps?mepi=107~Local~Unknown~Entity_Vertical_List_Card&ty=17&q=gereja+medan&segment=Local&ppois=3.605849504470825_98.70277404785156_Yayasan+Gereja+HKBP+Pardamean_YN7999x18434442206480290465~3.5890352725982666_98.6680679321289_Gereja+Pentakosta+di+Indonesia+%28GPdI%29_YN7999x14723516518641445123~&sei=0&cp=3.605939~98.702545&child=%26ty%3D18%26q%3DYayasan%2520Gereja%2520HKBP%2520Pardamean%26ss%3Dypid.YN7999x18434442206480290465%26segment%3DLocal%26ppois%3D3.605849504470825_98.70277404785156_Yayasan%2520Gereja%2520HKBP%2520Pardamean_YN7999x18434442206480290465~%26cp%3D3.60585~98.702774%26EnableMapViewChange%3Dtrue&FORM=SNAPST&lvl=11.0" style="color: white;"><u>Yayasan Gereja HKBP Pardamean</u></a></p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Wedding Party</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>7:00 PM</span>
										<span>12:00 AM</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Monday 28</span>
										<span>November, 2023</span>
									</div>
									<p><a href="https://www.bing.com/maps?mepi=107~Local~Unknown~Entity_Vertical_List_Card&ty=17&q=gereja+medan&segment=Local&ppois=3.605849504470825_98.70277404785156_Yayasan+Gereja+HKBP+Pardamean_YN7999x18434442206480290465~3.5890352725982666_98.6680679321289_Gereja+Pentakosta+di+Indonesia+%28GPdI%29_YN7999x14723516518641445123~&sei=0&cp=3.605939~98.702545&child=%26ty%3D18%26q%3DYayasan%2520Gereja%2520HKBP%2520Pardamean%26ss%3Dypid.YN7999x18434442206480290465%26segment%3DLocal%26ppois%3D3.605849504470825_98.70277404785156_Yayasan%2520Gereja%2520HKBP%2520Pardamean_YN7999x18434442206480290465~%26cp%3D3.60585~98.702774%26EnableMapViewChange%3Dtrue&FORM=SNAPST&lvl=11.0" style="color: white;"><u>Yayasan Gereja HKBP Pardamean</u></a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section id="fh5co-couple-story">
    <div class="container" id="story">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
          <span>Bagaimana Cinta Kami Bersemi</span>
          <h2>Cerita Kami</h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, similique non soluta nulla asperiores
            voluptatem.</p>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <ul class="timeline">
            <li class="timeline-inverted fadeInLeft animated">
              <div class="timeline-image" style="background-image: url(images/couple-1.jpg);"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Pertama Bertemu</h3>
                  <span>1 Juni 2000</span>
                </div>
                <div class="timeline-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, modi autem? Commodi autem quo quia?
                  </p>
                </div>
              </div>

            </li>
			<li class="fadeInRight animated">
              <div class="timeline-image" style="background-image: url(images/couple-1.jpg);"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Pertama Bertemu</h3>
                  <span>1 Juni 2000</span>
                </div>
                <div class="timeline-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, modi autem? Commodi autem quo quia?
                  </p>
                </div>
              </div>

            </li>
            <li class="timeline-inverted fadeInLeft animated">
              <div class="timeline-image" style="background-image: url(images/couple-2.jpg);"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Mulai Serius</h3>
                  <span>1 Januari 2005</span>
                </div>
                <div class="timeline-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto enim eaque obcaecati odit
                    itaque explicabo quisquam quos at.
                  </p>
                </div>
              </div>

            </li>
            <li class="fadeInRight animated">
              <div class="timeline-image" style="background-image: url(images/bride.jpg);"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Tunangan</h3>
                  <span>7 November 2009</span>
                </div>
                <div class="timeline-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, deleniti distinctio. Esse quas sit
                  explicabo corporis magni qui expedita a.
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

	<div id="fh5co-gallery" class="fh5co-section-gray">
		<div class="container" id="gallery">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>Our Memories</span>
					<h2>Wedding Gallery</h2>
					<p>Picture of Robertus Wilson & Sharon Brown</p>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-gallery-list">
						
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-1.jpg); "> 
						<a onclick="openDialog('dialog1');">
							<div class="case-studies-summary">
								<span>5 Photos</span>
								<h2>Two Glas of Juice</h2>
							</div>
						</a>
					</li>
					<dialog id="dialog1">
					<?php
					require 'carrousel.php'
					?>
						<button style="border-color: white;" onclick="closeDialog('dialog1');" aria-label="close" class="x">❌</button>
					</dialog>
					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-2.jpg); ">
						<a href="#" class="color-2">
							<div class="case-studies-summary">
								<span>5 Photos</span>
								<h2>Timer starts now!</h2>
							</div>
						</a>
					</li>


					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-3.jpg); ">
						<a href="#" class="color-3">
							<div class="case-studies-summary">
								<span>5 Photos</span>
								<h2>Beautiful sunset</h2>
							</div>
						</a>
					</li>
					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-4.jpg); ">
						<a href="#" class="color-4">
							<div class="case-studies-summary">
								<span>5 Photos</span>
								<h2>Company's Conference Room</h2>
							</div>
						</a>
					</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-5.jpg); ">
							<a href="#" class="color-3">
								<div class="case-studies-summary">
									<span>5 Photos</span>
									<h2>Useful baskets</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-6.jpg); ">
							<a href="#" class="color-4">
								<div class="case-studies-summary">
									<span>5 Photos</span>
									<h2>Skater man in the road</h2>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-7.jpg); ">
							<a href="#" class="color-4">
								<div class="case-studies-summary">
									<span>5 Photos</span>
									<h2>Two Glas of Juice</h2>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-8.jpg); "> 
							<a href="#" class="color-5">
								<div class="case-studies-summary">
									<span>5 Photos</span>
									<h2>Timer starts now!</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-9.jpg); ">
							<a href="#" class="color-6">
								<div class="case-studies-summary">
									<span>5 Photos</span>
									<h2>Beautiful sunset</h2>
								</div>
							</a>
						</li>
					</ul>		
				</div>
			</div>
		</div>
	</div>

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
					<!-- <div class="item">
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
					 -->
					 <?php
					require 'wishes.php';
				?>
				</div>

				<div class="row">
					<div class="col-md-12" style="display: flex; justify-content: center;">
					<div class="pagination">
						<button id="prev" class="btn btn-primary" disabled>Previous</button>
						<button id="next" class="btn btn-primary">Next</button>
					</div>
					</div>
				</div>
				


			</div>
		</div>
	</div>

	<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);">
		<div id="attendance" class="overlay"></div>
		<div class="container">
			<div class="row">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Are You Attending?</h2>
					<p>Please Fill-up the form to notify you that you're attending. Thanks.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-10 col-md-offset-1">
					<?php

					// function readData() {
					// 	$filename = 'data.txt';
					// 	if (file_exists($filename)) {
					// 		$data = file_get_contents($filename);
					// 		return json_decode($data, true);
					// 	}
					// 	return [];
					// }

					// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
					// 	// Update existing record	
						
					// }

					?>
					
					<?php if($_SESSION['editMode'] === false) {
						require 'rsvp.php';
					} else {
						require 'rsvpEdit.php';
					} ?>
				</div>
			</div>
			</div>
		</div>
	</div>

	<div id="fh5co-gift" >
		<div class="container" id="gift">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>UNGKAPAN TANDA KASIH</span>
					<h2>Kirim Hadiah</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam iure perferendis provident ab aliquam nemo.</p>
				</div>
			</div>
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box gift-box">
									<h3>Groom</h3>
										<i class="icon-clock"></i>
										<span>BCA</span>
										<span id="groom_rek">123123123</span>
    									<p><a class="btn btn-default btn-sm copy-btn-groom">Copy</a></p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Bride</h3>
									<i class="icon-clock"></i>
									<span>BCA</span>
									<span id="bride_rek">123123123</span>
									<p><a class="btn btn-default btn-sm copy-btn-bride">Copy</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	</div>

	<div class="gototop js-top">
		<a href="#" id="audio"><i class="icon-volume" id="audio-icon"></i></a>
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<div id="welcomeModal" class="modal1">
          <div class="hero" style="height: 100vh">
            <div class="container1">
              <h1 class="subtitle">Undangan Pernikahan</h1>
                <h2 class="title"> Robertus & Kumala</h2>
                  <h3 id="yth"></h3>
                    <h3 id="to"></h3>
                    <h1 id="invite" style="font-size: small; padding-left: 20px; padding-right: 20px">As the sun sets on a beautiful day, our hearts unite in celebration</h1>
              <button id="openingButton" style="color: #e8ebee; box-sizing: border-box; 
              font-weight: bold; text-transform: uppercase; padding: 8px; border: 0ch; border-radius: 5px;" onclick="closeWelcomeModal()">
                Buka Undangan
              </button>
            </div>
          <div class=""></div>
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
	<script src="js/pagination.js"></script>
	<script>

document.addEventListener("DOMContentLoaded", function () {
  //open welcome modal
  welcomeModal.style.display = "block";
});

var audio = document.getElementById("myautoload");

function closeWelcomeModal() {
  welcomeModal.style.display = "none";
  audio.play()
}
	document.addEventListener('DOMContentLoaded', function() {
		var copyBtnGroom = document.querySelector('.copy-btn-groom');
		var groomRek = document.getElementById('groom_rek');

		copyBtnGroom.addEventListener('click', function() {
			var groomNumber = groomRek.innerText;

			// Create a temporary textarea element to hold the text to copy
			var textarea = document.createElement('textarea');
			textarea.value = groomNumber;
			document.body.appendChild(textarea);

			// Select and copy the text
			textarea.select();
			document.execCommand('copy');

			// Remove the textarea
			document.body.removeChild(textarea);

			Toastify({
				text: 'Groom\'s bank number copied: ' + groomNumber,
				duration: 3000, // Display duration in milliseconds
				close: true, // Show close button
				gravity: 'bottom', // Toast position
				backgroundColor: '#e8d5c4', // Example background color
			}).showToast();
		
		});
	});

	document.addEventListener('DOMContentLoaded', function() {
		var copyBtnBride = document.querySelector('.copy-btn-bride');
		var brideRek = document.getElementById('bride_rek');

		copyBtnBride.addEventListener('click', function() {
			var brideNumber = brideRek.innerText;

			// Create a temporary textarea element to hold the text to copy
			var textarea = document.createElement('textarea');
			textarea.value = brideNumber;
			document.body.appendChild(textarea);

			// Select and copy the text
			textarea.select();
			document.execCommand('copy');

			// Remove the textarea
			document.body.removeChild(textarea);

			Toastify({
				text: 'Bride\'s bank number copied: ' + brideNumber,
				duration: 3000, // Display duration in milliseconds
				close: true, // Show close button
				gravity: 'bottom', // Toast position
				backgroundColor: '#e8d5c4', // Example background color
			}).showToast();
		
		});
	});

	
	// Get all the navigation links
	var links = document.querySelectorAll('#myNav li a');

	// Loop through each link and add a click event listener
	links.forEach(function(link) {
		link.addEventListener('click', function() {
			// Remove the 'active' class from all links
			links.forEach(function(link) {
				link.parentNode.classList.remove('active');
			});
			
			// Add the 'active' class to the clicked link's parent (the <li> element)
			this.parentNode.classList.add('active');
		});
	});


    var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });

		const audioButton = document.getElementById('audio');
		const audioIcon = document.getElementById('audio-icon');

		audioButton.addEventListener('click', function(event) {
			event.preventDefault(); // This prevents the default behavior of the click event

			if (audio.paused) {
				audio.play();
				audioIcon.classList.remove('icon-mute');
				audioIcon.classList.add('icon-volume');
			} else {
				audio.pause();
				audioIcon.classList.remove('icon-volume');
				audioIcon.classList.add('icon-mute');
			}
		});
	


	function openDialog(dialogId) {
      var dialog = document.getElementById(dialogId);
      if (dialog) {
        dialog.showModal();
      }
    }

    function closeDialog(dialogId) {
      var dialog = document.getElementById(dialogId);
      if (dialog) {
        dialog.close();
      }
    }



		</script>
	</body>
</html>