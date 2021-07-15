<?php
session_start();
$user=$_SESSION['username'];
session_destroy();
header('Location:index.php');
?>