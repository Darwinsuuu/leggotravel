<?php

    if(isset($_POST['submit_review'])) {

        include_once 'db_connect.php';

        $getSender = $_POST['getSender'];
        $getReview = $_POST['getReview'];

        $sql_reviews = "INSERT INTO tbl_blogs (blog_id, sender, description) VALUES (null, '$getSender', '$getReview')";
        if(!mysqli_query($connect, $sql_reviews)) {
            echo "There's a problem submitting the review!";
        } else {
            header("Location: ../blogs.php");
        }

    }

?>