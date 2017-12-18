<?php
	session_start();
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    
<head>

	<style type="text/css">

	div.image {
	  position: relative;
	  height: 200px;
	  width: 257px;
	}

	div.caption {
	  position: absolute;
	  top: 0;
	  bottom: 0;
	  left: 0;
	  right: 0;
	  background: rgba(29, 106, 154, 0.72);
	  color: #fff;
	  visibility: hidden;
	  opacity: 0;
	  -webkit-transition: visibility opacity 0.2s;}
	  div.image:hover​ .caption {visibility: visible;
	  opacity: 1;
	}​
	</style>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta content="black" name="apple-mobile-web-app-status-bar-style">

	<!-- Title & Description -->
	<title>MMAC | The Official MMAC Website</title>
	<meta name="keywords" content="MMAC, montreal, mynix, athletic, athletics, club, sports, sport, basketball, chinese, badminton, non-profit, nonprofit"/>
	<meta name="description" content="Join us for affordable recreational drop-in badminton every Friday and Sunday!"/>
	<meta name="robots" content="all"/>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="../favicons/favicon.png">
	<link rel="shortcut icon" type="image/x-icon" href="../favicons/favicon.ico">

	<!-- Style Sheets -->
	<link rel="stylesheet" type="text/css" href="../css/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">

	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/jquery.sidr.light.css">
	<link rel="stylesheet" type="text/css" href="../js/media/mediaelementplayer.min.css" />
	<link rel="stylesheet" type="text/css" href="../js/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="../js/fancybox/jquery.fancybox.css?v=2.1.4"/>
	<link rel="stylesheet" type="text/css" href="../css/mosaic.css" />
	<link rel="stylesheet" type="text/css" href="../css/responsive.css">
	<link rel="stylesheet" type="text/css" href="../css/rs-plugin.css">
	<link rel="stylesheet" type="text/css" href="../js/rs-plugin/css/settings.css" />
	<link rel="stylesheet" type="text/css" href="../css/tooltipster.css">
	<link rel="stylesheet" type="text/css" href="../css/mega.css" />


	<link rel="stylesheet" type="text/css" href="../css/skin1.css">
	<link rel="stylesheet" type="text/css" href="../css/full.css">
	<link rel="stylesheet" type="text/css" href="../css/iconmoon.css">


	<!-- Scripts -->
	<script src="../js/vendor/jquery-1.8.3.min.js"></script>
    <script src="../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	
</head>


<body>

	<!-- Header Area -->
	<div class="outter-wrapper header-area header-style-3">
		<div class="wrapper clearfix logo-container">
			<header>
				<div class="clearfix">

					<!-- Start Logo -->
					<a class="logo centered" href="../">
						<img src="../img/logo-white.png" alt="MMAC" />
					</a>

				</div>
			</header>
		</div>
	</div>

	<div id="page-sticky">
		<!-- Post Header Area -->
		<div class="outter-wrapper nav-container post-header-area header-style-3">

			<!-- Start Mobile Menu Icon -->
			<div id="mobile-header" class="">
				<a id="responsive-menu-button" href="../#sidr-main">
					<em class="fa fa-bars"></em> Navigation
				</a>
			</div>

			<div id="navigation" class="clearfix">



				<div class="post-header-center centered-menu">

					<nav class="nav megamenu_container wrapper">
						<ul id="nav" class="centered-menu megamenu">
							<li><a href="../index.php">Home</a></li>

							<li class="nav-parent"><a href="../about/index.php">About Us &nbsp; <em class="fa">&#xf107;</em></a>
								
								<ul>
								
									<li><a href="../about/index.php">Our Mission</a></li>
									
									<li><a href="../about/board.php">The Board</a></li>
									
									<li><a href="../about/exec.php">Executive Members</a></li>
									
									<li><a href="../about/volunteer.php">Volunteers</a></li>
																		
								</ul>
								
							</li>

							<li class="nav-parent">
								<a href="../basketball">Basketball &nbsp; <em class="fa">&#xf107;</em></a>
								<ul>
									
									<li><a href="../basketball/league.php">League</a></li>
									
									<li><a href="../basketball/training.php">Kids Training</a></li>
									
									<li><a href="../basketball/activities.php">Calendar</a></li>

									<li><a href="../teams.php">The Teams &nbsp; <em class="fa">&#xf105;</em></a>
										<ul>
											<li><a href="../teams.php#section1">MMAC Mars</a></li>
											<li><a href="../teams.php#section2">MMAC 35+</a></li>
											<li><a href="../teams.php#section3">MMAC 45+</a></li>
											<li><a href="../teams.php#section4">MMAC Magic</a></li>
											<li><a href="../teams.php#section5">MMAC 18 & Under</a></li>
										</ul>
									</li>
									<li><a href="https://www.youtube.com/channel/UCb5x8JmRgyqcMTgFLB7TQpQ" target="_blank">Videos</a></li>
								</ul>
							</li>

							<li class="nav-parent">
								<a href="../badminton/">Badminton &nbsp; <em class="fa">&#xf107;</em></a>
								<ul>
									<li><a href="../badminton/index.php">Club Play</a></li>
									<li><a href="../badminton/calendar.php">Calendar</a></li>
									<li><a href="../badminton/mynixopen2017.php">Mynix Open 2017</a></li>
									<li><a href="../badminton/mynixopen2016.php">Mynix Open 2016</a></li>
									<li><a href="../badminton/volunteer.php">Volunteering</a></li>
								</ul>
							</li>

							<li class="nav-parent">
								<a href="../volleyball/">Volleyball &nbsp; <em class="fa">&#xf107;</em></a>
								<ul>
									<li><a href="../volleyball/">Drop-Ins</a></li>
									<li><a href="../volleyball/calendar.php">Calendar</a></li>
								</ul>
							</li>

								<li class="nav-parent">
								<a href="../golf/">Golf &nbsp; <em class="fa">&#xf107;</em></a>
								<ul>
									<li><a href="../golf/">Events</a></li>
									<li><a href="../golf/multimedia.php">Multimedia</a></li>
								</ul>
							</li>
								
							<li><a href="../contact.php">Contact Us</a></li>

							<li class="nav-parent">
								<a href="../donate/index.php">DONATE <i class="fa fa-money"></i>&nbsp; <em class="fa">&#xf107;</em></a>
								<ul>
									<li><a href="../donate/index.php">Make a Donation</a></li>
									<li><a href="../donate/merchandise.php">Merchandise</a></li>
								</ul>
							</li>

						</ul>
					</nav>

				</div>

			</div>
		</div>
	</div>
