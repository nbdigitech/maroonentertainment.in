<?php
include"includes/connection.php";

session_start();
unset($_SESSION['sess_admin']);
session_destroy();
header("location:index.php");

?>