<?php
$servername = "localhost";
$username = "root";
$pin = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $pin, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM post WHERE id=13";

if ($conn->query($sql) === TRUE) {
  header('Location: http://localhost/practice/datashow.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>