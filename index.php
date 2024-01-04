<?php include 'connect.php'; ?>
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

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>John &amp; Emily</h1>
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
							<p><a href="#" class="btn btn-default btn-sm">Save the date</a></p>
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
						<h3>John Wilson</h3>
						<p>First Son of Mr. Samsudin Raylee & Ms. Yek Min</p>
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="images/bride.jpg" alt="groom" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>Emily Brown</h3>
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
            <li>
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
			<li>
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
            <li class="timeline-inverted">
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
            <li>
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
					<p>Picture of John Wilson & Emily Brown</p>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-gallery-list">
						
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-1.jpg); "> 
						<a onclick="openDialog('dialog1');">
							<div class="case-studies-summary">
								<span>14 Photos</span>
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
								<span>30 Photos</span>
								<h2>Timer starts now!</h2>
							</div>
						</a>
					</li>


					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-3.jpg); ">
						<a href="#" class="color-3">
							<div class="case-studies-summary">
								<span>90 Photos</span>
								<h2>Beautiful sunset</h2>
							</div>
						</a>
					</li>
					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-4.jpg); ">
						<a href="#" class="color-4">
							<div class="case-studies-summary">
								<span>12 Photos</span>
								<h2>Company's Conference Room</h2>
							</div>
						</a>
					</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-5.jpg); ">
							<a href="#" class="color-3">
								<div class="case-studies-summary">
									<span>50 Photos</span>
									<h2>Useful baskets</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-6.jpg); ">
							<a href="#" class="color-4">
								<div class="case-studies-summary">
									<span>45 Photos</span>
									<h2>Skater man in the road</h2>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-7.jpg); ">
							<a href="#" class="color-4">
								<div class="case-studies-summary">
									<span>35 Photos</span>
									<h2>Two Glas of Juice</h2>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-8.jpg); "> 
							<a href="#" class="color-5">
								<div class="case-studies-summary">
									<span>90 Photos</span>
									<h2>Timer starts now!</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-9.jpg); ">
							<a href="#" class="color-6">
								<div class="case-studies-summary">
									<span>56 Photos</span>
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
				<div class="row">
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
					
					<?php require 'rsvp.php'; ?>
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
								<div class="event-wrap animate-box">
									<h3>Groom</h3>
										<i class="icon-clock"></i>
										<span>BCA</span>
										<span>123123123</span>
										<p><a class="btn btn-default btn-sm">Copy</a></p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Bride</h3>
									<i class="icon-clock"></i>
									<span>BCA</span>
									<span>123123123</span>
									<p><a class="btn btn-default btn-sm">Copy</a></p>
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
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
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

	var myadido = document.getElementById("myautoload");

    setTimeout(function() {
    myadido.play();

    },500);
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