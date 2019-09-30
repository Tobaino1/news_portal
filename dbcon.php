<?php
//$con = mysqli_connect("localhost","root","","lagos_reporter");

$con = mysqli_connect("localhost", "unlimit7_tobaino", "pass?1><m", "unlimit7_lagos_reporter");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
?>