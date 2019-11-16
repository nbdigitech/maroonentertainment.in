<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();



$del_id=$_GET['del'];
$query =mysqli_query($conn,"delete from tktbooking where id='$del_id'");

if($query)
{
	echo "<script>alert('Record has been deleted')</script>";
	echo "<script> window.location.href = 'view_tktbookin_info.php';</script>";
}

?>