<?php

    include"connection.php";
	
	$id = $_GET['aid'] ;


	$query =mysqli_query($conn,"delete from agents where a_id='$id'");
	
	if($query)

	{
		echo "<a style='color:green'>Record has been deleted</a>";
		header("location:../agents.php");
	}
	else{
		echo "<a style='color:red'>Record not deleted</a>";
	}
?>