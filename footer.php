	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper footer-wrapper">		
		<div class="wrapper clearfix">
			<!-- Start Widget -->
			<div class="col-1-4 widget first">
				<h3 class="widget-title">Contact Us</h3>
				<ul class="list-1">
					<li><a href="mailto:info@mmacsports.com"><em class="fa">&#xf0e0;</em> info@mmacsports.com</a></li>
                    <li><a href="https://www.facebook.com/groups/196981640673683/" target="_blank"><em class="fa">&#xf082;</em> Facebook</a></li>	
				</ul>	
			</div>
		
			
			<!-- Start Widget -->
			<div class="col-1-2 widget">
				<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43875.22054053755!2d-73.58989000832563!3d45.46569447538406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc9109e75ef91bf%3A0xf22707d37cf4bf77!2sSchool+Saint+Henri!5e0!3m2!1sen!2sca!4v1465278036978" width="350" height="250" frameborder="0" style="border:0"></iframe>-->
			
					<iframe src="https://www.google.com/maps/d/u/0/embed?mid=103sG2DfydAXkEEql61-x6lOycA5HEFpt" width="350" height="250" frameborder="0" style="border:0"></iframe>
				<!--ul class="list-1">
				
                <h3 class="widget-title"></h3>
				<li>
					<em class="fa">&#xf124;</em> <strong>Gym Locations</strong><br><br>
					
					5th Floor Block C, Cégep du Vieux Montréal<br>
					255 Rue Ontario E, Montréal, QC H2X 1X6<br><br>
					
					L’École Secondaire Saint-Henri<br>
					4115, rue Saint-Jacques, Montréal
				</li>
				</ul-->
			
			</div>

			<!-- Start Widget -->
			<!--div class="col-1-2 widget" style="display:none;">
				<h3 class="widget-title">NACBAIT 2015 Tournament Locations</h3>
				<ul class="open-hours">
					<li>Location 1<span> <a href="https://www.google.com/maps/place/1212+Rue+Sanguinet,+Universit%C3%A9+du+Qu%C3%A9bec+%C3%A0+Montr%C3%A9al,+Montr%C3%A9al,+QC+H2X+3E7,+Canada/@45.5120582,-73.5598406,17z/data=!3m1!4b1!4m2!3m1!1s0x4cc91a52810421d1:0xeca383c4e0963c68?hl=en-US" target="_blank">L'Université du Québec à Montréal (UQAM)</a></span></li>
					<li>Location 2<span> <a href="https://www.google.com/maps/place/C%C3%A9gep+du+Vieux+Montr%C3%A9al/@45.514931,-73.56656,17z/data=!3m1!4b1!4m2!3m1!1s0x4cc91a4b508adcab:0x9439f187f763ea27?hl=en-US" target="_blank">Cégep du Vieux Montréal</a></span></li>
					<li>Location 3<span> <a href="https://www.google.com/maps/place/260+Rue+de+Gentilly+E,+Coll%C3%A8ge+%C3%89douard-Montpetit,+Longueuil,+QC+J4H+4A4,+Canada/@45.5374595,-73.4922621,17z/data=!3m1!4b1!4m2!3m1!1s0x4cc91b5a3d8603bb:0x391c75200e3508b8?hl=en-US" target="_blank">Collège Édouard-Montpetit</a></span></li>
				</ul>
			</div>
			
			
			<!-- Start Widget -->
			<div class="col-1-4 widget last">
				<ul class="list-1">
                <h3 class="widget-title"></h3>
					<li>
	    				<em class="fa">&#xf041;</em> <strong>Postal Address</strong><br><br>
						P.O Box 1021, Succ. DesJardins<br>
						Montreal, Quebec, H5B 1C2
					</li>
				</ul>	
			</div>
		</div>
	</div>
    	
    	
    	
    	
    	
	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper base-wrapper">
		<div class="wrapper clearfix">
			<div class="social-links left">© MMAC 2015 &bull; Website by <a href="http://ruuka.net" target="_blank">Ruuka.NET</a></div>
			
			<!-- Social Icons -->
			<div class="social-links right">
				<?php if (isset($_SESSION['email'])) { ?>
					Logged as: <?php echo $_SESSION['email'] ?> &bull; <a href="../php/logout.php">Logout <i class="fa fa-sign-out"></i></a> &bull; <a href="../admin.php">Admin Panel <i class="fa fa-cogs"></i></a>
				<?php } else { ?>
					<a href="../login.php">Login <i class="fa fa-sign-in"></i></a> &bull;
					<a href="../register.php">Register <i class="fa fa-key"></i></a>
				<?php } ?>
			</div>
		</div>
	</div>

		
		

	<!-- Load jQuery -->
	<script type="text/javascript" src="../js/vendor/jquery-1.8.3.min.js"></script>
	
	<!-- Start Scripts --> 
	<script type="text/javascript" src="../js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="../js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="../js/jquery.sidr.js"></script>
	<script type="text/javascript" src="../js/fancybox/jquery.fancybox.js?v=2.1.4"></script>
	<script type="text/javascript" src="../js/cleantabs.jquery.js"></script>
	<script type="text/javascript" src="../js/fitvids.min.js"></script>
	<script type="text/javascript" src="../js/jquery.scrollUp.min.js"></script>
	<script type="text/javascript" src="../js/media/mediaelement-and-player.min.js"></script>
	<script type="text/javascript" src="../js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="../js/selectivizr-min.js"></script>
	<script type="text/javascript" src="../js/placeholder.js"></script>
	<script type="text/javascript" src="../js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="../js/mosaic.1.0.1.js"></script>
	<script type="text/javascript" src="../js/jquery.isotope.js"></script>
	<script type="text/javascript" src="../js/toggle.js"></script>
	<script type="text/javascript" src="../js/jquery.tooltipster.js"></script>
	<script type="text/javascript" src="../js/jquery.countdown.js"></script>
	<script type="text/javascript" src="../js/jquery.sticky.js"></script>
	<script type="text/javascript" src="../js/html5media.js"></script>
	<script type="text/javascript" src="../js/slider-1.js"></script>
	
	<script type="text/javascript" src="../js/main.js"></script>
	

				
    <!-- Google Analytics -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
    
    
    </body>
</html>