<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_feedback";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
