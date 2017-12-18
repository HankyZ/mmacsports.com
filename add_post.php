<?php include('header.php'); ?>

<?php if (isset($_SESSION['email'])) { ?>

    <?php
        require("php/mysql.php");
        $mysql = new MySQL();

        if (isset($_GET['edit']) && !empty($_GET['edit'])) {
            $post = $mysql->getPost($_GET['edit']);
        }
    ?>
    <!-- Start Outter Wrapper -->
    <div class="outter-wrapper body-wrapper">

        <div class="wrapper blog-roll ad-pad clearfix">

            <!-- Start Main Column  -->
            <div class="main-content col-1-1">
                <!-- Start Error Messages -->
                <?php if (isset($_GET['error']) && $_GET['error'] == 'fields') { ?>
                    <div class="error">Please fill out the required fields.</div>
                <?php } ?>

                <?php if (isset($_GET['error']) && $_GET['error'] == 'size') { ?>
                    <div class="error">File size too large. Image cannot be larger than 5 MB.</div>
                <?php } ?>
                <!-- Start Error Messages -->

                <h1><?php echo isset($post)? 'Edit' : 'Add' ; ?> a Post</h1>
                <div>
                    <?php if (isset($post) && ($post['image_url'] !="" && !is_null($post['image_url']))) { ?>
                        <div style="width:300px; height: 200px; background-image: url(<?php echo $post['image_url'] ?>);background-size: cover"></div>
                    <?php } ?>
                    <form id="contactform" action="php/processPost.php" method="post" enctype="multipart/form-data">
                        <div id="add-news">
							<label for="title">Title</label><br/>
                            <input type="text" id="title" name="title" placeholder="Title" value="<?php if (isset($post) && $post) echo $post['title']; ?>"/>
							<label for="video">Embed Video</label><br/>
							<input type="text" id="video" name="video" placeholder="Video URL" value='<?php if (isset($post) && $post) echo $post['video_url']; ?>'/>
                            <label for="image">Image File</label><br/>
							<input type="file" id="image" name="image"/>
                            <p></p>
							<label for="text">Post Text</label><br/>
                            <textarea id="text" name="text" rows="5" cols="20" placeholder="Your text"><?php if (isset($post) && $post) echo $post['text']; ?></textarea>
                            <?php if (isset($post) &&$post) { ?>
                                <input type="hidden" id="post_id" name="id" value="<?php echo $post['id'] ?>"/>
                                <input type="hidden" id="image_url" name="image_url" value="<?php echo $post['image_url'] ?>"/>
                            <?php } ?>
                        </div>
                        <input name="button" class="btn-2" type="submit" value="Add" id="send" />
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Start Outter Wrapper -->
    <div class="outter-wrapper breadcrumb-wrapper">
        <div class="wrapper">
            <a href="index.php" class="fa">&#xf015;</a> <a href="index.php">Home</a> <a href="#">Add/Edit a New Post</a>
        </div>
    </div>

<?php } else { ?>
    <?php include('403.php'); ?>
<?php } ?>

<?php include('footer.php'); ?>