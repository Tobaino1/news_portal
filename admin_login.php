<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 9/5/2019
 * Time: 11:29 AM
 */
session_start();

?>
<?php include ('dbcon.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Lagosreporters9ja | Admin Login</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/lagos%20reporter.PNG">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <!--<a href="index.html"><img src="img/core-img/logo.png" alt=""></a>-->
                            <a href="index.php"><h2 style="color: white"> LAGOS REPORTERS 9ja </h2></a>
                        </div>

                        <!-- Login Search Area -->
                        <div class="login-search-area d-flex align-items-center">
                            <!-- Login -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="newspaper-main-menu" id="stickyMenu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="newspaperNav">

                    <!-- Logo -->
                    <div class="logo">
                        <!--                        <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>-->
                        <a href="index.php"><h4 style="color: white"> LAGOS REPORTERS 9ja </h4></a>

                    </div>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="index.php">Home</a></li>


                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<div align="center">
    <form action="admin.php" method="post">
    <h3>ADMINISTRATOR'S  LOGIN PAGE</h3>

    <div class="form-item">
        <span><i class="fa fa-user" style="color: green"></i></span>
        <input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>
    <br>
    <div class="form-item">
        <span><i class="fa fa-key" style="color: green"></i></span>
        <input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    <br>
    <div class="button-panel">
        <input type="submit" class="button" title="Login" name="login" value="Login"></input>
        <input type="reset" class="button" title="reset" name="reset" value="reset"></input>

    </div>
</form>
</div>
<!--<div class="form-wrapper">-->


<!---->
<?php
//if (isset($_POST['login']))
//{
//    $username = mysqli_real_escape_string($con, $_POST['user']);
//    $password = mysqli_real_escape_string($con, $_POST['pass']);
//
//    $query 		= mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and username='$username'");
//    $row		= mysqli_fetch_array($query);
//    $num_row 	= mysqli_num_rows($query);
//
//    if ($num_row > 0)
//    {
////        $_SESSION['user_id']=$row['user_id'];
//        header('location:admin.php');
////                            echo'tobi';
//    }
//    else
//    {
//        header('location:error.php');
//
////        echo 'Invalid Username and Password Combination';
//    }
//}
//?>

<BR><br><br><br><br>
<!-- ##### Footer Add Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">

    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-widget-area mt-80">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="index.php"><h2 style="color: white">Lagos Reporters 9ja</h2></a>
                        </div>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="mailto:Lagosreporters9ja@gmail.com">Lagosreporters9ja@gmail.com</a></li>
                            <li><a href="http://Lagosreporters9ja.com">www.Lagosreporters9ja.com</a></li>
                        </ul>
                    </div>
                </div>


            </div>
            <p align="center"><a href="contact.php">Contact Us</a></p>

        </div>
    </div>

    <!-- Bottom Footer Area -->
    <div class="bottom-footer-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Copywrite -->
                    <p align="center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Lagos Reporter 9ja <i class="fa fa-heart-o" aria-hidden="true"></i> design by <a href="https://sparklegrid.tech" target="_blank">Sparklegrid (Tobaino)</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>


        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>
</body>

</html>
