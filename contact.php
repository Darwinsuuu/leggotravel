<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Contact • LeggoTravel</title>
    <link rel="icon" href="style/resources/logo_orange_black.png">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/674b5b9445.js" crossorigin="anonymous"></script>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <!-- styling -->
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/contact.css">

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
                <a href="#" class="active">contact us</a>
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



    <div class="wrapper-contact">

        <h3 class="poppins">Contact Form</h3>

        <form action="db/db_email_contact.php" class="mt-2" method="POST">
            <div class="form-group">
                <label for="" class="form-label">Email Address</label>
                <input type="text" name="getEmail" class="form-control">
            </div>

            <div class="form-group mt-2">
                <label for="" class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control">
            </div>


            <div class="form-group mt-2">
                <label for="" class="form-label">Subject</label>
                <input type="text" name="getSubject" class="form-control">
            </div>

            <div class="form-group mt-2">
                <label for="" class="form-label">Message</label>
                <textarea name="getConcern" id="getConcern" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group mt-2">
               <button type="submit" class="btn btn-success w-100 p-2" name="submit_contact">Submit message</button>
            </div>
        </form>

    </div>





    
    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- custom js -->
    <script src="js/index.js"></script>

</body>
</html>