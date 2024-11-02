<?php
$servername = "localhost";
$username = "outdoorlivingco_teldio";
$password = "B,DQ1*A~8~AB";
$dbname = "outdoorlivingco_fineliving";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>