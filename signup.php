<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Sign Up • LeggoTravel</title>
    <link rel="icon" href="style/resources/logo_orange_black.png">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/674b5b9445.js" crossorigin="anonymous"></script>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">   

    <!-- styling -->
    <link rel="stylesheet" href="style/signup.css">

</head>
<body>
    



    <div class="text-wrapper-account-login">
        <div class="banner">
            <div class="banner-flex-logo">
                <p class="text-white">Legg</p><i class="fab fa-telegram orange"></i><p class="text-white mx-4">travel</p>
            </div>
        </div>

        <h1 class="orange mt-4">Already have an account?</h1>
        <a href="login.php" class="btn mt-3">Login here</a>
    </div>


    <div class="signup-wrapper">
        
    <p class="validation-msg mb-4 poppins fs-lg text-center bg-success text-white rounded p-3" id="signup_validation"></p>

        <h1 class="poppins text-center text-capitalize mb-4">sign up</h1>

        <form action="db/db_signup_user.php" method="POST">

            <div class="form-group input-group-lg mb-3">
                <label for="getFirstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="getFirstName" name="getFirstname" autocomplete="off">
            </div>

            <div class="form-group input-group-lg mb-3">
                <label for="getMiddleName" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="getMiddleName" name="getMiddleName" autocomplete="off">
            </div>

            <div class="form-group input-group-lg mb-3">
                <label for="getLastName" class="form-label">Lastname</label>
                <input type="text" class="form-control" id="getLastName" name="getLastName" autocomplete="off">
            </div>

            <div class="form-group input-group-lg mb-3">
                <label for="getEmail" class="form-label">Email Address</label>
                <input type="text" class="form-control" id="getEmail" name="getEmail" autocomplete="off">
            </div>

            <div class="form-group input-group-lg mb-3">
                <label for="getPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="getPassword" name="getPassword" autocomplete="off">
            </div>

            <div class="form-group input-group-lg mb-3">
                <label for="getConfirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="getConfirmPassword" name="getConfirmPassword" autocomplete="off">
            </div>
           
            <div class="form-group input-group-lg mt-4">
                <button type="submit" class="btn btn-primary w-100" id="btn_signup_submit" name="btn_signup_submit">Sign up</button>
            </div>

        </form>


    </div>
    

    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


   <!-- bootstrap script -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- custom js -->
    <script src="js/signup.js"></script>

</body>
</html>