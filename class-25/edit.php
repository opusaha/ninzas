<?php
include 'includes/header.inc.php';
include 'includes/createconnection.inc.php';
$id =$_GET['id'];
$sql = "SELECT headings, content FROM post WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     $row["headings"];
     $row["content"];
?>
<form style="width: 400px;" class="m-auto" action="editcheck.php" method="get">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Headings</label>
            <input type="text" name="headings" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="<?php echo $row["headings"] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Details</label>
            <input type="text" name="content" class="form-control" id="exampleInputPassword1" value="<?php echo $row["content"] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Details</label>
            <input type="hidden" name="id" class="form-control" id="exampleInputPassword1" value="<?php echo $id?>">
        </div>
        <button type="submit" class="btn btn-primary">Post</button>
</form>
<?php
  }
}
include 'includes/footer.inc.php';
$conn->close();
?>