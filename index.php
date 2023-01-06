<?php
$servername = "mysql-103545-0.cloudclusters.net";
$username = "admin";
$password = "4SxvMe3n";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



?>
