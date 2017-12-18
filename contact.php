<?php include('header.php'); ?>

   	<!-- Start Outter Wrapper -->	
   <!--	<div class="outter-wrapper">
   		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2796.3984457614993!2d-73.55686299999999!3d45.5020572!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a59a404ed59%3A0xb8daeb342fec644!2s300+Rue+du+Saint-Sacrement+%23515%2C+Montr%C3%A9al%2C+QC+H2Y+1X4%2C+Canada!5e0!3m2!1sen!2sau!4v1419151400311" width="600" height="550" frameborder="0" style="border:0"></iframe>
   	</div>
   	<!-- End Outter Wrapper -->		
    			
    	
	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper body-wrapper">		
		<div class="wrapper ad-pad clearfix">
			
			
			<div class="col-3-4">
	        	<h1>Contact Us</h1>
	        	<p class="lead">
					P.O Box 1021, Succ. DesJardins, Montreal, Quebec, H5B 1C2
				</p> 
	   	                
	        	
	        	
	        	 
	        	 
	        	<!-- Start Form -->
	        	<form id="contactform" action="php/processForm.php" method="post">
	        		<table class="tableless">
	        			<tr><td><input type="text" id="name" name="name" placeholder="Your Name" /></td></tr>
	        			<tr><td><input type="email" id="email" name="email" placeholder="Email Address" /></td></tr>
	        			<tr><td><textarea id="message" name="message" rows="5" cols="20" placeholder="Your Message"></textarea></td></tr>
	        		</table>
	        		
	        		
	        		<input name="button" class="btn-2" type="submit" value="Send Message" id="send" />
	        	</form>
	        	
	        	
	        	
	        	<div id="response"></div>
	              	                                                                                               
				<!-- Finish Main Content -->
	        </div>
			
			
			
	
			<!-- Start Main Sidebar  -->
			<aside class="col-1-4 last">
				<div class="widget">
				<h3>Other ways to Contact Us</h3>
			    <ul class="widget-list list-1">
                	<li><a href="mailto:info@mmacsports.com">info@mmacsports.com</a></li>
			    	<li><a href="https://www.facebook.com/pages/MMAC/245464812151887">Facebook</a></li>
			    	<li>Our gym locations :<br><br>
						L’École Secondaire Saint-Henri: 4115, rue Saint-Jacques, Montréal<br><br>
						5th Floor Block C, Cégep du Vieux Montréal, 255 Rue Ontario E, Montréal</li>
			    </ul>
			    </div>	
			</aside> 
			<!-- Finish Sidebar -->
				
			
		</div>
	</div>
    	
	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper breadcrumb-wrapper">		
		<div class="wrapper">
			<a href="index.php" class="fa">&#xf015;</a> <a href="index.php">Home</a> <a href="contact.php">Contact Us</a> 
		</div>
	</div>

<?php include('footer.php'); ?>