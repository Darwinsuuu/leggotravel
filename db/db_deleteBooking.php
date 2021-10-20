<?php

    if(isset($_GET['id'])) {

        include_once 'db_connect.php';

        $id = $_GET['id'];

        $sql = "DELETE FROM tbl_booking WHERE id ='".$id."'";
        echo $sql;
        mysqli_query($connect, $sql);

        if(mysqli_query($connect, $sql)) {
            header("Location: ../admin/index.php?deleted=true");
        } else {
            echo "not removed";
        }



    }

?>