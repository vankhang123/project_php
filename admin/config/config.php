

<?php
// Create connection
$mysqli = new mysqli("localhost", "root", "", "web_device");


// Check connection



if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>

