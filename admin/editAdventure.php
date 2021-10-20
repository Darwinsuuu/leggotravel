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
    <link rel="stylesheet" href="../style/bootstrap-5.0.2-dist/css/bootstrap.min.css">


    <!-- styling -->
    <link rel="stylesheet" href="../style/admin.css">

</head>
<body>

    <?php

        if(isset($_GET['adventureUploaded'])) {
            echo "<div id='myAlert' class='alert alert-success collapse custom-alert'>".
                    "<strong>Successfully added!</strong>".
                    "<a id='myAlertClose' class='close'>&times;</a>".
                 "</div>";
        }
        
        if(isset($_GET['deleted'])) {
            echo "<div id='myAlert' class='alert alert-warning collapse custom-alert'>".
                    "<strong>Successfully deleted!</strong>".
                    "<a id='myAlertClose' class='close'>&times;</a>".
                 "</div>";
        }

    ?>
  


    <div class="custom-container">

        <nav class="navigation">

            <p>LeggoTravel</p>

            <ul>
                <li>
                    <a href="index.php">Manage Bookings</a>
                </li>

                <li>
                    <a class="active" href="adventure.php">Manage Adventures</a>
                </li>

                <li>
                    <a  href="../db/db_logout_admin.php">Logout</a>
                </li>
            </ul>

        </nav>


        <div class="flex-container">
            

        <?php


            if(isset($_GET['id'])){
                include_once '../db/db_connect.php';

                $id = $_GET['id'];

                $sql = "SELECT * FROM tbl_adventures WHERE adventure_id = '".$id."'";
    
                $result = mysqli_query($connect, $sql);

                if(mysqli_num_rows($result) > 0) {

                    while($row = mysqli_fetch_assoc($result)) {

                        $adventure_img = $row["adventure_img"];
                        $location_name = $row["location_name"];
                        $country = $row["country"];
                        $travel_option = $row["travel_option"];
                        $description = $row["description"];
                        $price = $row["price"];
                        $promo = $row["promo"];

                        $accomodation = $row["accomodation"];
                        $food_drinks = $row["food_drinks"];
                        $tour_guide = $row["tour_guide"];

                    }

                }

            }
           
        ?>



        <form action="../db/db_editRecord_adventure_admin.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
                <div class="custom-modal-header d-flex align-items-center justify-content-between">
                    <div class="modal-title-header">
                        <i class="fas fa-map-marked-alt"></i>
                        <h3>Update adventure</h3>
                    </div>

                    <a href="adventure.php">
                        <i class="fas fa-times btn-modal-close" title="Close tab" id="btnModalClose"></i>
                    </a>
                    
                </div>
        
                <div class="custom-modal-body">
        


                    <div class="flex-form">

                        <div class="img-wrapper">
                            <div class="img-preview rounded shadow mb-4" id="noImgPreview">
                                <img src="../db/uploads/<?php echo $adventure_img ?>" alt="" id="imgPreview">
                            </div>
    
                            <input type="file" class="form-control form-control-lg mt-3" id="getAdventureImage" name="getAdventureImage">
                        </div>

                        <div class="divier-form-modal"></div>

                        <div class="form-fill-wrapper">
                            <div class="form-group">
                                <label for="" class="form-label d-flex">Location Name</label>
                                <input type="text" class="form-control form-control-lg" id="getLocationName" name="getLocationName" autocomplete="off" value="<?php echo $location_name ?>">
                            </div>
        
                            <div class="form-group mt-3">
                                <label for="" class="form-label">Adventure's Country</label>
                                <input type="text" class="form-control form-control-lg" id="getCountry" name="getCountry" autocomplete="off" value="<?php echo $country ?>">
                            </div>
        
                            <div class="form-group mt-3">
                                <label for="" class="form-label d-flex">Travel Option</label>
                                <select class="form-control form-control-lg" name="getTravelOption" id="getTravelOption">
                                    <option value="0">-- Select option --</option>
                                    <option <?php if($travel_option == "Air"){ echo "selected"; }?> value="Air">Air Transportation</option>
                                    <option <?php if($travel_option == "Sea"){ echo "selected"; }?> value="Sea">Sea Transportation</option>
                                    <option <?php if($travel_option == "Land"){ echo "selected"; }?> value="Land">Land Transportation</option>
                                </select>
                            </div>
        
                            <div class="form-group mt-3">
                                <label for="getDescription" class="form-label d-flex">Description</label>
                                <textarea class="form-control resize-0" id="getDescription" name="getDescription" rows="8"><?php echo $description ?></textarea>
                            </div>
        
                            <hr>

                            <div class="form-group mt-3 d-flex justify-content-between">
                                
                                <div class="form-group">
                                    <label for="" class="form-label d-flex">Accomodation</label>
                                    <div class="form-check form-switch">
                                        <input type="text" class="form-control setAccomodation" name="setAccomodation" value="<?php if($accomodation == "yes"){ echo "yes"; } else { echo "no"; } ?>">
                                        <input class="form-check-input getAccomodation" type="checkbox" <?php if($accomodation == "yes"){ echo "checked"; } ?> id="flexSwitchCheckDefault">
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label for="" class="form-label d-flex">Food and Drinks</label>
                                    <div class="form-check form-switch">
                                        <input type="text" class="form-control setFoodDrinks" name="setFoodDrinks" value="<?php if($food_drinks == "yes"){ echo "yes"; } else { echo "no"; } ?>">
                                        <input class="form-check-input getFoodDrinks" type="checkbox" id="flexSwitchCheckDefault" <?php if($food_drinks == "yes"){ echo "checked"; } ?>>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="form-label d-flex">Tour guide</label>
                                    <div class="form-check form-switch">
                                        <input type="text" class="form-control setTourGuide" name="setTourGuide" value="<?php if($tour_guide == "yes"){ echo "yes"; } else { echo "no"; } ?>">
                                        <input class="form-check-input getTourGuide" type="checkbox" id="flexSwitchCheckDefault" <?php if($tour_guide == "yes"){ echo "checked"; } ?>>
                                    </div>
                                </div>

                            </div>


                            <div class="form-group d-flex mt-3">
                                <div class="form-group col-4">
                                    <label for="" class="form-label d-flex">Price (PHP)</label>
                                    <input type="number" class="form-control form-control-lg" name="getPrice" id="getPrice" step="0.01" placeholder="00.00" value="<?php echo $price ?>">
                                </div>
        
                                <div class="form-group mx-3 col-4">
                                    <label for="" class="form-label">Promo (%)</label>
                                    <input type="number" class="form-control form-control-lg" id="getPromo" name="getPromo" placeholder="00.00%" value="<?php echo $promo ?>">
                                </div>
        
                                <div class="form-group">
                                    <label for="" class="form-label">Current</label>
                                    <input type="text" class="form-control form-control-lg readonly" id="totalPrice" readonly value="<?php echo $price - ($price * ($promo/100)); ?>">
                                </div>
                            </div>
        
                            <hr>
        
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-success w-100 py-3" id="submit" name="submit">Update</button>
                            </div>
                        </div>

                    </div>

                </div>
                
            </form>


        </div>

    </div>
    


    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  

    <!-- bootstrap script -->
    <script src="../style/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>


    <!-- custom js -->
    <script src="../js/admin.js"></script>

    <script>
        $(document).ready(function() {

        function validateImg(data) {
            var ext = data.split(".");
            ext = ext[ext.length-1].toLowerCase();
            var arrayExtension = ["jpg", "jpeg", "png", "jijf"];

            if(arrayExtension.lastIndexOf(ext) == -1) {
                return false;
            } else {
                return true;
            }
        }

        function validateAlphabeth(alph) {
            return /^[a-zA-Z ,]+$/.test(alph)
        }

        getAdventureImage.onchange = evt => {
            

            
            if(!$("#getAdventureImage").val()) {
                imgPreview.src = "../style/resources/no_imge.svg"
                $("#textImgPreview").text("No image to preview yet.")
                $("#validationFile").remove();
            } else {
                if(!validateImg($("#getAdventureImage").val())) {
                    imgPreview.src = "../style/resources/no_imge.svg"
                    $("#textImgPreview").text("No image to preview yet.")
                    $("#validationFile").remove();
                    $("#getAdventureImage").before("<p class='poppins fs-m text-danger text-center fw-bold' id='validationFile'>Invalid file format!</p>")
                } else {
                    
                    $("#validationFile").remove();
                    const [file] = getAdventureImage.files
                    if (file) {
                        imgPreview.src = URL.createObjectURL(file)
                        $("#textImgPreview").empty();
                    }
            
                }
            }

            
        
        }

        $("form").submit(function(event){

            let countValidation = 0;

            let location_name = $("#getLocationName").val()
            if(location_name == "") {
                $("#getLocationName").addClass("is-invalid")
            } else {
                $("#getLocationName").removeClass("is-invalid")

                if(!validateAlphabeth(location_name)) {
                    $("#getLocationName").addClass("is-invalid")
                } else {
                    $("#getLocationName").removeClass("is-invalid")
                    countValidation++
                }

            }


            let country = $("#getCountry").val()
            if(country == 0) {
                $("#getCountry").addClass("is-invalid")
            } else {
                $("#getCountry").removeClass("is-invalid")
                countValidation++
            }


            let travelOption = $("#getTravelOption").val()
            if(travelOption == 0) {
                $("#getTravelOption").addClass("is-invalid")
            } else {
                $("#getTravelOption").removeClass("is-invalid")
                countValidation++
            }
            

            let description = $("#getDescription").val()
            if(description == "") {
                $("#getDescription").addClass("is-invalid")
            } else {
                $("#getDescription").removeClass("is-invalid")
                countValidation++
            }


            let price = $("#getPrice").val()
            if(price == "") {
                $("#getPrice").addClass("is-invalid")
            } else {
                $("#getPrice").removeClass("is-invalid")
                countValidation++
            }

            console.log(countValidation)

            if(countValidation === 5 ) {
                    $("form").unbind("submit");
                        e.submit();
                    } else {
                        event.preventDefault();
                    }

            })

    })
    </script>

</body>
</html>