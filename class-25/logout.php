<?php
session_start();
$_SESSION["login"]="0";
header('Location: http://localhost/practice/login.php');
?>