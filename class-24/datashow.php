<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

$sql = "SELECT headings, content FROM post";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<div><h1></h1><p></p>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<h1>".$row["headings"]."</h1><p>".$row["content"]."</p>";
  }
  echo "</div>";
} else {
  echo "0 results";
}
$conn->close();
?>

<a href="logout.php">Logout</a>
</body>
</html>