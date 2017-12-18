<?php
session_start();
require('mysql.php');

$mysql = new MySQL();

$row = $mysql->getUserByLogin($_POST['email'], $_POST['password']);
$nbRows = count($row);

if ($nbRows > 0) {
   $_SESSION['email'] = $row[0]['email'];
}

unset($mysql);

if ($nbRows > 0 && isset($_SESSION['email'])) {
   header('Location: ../index.php');
} else {
   header('Location: ../login.php?error=true');
}

die();
?>
