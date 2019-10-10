<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 10/10/2019
 * Time: 10:19 PM
 */
?>

<?php
$uploads_dir = 'img_advert/';
$image = $_FILES['image']['name'];
$temp = $_FILES['image']['tmp_name'];

$content = $_POST['content'];

$link = $_POST['link'];

move_uploaded_file($temp, $uploads_dir . basename($image));


// Create connection
$conn = mysqli_connect("localhost", "root", "", "lagos_reporter");
//$con = mysqli_connect("localhost", "lagosrep_tobaino", "pass?1><m", "lagosrep_lagos_reporter");

// Check connection
if ($conn === false) {
    die ("Error: could not connect." . mysqli_connect_error());
}


$sql = "INSERT INTO advert(image, content, link) VALUES ('$image', '$content','$link')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully ";
    header("Location: success_news.php"); // redirecting to the other page
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
