<?php


$dbHost = "localhost";
$dbName = "re_mirzayeva_55404_mid2_travel_agency";
$dbUsername = "root";
$dbPassword = "";


$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
