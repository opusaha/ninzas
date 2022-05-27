<?php
include 'includes/header.inc.php'
?>
    <div>
        <?php
        session_start();
        if (isset($_SESSION["login"]) && $_SESSION["login"] == 0) {
        ?>
        <a href="login.php">Login</a>
        <?php
        }
        ?>
        <a href="register.php">Register</a>
        <?php
        if (isset($_SESSION["login"]) && $_SESSION["login"] == 1) {
        ?>
        <a href="logout.php">Logout</a>
        <?php
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>