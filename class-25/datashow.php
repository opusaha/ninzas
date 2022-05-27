<?php include 'includes/header.inc.php';
include 'includes/createconnection.inc.php';

$sql = "SELECT id, headings, content FROM post";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    <div>
      <h1><?php echo $row['headings']; ?></h1>
      <p><?php echo $row['content']; ?></p>
      <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
      <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    </div>
    <!-- echo '<h1>'.$row['headings'].'</h1><p>'.$row['content'].'</p><a href="delete.php">Delete</a><a href="edit.php">Edit</a>'; -->
    <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<a href="logout.php">LogOut</a>
</body>
</html>