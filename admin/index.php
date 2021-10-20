<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Manage Bookings • LeggoTravel</title>
    <link rel="icon" href="../style/resources/logo_orange_black.png">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/674b5b9445.js" crossorigin="anonymous"></script>

   
    <!-- bootstrap -->
    <link rel="stylesheet" href="../style/bootstrap-5.0.2-dist/css/bootstrap.min.css">


    <!-- custom styling -->
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
                    <a class="active" href="index.php">Manage Bookings</a>
                </li>

                <li>
                    <a href="adventure.php">Manage Adventures</a>
                </li>

                <li>
                    <a href="blogs.php">Manage Blogs</a>
                </li>

                <li>
                    <a  href="../db/db_logout_admin.php">Logout</a>
                </li>
            </ul>

        </nav>


        <div class="flex-container">
            
            <div class="flex-container-title">
                <h1>Manage Bookings</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe dignissimos beatae corporis neque pariatur vitae officia cumque cum quibusdam ullam magni explicabo nesciunt quasi ex dolor distinctio obcaecati dicta consectetur, iste architecto aliquam? Perferendis ducimus corporis, animi iste perspiciatis, repudiandae laudantium sapiente necessitatibus officia eveniet nam debitis quasi. Odio sit reiciendis numquam fuga accusamus voluptates.</p>
            </div>
            
            <hr class="mt-4">
           

            <div class="adventures-table-wrapper table-responsive">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Customer name</th>
                            <th scope="col">Location</th>
                            <th scope="col">No. Persons</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                            include_once '../db/db_connect.php';


                            $sql = "SELECT * FROM tbl_booking ORDER BY id DESC";

                            $result = mysqli_query($connect, $sql);
                            $count = 0;
                            if(mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $count++;
                                    echo "<tr>".
                                            "<th>".$count."</th>".
                                            "<td class='text-capitalize'>".$row["customer_name"]."</td>".
                                            "<td class='text-capitalize'>".$row["location"]."</td>".
                                            "<td>".$row["persons"]."</td>".
                                            "<td class='text-capitalize'>".$row["price"]."</td>".
                                            "<td class='text-capitalize'>".$row["total_price"]."</td>".
                                            "<td>".
                                                "<a href='../db/db_deleteBooking.php?id=".$row["id"]."' class='btn btn-danger text-white mx-2'><i class='fas fa-trash-alt'></i></a>".
                                            "</td>".
                                         "</tr>";
                                }
                            }
                        ?>
                        
                    </tbody>

                </table>
            </div>
            
        </div>

    </div>
    


    <div class="modal-insert-adventure" id="modalAdventure">

        <div class="modal-adventure-content-form">

            <form action="../db/db_addRecord_adventure_admin.php" method="POST" enctype="multipart/form-data">
                <div class="custom-modal-header d-flex align-items-center justify-content-between">
                    <div class="modal-title-header">
                        <i class="fas fa-map-marked-alt"></i>
                        <h3>create new adventure</h3>
                    </div>

                    <i class="fas fa-times btn-modal-close" title="Close tab" id="btnModalClose"></i>
                </div>
        


                <div class="custom-modal-body">
        


                    <div class="flex-form">

                        <div class="img-wrapper">
                            <div class="img-preview rounded shadow mb-4" id="noImgPreview">
                                <img src="../style/resources/no_imge.svg" alt="" id="imgPreview">
                                <p class="poppins fs-lg text-center dark-blue fw-bold mt-3" id="textImgPreview">No image to preview yet</p>
                            </div>
    
                            <input type="file" class="form-control mt-3" id="getAdventureImage" name="getAdventureImage">
                        </div>

                        <div class="divier-form-modal"></div>

                        <div class="form-fill-wrapper">
                            <div class="form-group">
                                <label for="" class="form-label d-flex">Location Name<p class="text-danger mx-1">*</p></label>
                                <input type="text" class="form-control" id="getLocationName" name="getLocationName" autocomplete="off">
                            </div>
        
                            <div class="form-group mt-3">
                                <label for="" class="form-label d-flex">Adventure's Country<p class="text-danger mx-1">*</p></label>
                                <input type="text" class="form-control" id="getCountry" name="getCountry" autocomplete="off">
                            </div>
        
                            <div class="form-group mt-3">
                                <label for="" class="form-label d-flex">Travel Option<p class="text-danger mx-1">*</p></label>
                                <select class="form-control " name="getTravelOption" id="getTravelOption">
                                    <option value="0">-- Select option --</option>
                                    <option value="Air">Air Transportation</option>
                                    <option value="Sea">Sea Transportation</option>
                                    <option value="Land">Land Transportation</option>
                                </select>
                            </div>
        
                            <div class="form-group mt-3">
                                <label for="getDescription" class="form-label d-flex">Description<p class="text-danger mx-1">*</p></label>
                                <textarea class="form-control resize-0" id="getDescription" name="getDescription" rows="4"></textarea>
                            </div>
        
                            <div class="form-group mt-3 d-flex justify-content-between">
                                
                                <div class="form-group">
                                    <label for="" class="form-label d-flex">Accomodation<p class="text-danger mx-1">*</p></label>
                                    <div class="form-check form-switch">
                                        <input type="text" class="form-control setAccomodation" name="setAccomodation" value="no">
                                        <input class="form-check-input getAccomodation" type="checkbox" id="flexSwitchCheckDefault">
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label for="" class="form-label d-flex">Food and Drinks<p class="text-danger mx-1">*</p></label>
                                    <div class="form-check form-switch">
                                        <input type="text" class="form-control setFoodDrinks" name="setFoodDrinks" value="no">
                                        <input class="form-check-input getFoodDrinks" type="checkbox" id="flexSwitchCheckDefault">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="form-label d-flex">Tour guide<p class="text-danger mx-1">*</p></label>
                                    <div class="form-check form-switch">
                                        <input type="text" class="form-control setTourGuide" name="setTourGuide" value="no">
                                        <input class="form-check-input getTourGuide" type="checkbox" id="flexSwitchCheckDefault">
                                    </div>
                                </div>

                            </div>

                            <div class="form-group d-flex mt-3">
                                <div class="form-group col-4">
                                    <label for="" class="form-label d-flex">Price (PHP)<p class="text-danger mx-1">*</p></label>
                                    <input type="number" class="form-control" name="getPrice" id="getPrice" step="0.01" placeholder="00.00">
                                </div>
        
                                <div class="form-group mx-3 col-4">
                                    <label for="" class="form-label">Promo (%)</label>
                                    <input type="number" class="form-control" id="getPromo" name="getPromo" placeholder="0%">
                                </div>
        
                                <div class="form-group">
                                    <label for="" class="form-label">Current</label>
                                    <input type="text" class="form-control readonly" step="0.01" id="totalPrice" readonly>
                                </div>
                            </div>
        
                            <hr>
        
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-success w-100 py-3" id="submit" name="submit">Create</button>
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
    <script src="../js/adventure_admin.js"></script>

</body>
</html>