<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Promo • LeggoTravel</title>
    <link rel="icon" href="style/resources/logo_orange_black.png">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/674b5b9445.js" crossorigin="anonymous"></script>

    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <!-- styling -->
    <link rel="stylesheet" href="style/index.css">

</head>
<body>
    

    <nav class="navagation-other">
        <a href="index.php" class="banner-wrapper">
            <div class="banner-flex-logo">
                <p class="text-danger">Leggo</p><i class="fab fa-telegram orange"></i><p class="text-danger">travel</p>
            </div>
        </a>
        
        <ul class="">
            <li>
                <a href="index.php">home</a>
            </li>

            <li>
                <a href="adventures.php">adventures</a>
            </li>

            <li>
                <a href="blogs.php">blogs</a>
            </li>

            <li>
                <a href="contact.php">contact us</a>
            </li>

            <li>
                <a class="active" href="about.php">about</a>
            </li>

            <?php
                session_start();
                if(!isset($_SESSION["id"])) {
                    echo "<li>".
                            "<a href='login.php'>Login</a>".
                        "</li>";
                } else {
                    echo "<li>".
                            "<a href='db/db_logout_user.php'>Logout</a>".
                        "</li>";
                }
            ?>
        </ul>

    </nav>


    <br><br><br><br>



    <div class="custom-container mt-5">
        
        <div class="title-packages-promo d-flex justify-content-between align-items-center">
            <h1>PROMO 15%+ OFF</h1>
        </div>

        <p class="poppins fs-m mt-3">Patch things up with a huge discount in booking travel. We offer deals and promo that are almost half the price! Hurry up and take the limited offers! Good things come to those who book a vacation. Book now and feel the early travel gifts!</p>

        <div class="packages-promo-list mt-4">

            <?php

                include_once 'db/db_connect.php';

                $sql = "SELECT * FROM tbl_adventures";

                $result = mysqli_query($connect, $sql);

                if(mysqli_num_rows($result) > 0) {

                    while($row = mysqli_fetch_assoc($result)) {
                        
                        if($row["promo"] > 15) {
                            echo "<div class='card-package-promo'>".
                                    "<img src='db/uploads/".$row["adventure_img"]."' alt='".$row["adventure_img"]."'>".
                    
                                    "<div class='card-title-location d-flex align-items-center my-2'>".
                                        "<i class='fas fa-map-marked-alt fs-xl'></i>".
                                        "<p class='fs-xl mx-2 scheherazade fw-bold text-capitalize'>".$row["location_name"]."</p>".
                                    "</div>".
                    
                                    "<div class='card-description-place my-2'>".
                                        "<p class='fs-m poppins'>".$row["description"]."</p>".
                                    "</div>".

                                    "<div class='card-promo-holder-price my-2'>".
                                        "<div class='d-flex'>".
                                            "<p class='dark-blue poppins fs-m fw-bold'>₱".$row["price"] - ($row["price"] * ($row["promo"]/100))."</p><p class='fs-m poppins text-muted'>/head</p>".
                                            "<p class='mx-2 poppins fs-m text-danger old-price'>(₱".$row["price"].")</p>".
                                            "<p class='mx-2 poppins fs-m text-muted'>".$row["promo"]."% Off</p>".
                                        "</div>".
                                    "</div>".
                    
                                    "<div class='card-promo-button my-3'>".
                                        "<a href='booking.php?id=".$row["adventure_id"]."' class='btn btn-warning fw-bold w-100 p-2'>View details</a>".
                                    "</div>".
                                "</div>";

                        }

                    }

                }
            ?>


        </div>

    </div>




    <div class="custom-container mt-5">
        
        <div class="title-packages-promo d-flex justify-content-between align-items-center">
            <h1>Deals & Promo</h1>
            <a href="adventures.php" class="text-muted">See all adventures<i class="fas fa-arrow-right mx-3"></i></a>
        </div>

        <div class="packages-promo-list mt-4">

            <?php

                include_once 'db/db_connect.php';

                $sql = "SELECT * FROM tbl_adventures";

                $result = mysqli_query($connect, $sql);

                if(mysqli_num_rows($result) > 0) {

                    while($row = mysqli_fetch_assoc($result)) {
                        
                        if($row["promo"] > 0) {
                            echo "<div class='card-package-promo'>".
                                    "<img src='db/uploads/".$row["adventure_img"]."' alt='".$row["adventure_img"]."'>".
                    
                                    "<div class='card-title-location d-flex align-items-center my-2'>".
                                        "<i class='fas fa-map-marked-alt fs-xl'></i>".
                                        "<p class='fs-xl mx-2 scheherazade fw-bold text-capitalize'>".$row["location_name"]."</p>".
                                    "</div>".
                    
                                    "<div class='card-description-place my-2'>".
                                        "<p class='fs-m poppins'>".$row["description"]."</p>".
                                    "</div>".

                                    "<div class='card-promo-holder-price my-2'>".
                                        "<div class='d-flex'>".
                                            "<p class='dark-blue poppins fs-m fw-bold'>₱".$row["price"] - ($row["price"] * ($row["promo"]/100))."</p><p class='fs-m poppins text-muted'>/head</p>".
                                            "<p class='mx-2 poppins fs-m text-danger old-price'>(₱".$row["price"].")</p>".
                                            "<p class='mx-2 poppins fs-m text-muted'>".$row["promo"]."% Off</p>".
                                        "</div>".
                                    "</div>".
                    
                                    "<div class='card-promo-button my-3'>".
                                    "<a href='booking.php?id=".$row["adventure_id"]."' class='btn btn-warning fw-bold w-100 p-2'>View details</a>".
                                    "</div>".
                                "</div>";

                        }

                    }

                }
            ?>


        </div>

    </div>


    <div class="bg-success p-5 mt-5">

        <p class="fs-m poppins text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam voluptatibus explicabo voluptate consequatur eius maiores sunt alias aperiam ipsum quaerat, iure dolor id obcaecati dignissimos voluptatem magnam veniam minus illo corrupti distinctio ipsam suscipit at quasi vel? Nostrum vitae voluptatem provident magni eum velit itaque nulla nisi veritatis voluptatibus quidem, nam non possimus omnis deleniti?</p>

        <br>

        <p class="fs-m poppins text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam voluptatibus explicabo voluptate consequatur eius maiores sunt alias aperiam ipsum quaerat, iure dolor id obcaecati dignissimos voluptatem magnam veniam minus illo corrupti distinctio ipsam suscipit at quasi vel? Nostrum vitae voluptatem provident magni eum velit itaque nulla nisi veritatis voluptatibus quidem, nam non possimus omnis deleniti?</p>

    </div>

    <footer>
        <p>Let's go anywhere, life is an adventure!</p>
    </footer>

    
    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- custom js -->
    <script src="js/index.js"></script>

</body>
</html>