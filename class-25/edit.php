<?php
include 'includes/header.inc.php'
?>
<form style="width: 400px;" class="m-auto" action="editcheck.php" method="get">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Headings</label>
            <input type="text" name="headings" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Details</label>
            <input type="text" name="content" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Post</button>
</form>
<?php
include 'includes/footer.inc.php'
?>