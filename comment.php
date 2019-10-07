<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 9/6/2019
 * Time: 4:33 PM
 */
?>
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
$visitor = $_POST['visitor'];
$email = $_POST['email'];
$comment = $_POST['comment'];

// Create connection
//$conn = mysqli_connect("localhost", "root", "", "lagos_reporter");

$con = mysqli_connect("localhost", "lagosrep_tobaino", "pass?1><m", "lagosrep_lagos_reporter");

// Check connection
if ($conn === false) {
    die ("Error: could not connect." . mysqli_connect_error());
}


$sql = "INSERT INTO comments(visitor, email, comment) VALUES ('$visitor', '$email','$comment')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully ";
    header("Location: index.php"); // redirecting to the other page
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
