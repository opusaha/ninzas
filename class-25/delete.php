<?php include 'includes/createconnection.inc.php';
$id =$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM post WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
  header('Location: http://localhost/practice/datashow.php');
} else {
  echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>