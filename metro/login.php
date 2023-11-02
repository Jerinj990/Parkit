<?php
                               session_start();
                               include('test-db-connection.php');
                                if(isset($_POST['submit']))
                                {
                                  $username=$_POST['name'];
                                  $password=$_POST['password'];
                                  $usertype=$_POST['user'];
                                  if($usertype=='user')                            
                                {                                                                                
                                  $sql="select * from usertable where role='USER' and name='".$username."' and password='".$password."'";
                                  $query=mysqli_query($con,$sql);
                                  if(mysqli_num_rows($query)){
                                  $row=mysqli_fetch_array($query);
                                  
                                     $_SESSION['uid']=$row['id'];
                                     $_SESSION['role']=$row['role'];
                                    echo "<script>alert('welcome user.');</script>";
                                    header('location:userindex.php');
                                     }
                                     else
                                    {
                                     echo "<script>alert('Invalid details. Please try again.');</script>";   
                                   echo "<script>window.location.href='index.php'</script>";
                                    }
                                }
                                   
                                  else if($usertype=='admin')                            
                                {                                                                                
                                  $sql="select * from usertable where role='ADMIN'";
                                  $query=mysqli_query($con,$sql);
                                  $row=mysqli_fetch_array($query);
                                  if($row['name']==$username && $row['password']==$password)
                                    {
                                     $_SESSION['uid']=$row['id'];
                                     $_SESSION['role']=$row['role'];
                                    echo "<script>alert('welcome Admin.');</script>";
                                    header('location:admin.php');
                                     }
                                     else
                                    {
                                     echo "<script>alert('Invalid details. Please try again.');</script>";   
                                   echo "<script>window.location.href='index.php'</script>";
                                    }
                                }
                                    else
                                    {
                                     echo "<script>alert('Invalid details. Please try again.');</script>";   
                                   echo "<script>window.location.href='index.php'</script>";
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
                        <h2>Login</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Register</p>
                    
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
                                <td>Name</td><td><input type="text" name="name"></td></tr>
                                
                                <tr>
                                <td>password</td><td><input type="password" name="password"></td></tr>
                                <tr>
                                    <td><input type="radio" name="user" value="user" selected>User
                                         <input type="radio" name="user" value="admin">Admin
                            </td></tr>
                                <tr>
                                <td><input type="submit" name="submit" ></td></tr>
                                </table>
                                </form>
                            
                             
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
