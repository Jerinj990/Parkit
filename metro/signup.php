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
                            <a href='index.php'>
                                <h1>Park <span>it</span></h1>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
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
                        <h2>Signup</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    
                    
                </div>
                 <div class="row">
                    <div class="col-md-5">
                        <div class="contact-info">
                            <h2>Quick Contact Info</h2>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Open 24*7</h3>
                                    
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Call Us</h3>
                                    <p>+012 345 6789</p>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Email Us</h3>
                                    <p>parkit@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-md-7">
                        <div class="contact-form">
                            <div id="success"></div>
                           
                            <form method="post">
                                <table>
                                <tr>
                                <td>Name</td><td><input type="text" name="name" placeholder="Name" required="required"></td></tr>
                                <tr>
                                <td>mobile</td><td><input type="tel" pattern="[7-9]{1}[0-9]{9}" name="mobile" placeholder="10 digit mobile no." required="required"></td></tr>
                                <tr>
                                <td>email</td><td><input type="email" name="email" placeholder="email" required="required"></td></tr>
                                <tr>
                                <td>password</td><td><input type="password" pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=\S+$).{8}$" name="password" placeholder="1 no. and 1 Capital value" required="required" maxlength="8"></td></tr>
                                <tr>
                                <td>aadhar</td><td><input type="text" name="addha"placeholder="Aadhaar card no." required="required"></td></tr>
                                <tr>
                                <td>address</td><td><input type="text" name="address" placeholder="Address" required="required"></td></tr>
                               
                                <tr>
                                <td></td><td><input type="submit" name="b1"></td></tr>
                                </table>
                                </form>
                            
                               <?php
                                include "test-db-connection.php";
                                if(isset($_REQUEST["b1"]))
                                {
                                    //echo"inside button";
                                    $name=$_POST["name"];
                                    $mobile=$_POST["mobile"];
                                    $email=$_POST["email"];
                                    $password=$_POST["password"];
                                    $addha=$_POST["addha"];
                                    $address=$_POST["address"];
                                 
                                    $qry1="SELECT * from usertable where name='$name'" ;
                                    $_REQUEST=mysqli_query($con,$qry1);
                                    if
                                    (mysqli_num_rows($_REQUEST)>0)
                                    {
                                        echo "<script>alert('user already exists please enter different user name');</script>";
                                    }  
                                    else
                                    {
                                    $qry ="INSERT INTO `usertable` (`name`, `mobile`, `email`, `password`, `addha`, `address`,`role`) VALUES ('$name', '$mobile', '$email', '$password', '$addha', '$address','USER')";
                                    //$_SESSION['uid']=$row['id'];
                                    echo "<script>alert('welcome');</script>";
                                    header('location:userlogin.php');
                                    mysqli_query($con,$qry);
                                    }
                                 }
                                   
                                
                                ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Contact End -->



        
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
