<?php

    include"connection.php";
	
	$id = $_GET['del'] ;


	$query =mysqli_query($conn,"delete from tktbooking where id='$id'");
	
	if($query)

	{
		echo "<a style='color:green'>Record has been deleted</a>";
		header("location:../tickets.php");
	}
	else{
		echo "<a style='color:red'>Record not deleted</a>";
	}
?>