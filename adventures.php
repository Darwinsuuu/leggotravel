<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Adventures • LeggoTravel</title>
    <link rel="icon" href="style/resources/logo_orange_black.png">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/674b5b9445.js" crossorigin="anonymous"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="style/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    

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
        
        <ul>
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
            <h1>Top 6 Latest Adventures</h1>
        </div>

        <div class="packages-promo-list mt-1">

            <?php

                include_once 'db/db_connect.php';

                $sql = "SELECT * FROM tbl_adventures ORDER BY adventure_id DESC LIMIT 6";

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

                        } else {

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
                                            "<p class='dark-blue poppins fs-m fw-bold'>₱".$row["price"]."</p><p class='fs-m poppins text-muted'>/head</p>".
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
            <h1>All Adventures</h1>
            <a href="promo.php" class="text-muted">Adventures promo only<i class="fas fa-arrow-right mx-3"></i></a>
        </div>

        <p class="poppins fs-m mt-3">Don’t limit yourself as adventures are limitless. Life and travel leave their imprints on you. Don’t come for adventures; let adventure chase you! As LeggoTravel says, “Go Anywhere, Life is an Adventure”. Here are the escapades blasts that await you!</p>

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

                        } else {

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
                                            "<p class='dark-blue poppins fs-m fw-bold'>₱".$row["price"]."</p><p class='fs-m poppins text-muted'>/head</p>".
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

    <br><br><br><br>

    <footer>
        <p>Let's go anywhere, life is an adventure!</p>
    </footer>

    
    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- bootstrap script -->
    <script src="style/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

    <!-- custom js -->
    <script src="js/index.js"></script>

</body>
</html>