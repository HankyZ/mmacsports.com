<?php
	require("mysql.php");
	session_start();
	$mysql = new MySQL();

	if (isset($_SESSION['email'])) {
		if (isset($_GET['id'])) {
			$post = $mysql->getPost($_GET['id']);
			if($post['image_url'] != ''){
				$mysql->deletePostImage($_GET['id']);
				unlink($_SERVER['DOCUMENT_ROOT'] . "/".$post['image_url']);
			}
		}
	}

	unset($mysql);

	header('Location: ../post.php?id='. $_GET['id']);
 ?>