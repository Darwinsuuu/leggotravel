<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Abouts • LeggoTravel</title>
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


    <br><br><br>

    
    <div class="custom-container mt-5">
        
        <div class="title-packages-promo d-flex justify-content-center align-items-center">
            <h1>Abouts Us</h1>
        </div>


        <p class="poppins fs-m text-center mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, sunt. Optio dolores quasi consequuntur veritatis iure alias corrupti beatae tempore velit eveniet fugiat iste sint repellendus cum facere illo perspiciatis sunt excepturi, blanditiis, porro mollitia deserunt! Obcaecati at necessitatibus ex et voluptatem velit. Quam sint nobis expedita laudantium excepturi fugit amet necessitatibus minima ducimus omnis, ab architecto eum accusamus corporis. Lorem ipsum dolor sit amet consectetur adipisicing elit. At, quos. Officia esse, laudantium nesciunt illo iusto molestias, libero porro corrupti sunt et tenetur modi vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis excepturi quod fugiat fugit necessitatibus voluptatibus. In autem dolor obcaecati ullam?</p>

        <br>

        <p class="poppins fs-m text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, sunt. Optio dolores quasi consequuntur veritatis iure alias corrupti beatae tempore velit eveniet fugiat iste sint repellendus cum facere illo perspiciatis sunt excepturi, blanditiis, porro mollitia deserunt! Obcaecati at necessitatibus ex et voluptatem velit. Quam sint nobis expedita laudantium excepturi fugit amet necessitatibus minima ducimus omnis, ab architecto eum accusamus corporis. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <br>

        <div class="card-list-about d-flex justify-content-between mt-5">

            <div class="card-about bg-about1">
                <i class="fas fa-ship"></i>

                <p class="poppins fs-m">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, nemo. Veritatis obcaecati dolores beatae voluptatum sunt, totam delectus eligendi dolorem fugiat molestiae esse, placeat reprehenderit, laboriosam maiores cumque quisquam nisi ullam quibusdam doloribus molestias illum ipsum temporibus aut. Aut, itaque aspernatur quis voluptate iste alias.</p>
            </div>

            <div class="card-about bg-about2">
                <i class="fas fa-plane-departure"></i>

                <p class="poppins fs-m">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, nemo. Veritatis obcaecati dolores beatae voluptatum sunt, totam delectus eligendi dolorem fugiat molestiae esse, placeat reprehenderit, laboriosam maiores cumque quisquam nisi ullam quibusdam doloribus molestias illum ipsum temporibus aut. Aut, itaque aspernatur quis voluptate iste alias.</p>
            </div>

            <div class="card-about bg-about3">
                <i class="fas fa-bus"></i>

                <p class="poppins fs-m">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, nemo. Veritatis obcaecati dolores beatae voluptatum sunt, totam delectus eligendi dolorem fugiat molestiae esse, placeat reprehenderit, laboriosam maiores cumque quisquam nisi ullam quibusdam doloribus molestias illum ipsum temporibus aut. Aut, itaque aspernatur quis voluptate iste alias.</p>
            </div>

        </div>

    </div>


    <br><br>

    <p class="poppins fs-m text-center mt-5 p-5 bg-dark-blue text-white">
        
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, sunt. Optio dolores quasi consequuntur veritatis iure alias corrupti beatae tempore velit eveniet fugiat iste sint repellendus cum facere illo perspiciatis sunt excepturi, blanditiis, porro mollitia deserunt! Obcaecati at necessitatibus ex et voluptatem velit. Quam sint nobis expedita laudantium excepturi fugit amet necessitatibus minima ducimus omnis, ab architecto eum accusamus corporis. Lorem ipsum dolor sit amet consectetur adipisicing elit.

        <br><br>

        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum amet, exercitationem laboriosam repudiandae veniam officia? Repellendus facilis nisi veniam. Ducimus voluptatibus aliquam odio maxime consectetur ipsam cumque sequi commodi accusantium dolorem, dolor animi eos voluptatum laborum nemo natus optio tempora veritatis eligendi architecto dignissimos. Quo esse porro quam voluptas facilis consequatur necessitatibus temporibus molestiae! At?

    </p>


</body>
</html>