<?php
include "test-db-connection.php";


$place_id=-1;
$service=-1;

$print_place='';
$print_service='';

if(isset($_POST["place"])){
    $place_id=$_POST["place"];
                $qry = "select * from parkingareatable where parkingplaceno=".$place_id;
$result=mysqli_query($con, $qry);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)){
        $print_place=$row['title']."&nbsp;".$row['location'];
    }
}
}
if(isset($_POST["service"])){
    $service=$_POST["service"];
    
    $qry = "select * from servicetable where id=".$service;
    $result=mysqli_query($con, $qry);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            $print_service=$row['servicename']."&nbsp;Rate: Rs.".$row['rate'];
        }
    }
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

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href='userindex.php' class="nav-item nav-link">Home</a>
                            <a href='about.php' class="nav-item nav-link">About</a>
                            <a href='service.php' class="nav-item nav-link">Service</a>
                            
                            <a href='booking.php' class="nav-item nav-link active">Booking</a>
                            
                            <a href='contact.php' class="nav-item nav-link">Contact</a>
                        </div>
                        
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Booking</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Booking</a>
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
                            <h3>Request for a car parking</h3>
                            <form name="fg" method="post"  action="book_confirm.php"> 
                                <div class="control-group">
                                    <input type="text" class="form-control" name ="name" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="Vehicle type" class="form-control"name="vehicletype" placeholder="Vehicle type(4 wheeler,2 wheeler)" required="required" />
                                </div>
                                <div class="control-group">
                                   <input type="Vehicle no." class="form-control"name="vehicleno" placeholder="Vehicle no." required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="Date" class="form-control"name="bookfromdate"  placeholder="book from date" required="required" />
                                </div>
                                 <div class="control-group">
                                    <input type="Time" class="form-control"name="bookfromtime" placeholder="book from time" required="required" />
                                </div>
                                 <div class="control-group">
                                    <input type="date" date_format="d M y" class="form-control"name="booktodate" placeholder="book to date" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="Time" class="form-control"name="booktotime" placeholder="book to time" required="required" />
                                </div> 
                                <div class="control-group">
                                    <input type="text" class="form-control" value="<?php echo $print_place;?>" placeholder="Parking place(eg: Parking place 1)" required="required" />
                                </div>
                                
                                <div class="control-group">
                                    <input type="text" class="form-control" value="<?php echo $print_service;?>" placeholder="service" />
                                </div>
                                <div class="control-group">
                                <input type="hidden" name="place" value="<?php echo $place_id;?>"/>
                                <input type="hidden" name="service" value="<?php echo $service;?>"/>
                               
</div> 
                                 <div class="ml-auto">
                                <input type="submit" name="sbmt" value="Book Now"/>
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
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                            <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                            <p><i class="fa fa-envelope"></i>info@example.com</p>
                            <div class="footer-social">
                                <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="">Terms of use</a>
                            <a href="">Privacy policy</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form>
                                <input class="form-control" placeholder="Full Name">
                                <input class="form-control" placeholder="Email">
                                <button class="btn btn-custom">Submit</button>
                            </form>
                        </div>
                    </div>
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
