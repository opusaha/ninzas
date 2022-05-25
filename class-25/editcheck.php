<?php
$headings='';
$content='';

$headings=$_GET['headings'];
$content=$_GET['content'];

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

$sql = "UPDATE post SET headings='$headings', content='$content' WHERE id=16";

if ($conn->query($sql) === TRUE) {
  header('Location: http://localhost/practice/datashow.php');
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>