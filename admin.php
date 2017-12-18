<?php
	include('header.php');

	if (isset($_SESSION['email'])) {
?>

	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper body-wrapper">
				
		<div class="wrapper blog-roll ad-pad clearfix">
		
			<!-- Start Main Column  -->
			<div class="main-content col-1-1">
				<h1>Admin Panel</h1>
				<ul>
					<li>You are logged in as: <?php echo $_SESSION['email'] ?></li>
					<p></p>
					<li><a href="add_post.php"><i class="fa fa-file"></i> Add a post</a></li>
					<p></p>
					<li><a href="list_posts.php"><i class="fa fa-list-alt"></i> List posts</a></li>
				</ul>
			</div>
		</div>
	</div>
    	
    
    	
	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper breadcrumb-wrapper">		
		<div class="wrapper">
			<a href="index.php" class="fa">&#xf015;</a> <a href="index.php">Home</a> <a href="admin.php">Admin Panel</a>
		</div>
	</div>

<?php } else { ?>
	<div>Sorry, you're not an admin.</div>
<?php } ?>

<?php include('footer.php'); ?>