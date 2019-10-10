<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 9/5/2019
 * Time: 1:33 PM
 */
session_start();
?>
<?php
$reporter_name=$_POST['reporter_name'];
$headline=$_POST['headline'];

$uploads_dir = 'image_upload/';
$image=$_FILES['image']['name'];
$temp=$_FILES['image']['tmp_name'];

$content=$_POST['content'];


//img1
$uploads_directory = 'img/';
$files = $_FILES['files']['name'];
$tp = $_FILES['files']['tmp_name'];

//img2
$uploads_direct = 'img2/';
$image2 = $_FILES['image2']['name'];
$pt = $_FILES['image2']['tmp_name'];

//img3
$uploads_directing = 'img3/';
$image3 = $_FILES['image3']['name'];
$yk = $_FILES['image3']['tmp_name'];


move_uploaded_file($temp,$uploads_dir.basename($image));

move_uploaded_file($tp, $uploads_directory . basename($files));

move_uploaded_file($pt, $uploads_direct . basename($image2));

move_uploaded_file($yk, $uploads_directing . basename($image3));


// Create connection
$conn = mysqli_connect("localhost", "root", "", "lagos_reporter");
//$con = mysqli_connect("localhost", "lagosrep_tobaino", "pass?1><m", "lagosrep_lagos_reporter");

// Check connection
if ($conn === false) {
    die ("Error: could not connect." . mysqli_connect_error());
}


$sql = "INSERT INTO local_news(reporter_name, headline, image, content, files, image2, image3) VALUES 
('$reporter_name', '$headline','$image','$content', '$files', '$image2', '$image3')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully ";
    header("Location: success_news.php"); // redirecting to the other page
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>