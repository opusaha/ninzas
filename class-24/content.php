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

$sql = "INSERT INTO post (headings, content)
VALUES ('$headings', '$content')";

if ($conn->query($sql) === TRUE) {
  header('Location: http://localhost/practice/datashow.php');
} else {
    header('Location: http://localhost/practice/home.php');
}
$conn->close();

?>