<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "kish";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$message = $_POST['message'];

// Insert message into database
$sql = "INSERT INTO messages (username, message, timestamp) VALUES ('$username', '$message', NOW())";
$conn->query($sql);

$conn->close();

// Redirect back to the chat page
header("Location: chat.php");
exit();
?>
