<?php
$headings='';
$content='';

$headings=$_GET['headings'];
$content=$_GET['content'];

?>
<?php include 'includes/createconnection.inc.php'?>
<?php
$sql = "INSERT INTO post (headings, content)
VALUES ('$headings', '$content')";

if ($conn->query($sql) === TRUE) {
  // $last_id = $conn->insert_id;
  header('Location: http://localhost/practice/datashow.php');
} else {
    header('Location: http://localhost/practice/home.php');
}
$conn->close();

?>