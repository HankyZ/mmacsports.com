<?php include('header.php'); ?>

	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper body-wrapper">
				
		<div class="wrapper blog-roll ad-pad clearfix">
		
			<!-- Start Main Column  -->
			<div class="main-content col-1-1">
				<h1>Registration Form</h1>
				<h3>2012 – 2013 Basketball season</h3>
				<p class="lead">Register by filling out the form below.</p>
					<p>Time: Every Friday
					<br>8 yrs – 13yrs group: from 6.30 – 8.30pm
						<br>14 yrs+: from 8.30pm – 10.30pm

						<br>Address: St-Henri High School (Polyvalent St-Henri, St-Jacques West and Ferdinand, Metro St-Henri)
						<br>
						<br>Note:
						<br>1) All players are required to bring 2 T-shirts ( 1 white , 1 color), gym shorts, good running shoes, towels, water bottle and a ball ( if you have one).
						<br>2) All players must exhibit good sportsmanship and adhere to club rules ie. no fighting, no cursing, no spitting, no littering or any bad behaviors. Violations may subject to first warning or immediate expulsion from the team.
					</p>

					<p>FEE: $185.00 per person / per year (30 weeks)</p>

					<p>After submitting the form below, please make a cheque (payable to MMAC) and bring it in person at the start of the season:
						<br>MMAC
						<br>4115 Saint-Jacques
						<br>Montreal, QC
						<br>H4C 1J5
					</p>
				<!-- Start Form -->
	        	<form id="contactform" action="php/processForm.php" method="post">
					<div>
						<input type="text" id="name" name="name" placeholder="Family Name (required)">
						<input type="text" id="name" name="name" placeholder="Given Name (required)">
						<input type="text" id="name" name="name" placeholder="Medicare Card # (required)">
						<input type="text" id="name" name="name" placeholder="Medicare Expiration Date (required)">
						<input type="text" id="name" name="name" placeholder="Parent/guardian name (if applicable)">
						<input type="text" id="name" name="name" placeholder="Home address (required)">
						<input type="text" id="name" name="name" placeholder="Telephone - Home (required)">
						<input type="text" id="name" name="name" placeholder="Telephone - Cel">
						<input type="email" id="email" name="email" placeholder="Email Address">
						<input type="date" name="eventDate" id="datepicker" placeholder="Birth Date (mm/dd/yy)">
						<input type="radio" name="radio-310" value="Male"> Male <input type="radio" name="radio-310" value="Female"> Female
					</div>

					<p>By submitting this form, I, on behalf of myself or as a parent or legal guardian of the above player, agree that MMAC and its coaches are NOT responsible for any injuries, accidents, sickness or loss of personal effects.</p>
	        		
	        		<input name="button" class="btn-3" type="submit" value="Register" id="send" />
					<input name="button" class="btn-3" type="reset" value="Clear" id="reset" />
	        	</form>
	        	
	        	
	        	
	        	<div id="response"></div>
					
				<!-- Finish Main Content -->
			</div>
			
			
			
		</div>
	</div>
    	
    
    	
	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper breadcrumb-wrapper">		
		<div class="wrapper">
			<a href="index.php" class="fa">&#xf015;</a> <a href="index.php">Home</a> <a href="register.php">Registration</a>
		</div>
	</div>

<?php include('footer.php'); ?>