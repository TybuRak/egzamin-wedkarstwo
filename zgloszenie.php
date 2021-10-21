<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db = "wedkarstwo";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$lowisko = $_GET["lowisko"];
$date = $_GET["date"];
$sedzia = $_GET["sedzia"];

$sql = "INSERT INTO `zawody_wedkarskie` (`karty_wedkarskie_id`, `lowisko_id`, `data_zawodow`, `sedzia`) VALUES ('0',$lowisko,$date,$sedzia)";
$result = $conn->query($sql);

$conn -> close();