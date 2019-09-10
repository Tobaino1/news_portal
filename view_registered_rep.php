<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 9/10/2019
 * Time: 6:22 PM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 9/6/2019
 * Time: 6:37 PM
 */
?>
<?php
//Start session
session_start();
?>
<?php
$conn = new PDO('mysql:host=localhost; dbname=lagos_reporter', 'root', '') or die(mysqli_error());
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Lagosreporters9ja | music and video </title>

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
                        <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
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
                                <li class="active"><a href="admin.php">Home</a></li>


                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<h5 style="color: #b21f2d" align="center">LIST OF REGISTERED REPORTERS </h5>
<div align="center">

    <?php
    $con = mysqli_connect("localhost", "root", "", "lagos_reporter");
    if (mysqli_connect_errno()) {
        echo "unable to connect to db" . mysqli_connect_error();
    }
    ?>

    <?php
    $query = $con->query("select * from reporters order by id desc ");
    while ($row = mysqli_fetch_array($query)) {

        $id = $row['id'];
        $image = $row['image'];
        $names = $row['names'];
        $username = $row['username'];
        $email = $row['email'];
        $phone = $row['phone'];

    }
    ?>

    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
        <tr>
            <th width="15%" align="center">S/N</th>
            <th width="15%" align="center">IMAGE</th>
            <th width="15%" align="center">NAMES</th>
            <th width="15%" align="center">USERNAME</th>
            <th width="15%" align="center">EMAIL</th>
            <th width="15%" align="center">PHONE NUMBER</th>
        </tr>
        <tr>
            <td>  <?php echo $id; ?> </td>
            <td><img src="reporter_img/<?php echo $image ?>" width="60" height="50"></td>
            <td>&nbsp;<?php echo $names; ?> </td>
            <td>&nbsp;<?php echo $username; ?> </td>
            <td><?php echo $email; ?> </td>
            <td>&nbsp;<?php echo $phone; ?> </td>

        </tr>
    </table>

    <!--echo code below to displaying data in parallel without table-->
    <!--    <tr>-->
    <!---->
    <!--        <div align="justify">-->
    <!---->
    <!--            <td>  --><?php //echo $id ;?><!--</td>-->
    <!--            <td> <img src="reporter_img/--><?php //echo $image?><!--" width="80" height="60"></td><br>-->
    <!--            <td>&nbsp;Names:   --><?php //echo $names ;?><!-- </td>-->
    <!--            <td>Username :      --><?php //echo $username;?><!-- </td>-->
    <!--            <td>Email: --><?php //echo $email ;?><!-- </td>-->
    <!--            <td>Phone No:   --><?php //echo $phone;?><!-- </td><br><Br>-->
    <!--        </div>-->
    <!--    </tr>-->


</div>
<!--<div class="form-wrapper">-->


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
        </div>
    </div>

    <!-- Bottom Footer Area -->
    <div class="bottom-footer-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Copywrite -->
                    <p align="center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | Lagos Reporter 9ja <i class="fa fa-heart-o" aria-hidden="true"></i> design
                        by <a href="https://sparklegrid.tech" target="_blank">Sparklegrid (Tobaino)</a>
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