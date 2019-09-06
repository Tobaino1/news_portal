<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 3/1/2019
 * Time: 3:25 AM
 */
?>

<?php
session_start();
// Destroying All Sessions
if(session_destroy())
{
// Redirecting To Home Page
    header("Location: index.php");
}
?>
