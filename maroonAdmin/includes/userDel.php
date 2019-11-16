<?php

    include"connection.php";
	
	$id = $_GET['uid'] ;


	$query =mysqli_query($conn,"delete from users where u_id='$id'");
	
	if($query)

	{
		echo "<a style='color:green'>Record has been deleted</a>";
		header("location:../users.php");
	}
	else{
		echo "<a style='color:red'>Record not deleted</a>";
	}
?>