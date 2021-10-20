<?php
    session_start();
    if(!isset($_SESSION["id"])) {
        header("Location: login.php");
    }

    include_once 'db/db_connect.php';

    $session_id = $_SESSION["id"];

    $sql_session = "SELECT * FROM tbl_user WHERE user_id = $session_id";

    $row = mysqli_fetch_assoc(mysqli_query($connect, $sql_session));
    
    $firstname = $row["firstname"];
    $middlename = $row["middlename"];
    $lastname = $row["lastname"];
    $fullname = $firstname." ".$middlename." ".$lastname;

?>

<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Booking • LeggoTravel</title>
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
        
        <ul class="">
            <li>
                <a href="index.php">home</a>
            </li>

            <li>
                <a class="active" href="adventures.php">adventures</a>
            </li>

            <li>
                <a href="blogs.php">blogs</a>
            </li>

            <li>
                <a href="contact.php">contact us</a>
            </li>

            <li>
                <a href="about.php">about</a>
            </li>

            <li>
                <a href="db/db_logout_user.php">Logout</a>
            </li>
            
        </ul>

    </nav>


    <br><br><br><br>



    <div class="custom-container mt-3">
        
        <div class="title-packages-promo d-flex justify-content-between align-items-center">
            <h1>Adventure Details</h1>
        </div>

        <div class="book-wrapper mt-3">

            <?php

                include_once 'db/db_connect.php';

                $id = $_GET['id'];

                $sql = "SELECT * FROM tbl_adventures WHERE adventure_id = $id";

                $result = mysqli_query($connect, $sql);

                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {

                        $image = $row["adventure_img"];
                        $location = $row["location_name"];
                        $country = $row["country"];
                        $travel_option = $row["travel_option"];
                        $accomodation = $row["accomodation"];
                        $meal = $row["food_drinks"];
                        $guide = $row["tour_guide"];
                        $description = $row["description"];
                        $price = $row["price"];
                        $promo = $row["promo"];

                    }
                }
            ?>

            <div class="img-wrapper-reviews">
                <img src="db/uploads/<?php echo $image ?>" alt="" width="700px" height="400px">

                <div class="reviews-adventures d-flex mt-3">
                    <div class="included-promo w-50">
                        <h5 class="poppins text-muted mb-2">Services</h5>
                        <div class="d-flex align-items-center">

                            <?php
                                if($meal == "yes") {
                                    echo "<i class='fas fa-check text-success'></i>";
                                } else {
                                    echo "<i class='fas fa-times fs-lg text-danger'></i>";
                                }
                            ?>
                            
                            <p class="poppins fs-m mx-3">Food and Drinks</p>
                        </div>
    
                        <div class="d-flex align-items-center">

                            <?php
                                if($accomodation == "yes") {
                                    echo "<i class='fas fa-check text-success'></i>";
                                } else {
                                    echo "<i class='fas fa-times fs-lg text-danger'></i>";
                                }
                            ?>
                            <p class="poppins fs-m mx-3">Accomodation</p>
                        </div>
    
                        <div class="d-flex align-items-center">

                            <?php
                                if($guide == "yes") {
                                    echo "<i class='fas fa-check text-success'></i>";
                                } else {
                                    echo "<i class='fas fa-times fs-lg text-danger'></i>";
                                }
                            ?>
                            <p class="poppins fs-m mx-3">Tour Guide</p>
                        </div>
                    </div>
    
    
                    <div class="price-wrapper-details">
                        
                        <?php

                            if($promo > 0) {
                                echo "<div class='d-flex'>".
                                        "<div class='d-flex flex-column w-50'>".
                                            "<h5 class='poppins text-muted'>New price</h5>".
                                            "<p class='poppins mt-1 fs-m dark-blue fw-bold'>₱".$price - ($price * ($promo/100))."</p>".
                                        "</div>".
                    
                                        "<div class='d-flex flex-column mx-2 w-50'>".
                                            "<b class='poppins text-muted'>Old price</b>".
                                            "<del class='poppins mt-1 text-danger'>₱".$price."</del>".
                                        "</div>".
                                    "</div>";
                            } else {
                                echo "<div class='d-flex'>".
                                        "<div class='d-block w-50'>".
                                            "<h5 class='poppins text-muted'>Price</h5>".
                                            "<p class='poppins mt-1 fs-m dark-blue fw-bold'>₱".$price."</p>".
                                        "</div>".
                                    "</div>";
                            }

                        ?>
                       
                    </div>
                  
                </div>

                <hr>
                <button class="btn btn-primary w-100 p-3 mt-1" id="bookNowModal">Book now</button>

            </div>
            


            <div class="booking-adventure-details mx-5">
                <h2 class="poppins text-capitalize"><?php echo $location.", ".$country; ?></h2>
                <p class="desciption-adventure poppins mt-3"><?php echo $description; ?></p>
            </div>

        </div>



    </div>



    <br><br><br><br>

    <footer>
        <p>Let's go anywhere, life is an adventure!</p>
    </footer>


    
    
    <div class="modal-booking">

        <div class="modal-booking-wrapper">

            <h4 class="poppins text-center mb-4 fw-bold">Booking Form</h4>

            <form class="form" action="db/db_createBooking.php?aid=<?php echo $id; ?>" method="POST">
                <div class="form-group mb-3">
                    <label for="getName" class="form-label">Fullname</label>
                    <input type="text" class="form-control" name="fullname" readonly value="<?php echo $fullname; ?>">
                </div>

                <div class="form-group mb-3">
                    <label for="" class="form-label">Location</label>
                    <input type="text" class="form-control text-capitalize" name="location" readonly value="<?php echo $location.", ".$country; ?>">
                </div>

                <div class="form-group mb-3">
                    <label for="" class="form-label">Total Price</label>
                    <input type="text" class="form-control totalPriceBooking" name="total" value="0" readonly>
                </div>

                <div class="form-group mb-3 d-flex justify-content-between">

                    <div class="form-group w-50">
                        <label for="" class="form-label">Price</label>
                        <div class="d-flex">
                            <input type="text" class="form-control d-none" name="price" value="<?php if($promo > 0) { echo $price - ($price * ($promo/100)); } else { echo $price; } ?>">
                            <p class="poppins fs-lg text-muted fw-bold priceCurrent"><?php if($promo > 0) { echo $price - ($price * ($promo/100)); } else { echo $price; } ?></p>
                            <p class="poppins fs-lg text-muted fw-bold priceCurrent">&nbsp;php</p>
                        </div>
                    </div>

                    <div class="form-group w-50 mb-2">
                        <label for="" class="form-label">No. of Person/s</label>
                        <input type="number" class="form-control personCount" name="person">
                    </div>

                </div>
               
                <hr class="mb-4">

                <div class="form-group d-flex">
                    <button type="submit" name="btnBooking" class="btn btn-primary w-50 mx-1">Book</button>
                    <button type="button" id="btnCloseModalBooking" class="btn btn-default border w-50 mx-1">Cancel</button>
                </div>
            </form>

        </div>

    </div>


    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- bootstrap script -->
    <script src="style/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

    <!-- custom js -->
    <script src="js/index.js"></script>

</body>
</html>