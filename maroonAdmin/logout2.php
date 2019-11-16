<?php
include"includes/connection.php";

session_start();
unset($_SESSION['sess_agent']);
session_destroy();
header("location:index.php");

?>