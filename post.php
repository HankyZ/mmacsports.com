<?php 
	include('header.php');
	session_start();

	require("php/mysql.php");
	$mysql = new MySQL();

	if (!isset($_GET['id']) || empty($_GET['id'])) {
		header('Location: index.php');
		die();
	}

	$token = md5(uniqid(rand(), TRUE));
	$_SESSION['token'] = $token;
	$_SESSION['token_time'] = time();
		
	$post = $mysql->getPost($_GET['id']);

	if (!$post) {
		header('Location: index.php');
		die();
	}

	$comments = $mysql->getCommentCollection($post['id']);

	unset($mysql);
?>
	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper body-wrapper">		
		<div class="wrapper blog-roll ad-pad clearfix">
		
			<!-- Start Main Column  -->
			<div class="col-3-4">
			
				<div class="clearfix post">


					<h1 class="title"><?php echo $post['title'] ?></h1>
					<?php if (isset($_SESSION['email'])) { ?>
						<ul class="post-edit">
							<!--<li><a href="add_post.php?edit=<?php echo $post['id'] ?>"><i class="fa fa-pencil-square-o"></i> Edit the news</a></li>
							<li onclick="confirmDelete()"><a href="#"><i class="fa fa-times"></i> Delete the news</a></li>-->

							<a class="btn-2" href="add_post.php?edit=<?php echo $post['id'] ?>"><i class="fa fa-pencil-square-o"></i> Edit the news</a>&nbsp; <a onclick="confirmDelete()" class="btn-4" href="#"><i class="fa fa-times"></i> Delete the news</a>
							<?php if($post['image_url'] != '' || !is_null($post['image_url'])){?><a onclick="confirmDeleteIma()" class="btn-4" href="#"><i class="fa fa-times"></i> Remove the image</a><?php }?>
							
							<script>
								function confirmDelete() {
									var r = confirm("Do you want to delete the new post?");
									if (r) {
										location.href = "php/delete_post.php?id=<?php echo $post['id'] ?>";
									}

									return false;
								}
								function confirmDeleteIma() {
									var r = confirm("Do you want to remove the image?");
									if (r) {
										location.href = "php/processDeleteIma.php?id=<?php echo $post['id']; ?>";
									}

									return false;
								}
							</script>
						</ul>
					<?php } ?>
					<?php if($post['image_url'] != "" && !is_null($post['image_url'])){ ?>
					<img src="<?php echo $post['image_url'] ?>"/><br/><br/>
					<?php } ?>
					<?php if ( isset($post['video_url']) && $post['video_url'] != ''){ ?>
					
					<?php echo $post['video_url']; }?>
					<pre><?php echo $post['text'] ?></pre>

				
				
				
				<!-- Start Paging -->
					<!--
				<div class="paging clearfix">
					<div class="col-1-2 prev">
						<div class="meta">Prev post</div>
						<a href="post.php?id=<?php echo $posts[0]['id'] ?>"><h4><?php echo $post[0]['title'] ?></h4></a>
					</div>
					<div class="col-1-2 next last">
						<div class="meta">Next post</div>
						<a href="post.php?id=<?php echo $post[0]['id'] ?>"><h4><?php echo $post[0]['title'] ?></h4></a>
					</div>
				</div>
				-->

				<!--
				<script>
					function confirmDeleteComment(commentId) {
						var r = confirm("Do you want to delete the comment?");
						if (r) {
							location.href = "php/processDeleteComment.php?id=" + commentId + "&post_id=<?php echo $post['id'] ?>";
						}

						return false;
					}
				</script>
				-->
				<!-- Start Comments -->
				<h3>Comments (<?php echo count($comments) ?>)</h3>
				<ul id="comments" class="comments">
					<?php for ($i = 0 ; $i < count($comments) ; $i++) { ?>
						<li class="parent">
							<div class="<?php if ($i % 2 == 0) echo 'odd' ?> clearfix">
								<img src="img/guest-1.jpg" alt="Fill" class="left stay" />
								<h6 class="meta">
									<?php echo $comments[$i]['username'] ?> <span class="date"><?php echo date("M d Y", $comments[$i]['created_on']) ?></span>
								</h6> 
								<?php if (isset($_SESSION['email'])) { ?>
									<a onclick="return confirm('Do you want to delete the comment?');" class="right" 
										href="php/processDeleteComment.php?id=<?php echo $comments[$i]['id'] ?>&post_id=<?php echo $post['id'] ?>">
										<i class="fa fa-times"></i>
									</a>
								<?php } ?>
								<pre><?php echo $comments[$i]['text'] ?></pre>
							</div>

							<!-- comment -->
						</li>
					<?php } ?>
				</ul>	
				
				
				
				
				<!-- Start Form -->
				<form id="comment" class="clearfix form-style-2" action="php/processComment.php" method="POST">
					<h2>Leave a Reply</h2>
					<div class="clearfix">
						<div class="col-1-3">
							<input type="text" name="username" class="half" placeholder="Name"  />
						</div>
						<div class="col-1-3">
							<input type="email"  name="email" class="half field-last" placeholder="Email" />
						</div>
						<div class="col-1-3 last">	
							<input type="text"  name="website" class="full" placeholder="Website" />
						</div>
					</div>		
					<textarea id="message" name="text" rows="5" cols="20" class="full" placeholder="Comment"></textarea>
					<input type="hidden"  name="post_id" value="<?php echo $post['id'] ?>" />
					<div>
						<input id="num1" class="sum" type="text" name="num1" value="<?php echo rand(5,9) ?>" readonly="readonly" />
						<input id="ope" type="hidden" name="ope" value="<?php $ope = rand(); echo $ope ?>" readonly="readonly" />
						<span> <?php echo $ope%2==0? '+':'-' ?> </span>
						<input id="num2" class="sum" type="text" name="num2" value="<?php echo rand(1,4) ?>" readonly="readonly" />
						<span> = </span>
						<input id="captcha" class="captcha" type="text" name="captcha" maxlength="2" />
						<span id="spambot">(Are you human, or spambot?)</span>
					</div>
					<input type="hidden" name="token" value="<?php echo $token; ?>" />
					<input name="button" class="btn left" type="submit" value="Send Message" id="send" />
					<em class="right hide-480">Your email address will not be published.</em>
					
				</form>
				
			</div>

			
		</div>
	</div>
    	
    	
	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper breadcrumb-wrapper">		
		<div class="wrapper">
			<a href="index.php" class="fa">&#xf015;</a> <a href="index.php">Home</a> <a href="post.php">Post</a> 
		</div>
	</div>
<?php include('footer.php'); ?>