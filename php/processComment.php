<?php
	require('mysql.php');
	session_start();
	
	$mysql = new MySQL();
	$captchaVal = FALSE;

	if(isset($_POST['ope']) && isset($_POST['captcha']) && isset($_POST['num1']) && isset($_POST['num2']) && isset($_SESSION['token']) && $_POST['token'] == $_SESSION['token']){
		$num1 = intval($_POST['num1']);
		$num2 = intval($_POST['num2']);
		$captcha = intval($_POST['captcha']);
		$ope = intval($_POST['ope']);
		if($ope % 2 == 0){
			$answer = $num1 + $num2;
		}
		else{
			$answer = $num1 - $num2;
		}
		
		if($answer == $captcha){
			$captchaVal = true;
		}
	}
	if (!isset($_POST['username']) || !isset($_POST['text']) || empty($_POST['username']) || empty($_POST['text']) || !$captchaVal) {
		header('Location: ../post.php?id=' . $_POST['post_id'] . '&error=fields');
		die();
	}

	if (!isset($_POST['email'])) {
		$email = "";
	} else {
		$email = $_POST['email'];
	}

	if (!isset($_POST['website'])) {
		$website = "";
	} else {
		$website = $_POST['website'];
	}

	$mysql->insertComment($_POST['username'], $_POST['text'], $email, $website, $_POST['post_id']);

	header('Location: ../post.php?id=' . $_POST['post_id']);
	die();