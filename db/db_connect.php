<?php
    // connection

    $server = "localhost";
    $username = "root";
    $pass = "";
    $db = "db_travel_agency";

    $connect = mysqli_connect($server, $username, $pass, $db);

    if(!$connect) {
        die("There's a problem connecting to the server!" .mysqli_connect_error());
    }

?>