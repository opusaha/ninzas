<?php
session_start();
if (isset($_SESSION["login"]) && $_SESSION["login"] == 1) {
    header('Location: http://localhost/practice/home.php');
}
?>
<?php
include 'includes/header.inc.php'
?>
    <form style="width: 400px;" class="m-auto" action="logincheck.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="We'll never share your email with anyone else.">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <div style="text-align: center;">
        <h1>If you are new then <a href="register.php">Register</a> first</h1>
    </div>
    <?php
include 'includes/footer.inc.php.inc.php'
?>