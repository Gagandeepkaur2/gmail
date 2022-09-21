<?php
    $connect=mysqli_connect("localhost","root","","gmail") or die("Connection Failed");
session_start();

session_unset();

session_destroy();

header("location: login.php");
?>
