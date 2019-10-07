<?php
session_start();

//$con = mysqli_connect("localhost","root","","lagos_reporter");

$con = mysqli_connect("localhost", "lagosrep_tobaino", "pass?1><m", "lagosrep_lagos_reporter");


// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

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
                                    <a href="login.php">Login</a>
                                    <!--                                    <a href="register.php">Register</a>-->

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
                            <!--                            <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>-->
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
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="post_report.php">Post a report</a></li>
                                    <li><a href="music_video_download.php">Music & Video downloads</a></li>
                                    <li><a href="contact.php">Contact</a></li>

                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                        <a href="https://api.whatsapp.com/send?phone=+2348021716121&text=Save%20our%20number%20to%20your%20contacts%20and%20send%20this%20message%20to%20start%20Receiving%20News%20from%20Lagosreporters%209ja">
                            <span style="color: powderblue"><i class="fa fa-whatsapp" style="color: dodgerblue"></i> Receive News on WhatsApp</span>
                        </a>
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
                            <p>LATEST NEWS</p>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="#">updating you with the breaking news.</a></li>
                                <li><a href="#">get insight on relevant news.</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center mt-15">
                        <div class="news-title title2">
                            <p>LR COMMUNITY WATCH</p>
                        </div>
                        <div id="internationalTicker" class="ticker">
                            <ul>
                                <li><a href="#">making it balanced and accurate</a></li>
                                <li><a href="#">giving it to you undiluted</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Hero Add -->
                <div class="col-12 col-lg-4">
                    <div class="hero-add">
                        <a href="#"><img src="img/core-img/official%20logo.jpg" width="430" height="216" alt=""></a>
                        <a href="#"><img src="image_upload/keade.jpg" width="150" height="5" alt=""></a>
                        <p>Patronize Us for all sort of wears (Unisex), visit us <a
                                    href="facebook.com/keadecollections"> <strong style="color: blue">Keade
                                    Collections</strong></a></p>


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
                        <div class="col-12 col-lg-7">
                            <div class="single-blog-post featured-post">
                                <div class="post-thumb">
                                    <!--<a href="#"><img src="img/bg-img/16.jpg" alt=""></a>-->
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Latest News</a>
                                    <a href="#" class="post-title">
                                        <!--<h6>Financial news: A new company is born today at the stock market</h6>-->
                                        <?php
                                        $query = $con->query("select * from local_news order by id desc limit 10");
                                        while ($row = mysqli_fetch_array($query)) {

//                                            $id = $row['id'];
                                            $image=$row['image'];
                                            $reporter_name = $row['reporter_name'];
                                            $headline = $row['headline'];
                                            $content = $row['content'];
                                        $submit = $row['submit']
                                        //                                        $image=$row['image'];

                                        ?>
                                            <tr>
                                                <div align="justify">

                                                <!--                                                <td>  --><?php //echo $id ;?><!-- </td>-->
                                                    <td><img src="image_upload/<?php echo $image ?>" width="230"
                                                             height="180"></td>
                                                    <br>
                                                    <td>Time:<?php echo $submit; ?> </td>
                                                    <br>
                                                    <td>&nbsp;Report by: <?php echo $reporter_name; ?> </td>
                                                    <br>
                                                <td>&nbsp;Headline / Title:       <?php echo $headline ;?> </td><br>
                                                    <td><?php echo $content; ?> </td>
                                                    <!--                                                    <td>-->
                                                    <?php //echo $submit; ?><!-- </td>-->

                                                    <br><br>

                                                    <!--                                                    <p><a href="images1/-->
                                                    <?php //echo $image?><!--"> Click for more pictures...</a> </p>-->
                                                    <!--                                                    <p><a href="#"> Click for more pictures...</a> </p>-->


                                                    <!--                                                                                                 //sharing on social media platforms-->
                                                    <td>
                                                        <a href="https://api.whatsapp.com/send?text=www.google.com data-action="
                                                           share/whatsapp/share">
                                                        <span><i class="fa fa-whatsapp" style="color: green"></i></span>
                                                        Share via Whatsapp web
                                    </a></td><br>

                                    <td>
                                        <a class="twitter-share-button" href="https://twitter.com/intent/tweet">
                                            <span><i class="fa fa-twitter" style="color: blue"></i></span> Share via
                                            Twitter</a>
                                    </td>
                                    <br>

                                    <td>

                                        <a href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Fcss-tricks.com%2F">
                                            <span><i class="fa fa-facebook" style="color: blue"></i></span> Share via
                                            Facebook</a>
                                        </a>        </td>
                                    <br><Br>
                                </div>
                                </tr>
                                        <?php }?>


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
                                    <a href="#" class="post-catagory">LR COMMUNITY WATCH</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <?php
                                            $query = $con->query("select * from int_news order by id desc limit 10");
                                            while ($row = mysqli_fetch_array($query)) {

//                                            $id = $row['id'];
                                                $image=$row['image'];
                                                $reporter_name = $row['reporter_name'];
                                                $headline = $row['headline'];
                                                $content = $row['content'];
                                            $submit = $row['submit']

                                            //                                            $image1=$row['image1'];
                                            //                                            $image2=$row['image2'];

                                                ?>
                                                <tr>
                                                    <!--                                                <td>  --><?php //echo $id ;?><!-- </td>-->
                                                   <div align="justify">
                                                       <td><img src="image_upload/<?php echo $image ?>" width="230"
                                                                height="180"></td>
                                                       <br>
                                                       <td>Time:<?php echo $submit; ?> </td>
                                                       <br>
                                                       <td>&nbsp;Report by: <?php echo $reporter_name; ?> </td>
                                                       <br>
                                                    <td>&nbsp;Headline / Title:       <?php echo $headline ;?> </td><br>
                                                       <td><?php echo $content; ?> </td>
                                                       <br><br>
                                                       <!--                                                       <p><a href="#"> Click for more pictures...</a></p>-->

                                                       <td>
                                                           <a href="https://api.whatsapp.com/send?text=www.google.com data-action="
                                                              share/whatsapp/share">
                                                           <span><i class="fa fa-whatsapp"
                                                                    style="color: green"></i></span> Share via Whatsapp
                                                           web
                                        </a></td><br>

                                        <td>
                                            <a class="twitter-share-button" href="https://twitter.com/intent/tweet">
                                                <span><i class="fa fa-twitter" style="color: blue"></i></span> Share via
                                                Twitter</a>
                                        </td>
                                        <br>

                                        <td>

                                            <a href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Fcss-tricks.com%2F">
                                                <span><i class="fa fa-facebook" style="color: blue"></i></span> Share
                                                via Facebook</a>
                                            </a>        </td>
                                        <br><Br>
                                    </div>
                                                </tr>
                                    <?php } ?>
                                    <!-- see Comments -->
                                    <br>


                                    <div class="post-meta">
                                        <!-- Post Like & Post Comment -->
                                        <h6 style="color: blue"><strong>DISCLAIMER: Comments expressed here do not
                                                reflect the opinions of Lagosreproters9ja.com</strong></h6>
                                        <br><br><a href="#" class="post-comment"><img src="img/core-img/chat.png"
                                                                                      alt=""> <span
                                                    style="color: #0056b3">comment on any of the news</span></a>
                                        <br>
                                        <!--                                        <div class="d-flex align-items-center">-->
                                        <!--<a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>-->
                                        <div>
                                            <form enctype="multipart/form-data" action="comment.php" name="form"
                                                  method="post">

                                                <br>
                                                <input type="text" id="visitor" name="visitor" size="30" required
                                                       placeholder="Name">
                                                <br>

                                                <input type="text" name="email" id="email" size="30"
                                                       placeholder="Email (optional)">
                                                <br>

                                                <textarea name="comment" cols="30" rows="5" size="500"
                                                          placeholder="Comments here" required></textarea>
                                                <br>
                                                <input type="reset" name="reset" id="submit" value="reset"/>
                                                <input type="submit" name="submit" id="submit" value="Submit"/>
                                                <br>
                                            </form>

                                        </div>
                                    </div>

                                    <br>
                                    <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span
                                                style="color: #0056b3">Visitors Comments</span></a>
                                    <br>
                                    <div class="d-flex align-items-center">
                                            <!--<a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>-->


                                        <?php
                                        $query = $con->query("select * from comments order by id desc limit 15");
                                        while ($row = mysqli_fetch_array($query)) {

                                        $visitor = $row['visitor'];
                                        $email = $row['email'];
                                        $comment = $row['comment'];

                                        ?>
                                        <tr>
                                            <td>&nbsp;Comment by: <?php echo $visitor; ?> </td>
                                            <br>
                                            <td>&nbsp;Email: <?php echo $email; ?> </td>
                                            <br>
                                            <td>&nbsp;Comment: <?php echo $comment; ?> </td>
                                            <br><br>


                                            <?php } ?>


                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


                <!--ADVERTISEMENT SECTION-->

        <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Featured Post -->
            <a href="contact.php" class="post-catagory"><strong style="color: #b21f2d">Advertise With Us</strong> </a>

            <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <!--                            <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>-->
                        </div>
                        <div class="post-data">
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <!--                                    <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>-->
                                </a>
                                <!--                                <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>-->
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
            <!--                    advert column 1-->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <!--                            <a href="#"><img src="img/bg-img/20.jpg" alt=""></a>-->
                        </div>

                        <!--                    advert column 2-->

                        <div class="post-data">
                            <!--<a href="#" class="post-catagory">Politics</a>-->
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <!--                                    <h6>Sed a elit euismod augue semper congue sit amet ac sapien.</h6>-->
                                </a>
                                <!--                                <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>-->
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
            <!--                    advert column 3-->

                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <!--<a href="#"><img src="img/bg-img/21.jpg" alt=""></a>-->
                        </div>

                        <!--                    advert column 4-->
                        <div class="post-data">
                            <!--<a href="#" class="post-catagory">Health</a>-->
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <!--<h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>-->
                                </a>
                                <!--<p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>-->
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
            <!--                    advert column 5-->
            <div class="single-blog-post small-featured-post d-0 flex">
                        <div class="post-thumb">
                            <!--<a href="#"><img src="img/bg-img/22.jpg" alt=""></a>-->
                        </div>

                <!--                    advert column 6-->
                        <div class="post-data">
                            <!--<a href="#" class="post-catagory">Finance</a>-->
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <!--<h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>-->
                                </a>
                                <!--<p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>-->
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <!--<a href="#"><img src="img/bg-img/23.jpg" alt=""></a>-->
                        </div>
                        <div class="post-data">
                            <!--<a href="#" class="post-catagory">Travel</a>-->
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <!--<h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>-->
                                </a>
                                <!--<p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>-->
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <!--<a href="#"><img src="img/bg-img/24.jpg" alt=""></a>-->
                        </div>
                        <div class="post-data">
                            <!--<a href="#" class="post-catagory">Politics</a>-->
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <!--<h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>-->
                                </a>
                                <!--<p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Post Area End ##### -->

    <!-- ##### Popular News Area Start ##### -->
    <!--<div class="popular-news-area section-padding-80-50">-->
        <!--<div class="container">-->
            <!--<div class="row">-->
                <!--<div class="col-12 col-lg-8">-->
                    <!--<div class="section-heading">-->
                        <!--<h6>Popular News</h6>-->
                    <!--</div>-->

                    <!--<div class="row">-->

                        <!--&lt;!&ndash; Single Post &ndash;&gt;-->
                        <!--<div class="col-12 col-md-6">-->
                            <!--<div class="single-blog-post style-3">-->
                                <!--<div class="post-thumb">-->
                                    <!--<a href="#"><img src="img/bg-img/12.jpg" alt=""></a>-->
                                <!--</div>-->
                                <!--<div class="post-data">-->
                                    <!--<a href="#" class="post-catagory">Finance</a>-->
                                    <!--<a href="#" class="post-title">-->
                                        <!--<h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>-->
                                    <!--</a>-->
                                    <!--<div class="post-meta d-flex align-items-center">-->
                                        <!--<a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>-->
                                        <!--<a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->

                        <!--&lt;!&ndash; Single Post &ndash;&gt;-->
                        <!--<div class="col-12 col-md-6">-->
                            <!--<div class="single-blog-post style-3">-->
                                <!--<div class="post-thumb">-->
                                    <!--<a href="#"><img src="img/bg-img/13.jpg" alt=""></a>-->
                                <!--</div>-->
                                <!--<div class="post-data">-->
                                    <!--<a href="#" class="post-catagory">Finance</a>-->
                                    <!--<a href="#" class="post-title">-->
                                        <!--<h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>-->
                                    <!--</a>-->
                                    <!--<div class="post-meta d-flex align-items-center">-->
                                        <!--<a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>-->
                                        <!--<a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->

                        <!--&lt;!&ndash; Single Post &ndash;&gt;-->
                        <!--<div class="col-12 col-md-6">-->
                            <!--<div class="single-blog-post style-3">-->
                                <!--<div class="post-thumb">-->
                                    <!--<a href="#"><img src="img/bg-img/14.jpg" alt=""></a>-->
                                <!--</div>-->
                                <!--<div class="post-data">-->
                                    <!--<a href="#" class="post-catagory">Finance</a>-->
                                    <!--<a href="#" class="post-title">-->
                                        <!--<h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>-->
                                    <!--</a>-->
                                    <!--<div class="post-meta d-flex align-items-center">-->
                                        <!--<a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>-->
                                        <!--<a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->

                        <!--&lt;!&ndash; Single Post &ndash;&gt;-->
                        <!--<div class="col-12 col-md-6">-->
                            <!--<div class="single-blog-post style-3">-->
                                <!--<div class="post-thumb">-->
                                    <!--<a href="#"><img src="img/bg-img/15.jpg" alt=""></a>-->
                                <!--</div>-->
                                <!--<div class="post-data">-->
                                    <!--<a href="#" class="post-catagory">Finance</a>-->
                                    <!--<a href="#" class="post-title">-->
                                        <!--<h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>-->
                                    <!--</a>-->
                                    <!--<div class="post-meta d-flex align-items-center">-->
                                        <!--<a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>-->
                                        <!--<a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <!--<div class="col-12 col-lg-4">-->
                    <!--<div class="section-heading">-->
                        <!--<h6>Info</h6>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; Popular News Widget &ndash;&gt;-->
                    <!--<div class="popular-news-widget mb-30">-->
                        <!--<h3>4 Most Popular News</h3>-->

                        <!--&lt;!&ndash; Single Popular Blog &ndash;&gt;-->
                        <!--<div class="single-popular-post">-->
                            <!--<a href="#">-->
                                <!--<h6><span>1.</span> Amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales.</h6>-->
                            <!--</a>-->
                            <!--<p>April 14, 2018</p>-->
                        <!--</div>-->

                        <!--&lt;!&ndash; Single Popular Blog &ndash;&gt;-->
                        <!--<div class="single-popular-post">-->
                            <!--<a href="#">-->
                                <!--<h6><span>2.</span> Consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer.</h6>-->
                            <!--</a>-->
                            <!--<p>April 14, 2018</p>-->
                        <!--</div>-->

                        <!--&lt;!&ndash; Single Popular Blog &ndash;&gt;-->
                        <!--<div class="single-popular-post">-->
                            <!--<a href="#">-->
                                <!--<h6><span>3.</span> Adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo.</h6>-->
                            <!--</a>-->
                            <!--<p>April 14, 2018</p>-->
                        <!--</div>-->

                        <!--&lt;!&ndash; Single Popular Blog &ndash;&gt;-->
                        <!--<div class="single-popular-post">-->
                            <!--<a href="#">-->
                                <!--<h6><span>4.</span> Eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>-->
                            <!--</a>-->
                            <!--<p>April 14, 2018</p>-->
                        <!--</div>-->
                    <!--</div>-->

                    <!--&lt;!&ndash; Newsletter Widget &ndash;&gt;-->
                    <!--<div class="newsletter-widget">-->
                        <!--<h4>Newsletter</h4>-->
                        <!--<p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>-->
                        <!--<form action="#" method="post">-->
                            <!--<input type="text" name="text" placeholder="Name">-->
                            <!--<input type="email" name="email" placeholder="Email">-->
                            <!--<button type="submit" class="btn w-100">Subscribe</button>-->
                        <!--</form>-->
                    <!--</div>-->
                <!--</div>-->
            </div>
        </div>
    </div>
    <!-- ##### Popular News Area End ##### -->

    <!-- ##### Video Post Area Start ##### -->
    <!--<div class="video-post-area bg-img bg-overlay" style="background-image: url(img/bg-img/bg1.jpg);">-->
        <!--<div class="container">-->
            <!--<div class="row justify-content-center">-->
                <!--&lt;!&ndash; Single Video Post &ndash;&gt;-->
                <!--<div class="col-12 col-sm-6 col-md-4">-->
                    <!--<div class="single-video-post">-->
                        <!--<img src="img/bg-img/video1.jpg" alt="">-->
                        <!--&lt;!&ndash; Video Button &ndash;&gt;-->
                        <!--<div class="videobtn">-->
                            <!--<a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <!--&lt;!&ndash; Single Video Post &ndash;&gt;-->
                <!--<div class="col-12 col-sm-6 col-md-4">-->
                    <!--<div class="single-video-post">-->
                        <!--<img src="img/bg-img/video2.jpg" alt="">-->
                        <!--&lt;!&ndash; Video Button &ndash;&gt;-->
                        <!--<div class="videobtn">-->
                            <!--<a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <!--&lt;!&ndash; Single Video Post &ndash;&gt;-->
                <!--<div class="col-12 col-sm-6 col-md-4">-->
                    <!--<div class="single-video-post">-->
                        <!--<img src="img/bg-img/video3.jpg" alt="">-->
                        <!--&lt;!&ndash; Video Button &ndash;&gt;-->
                        <!--<div class="videobtn">-->
                            <!--<a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
    <!-- ##### Video Post Area End ##### -->


    <!-- ##### Footer Add Area Start ##### -->
    <!--<div class="footer-add-area">-->
        <!--<div class="container">-->
            <!--<div class="row">-->
                <!--<div class="col-12">-->
                    <!--<div class="footer-add">-->
                        <!--<a href="#"><img src="img/bg-img/footer-add.gif" alt=""></a>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
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
                                <li><a href="admin_login.php">Admin</a></li>

                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <!--<div class="col-12 col-sm-6 col-lg-2">-->
                        <!--<div class="footer-widget-area mt-80">-->
                            <!--&lt;!&ndash; Title &ndash;&gt;-->
                            <!--&lt;!&ndash;<h4 class="widget-title">Admin</h4>&ndash;&gt;-->
                            <!--&lt;!&ndash; List &ndash;&gt;-->
                            <!--&lt;!&ndash;<ul class="list">&ndash;&gt;-->
                                <!--&lt;!&ndash;<li><a href="admin.php">Admin</a></li>&ndash;&gt;-->
                                <!--&lt;!&ndash;<li><a href="#">Business</a></li>&ndash;&gt;-->
                                <!--&lt;!&ndash;<li><a href="#">Markets</a></li>&ndash;&gt;-->
                                <!--&lt;!&ndash;<li><a href="#">Tech</a></li>&ndash;&gt;-->
                                <!--&lt;!&ndash;<li><a href="#">Luxury</a></li>&ndash;&gt;-->
                            <!--&lt;!&ndash;</ul>&ndash;&gt;-->
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
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <!--<h4 class="widget-title">+More</h4>-->
                            <!-- List -->
                            <ul class="list">
                                <p align="center"><a href="contact.php">Contact Us link</a></p>

                                <!--<li><a href="#">Arts</a></li>-->
                                <!--<li><a href="#">Autos</a></li>-->
                                <!--<li><a href="#">Luxury</a></li>-->
                                <!--                                <P align="center"> Follow Us On</P>-->
                                <strong style="color: white">Follow Us On</strong>
                                <p align="left"><a href="https://www.facebook.com/followLRinfo/">
                                        <span><i class="fa fa-facebook" style="color: white"></i></span></a>

                                    <a href="http://Instagram.com/Lagosreporters">
                                        <span><i class="fa fa-instagram" style="color: white"></i></span></a>

                                    <a href="https://mobile.twitter.com/followlrinfo">
                                        <span><i class="fa fa-twitter" style="color: white"></i></span></a>

                                    <a href="https://m.youtube.com/channel/UC8p-bf4Dw0UAY6lVxtMw5Ow">
                                        <span><i class="fa fa-youtube" style="color: white"></i></span></a>
                                </p>

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
                        <p align="center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved | Lagos Reporters 9ja <i class="fa fa-heart-o" aria-hidden="true"></i>
                            design by <a href="https://sparklegrid.tech" target="_blank">Sparklegrid (Tobaino)</a>
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