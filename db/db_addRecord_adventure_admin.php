<?php

    if(isset($_POST['submit'])) {

        $location_name = $_POST['getLocationName'];
        $country = $_POST['getCountry'];
        $travel_option = $_POST['getTravelOption'];
        $description = $_POST['getDescription'];
        $price = $_POST['getPrice'];
        $promo = $_POST['getPromo'];

        $accomodation = $_POST['setAccomodation'];
        $food_drinks = $_POST['setFoodDrinks'];
        $tour_guide = $_POST['setTourGuide'];

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["getAdventureImage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        
        $check = getimagesize($_FILES["getAdventureImage"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }


        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
        } else {
            $temp = explode(".", $_FILES["getAdventureImage"]["name"]);
            $appendFileName = round(microtime(true)).'.'.end($temp);
            $tempNameFile = $location_name.$appendFileName;
            if (move_uploaded_file($_FILES["getAdventureImage"]["tmp_name"], $target_dir.$location_name.$appendFileName)) {
                        
                include_once 'db_connect.php';

                echo $location_name."<br>";
                echo $country."<br>";
                echo $travel_option."<br>";
                echo $description."<br>";
                echo $price."<br>";
                echo $promo."<br>";
                echo $tempNameFile;


                $sql = "INSERT INTO tbl_adventures (adventure_id, adventure_img, location_name, country, travel_option, accomodation, food_drinks, tour_guide, description, price, promo) VALUES (null, '$tempNameFile', '$location_name', '$country', '$travel_option', '$accomodation', '$food_drinks', '$tour_guide', '$description', '$price', '$promo')";


                if(mysqli_query($connect, $sql)) {
                    echo "Adventure is successfully added!";
                    header("Location: ../admin/adventure.php?adventureUploaded=true");
                } else {
                    echo "Record is not added! ".mysqli_error($connect);

                    echo "<br>".$sql;
                }



            } else {
              echo "Sorry, there was an error uploading your file.";
            }
        }


    }

    

?>