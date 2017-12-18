<?php include('header.php'); ?>

<?php if (isset($_SESSION['email'])) { ?>

    <?php
        require("php/mysql.php");
        $mysql = new MySQL();

        $posts = $mysql->getPostCollection();
    ?>
    <!-- Start Outter Wrapper -->
    <div class="outter-wrapper body-wrapper">

        <div class="wrapper blog-roll ad-pad clearfix">

            <!-- Start Main Column  -->
            <div class="main-content col-1-1">
                <h1>List of Posts</h1>
                <ul>
                    <?php for ($i = 0 ; $i < count($posts) ; $i++) { ?>
                        <li>
                            <img class="list-post" src="<?php echo $posts[$i]['image_url'] ?>"/>
                            <a href="/post.php?id=<?php echo $posts[$i]['id'] ?>"><h5><?php echo $posts[$i]['title'] ?></h5></a>
                            <p>
                                <?php
                                $text = $posts[$i]['text'];

                                if (strlen($text) > 10) {
                                    $text = substr($text, 0, 100) . "&#8230;";
                                }

                                echo $text;


                                ?></p>
                            <ul>
                                <li><a href="add_post.php?edit=<?php echo $posts[$i]['id'] ?>"><i class="fa fa-pencil-square-o"></i> Edit this post</a></li>
                                <li><a href="#" onclick="confirmDelete(<?php echo $posts[$i]['id'] ?>)"><i class="fa fa-times"></i> Delete this post</a></li>
                            </ul>
                            <hr>
                        </li>
                    <?php } ?> 
					<script>
						function confirmDelete(e) {
							var r = confirm("Are you sure you want to delete this post? This cannot be undone.");
							if (r) {
								location.href = "php/delete_post.php?id="+e;
							}

							return false;
						}
					</script>
                </ul>
            </div>
        </div>
    </div>



    <!-- Start Outter Wrapper -->
    <div class="outter-wrapper breadcrumb-wrapper">
        <div class="wrapper">
            <a href="index.php" class="fa">&#xf015;</a> <a href="index.php">Home</a> <a href="list_posts.php">List of Posts</a>
        </div>
    </div>

<?php } else { ?>
    <?php include('403.php'); ?>
<?php } ?>

<?php include('footer.php'); ?>