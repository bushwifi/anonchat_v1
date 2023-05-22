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

// Retrieve messages from the database
$sql = "SELECT * FROM messages ORDER BY timestamp ASC";
$result = $conn->query($sql);

// Format messages
$messages = "";
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $username = $row['username'];
    $message = $row['message'];
    $timestamp = $row['timestamp'];

    $messages .= "<p> <strong>$username:</strong> $message</p>";
  }
} else {
  $messages = "No messages yet.";
}

$conn->close();

// Send formatted messages as response
echo $messages;
?>
