<?php
require('mysql.php');

session_start();

$mysql = new MySQL();

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $imageUrl = $_POST['image_url'];
    $urlPart = "&edit=". $_POST['id'];
} else {
    $urlPart = "";
}

if (!isset($_POST['title']) || !isset($_POST['text']) || !isset($_FILES['image']) ||
    empty($_POST['title']) || empty($_POST['text'])) {
    header('Location: ../add_post.php?error=fields'. $urlPart);
    die();
}

if (isset($_FILES['image']) && $_FILES['image']['size'] != 0) {
    $imageFileType = pathinfo(basename($_FILES["image"]["name"]), PATHINFO_EXTENSION);
    $target_dir = "uploads/";
    $imageUrl = $target_dir . time() . "." . $imageFileType;

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check == false) {
            header('Location: ../add_post.php?error=notimage'. $urlPart);
            die();
        }
    }

    // Check file size
    if ($_FILES["image"]["size"] > 5000000) {
        header('Location: ../add_post.php?error=toolarge');
        die();
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        header('Location: ../add_post.php?error=imagetype'. $urlPart);
        die();
    }

    if (!move_uploaded_file($_FILES["image"]["tmp_name"], "../" . $imageUrl)) {
        header('Location: ../add_post.php?error=uploadfailed'. $urlPart);
        die();
    }

}

if (isset($_POST['id'])) {
    $mysql->updatePost($_POST['id'], $_POST['title'], $_POST['text'], $imageUrl, $_POST['video']);
    $lastId = $_POST['id'];
} else {
    $mysql->insertPost($_POST['title'], $_POST['text'], $imageUrl, $_POST['video']);
    $lastId = $mysql->getLastId();
}

unset($mysql);

header('Location: ../post.php?id='. $lastId);
?>