<?php

    session_start();
    if(!isset($_SESSION["id"])) {
        header("Location: login.php?blog=false");
    } else {
        $id = $_SESSION["id"];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Blogs • LeggoTravel</title>
    <link rel="icon" href="style/resources/logo_orange_black.png">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/674b5b9445.js" crossorigin="anonymous"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="style/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    

    <!-- styling -->
    <link rel="stylesheet" href="style/index.css">


</head>
<body>
    

    <div class="img-background"></div>
    <div class="img-background-overlay"></div>

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
                <a href="#">blogs</a>
            </li>

            <li>
                <a href="contact.php">contact us</a>
            </li>

            <li>
                <a href="db/db_logout_user.php">Logout</a>
            </li>
        </ul>

    </nav>


    <br><br><br><br>

    <div class="custom-container mt-5">
        
        <div class="title-packages-promo d-flex justify-content-between align-items-center">
            <h1 class="text-white">Reviews on us</h1>
            <a class="text-white" id="addReviewModal">Add your review<i class="fas fa-arrow-right mx-3"></i></a>
        </div>

        <div class="blog-list mt-4">


            <?php
    
                include_once 'db/db_connect.php';

                $sql_selectAll = "SELECT * FROM tbl_blogs";

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
                    <b class="poppins text-capitalize" id="setNamePost">- Darwin Bulgado Labiste</b>
                </div>
            </div>


        </div>

    </div>

    
    <br><br><br><br>

    <div class="modal-add-review">
        
        <div class="modal-review-wrapper">

            <h3 class="poppins mb-2">Add your reviews here</h3>
            <p class="poppins mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit excepturi repudiandae aperiam laboriosam officiis. Excepturi laboriosam eaque sequi quo nemo.</p>

            <form method="POST" action="db/db_addBlog.php">

                <?php

                    $sql = "SELECT * FROM tbl_user WHERE user_id ='".$id."'";
                    $result = mysqli_query($connect, $sql);

                    $row = mysqli_fetch_assoc($result);

                    $name = $row["firstname"]." ".$row["middlename"]." ".$row["lastname"];

                ?>

                <div class="form-group d-none">
                    <input name="getSender" id="getSender" type="text" class="form-control text-capitalize" value="<?php echo $name; ?>">
                </div>

                <div class="form-group">
                    <textarea name="getReview" id="getReview" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-success w-100" name="submit_review">Submit</button>
                    <button type="button" class="btn btn-default border w-100 mt-2" id="closeModalAddReview" name="submit_review">Close</button>
                </div>
                
            </form>

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