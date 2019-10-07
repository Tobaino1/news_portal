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

move_uploaded_file($temp,$uploads_dir.basename($image));



// Create connection
//$conn = mysqli_connect("localhost", "root", "", "lagos_reporter");
$con = mysqli_connect("localhost", "lagosrep_tobaino", "pass?1><m", "lagosrep_lagos_reporter");

// Check connection
if ($conn === false) {
    die ("Error: could not connect." . mysqli_connect_error());
}



$sql = "INSERT INTO local_news(reporter_name, headline, image, content) VALUES 
('$reporter_name', '$headline','$image','$content')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully ";
    header("Location: success_news.php"); // redirecting to the other page
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>