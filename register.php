<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 9/6/2019
 * Time: 5:47 PM
 */
?>
<?php
//Start session
session_start();
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
    <title>Lagosreporters9ja | Keeping you updated</title>

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
                            <!--<a href="index.php"><img src="img/core-img/logo.png" alt=""></a>-->
                            <a href="index.php"><h2 style="color: white"> LAGOS REPORTERS 9ja </h2></a>
                        </div>

                        <!-- Login Search Area -->
                        <div class="login-search-area d-flex align-items-center">
                            <!-- Login -->
                            <div class="login d-flex">
                                <a href="logout.php">Logout</a>


                            </div>
                            <!-- Search Form -->
                            <!--<div class="search-form">-->
                            <!--<form action="#" method="post">-->
                            <!--<input type="search" name="search" class="form-control" placeholder="Search">-->
                            <!--<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>-->
                            <!--</form>-->
                            <!--</div>-->
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
                                <!--<li><a href="#">Pages</a>-->
                                <!--<ul class="dropdown">-->
                                <!--<li><a href="index.php">Home</a></li>-->
                                <!--<li><a href="catagories-post.html">Catagories</a></li>-->
                                <!--<li><a href="single-post.html">Single Articles</a></li>-->
                                <!--<li><a href="about.html">About Us</a></li>-->
                                <!--<li><a href="contact.html">Contact</a></li>-->
                                <!--<li><a href="#">Dropdown</a>-->
                                <!--<ul class="dropdown">-->
                                <!--<li><a href="index.php">Home</a></li>-->
                                <!--<li><a href="catagories-post.html">Catagories</a></li>-->
                                <!--<li><a href="single-post.html">Single Articles</a></li>-->
                                <!--<li><a href="about.html">About Us</a></li>-->
                                <!--<li><a href="contact.html">Contact</a></li>-->
                                <!--</ul>-->
                                <!--</li>-->
                                <!--</ul>-->
                                <!--</li>-->
                                <!--<li><a href="#">Mega Menu</a>-->
                                <!--<div class="megamenu">-->
                                <!--<ul class="single-mega cn-col-4">-->
                                <!--<li class="title">Catagories</li>-->
                                <!--<li><a href="index.php">Home</a></li>-->
                                <!--<li><a href="catagories-post.html">Catagories</a></li>-->
                                <!--<li><a href="single-post.html">Single Articles</a></li>-->
                                <!--<li><a href="about.html">About Us</a></li>-->
                                <!--<li><a href="contact.html">Contact</a></li>-->
                                <!--</ul>-->
                                <!--<ul class="single-mega cn-col-4">-->
                                <!--<li class="title">Catagories</li>-->
                                <!--<li><a href="index.php">Home</a></li>-->
                                <!--<li><a href="catagories-post.html">Catagories</a></li>-->
                                <!--<li><a href="single-post.html">Single Articles</a></li>-->
                                <!--<li><a href="about.html">About Us</a></li>-->
                                <!--<li><a href="contact.html">Contact</a></li>-->
                                <!--</ul>-->
                                <!--<ul class="single-mega cn-col-4">-->
                                <!--<li class="title">Catagories</li>-->
                                <!--<li><a href="index.php">Home</a></li>-->
                                <!--<li><a href="catagories-post.html">Catagories</a></li>-->
                                <!--<li><a href="single-post.html">Single Articles</a></li>-->
                                <!--<li><a href="about.html">About Us</a></li>-->
                                <!--<li><a href="contact.html">Contact</a></li>-->
                                <!--</ul>-->
                                <!--<div class="single-mega cn-col-4">-->
                                <!--&lt;!&ndash; Single Featured Post &ndash;&gt;-->
                                <!--<div class="single-blog-post small-featured-post d-flex">-->
                                <!--<div class="post-thumb">-->
                                <!--<a href="#"><img src="img/bg-img/23.jpg" alt=""></a>-->
                                <!--</div>-->
                                <!--<div class="post-data">-->
                                <!--<a href="#" class="post-catagory">Travel</a>-->
                                <!--<div class="post-meta">-->
                                <!--<a href="#" class="post-title">-->
                                <!--<h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>-->
                                <!--</a>-->
                                <!--<p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>-->
                                <!--</div>-->
                                <!--</div>-->
                                <!--</div>-->

                                <!--&lt;!&ndash; Single Featured Post &ndash;&gt;-->
                                <!--<div class="single-blog-post small-featured-post d-flex">-->
                                <!--<div class="post-thumb">-->
                                <!--<a href="#"><img src="img/bg-img/24.jpg" alt=""></a>-->
                                <!--</div>-->
                                <!--<div class="post-data">-->
                                <!--<a href="#" class="post-catagory">Politics</a>-->
                                <!--<div class="post-meta">-->
                                <!--<a href="#" class="post-title">-->
                                <!--<h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>-->
                                <!--</a>-->
                                <!--<p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>-->
                                <!--</div>-->
                                <!--</div>-->
                                <!--</div>-->
                                <!--</div>-->
                                <!--</div>-->
                                <!--</li>-->
                                <!--                                <li><a href="#">Post a report</a></li>-->
                                <!--                                <li><a href="contact.php">Contact</a></li>-->

                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-8">
                <!-- Breaking News Widget -->
                <div class="breaking-news-area d-flex align-items-center">
                    <div class="news-title">
                        <p>Registration Page</p>
                    </div>
                    <!--                    <div id="breakingNewsTicker" class="ticker">-->
                    <!--                        <ul>-->
                    <!--                            <li><a href="#">keeping you updated with the breaking news.</a></li>-->
                    <!--                            <li><a href="#">Avenue to get insight on relevant news.</a></li>-->
                    <!--                        </ul>-->
                    <!--                    </div>-->
                </div>

                <!-- Breaking News Widget -->
                <!--                <div class="breaking-news-area d-flex align-items-center mt-15">-->
                <!--                    <div class="news-title title2">-->
                <!--                        <p>International</p>-->
                <!--                    </div>-->
                <!--                    <div id="internationalTicker" class="ticker">-->
                <!--                        <ul>-->
                <!--                            <li><a href="#">keeping you updated with the international news</a></li>-->
                <!--                            <li><a href="#">giving it to you undiluted</a></li>-->
                <!--                        </ul>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>

            <!-- Hero Add -->
            <div class="col-12 col-lg-4">
                <div class="hero-add">
                    <a href="#"><img src="img/core-img/lagos%20reporter.PNG" width="230" height="116" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Hero Area End ##### -->

<!-- ##### Featured Post Area Start ##### -->
<div class="featured-post-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8">
                <div class="row">

                    <!-- Single Featured Post -->

                    <!--<a href="#"><img src="img/bg-img/16.jpg" alt=""></a>-->
                </div>
                <div class="post-data">
                    <h5 style="color: #0056b3" align="center"> Register as a Reporter</h5>
                    </a>
                    <div align="center">
                        <form enctype="multipart/form-data" action="register_con.php" name="form" method="post">


                            <input type="text" id="names" name="names" size="30" required placeholder="Names">
                            <br><br>
                            <input type="text" id="username" name="username" size="30" required placeholder="Username">
                            <br><br>
                            <input type="password" id="password" name="password" size="30" required
                                   placeholder="password">
                            <br><br>
                            <input type="text" name="email" id="email" size="30" placeholder="Email" required>
                            <br><br>
                            <input type="text" id="phone" name="phone" size="30" required placeholder="Phone">
                            <br><br>
                            <input type="file" id="image" name="image" size="30" required placeholder="Image">

                            <br><br>
                            <input type="reset" name="reset" id="submit" value="Reset"/>
                            <input type="submit" name="submit" id="submit" value="Submit"/>
                            <br><br><br>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<!--ADVERTISEMENT SECTION-->

</div>
</div>


</div>
</div>
</div>


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
                            <li><a href="#">www.Lagosreporters9ja.com</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <!--<div class="col-12 col-sm-6 col-lg-2">-->
                <!--<div class="footer-widget-area mt-80">-->
                <!--&lt;!&ndash; Title &ndash;&gt;-->
                <!--<h4 class="widget-title">News</h4>-->
                <!--&lt;!&ndash; List &ndash;&gt;-->
                <!--<ul class="list">-->
                <!--<li><a href="#">Politics</a></li>-->
                <!--<li><a href="#">Business</a></li>-->
                <!--<li><a href="#">Markets</a></li>-->
                <!--<li><a href="#">Tech</a></li>-->
                <!--<li><a href="#">Luxury</a></li>-->
                <!--</ul>-->
                <!--</div>-->
                <!--</div>-->

                <!-- Footer Widget Area -->
                <!--<div class="col-12 col-sm-4 col-lg-2">-->
                <!--<div class="footer-widget-area mt-80">-->
                <!--&lt;!&ndash; Title &ndash;&gt;-->
                <!--<h4 class="widget-title">Sports news</h4>-->
                <!--&lt;!&ndash; List &ndash;&gt;-->
                <!--<ul class="list">-->
                <!--<li><a href="#">Football</a></li>-->
                <!--<li><a href="#">Golf</a></li>-->
                <!--<li><a href="#">Tennis</a></li>-->
                <!--<li><a href="#">Motorsport</a></li>-->
                <!--<li><a href="#">Horseracing</a></li>-->
                <!--<li><a href="#">Equestrian</a></li>-->
                <!--<li><a href="#">Sailing</a></li>-->
                <!--<li><a href="#">Skiing</a></li>-->
                <!--</ul>-->
                <!--</div>-->
                <!--</div>-->

                <!-- Footer Widget Area -->
                <!--<div class="col-12 col-sm-4 col-lg-2">-->
                <!--<div class="footer-widget-area mt-80">-->
                <!--&lt;!&ndash; Title &ndash;&gt;-->
                <!--<h4 class="widget-title">FAQ</h4>-->
                <!--&lt;!&ndash; List &ndash;&gt;-->
                <!--<ul class="list">-->
                <!--<li><a href="#">Aviation</a></li>-->
                <!--<li><a href="#">Business</a></li>-->
                <!--<li><a href="#">Traveller</a></li>-->
                <!--<li><a href="#">Destinations</a></li>-->
                <!--<li><a href="#">Features</a></li>-->
                <!--<li><a href="#">Food/Drink</a></li>-->
                <!--<li><a href="#">Hotels</a></li>-->
                <!--<li><a href="#">Partner Hotels</a></li>-->
                <!--</ul>-->
                <!--</div>-->
                <!--</div>-->

                <!-- Footer Widget Area -->
                <!--<div class="col-12 col-sm-4 col-lg-2">-->
                <!--<div class="footer-widget-area mt-80">-->
                <!--&lt;!&ndash; Title &ndash;&gt;-->
                <!--<h4 class="widget-title">+More</h4>-->
                <!--&lt;!&ndash; List &ndash;&gt;-->
                <!--<ul class="list">-->
                <!--<li><a href="#">Fashion</a></li>-->
                <!--<li><a href="#">Design</a></li>-->
                <!--<li><a href="#">Architecture</a></li>-->
                <!--<li><a href="#">Arts</a></li>-->
                <!--<li><a href="#">Autos</a></li>-->
                <!--<li><a href="#">Luxury</a></li>-->
                <!--</ul>-->
                <!--</div>-->
                <!--</div>-->
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
