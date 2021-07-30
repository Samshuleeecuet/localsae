<?php
session_start();
session_unset();
// unset($_SESSION['id']); 
session_destroy();
header("location:index.php");
?>

