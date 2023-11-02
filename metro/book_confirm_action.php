<?php
include "test-db-connection.php";


$place_id=-1;
$service=-1;

$print_place='';
$print_service='';


$rate_place=0;
$addl_rate_place=0;
$rate_service=0;

$name=$_POST["name"];
$vehicletype=$_POST["vehicletype"];
$vehicleno=$_POST["vehicleno"];
$bookfromdate=$_POST["bookfromdate"];
$bookfromtime=$_POST["bookfromtime"];
$booktodate=$_POST["booktodate"];
$booktotime=$_POST["booktotime"];
$amount=$_POST['amount'];

if(isset($_POST["place"])){
    $place_id=$_POST["place"];

}
if(isset($_POST["service"])){
    $service=$_POST["service"];   

}



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Park it</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href='userindex.php'>
                                <h1>Park <span>it</span></h1>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Open 24*7</h3>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Call Us</h3>
                                        <p>+012 345 6789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                        <p>parkit@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Payment</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Location Start -->
        <div class="location">
            <div class="container">
                <div class="row">
                <div class="col-lg-2"  ></div>
                    
                    <div class="col-lg-8"  >
                        <div class="location-form">
                            <h3>Pay Now</h3>
                            <form name="fo" method="post"  action="pay_now_action.php">
                                 <div class="control-group">
                                    <input type="Text" class="form-control"name="cname" placeholder="Name" required="required" />
                                </div>
                                 
                                <div class="control-group">
                                    <input type="text" class="form-control" name="cardnumber" placeholder="Card number" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" name="cvv" placeholder="CVV" required="required" />
                                </div>
                                
                                <div class="control-group">
<SELECT name="month">
    <option>01</option>
    <option>02</option>
    <option>03</option>
    <option>04</option>
    <option>05</option>
    <option>06</option>
    <option>07</option>
    <option>08</option>
    <option>09</option>
    <option>10</option>
    <option>11</option>
    <option>12</option>
</select>

                            </div>
                            <div class="control-group">
<SELECT name="year">
    <option>2021</option>
    <option>2022</option>
    <option>2023</option>
    <option>2024</option>
    <option>2025</option>
    <option>2026</option>
    <option>2027</option>
    <option>2028</option>
    <option>2029</option>
    <option>2030</option>
</select>

                            </div>
                                <div class="control-group">
                                <input type="hidden" name="place" value="<?php echo $place_id;?>"/>
                                <input type="hidden" name="service" value="<?php echo $service;?>"/>
                                <input type="hidden" name="amount" value="<?php echo $amount;?>"/>
                                <input type="hidden" name="name" value="<?php echo $name;?>"/>
                                <input type="hidden" name="vehicletype" value="<?php echo $vehicletype;?>"/>
                                <input type="hidden" name="vehicleno" value="<?php echo $vehicleno;?>"/>
                                <input type="hidden" name="bookfromdate" value="<?php echo $bookfromdate;?>"/>
                                <input type="hidden" name="bookfromtime" value="<?php echo $bookfromtime;?>"/>
                                <input type="hidden" name="booktodate" value="<?php echo $booktodate;?>"/>
                                <input type="hidden" name="booktotime" value="<?php echo $booktotime;?>"/>

                                 </div> 
                                <div class="control-group">
                                  Amount:Rs.  <input type="text" class="form-control" value="<?php echo $amount;?>" placeholder="Parking place(eg: Parking place 1)" required="required" />
                                </div>

                                 <div class="ml-auto">
                                   <input type="submit" name="sbmt" value="Pay Now"/>
                                    </div>
                                     
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Location End -->
        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    
                    
                   
                    
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">Parkit</a>, All Right Reserved. Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>

        <script src="js/main.js"></script>
    </body>
</html>
