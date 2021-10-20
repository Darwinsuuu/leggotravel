<?php

    if(isset($_POST['submit'])) {

        include_once 'db_connect.php';

        $id = $_GET['id'];
        $location_name = $_POST['getLocationName'];
        $country = $_POST['getCountry'];
        $travel_option = $_POST['getTravelOption'];
        $descriptions = $_POST['getDescription'];
        $price = $_POST['getPrice'];
        $promo = $_POST['getPromo'];

        
        $accomodation = $_POST['setAccomodation'];
        $accomodation = trim($accomodation);
        $food_drinks = $_POST['setFoodDrinks'];
        $tour_guide = $_POST['setTourGuide'];

        $fileEdit = $_FILES["getAdventureImage"]["name"];


        if($fileEdit == "") {

            // kapag walang laman yung image input

            $sql_update = "UPDATE tbl_adventures SET location_name = '$location_name', country = '$country', travel_option = '$travel_option', accomodation = '$accomodation', food_drinks = '$food_drinks', tour_guide = '$tour_guide' , description = '$descriptions', price = '$price', promo = '$promo' WHERE adventure_id = '$id'";

            echo $sql_update;

            if(!mysqli_query($connect, $sql_update)){
                echo "Adventure is not updated! ".mysqli_error($connect);
            } else {
                header("Location: ../admin/adventure.php?updated=true");
            }

        } else {

            // kapag may laman yung image input

            $sql = "SELECT * FROM tbl_adventures WHERE adventure_id ='".$id."'";
            $result = mysqli_query($connect, $sql);
            $row = mysqli_fetch_array($result);
    
            if(unlink("uploads/".$row["adventure_img"])) {

                
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["getAdventureImage"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


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
        
                        $sql_update = "UPDATE tbl_adventures SET adventure_img = '$tempNameFile', location_name = '$location_name', country = '$country', travel_option = '$travel_option', description = '$description', price = '$price', promo = '$promo' WHERE adventure_id = '$id'";

                        if(!mysqli_query($connect, $sql_update)){
                            echo "Adventure is not updated! ".mysqli_error($connect);
                        } else {
                            header("Location: ../admin/adventure.php?updated=true");
                        }
        
        
                    } else {
                      echo "Sorry, there was an error uploading your file.";
                    }
                }


            } else {
                echo "file not removed";
            }


        }

    }

?>