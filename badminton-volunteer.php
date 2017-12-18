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
  opacity: 1;}​
</style>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta content="black" name="apple-mobile-web-app-status-bar-style">
        
       <!-- Title & Description -->
        <title>MMAC | The Official MMAC Website</title>
        <meta name="keywords" content="MMAC, montreal, mynix, atheltic, club, sports, basketball, chinese, montreal"/>
        <meta name="description" content="Montreal Mynix Athletic Club (MMAC) is a non-profit organization loosely founded in the early 1980’s."/>
        <meta name="robots" content="all"/>
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="favicons/favicon.png">
        <link rel="shortcut icon" type="image/x-icon" href="favicons/favicon.ico">
		
		<!-- Style Sheets -->
        <link rel="stylesheet" type="text/css" href="css/normalize.min.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
		
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">  
        <link rel="stylesheet" type="text/css" href="css/jquery.sidr.light.css">
        <link rel="stylesheet" type="text/css" href="js/media/mediaelementplayer.min.css" />
        <link rel="stylesheet" type="text/css" href="js/owl-carousel/owl.carousel.css"> 
        <link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css?v=2.1.4"/> 
        <link rel="stylesheet" type="text/css" href="css/mosaic.css" />
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link rel="stylesheet" type="text/css" href="css/rs-plugin.css">
        <link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css" />
        <link rel="stylesheet" type="text/css" href="css/tooltipster.css">
        <link rel="stylesheet" type="text/css" href="css/mega.css" />
        

        <link rel="stylesheet" type="text/css" href="css/skin1.css">
        <link rel="stylesheet" type="text/css" href="css/full.css">
		<link rel="stylesheet" type="text/css" href="css/iconmoon.css">
		
		<link href="//cdn.jotfor.ms/static/formCss.css?3.3.10752" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="//cdn.jotfor.ms/css/styles/nova.css?3.3.10752" />
<link type="text/css" media="print" rel="stylesheet" href="//cdn.jotfor.ms/css/printForm.css?3.3.10752" />
<style type="text/css">
    .form-label-left{
        width:250px !important;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px !important;
    }
    body, html{
        margin:0;
        padding:0;
        background:false;
    }

    .form-all{
        margin:0px auto;
        padding-top:20px;
        width:690px;
        color:#555 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: #555;
    }

</style>

<script src="//cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="//cdn.jotfor.ms/static/jotform.forms.js?3.3.10752" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){
      setTimeout(function() {
          $('input_3').hint('ex: myname@example.com');
       }, 20);
	JotForm.clearFieldOnHide="disable";
	JotForm.onSubmissionError="jumpToSubmit";
   });
</script>
		
		<!-- Scripts -->
	<script src="js/vendor/jquery-1.8.3.min.js"></script>
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
    	
	<!-- Header Area -->
	<div class="outter-wrapper header-area header-style-3">
		<div class="wrapper clearfix logo-container">
			<header>
				<div class="clearfix">
    				
					<!-- Start Logo -->
					<a class="logo centered" href="/">
						<img src="img/logo-white.png" alt="MMAC" />
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
			<a id="responsive-menu-button" href="#sidr-main">
				<em class="fa fa-bars"></em> Navigation
			</a>
		</div>
		
    	<div id="navigation" class="clearfix">

	

			<div class="post-header-center centered-menu">
				
				<nav class="nav megamenu_container wrapper">
				    <ul id="nav" class="centered-menu megamenu">
					    <li><a href="index.php">Home</a></li>
                        
					    <li class="nav-parent">
					    	<a href="about.php">About Us &nbsp; <em class="fa">&#xf107;</em></a>
					    	<ul>
					    		<li><a href="board.php">The Board</a></li>
					    		
					    		<li><a href="teams.php">The Teams &nbsp; <em class="fa">&#xf105;</em></a>
					    			<ul>
					    				<li><a href="teams.php#section1">MMAC Mars</a></li>
					    				<li><a href="teams.php#section2">MMAC 35+</a></li>
					    				<li><a href="teams.php#section3">MMAC 45+</a></li>
										<li><a href="teams.php#section4">MMAC Magic</a></li>
										<li><a href="teams.php#section5">MMAC 18 & Under</a></li>
					    			</ul>
					    		</li>
					    	</ul>
					    </li>
                        
                        <li><a href="register.php">Registration</a></li>
					    
					    
					    <li><a href="#" class="megamenu_drop">Events <em class="fa">&#xf107;</em></a><!-- Begin Mega Item -->
					    <div class="dropdown_fullwidth"><!-- Begin Item Container -->
		                    
		                    <div class="clearfix">
		                    	<div class="col-2-3 clearfix">
		                    		<h3 class="mega-title">Upcoming: 35th Annual NACBAIT 2015</h3>
		                    		<a class="col-1-2" href="nacbait2015.php"><img src="img/tournament-logo-white.jpg" alt="NACBAIT" /></a>
		                    		<h6 class="title"><a href="nacbait2015.php">May 22-25, 2015 &bull; MONTREAL, CANADA</a></h6>
		                    		<p>On behalf of the North American Chinese Basketball Association and the Montreal Mynix Athletic Club we would like to invite your team to participate in the 35th Annual NACBAIT – Invitational Tournament to be held in Montreal, Canada, on the weekend of May 22-25, 2015 (Memorial Day Weekend)
		                    		&#8230;<a href="http://mmacsports.com/post.php?id=21" class="read-more">More</a></p>
		                    	</div>
		                    	
		                    	<div class="col-1-3 last">
		                    		<h3 class="mega-title">Other Events</h3>
		                    		<ul class="list-2 widget-list">
		                    			<li><a href="mmac-leaguewinter-2015.docx" target="_blank">MMAC Seasonal League Game</a></li>
		                    			<li><a href="mmac-3on3-2014.docx" target="_blank">MMAC 3 on 3 Tournament</a></li>
		                    		</ul>
		                    	</div>
		                    </div>

	                    </div><!-- End Item Container -->
	                    </li><!-- End Mega Item -->
					                
					                
					                
					    <li class="nav-parent">
					    	<a href="#">Activities &nbsp; <em class="fa">&#xf107;</em></a>
					    	<ul>
					    		<li><a href="activities.php">Basketball Training Camp</a></li>
					    		
					    	</ul>	
					    </li>
					    <li class="nav-parent">
					    	<a href="multimedia.php">Multimedia &nbsp; <em class="fa">&#xf107;</em></a>
					    	<ul>
					    		<li><a href="multimedia.php#cat-1">Photo Gallery</a></li>
					    		<li><a href="multimedia.php#cat-2">Videos</a></li>
					    	</ul>		
					    </li>

					    <li><a href="contact.php">Contact Us</a></li>

						<li><a href="donate.php">Make a Donation <i class="fa fa-money"></i></a></li>


						<li class="nav-parent">
					    	<a href="badminton.php">Badminton &nbsp; <em class="fa">&#xf107;</em></a>
					    	<ul>
					    		<li><a href="badminton.php">Tournament Info</a></li>
					    		<li><a href="badminton-registration.php">Registration</a></li>
					    		<li><a href="badminton-volunteer.php">Volunteer</a></li>
					    	</ul>		
					    </li>

					</ul>
				</nav>

			</div>

    	</div>
	</div>
</div>

	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper body-wrapper">
				
		<div class="wrapper blog-roll ad-pad clearfix">
		
			<!-- Start Main Column  -->
			<div class="main-content col-1-1">
<h1>First Annual Mynix Open Badminton Tournament 2016</h1>
				<h3>Looking for Volunteers!</h3>
					
					<p>We will be needing volunteers on the days of the event to be
					<ul>
					<li style="list-style-type:circle!important;margin-left:50px;">Umpires</li>
					<li style="list-style-type:circle!important;margin-left:50px;">Registrars</li>
					</ul></p>
					<p>Feel free to contact us at <a href="mailto:mynixopen@gmail.com"><u>mynixopen@gmail.com</u></a> or fill out a form below to let us know what you are interested in!</p>
					<form class="jotform-form" action="//submit.jotform.ca/submit/60169620542250/" method="post" name="form_60169620542250" id="60169620542250" accept-charset="utf-8" style="float:left;">
  <input type="hidden" name="formID" value="60169620542250" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li class="form-line jf-required" data-type="control_fullname" id="id_1">
        <label class="form-label form-label-left form-label-auto" id="label_1" for="input_1">
          Full Name / Nom Complet
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_1" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox validate[required]" type="text" size="10" name="q1_fullName[first]" id="first_1" />
            <label class="form-sub-label" for="first_1" id="sublabel_first" style="min-height: 13px;"> 
First Name / Prénom </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox validate[required]" type="text" size="15" name="q1_fullName[last]" id="last_1" />
            <label class="form-sub-label" for="last_1" id="sublabel_last" style="min-height: 13px;"> 
Last Name / Nom de famille </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_3">
        <label class="form-label form-label-left form-label-auto" id="label_3" for="input_3">
          E-mail / Adresse courriel
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_3" class="form-input jf-required">
          <input type="email" class=" form-textbox validate[required, Email]" id="input_3" name="q3_email" size="30" value="" />
        </div>
      </li>
      <li class="form-line" data-type="control_phone" id="id_4">
        <label class="form-label form-label-left form-label-auto" id="label_4" for="input_4"> Phone Number / Numéro de téléphone </label>
        <div id="cid_4" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox" type="tel" name="q4_phoneNumber[area]" id="input_4_area" size="3">
            
            <label class="form-sub-label" for="input_4_area" id="sublabel_area" style="min-height: 10px;"> Area Code </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox" type="tel" name="q4_phoneNumber[phone]" id="input_4_phone" size="8">
            <label class="form-sub-label" for="input_4_phone" id="sublabel_phone" style="min-height: 10px;"> Phone Number </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textarea" id="id_5">
        <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5" style="width:250px!important;display:block!important;">
          Message
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input jf-required">
          <textarea id="input_5" class="form-textarea validate[required]" name="q5_message" cols="40" rows="6"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button">
              Submit
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <input type="hidden" id="simple_spc" name="simple_spc" value="60169620542250" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "60169620542250-60169620542250";
  </script>
</form>
				
				<!-- Finish Main Content -->
			</div>
			
			
			
		</div>
	</div>
    	
    
    	
	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper breadcrumb-wrapper">		
		<div class="wrapper">
			<a href="index.php" class="fa">&#xf015;</a> <a href="index.php">Home</a> <a href="badminton-volunteer.php">Mynix Open Badminton Tournament 2016 Volunteer</a>
		</div>
	</div>

<?php include('footer.php'); ?>