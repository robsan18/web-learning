<?php
$host = "localhost";
$dbname = "lms_platform";  // your database name
$user = "root";            // XAMPP default
$pass = "";                // XAMPP default password is empty

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>