<!DOCTYPE html>
<html lang="en">
    <head>
    <?php
                                include "test-db-connection.php";
                                if(isset($_REQUEST["submit"]))
                                {
                                    //echo"inside button";
                                    
                                    $servicename=$_POST["servicename"];
                                    $rate=$_POST["rate"];
                                    $vehicletype=$_POST["vehicletype"];
                                    $details=$_POST["details"];
                                   
                                    $qry ="INSERT INTO `servicetable` (`id`, `servicename`, `rate`, `vehicletype`, `details`) VALUES (NULL, '$servicename', '$rate', '$vehicletype', '$details');";
                                   
                                   echo $qry;
                                    mysqli_query($con,$qry);
                                   
                                }
                                ?>
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
                            <a href="admin.php">
                                <h1>Park <span>it</span></h1>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->



        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Add Services</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Page Header End -->
   
   
    <div class="accaddhed">
          <center>
	 
          
<br>
    </div>
    <br><br>
    <div class="accaddbox">
<form method="post" action=" ">


<br><br>

<div class="accaddec">
<label>Service Name:</label>

<input type="text" name="servicename"  placeholder="Title" maxlength="15">
    </div>
<br><br>
<div class="accadddob">

<label>Rate:</label>

<input type="text" name="rate"  placeholder="100/-">
    </div>
<br><br>

<div class="accaddpn">
<label>Vehicle type:</label>

<input type="text" name="vehicletype" placeholder="vehicle type" maxlength="25">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div class="accaddadd">


<label>Details:</label><br>
&nbsp;&nbsp;&nbsp;&nbsp;
<textarea rows="4" cols="50" name="details" placeholder="details">

</textarea>
    </div>

<br>
<center>
    <input type="submit" name="submit" value="submit" class="buttonadf button1adf"></center>
<br>
</center>
                                                           
        </form></div>


<br><br>
        
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
