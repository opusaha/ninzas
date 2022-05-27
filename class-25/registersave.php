<?php
$name='';
$email='';
$password='';

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
?>
<?php include 'includes/createconnection.inc.php'?>
<?php
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