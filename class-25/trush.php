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
$sql = "SELECT id FROM post";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"];
    $sql = 'aDELETE FROM post WHERE id= {$row["id"]}';
  }
} else {
  echo "0 results";
}
// sql to delete a record


if ($conn->query($sql) === TRUE) {
  header('Location: http://localhost/practice/datashow.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>