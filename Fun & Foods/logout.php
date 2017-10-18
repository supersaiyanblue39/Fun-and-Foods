<?php
session_start();
unset($_SESSION["Email"]);
unset($_SESSION["Password"]);
session_destroy();
header("location:login.php");
echo "you have been logged out";
?>