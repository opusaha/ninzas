<?php
include 'includes/header.inc.php'
?>
    <form style="width: 400px;" class="m-auto" action="content.php" method="get">
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

    <a href="logout.php"><button type="button" class="btn btn-info">Logout</button></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>