<?php
$email='';
$password='';

$email=$_POST['email'];
$password=$_POST['password'];
?>
<?php include 'includes/createconnection.inc.php'?>
<?php
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
?>