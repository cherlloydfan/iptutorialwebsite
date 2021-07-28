<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorialwebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM users WHERE id=1";

if ($conn->query($sql) === TRUE) {
  echo "Account deleted successfully";
} else {
  echo "Error deleting account: " . $conn->error;
}

$conn->close();
?>