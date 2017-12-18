<?php include('header.php'); ?>
<?php
	require("php/mysql.php");

	$mysql = new MySQL();

	$posts = $mysql->getPostCollection();
?>
	<!-- Slider Area -->
	<div class="tp-banner-container">
	
		<div class="tp-banner" >
		
			<ul>

				<!-- SLIDE 1  -->
				<li data-transition="fade" data-masterspeed="300" >
				
					<!-- MAIN IMAGE -->
					<img class="slider-bg" src="img/slider/main.jpg" alt="" data-kenburns="off" data-duration="5000" data-ease="Linear.easeNone">
					
					<!-- LAYERS -->
					
					<!-- LAYER NR. 1 -->
					<div class="tp-caption fadeout sfr sport-rs-boxed sport-rs-heading"
						data-x="20" data-hoffset="0"
						data-y="155" data-voffset="0"
						data-captionhidden="off"
						data-speed="800"
						data-start="500"
						data-easing="Power9.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="5000"
						data-endeasing="Power1.easeOut">
						Montreal Mynix Athletic Club<br/>
						<div>NON-PROFIT ORGANIZATION</div>
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption fadeout sfr sport-rs-boxed sport-rs-text"
						data-x="20" data-hoffset="0"
						data-y="280" data-voffset="0"
						data-captionhidden="off"
						data-speed="800"
						data-start="750"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut">
						MMAC was officially incorporated in August 2002. Its sole<br/>
						purpose is to encourage culture preservation of its city’s Asian<br/>
						community through sports.
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption fadeout sfr tp-resizeme"
						data-x="20" data-hoffset="0"
						data-y="400" data-voffset="0"
						data-speed="800"
						data-start="1000"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut">
						<a class="btn" href="register.php">Join Today</a>&nbsp; <a class="btn-2" href="donate.php">Make a Donation</a>
					</div>
				</li>

				<!-- SLIDE 2  -->
				<li data-transition="fade" data-masterspeed="300" >
				
					<!-- MAIN IMAGE -->
					<img class="slider-bg" src="img/slider/badminton.png" alt="" data-kenburns="off" data-duration="5000" data-ease="Linear.easeNone">
					
					<!-- LAYERS -->
					
					<!-- LAYER NR. 1 -->
					<div class="tp-caption fadeout sfr sport-rs-boxed sport-rs-heading"
						data-x="20" data-hoffset="0"
						data-y="155" data-voffset="0"
						data-captionhidden="off"
						data-speed="800"
						data-start="500"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="5000"
						data-endeasing="Power1.easeOut">
						Mynix Badminton Club<br/>
						<div>Weekly Club Play</div>
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption fadeout sfr sport-rs-boxed sport-rs-text"
						data-x="20" data-hoffset="0"
						data-y="280" data-voffset="0"
						data-captionhidden="off"
						data-speed="800"
						data-start="750"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut">
						Every Friday from 7:00PM to 10:00PM and every Sunday from 1:30PM to 4:30PM at Cégep du Vieux Montréal.<br>
						Please email <u>badminton@mmacsports.com</u> for details. <br/>
						Or follow the "Badminton" drop down menu for more details.
					</div>
	

					<!-- SLIDE 3  -->
					<li data-transition="fade" data-masterspeed="300" >
				
					<!-- MAIN IMAGE -->
					<img class="slider-bg" src="img/slider/volleyball.jpg" alt="" data-kenburns="off" data-duration="5000" data-ease="Linear.easeNone">
					
					<!-- LAYERS -->
					
					<!-- LAYER NR. 1 -->
					<div class="tp-caption fadeout sfr sport-rs-boxed sport-rs-heading"
						data-x="20" data-hoffset="0"
						data-y="155" data-voffset="0"
						data-captionhidden="off"
						data-speed="800"
						data-start="500"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="5000"
						data-endeasing="Power1.easeOut">
						Mynix Volleyball<br/>
						<div>Weekly Drop-Ins</div>
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption fadeout sfr sport-rs-boxed sport-rs-text"
						data-x="20" data-hoffset="0"
						data-y="280" data-voffset="0"
						data-captionhidden="off"
						data-speed="800"
						data-start="750"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut">
						Every Sunday from 10:00AM to 1:00PM at Cégep du Vieux Montréal.<br>
						Please follow the "Volleyball" drop down menu for more details.
					</div>


					<!-- SLIDE 3  -->
					<!--
				<li data-transition="fade" data-masterspeed="300" >
					<!-- MAIN IMAGE -->
					<!--
					<img class="slider-bg" src="img/slider/mmacleague.jpg" alt="" data-kenburns="off" data-duration="5000" data-ease="Linear.easeNone">
					<!-- LAYERS -->
					<!-- LAYER NR. 1 -->
					<!--
					<div class="tp-caption fadeout sfr sport-rs-boxed sport-rs-heading"
						 data-x="20" data-hoffset="0"
						 data-y="155" data-voffset="0"
						 data-captionhidden="off"
						 data-speed="800"
						 data-start="500"
						 data-easing="Power4.easeInOut"
						 data-splitin="none"
						 data-splitout="none"
						 data-elementdelay="0.05"
						 data-endelementdelay="0.1"
						 data-endspeed="5000"
						 data-endeasing="Power1.easeOut">
						MMAC Seasonal League Game<br/>
						<div>Sunday League Winter Session 2015</div>
					</div>

					<!-- LAYER NR. 2 -->
					<!--
					<div class="tp-caption fadeout sfr sport-rs-boxed sport-rs-text"
						 data-x="20" data-hoffset="0"
						 data-y="280" data-voffset="0"
						 data-captionhidden="off"
						 data-speed="800"
						 data-start="750"
						 data-easing="Power4.easeInOut"
						 data-splitin="none"
						 data-splitout="none"
						 data-elementdelay="0.05"
						 data-endelementdelay="0.1"
						 data-endspeed="1000"
						 data-endeasing="Power1.easeOut">
						Teams: Mars, Answer, Sabertooth, MMAC 35, MMAC 45, Shockwave, Hunter, Snowolf<br/>
						January 18, 2015 - April 26, 2015 <br/>
					</div>
					-->
				</li>

			</ul>
		</div>
	</div>

	<!-- Sponsors Area -->
<!--
	<div class="outter-wrapper">
		<div class="wrapper ad-pad clearfix">

			<div class="clearfix">

			<div class="col-1-1">
    	   		<!-- Sponsor 1 -->
    	   		<!--
    	   		<div class="col-1-5 sponsors">
					<a class="sponsors-logo" href="#" target="_blank"><span class="icon-sponsor_adidas"></span></a>
    	   		</div>

    	   		<!-- Sponsor 2 -->
    	   		<!--
    	   		<div class="col-1-5 sponsors">
					<a class="sponsors-logo" href="#" target="_blank"><span class="icon-sponsor_hd"></span></a>
    	   		</div>

    	   		<!-- Sponsor 3 -->
    	   		<!--
    	   		<div class="col-1-5 sponsors">
					<a class="sponsors-logo" href="#" target="_blank"><span class="icon-sponsor_lotto"></span></a>
    	   		</div>

                <!-- Sponsor 4 -->
    	   		<!--
    	   		<div class="col-1-5 sponsors">
					<a class="sponsors-logo" href="#" target="_blank"><span class="icon-sponsor_puma"></span></a>
    	   		</div>

                <!-- Sponsor 5 -->
				<!--
				   <div class="col-1-5 sponsors">
					<a class="sponsors-logo" href="#" target="_blank"><span class="icon-sponsor_mizuno"></span></a>
				   </div>

				</div>
				</div>
				</div>

  <?php if (count($posts) > 1) { ?>
	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper body-wrapper">
		<div class="wrapper ad-pad clearfix">

			<!-- Column -->
			<div class="col-1-6">
				<h2></h2>
			</div>

			<!-- Column -->
			<div class="col-1-4">
			
				<h2>Latest News</h2>
				
				<div class="mosaic-block circle">
					<a href="post.php?id=<?php echo $posts[0]['id'] ?>" class="mosaic-overlay link" title=""></a><div class="mosaic-backdrop">
					<div class="corner date"><?php echo date("M d, Y", $posts[0]['created_on']); ?></div><img src="<?php echo $posts[0]['image_url'] ?>" alt="" /></div>
				</div>
				
				<h6 class="title"><a href="post.php?id=<?php echo $posts[0]['id'] ?>"><?php echo $posts[0]['title'] ?></a></h6>
				
				<p><?php
					$text = $posts[0]['text'];

					if (strlen($text) > 10) {
						$text = substr($text, 0, 200) . "&#8230;";
					}

					echo $text;

					?>
					<a href="post.php?id=<?php echo $posts[0]['id'] ?>" class="read-more">More</a></p>

			</div>


			<!-- Column -->
			<div class="col-1-2 last">
				<h3></h3>
				<ul class="widget-event-list">
					<?php for($i = 1 ; $i < count($posts) && $i < 5 ; $i++) { ?>
						<li>
							<img class="left stay" src="img/news-ball.png" alt="" />
							<div class="date"><?php echo date("M d, Y", $posts[$i]['created_on']); ?></div>
							<h6 class="title"><a href="post.php?id=<?php echo $posts[$i]['id'] ?>"><?php echo $posts[$i]['title'] ?></a></h6>
							<p><?php
								$text = $posts[$i]['text'];

								if (strlen($text) > 10) {
									$text = substr($text, 0, 90) . "&#8230;";
								}

								echo $text;

								?>
								<a href="post.php?id=<?php echo $posts[$i]['id'] ?>" class="read-more">More</a></p>
						</li>
					<?php } ?>
				</ul>
			</div>

		</div>
	</div>

  <?php } ?>

	<?php if (count($posts) == 1) { ?>
		<!-- Start Outter Wrapper -->
		<div class="outter-wrapper body-wrapper">
			<div class="wrapper ad-pad clearfix">

				<!-- Column -->
				<div class="col-1-6">
					<h2></h2>
				</div>

				<!-- Column -->
				<div class="col-1-1">
					<h2>Latest News</h2>
					<div class="mosaic-block circle">
						<a href="post.php?id=<?php echo $posts[0]['id'] ?>" class="mosaic-overlay link" title="NACBAIT 2015"></a><div class="mosaic-backdrop">
							<div class="corner date"><?php echo date("M d, Y", $posts[0]['created_on']); ?></div><img src="<?php echo $posts[0]['image_url'] ?>" alt="" /></div>
					</div>
					<h6 class="title"><a href="post.php?id=<?php echo $posts[0]['id'] ?>"><?php echo $posts[0]['title'] ?></a></h6>
				<p><?php
						$text = $posts[0]['text'];

						if (strlen($text) > 10) {
							$text = substr($text, 0, 200) . "&#8230;";
						}

						echo $text;


						?>
					<a href="post.php?id=<?php echo $posts[0]['id'] ?>" class="read-more">More</a></p>

				</div>


			</div>
		</div>

	<?php } ?>


	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper divider"></div>

	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper social-block centered">
		<div class="main-container">
			<div class="wrapper">
				<h2>We are proud to say that from a handful of members in 2002,<br>
				we now have more than <span>60</span> regular members with <span>all ages</span> in our club.</h2>
			</div>

			<div class="clearfix">
    			<!-- Start Main Content -->

    			<div class="wrapper">
				
					<p>Montreal Mynix Athletic Club (MMAC) is a totally non-profit organization. All the directors and staff are volunteers. Our main objective is to preserve and promote our Asian heritage and bonding with other fellow communities throughout North America through the sport of basketball for our young.</p>

					<p>Needless to say it is not easy to sustain such an organization without adequate funding and manpower.  Our main source of income is through membership fees, donations of equipment and periodical fund-raising activities.</p>

    				<a href="register.php" class="btn">Join Today</a> <a href="donate.php" class="btn-2">Make a Donation</a>

	    			<div class="share-this-btns">
		    			<!-- Share This -->
		    			<span class='st_facebook_hcount'></span>
		    			<span class='st_twitter_hcount'></span>
		    			<span class='st_googleplus_hcount'></span>
		    			<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		    			<script type="text/javascript">stLight.options({publisher: "ur-b4a0aaec-9733-1e85-1341-6dfcd856f67", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>
		    			<!-- End Share This -->
	    			</div>

    			</div>

			</div>
		</div>
	</div>

<?php include('footer.php'); ?>
