<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Lagosreporters9ja |music / video upload</title>

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


<div align="center">
    <!--    <h6 style="color: blue">upload music / video</h6>-->
    <!--    <form method="post" action="music_video_upload_con.php" enctype="multipart/form-data">-->
    <!--        <table border="1" style="padding:10px">-->
    <!--            <tr>-->
    <!--                <Td>Upload  Video</td></tr>-->
    <!---->
    <!--            <Tr><td><input type="text" name="names" id="names"/></td></tr>-->
    <!--            <tr><td>-->
    <!---->
    <!--            <Tr><td><input type="file" name="image" id="image"/></td></tr>-->
    <!--            <tr><td>-->
    <!--                    <input type="submit" name="submit" id="submit" value="Submit">-->
    <!--<!                   <input type="submit" value="Display Video" name="disp"/>-->
    <!--                </td></tr>-->
    <!--        </table>-->
    <!--    </form>-->

    <?php
    session_start();
    $con = mysqli_connect("localhost", "root", "", "lagos_reporter");
    if (mysqli_connect_errno()) {
        echo "unable to connect to db" . mysqli_connect_error();
    }
    if (isset($_POST['save'])) {
        $target_dir = "Uploaded_Files/";
        $target_file = $target_dir . date("dmYhis") . basename($_FILES["file"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

//        if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg"){

        if ($imageFileType != "mp4" || $imageFileType != "mp3" || $imageFileType != "jpg" || $imageFileType != "3gp" || $imageFileType != "png" || $imageFileType != "jpeg" || $imageFileType != "gif") {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                $files = date("dmYhis") . basename($_FILES["file"]["name"]);
            } else {
                echo "Error Uploading File (check file format / size)";
                exit;
            }
        } else {
            echo "File Not Supported";
            exit;
        }
        $filename = $_POST['filename'];
        $location = "Uploaded_Files/" . $files;
        $sql = "INSERT INTO tblfiles (FileName, Location) VALUES ('{$filename}','{$location}')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "File has been uploaded";
        };
    }
    ?>

    <h1>Upload and Download</h1>
    <form class="form" method="post" action="" enctype="multipart/form-data">
        <label class="label">Filename:</label>
        <input type="text" name="filename"> <br/>
        <label class="label">File:</label>
        <input type="file" name="file" class="input"> <br/>
        <button type="submit" name="save" class="btn"><i class="fa fa-upload fw-fa"></i> Upload</button>
    </form>
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
                            <li><a href="#">www.Lagosreporters9ja.com</a></li>
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