<?php

    if(isset($_GET['id'])) {

        include_once 'db_connect.php';

        $id = $_GET['id'];

        $sql = "SELECT * FROM tbl_adventures WHERE adventure_id ='".$id."'";
        echo $sql;
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_array($result);

        if(unlink("uploads/".$row["adventure_img"])) {
            $sql_delete = "DELETE FROM tbl_adventures WHERE adventure_id ='".$id."'";
            
            if(mysqli_query($connect, $sql_delete)) {
                header("Location: ../admin/adventure.php?deleted=true");
            } else {
                echo "not removed";
            }

        } else {
            echo "file not removed";
        }
        

    }

?>