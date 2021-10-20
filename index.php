<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Home • LeggoTravel</title>


    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/674b5b9445.js" crossorigin="anonymous"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="style/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    

    <!-- styling -->
    <link rel="stylesheet" href="style/index.css">

</head>
<body>
    

    <nav class="navagation">
        <a href="index.html" class="banner-wrapper">
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
                <a href="about.php">about</a>
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


    <nav class="navagation-scrolled">
        <a href="index.php" class="banner-wrapper">
            <div class="banner-flex-logo">
                <p class="text-danger">Leggo</p><i class="fab fa-telegram orange"></i><p class="text-danger">travel</p>
            </div>
        </a>
        
        <ul class="">
            <li>
                <a href="index.php" class="active">home</a>
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
                <a href="about.php">about</a>
            </li>
            
            <?php
                if(!isset($_SESSION["id"])) {
                    echo "<li>".
                            "<a href='login.php'>Login</a>".
                        "</li>";
                } else {
                    echo "<li>".
                            "<a href='db/db_logoutuser.php'>Logout</a>".
                        "</li>";
                }
            ?>
        </ul>

    </nav>


    <div class="main-img">

        <div class="logo-preview">
            <div class="flex-logo">
                <p>Legg</p>
                <i class="fab fa-telegram orange"></i>
            </div>

            <p class="text-travel">travel</p>
        </div>

        <p class="agency-short-description">Are you wandering and wondering? Have you ever wondered what do world’s hidden gems look like? Are you still looking for places to go without thinking of hassles? Perhaps you’ve already been to popular sites, but what about booking another? They will accompany you to wander the most underrated and beautiful places around the world. Our company has complete packages and inclusions for just a low price. Just keep in mind that anywhere you go, the journey will follow. Book now, write memories later!</p>

    </div>

    

    <div class="custom-container mt-5">
        
        <div class="title-packages-promo d-flex justify-content-between align-items-center">
            <h1>Our Latest Adventures</h1>
            <a href="adventures.php" class="text-muted">See all adventures<i class="fas fa-arrow-right mx-3"></i></a>
        </div>

        <div class="packages-promo-list mt-1">

            <?php

                include_once 'db/db_connect.php';

                $sql = "SELECT * FROM tbl_adventures LIMIT 6";

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
            <h1>Reviews on us</h1>
            <a class="text-muted" id="addReviewModal">Add your review<i class="fas fa-arrow-right mx-3"></i></a>
        </div>

        <div class="blog-list mt-4">


            <?php
    
                include_once 'db/db_connect.php';

                $sql_selectAll = "SELECT * FROM tbl_blogs LIMIT 3";

                $result = mysqli_query($connect, $sql_selectAll);
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {

                        echo "<div class='blog-card'>".
                                "<div class='blog-card-body'>".
                                    "<p class='blog-post-description fs-m'>".$row["description"]."</p>".
                                
                                    "<div class='d-flex justify-content-between mt-2'>".
                                        "<b class='poppins text-capitalize'>- ".$row["sender"]."</b>".
                                        "<a class='d-flex align-items-center text-muted poppins openModalBlog'>View post<i class='fas fa-arrow-right mx-2'></i></a>".
                                    "</div>".
                                "</div>".
                
                                "<div class='blog-card-footer'>".
                                    "<div class='share-link-tabs'>".
                                        "<div class='link-share-icon facebook'>".
                                            "<i class='fab fa-facebook-f'></i>".
                                        "</div>".
                                        
                                        "<div class='link-share-icon twitter'>".
                                            "<i class='fab fa-twitter'></i>".
                                        "</div>".
                
                                        "<div class='link-share-icon instagram'>".
                                            "<i class='fab fa-instagram'></i>".
                                        "</div>".
                
                                        "<div class='link-share-icon google'>".
                                            "<i class='fab fa-google'></i>".
                                        "</div>".
                                        
                                    "</div>".
                                "</div>".
                                
                            "</div>";

                    }
                }

            ?>
            

        </div>

    </div>


    
    
    <div class="custom-container mt-5">
        <div class="title-packages-promo d-flex justify-content-center align-items-center">
            <h1>Browse Our Gallery</h1>
        </div>


        <div class="gallery-list">
            <div class="list mt-5">
                <img src="style/resources/carousel_1.jfif" alt="">
                <img src="style/resources/carousel_2.jfif" alt="">
                <img src="style/resources/carousel_1.jfif" alt="">
                <img src="style/resources/carousel_1.jfif" alt="">
                <img src="style/resources/carousel_1.jfif" alt="">
                <img src="style/resources/carousel_1.jfif" alt="">
                <img src="style/resources/carousel_1.jfif" alt="">
                <img src="style/resources/carousel_1.jfif" alt="">
                <img src="style/resources/carousel_1.jfif" alt="">
                <img src="style/resources/carousel_1.jfif" alt="">
                <img src="style/resources/carousel_1.jfif" alt="">
                <img src="style/resources/carousel_1.jfif" alt="">
            </div>
        </div>
    </div>

    



    <div class="services">

        <div class="title-packages-promo d-flex justify-content-center align-items-center">
            <h1 class="poppins text-capitalize dark-blue">Included services</h1>
        </div>

        <div class="services-container mt-3">

            <div class="service-wrapper">
                <i class="fas fa-utensils"></i>

                <h1>Food and drinks</h1>

                <p>After the exhausting yet enjoyable travel of your life, isn’t it nice to have good quality food on your plate? Let us replace the hunger you feel with a tummy full of delicious and healthy food. Deciding where and what to eat is the hardest decision you can make, but it is possible with our package to lessen your hassles as we decide for you what you will eat for the whole day.</p>
            </div>

            <div class="service-wrapper">
                <i class="fas fa-hotel"></i>

                <h1>accomodation</h1>

                <p>Booking a travel tour without ensuring a place to stay and rest is one of the hassles we can get rid of. Avoid disappointments and stress by choosing the best promo with accommodation inclusion. Booking with us with a package including accommodations will help your restless body lay down and plan new activities. </p>
            </div>

            <div class="service-wrapper">
                <i class="fas fa-bullhorn"></i>

                <h1>tour guides</h1>

                <p>First-timers are not bad, but we can make it extra special with knowledgeable tour guides. Imagine having a walk and learning about the places at the same, isn’t it exciting? Being familiar with the site is close to being part of its history, as you can now go anywhere and do anything without hesitations. Memories from travels cannot be shared, but knowledge about the place can.</p>
            </div>

        </div>
    </div>
    



    
    <div class="modal-view-blog-post">

        <div class="modal-blog-wrapper">

            <i class="fas fa-times closeModalBlog" id="closeModalBlog"></i>

            <div class="share-link-tabs2">
                
                <div class="link-share-icon2 facebook">
                    <i class="fab fa-facebook-f"></i>
                </div>
                        
                <div class="link-share-icon2 twitter">
                    <i class="fab fa-twitter"></i>
                </div>

                <div class="link-share-icon2 instagram">
                    <i class="fab fa-instagram"></i>
                </div>

                <div class="link-share-icon2 google">
                    <i class="fab fa-google"></i>
                </div>
                        
            </div>

            
            <p class="poppins text-center mt-2 mb-3 fw-bold"><i class="fas fa-link"></i>&nbsp;&nbsp;&nbsp;Share this to your social media</p>

            <div class="blog-card-body2">
                <p class="blog-post-description2 fs-m" id="setDesctipion"></p>
                
                <div class="d-flex justify-content-between mt-3 mb-3">
                    <b class="poppins" id="setNamePost">- Darwin Bulgado Labiste</b>
                </div>
            </div>


        </div>

    </div>





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