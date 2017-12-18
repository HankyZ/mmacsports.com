<?php
	require("mysql.php");
	session_start();
	$mysql = new MySQL();

	if (isset($_SESSION['email'])) {
		if (isset($_GET['id'])) {
			$mysql->deletePost($_GET['id']);
		}
	}
	else{
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	unset($mysql);
	header('Location: ../list_posts.php');
