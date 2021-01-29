<?php
$dBServername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "aj tuition centre";

// Create connection
$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

// Check connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
