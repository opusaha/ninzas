<?php
$headings='';
$content='';
$id ='';


$headings=$_GET['headings'];
$content=$_GET['content'];
$id=$_GET['id'];

include 'includes/createconnection.inc.php';

$sql = "UPDATE post SET headings='$headings', content='$content' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  header('Location: http://localhost/practice/datashow.php');
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>