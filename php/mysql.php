<?php


class MySQL {
    function __construct() {
        $this->dbh = new PDO('mysql:host=sql5c11b.megasqlservers.com;dbname=news_mmacsports_com', 'mmacsports454602', 'badm!TH0615');
    }

    function executeQuery($sql) {
        $finalResults = Array();
        foreach ($this->dbh->query($sql) as $row) {
            array_push($finalResults, $row);
        }

        return $finalResults;
    }

    function getNbResults() {
        return $this->dbh->rowCount();
    }

    function getLastId() {
        return $this->dbh->lastInsertId();
    }

    function insertComment($username, $text, $email, $website, $post_id) {
        $values = implode(",", array('"' . $username . '"', '"' . $text . '"', '"' . $email . '"', '"' . $website . '"', $post_id, time(), time()));
        $sql = "INSERT INTO comment (username, text, email, website, post_id, created_on) VALUES(". $values . ")";
        $this->dbh->query($sql);
    }

    function insertPost($title, $text, $imageUrl, $videoUrl) {
        $values = implode(",", array('"' . $title . '"', '"' . $text . '"', '"' . $imageUrl . '"', '"' . $videoUrl . '"', time(), time()));
        $sql = "INSERT INTO post (title, text, image_url, video_url, created_on, update_on) VALUES(". $values . ")";
        $this->dbh->query($sql);
    }

    function updatePost($id, $title, $text, $imageUrl, $videoUrl) {
        $sql = 'UPDATE post SET title = "'. $title .'", text = "'. $text .'", image_url = "'. $imageUrl .'", video_url = "'. $videoUrl. '", update_on = '. time(). ' WHERE id = '.$id;
        $this->dbh->query($sql);
    }

    function deletePost($id) {
        $sql = 'DELETE FROM post WHERE id ='. $id;
        $this->dbh->query($sql);
    }

    function deleteComment($id) {
        $sql = 'DELETE FROM comment WHERE id = '. $id;
        $this->dbh->query($sql);
    }

    function getUserByLogin($email, $password) {
        $sql = 'SELECT * FROM user where email="' . $_POST['email'] . '" AND password = md5("' . $_POST['password'] . '")';
        return $this->executeQuery($sql);
    }

    function getArrayResult($results) {
        if ($results) {
            return $results;
        } else {
            return Array();
        }
    }

    function getPostCollection() {
        $sql = "SELECT * FROM post ORDER BY created_on DESC";
        return $this->getArrayResult($this->executeQuery($sql));
    }

    function getCommentCollection($postId) {
        $sql = "SELECT * FROM comment WHERE post_id=" . $postId;
        return $this->getArrayResult($this->executeQuery($sql));
    }

    function getPost($id) {
        $sql = "SELECT * FROM post where id =". $id;
        $result = $this->executeQuery($sql);

        if (count($result)) {
            return $result[0];
        } else {
            return false;
        }
    }
	
	function deletePostImage($id){
		$sql = "UPDATE post SET image_url = '', update_on = ". time(). " WHERE id = ".$id;
        $this->dbh->query($sql);
	}
}

?>
