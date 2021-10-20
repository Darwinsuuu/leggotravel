<?php

    if(isset($_GET['id'])) {

        include_once 'db_connect.php';

        $id = $_GET['id'];

        $sql = "DELETE FROM tbl_blogs WHERE blog_id ='".$id."'";
        echo $sql;
        mysqli_query($connect, $sql);

        if(mysqli_query($connect, $sql)) {
            header("Location: ../admin/blogs.php?deleted=true");
        } else {
            echo "not removed";
        }



    }

?>