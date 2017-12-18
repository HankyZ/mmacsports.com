<?php
	require("mysql.php");
	session_start();
	if (isset($_SESSION['email'])) {
		$mysql = new MySQL();
		if (!isset($_GET['id']) || !isset($_GET['post_id']) || empty($_GET['post_id'])) {
			header('Location: ../index.php');
			die();
		}
		$mysql->deleteComment($_GET['id']);
		unset($mysql);
		//echo 'Location: ../post.php?id='. $_GET['post_id'];
		header('Location: ../post.php?id=' . $_GET['post_id']);
		exit;
	}
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	die();