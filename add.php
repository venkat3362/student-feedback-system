<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    if (!empty($name) && !empty($email) && !empty($message)) {
        $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('✅ Feedback submitted successfully!'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('❌ Error: " . $conn->error . "'); window.location.href='index.php';</script>";
        }
    } else {
        echo "<script>alert('❌ Please fill all fields!'); window.location.href='index.php';</script>";
    }

    $conn->close();
}
?>
