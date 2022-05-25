<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      h1{
        background-color: aquamarine;
        text-align: center;
      }
      p{
        text-align: center;
      }
      a{
        padding: 10px 20px;
        background-color: red;
        border-radius: 5px;
        color: whitesmoke;
        text-decoration: none;
        text-align: center;
        margin-right: 10px;
      }
    </style>
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

$sql = "SELECT id, headings, content FROM post";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<h1>'.$row['headings'].'</h1><p>'.$row['content'].'</p><a href="delete.php">Delete</a><a href="edit.php">Edit</a>';
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<a href="logout.php">LogOut</a>
</body>
</html>