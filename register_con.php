<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 9/6/2019
 * Time: 6:27 PM
 */
?>
<?php
//Start session
session_start();
?>
<?php
$names = $_POST['names'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$uploads_dir = 'reporter_img/';
$image = $_FILES['image']['name'];
$temp = $_FILES['image']['tmp_name'];


move_uploaded_file($temp, $uploads_dir . basename($image));


// Create connection
$conn = mysqli_connect("localhost", "root", "", "lagos_reporter");
// Check connection
if ($conn === false) {
    die ("Error: could not connect." . mysqli_connect_error());
}


$sql = "INSERT INTO reporters(names, username, password, email, phone, image) VALUES 
('$names', '$username','$password','$email','$phone','$image')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully ";
//    header("Location: success.php"); // redirecting to the other page
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>