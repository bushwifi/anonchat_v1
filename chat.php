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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $username = $_POST['username'];
  $message = $_POST['message'];

  // Insert message into database
  $sql = "INSERT INTO messages (username, message, timestamp) VALUES ('$username', '$message', NOW())";
  $conn->query($sql);
}

// Delete messages older than 12 hours
$deleteTime = date('Y-m-d H:i:s', strtotime('-12 hours'));
$deleteQuery = "DELETE FROM messages WHERE timestamp < '$deleteTime'";
$conn->query($deleteQuery);

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>anonymous chat </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      // Function to reload messages every 0.003 seconds
      setInterval(function() {
        $.ajax({
          url: 'get_messages.php', // PHP script to fetch the latest messages
          type: 'GET',
          success: function(response) {
            $('#chat-messages').html(response); // Update the chat messages
            scrollToBottom(); // Scroll to the bottom
          }
        });
      }, 3);

      // Function to scroll to the bottom of the chat messages
      function scrollToBottom() {
        var chatMessages = $('#chat-messages');
        chatMessages.scrollTop(chatMessages[0].scrollHeight);
      }
    });
  </script>
</head>
<body>
  <div class="chat-container">
    <div class="chat-header">
      <h2>anonymous chat </h2>
      <p> RULES
        <br>
        Be respectful and considerate,No spamming or self-promotion,Stay on-topic,Use appropriate language,Respect privacy,Be mindful of others' time
        <br>
        <h2> All text autodelete in 2 hour</h2>
      </p>
    </div>
    <div class="chat-messages" id="chat-messages">
      <!-- Initial messages will be loaded dynamically -->
    </div>
    <div class="chat-input">
      <form action="post_message.php" method="post">
         <input type="text" name="username" placeholder="Username" required>
        <input type="text" name="message" placeholder="Message" required>
        <input type="submit" value="Send">
      </form>
    </div>
  </div>
</body>
</html>
