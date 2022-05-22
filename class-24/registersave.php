<?php
$name='';
$email='';
$password='';

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


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

$sql = "INSERT INTO user (name, email, password)
VALUES ('$name', '$email', '$password')";
if ($conn->query($sql) === TRUE) {
    $lastId = $conn->insert_id;
    header('Location: http://localhost/practice/home.php');
  } else {
    header('Location: http://localhost/practice/register.php');
  }
$conn->close();


?>