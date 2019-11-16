<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');

$del_id=$_GET['del'];
$query =mysqli_query($mysqli,"delete  from gallery_info where id='$del_id'");

if($query)
{
	echo "<script>alert('Record has been deleted')</script>";
	echo "<script> window.location.href = 'view_gallery_info.php';</script>";
}

?>