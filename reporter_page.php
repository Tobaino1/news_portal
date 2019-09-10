<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 9/5/2019
 * Time: 11:29 AM
 */
?>
<?php
include('dbcon.php');
?>
<?php
//Start session
session_start();
?>
<?php
if (isset($_POST['login'])) //    $username=$row['username'];
{
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
}


//$query=$conn->query("select * from users INNER JOIN account ON users.id = account.TransactionID");

$query = $con->query("select * from reporters WHERE username= '$username' AND password = '$password'");

//while ($row = mysqli_fetch_array($query)){
$row = mysqli_fetch_array($query);
$num_row = mysqli_num_rows($query);

if ($num_row > 0) {

    $username = $row['username'];
    $email = $row['email'];
    $image = $row['image'];


} else {
    echo 'Invalid username or password, please try again with the correct credentials ';
    header("location: error.php"); //error page for wrong longin
}

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
    <title>Lagosreporters9ja |Reporter</title>

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
                            <div class="login d-flex">
                                <a href="logout.php">Logout</a>
                                <!--                                <a href="#">Register</a>-->
                            </div>
                            <!-- Search Form -->
                            <!--<div class="search-form">-->
                            <!--<form action="#" method="post">-->
                            <!--<input type="search" name="search" class="form-control" placeholder="Search">-->
                            <!--<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>-->
                            <!--</form>-->
                            <!--</div>-->
                            <!--                        </div>-->
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
                                    <li class="active"><a href="#">Home</a></li>

                                    <!--                                    <li><a href="#">registered users</a></li>-->
                                    <!--                                    <li><a href="#">Registered Reporters</a></li>-->
                                    <!--                                    <li><a href="logout.php">Logout</a></li>-->

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
                        <p>Reporter's page</p>
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
<div align="center">
    <img src="reporter_img/<?php echo $image ?>" width="60" height="50">
</div>

<div align="center"><strong>You are welcome! </strong> <?php echo $username; ?> , <?php echo $email; ?></div>

<div class="featured-post-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8">
                <div class="row">

                    <!-- Single Featured Post -->
                    <div class="col-12 col-lg-7">
                        <div class="single-blog-post featured-post">
                            <div class="post-thumb">
                                <!--<a href="#"><img src="img/bg-img/16.jpg" alt=""></a>-->
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Latest News</a>
                                <a href="#" class="post-title">
                                    <!--<h6>Financial news: A new company is born today at the stock market</h6>-->
                                </a>
                                <div class="post-meta">
                                    <h6 style="color: blue">Use the form to lodge latest news</h6>


                                    <form enctype="multipart/form-data" action="constring.php" name="form"
                                          method="post">

                                        Name of Reporter
                                        <input type="text" id="reporter_name" name="reporter_name" size="70" required>
                                        <br><br>
                                        Headline / Tile of the news
                                        <input type="text" name="headline" id="headline" size="70" required>
                                        <br><br>
                                        Upload Images (optional)
                                        <input type="file" name="image" id="image">
                                        <br><br>
                                        Content / Body
                                        <textarea name="content" cols="70" rows="15"
                                                  placeholder="copy and paste texts here / type texts here"
                                                  required></textarea>

                                        <br>


                                        <input type="reset" name="reset" id="submit" value="reset"/>

                                        <input type="submit" name="submit" id="submit" value="Submit"/>

                                        <br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-5">
                    <!-- Single Featured Post -->
                    <div class="single-blog-post featured-post-2">
                        <!--<div class="post-thumb">-->
                        <!--<a href="#"><img src="img/bg-img/17.jpg" alt=""></a>-->
                        <!--</div>-->
                        <p></p>
                        <div class="post-data">
                            <a href="#" class="post-catagory">international news</a>
                            <div class="post-meta">

                                <!--                                    <a href="#" class="post-title">-->

                                </a>
                                <h6 style="color: blue">Use the form to lodge intl news</h6>

                                <form enctype="multipart/form-data" action="constring_int.php" name="form"
                                      method="post">

                                    Name of Reporter
                                    <input type="text" id="reporter_name" name="reporter_name" size="70" required>
                                    <br><br>
                                    Headline / Tile of the news
                                    <input type="text" name="headline" id="headline" size="70" required>
                                    <br><br>
                                    Upload Images (optional)
                                    <input type="file" name="image" id="image">
                                    <br><br>
                                    Content / Body
                                    <textarea name="content" cols="70" rows="15"
                                              placeholder="copy and paste texts here / type texts here"
                                              required></textarea>

                                    <br>


                                    <input type="reset" name="reset" id="submit" value="reset"/>

                                    <input type="submit" name="submit" id="submit" value="Submit"/>

                                    <br>
                                </form>
                                <!-- Post Like & Post Comment -->
                                <div class="d-flex align-items-center">
                                    <!--<a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>-->
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

