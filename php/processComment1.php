<?php
require('mysql.php');

$mysql = new MySQL();

if (!isset($_POST['username']) || !isset($_POST['text']) || empty($_POST['username']) || empty($_POST['text'])) {
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