<?php
$email='';
$password='';

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

$sql = "SELECT id FROM user where email ='$email' && password ='$password'";
$result = $conn->query($sql);
session_start();
if ($result->num_rows == 1) {
  $_SESSION["login"]="1";
  header('Location: http://localhost/practice/home.php');
} else {
    $_SESSION["login"]="0";
    header('Location: http://localhost/practice/login.php');
}
$conn->close();
