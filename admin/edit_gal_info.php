<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();



//code for add users



$edit_id=$_GET['edit'];

$split = explode(",",$edit_id);

echo "$split[0]";
echo "$split[1]";
echo "$split[2]";
echo "$split[3]";
echo "$split[4]";
/*
$query =mysqli_query($mysqli,"select * from users where u_id='$edit_id'");

	
		
	while($row=mysqli_fetch_array($query))
	{
		$id=$row['u_id'];
		$id_proof=$row['u_profile'];				
		$name=$row['u_name'];
		$email=$row['u_email'];
		$password=$row['u_password'];
		$super_id=$row['login_id'];
		$type=$row['u_type'];
		$mobile=$row['u_mobile'];
		$status=$row['u_status'];
		$date=$row['date'];
		
	}	*/				
					
?>

<br><br>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Fortune</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>





<style>

input[type='file']{

	}
	#ipt1
	{
		background-color: ;

	}

	#ipt2
	{
		background-color: #BBD4F1;
		border:none;
		border-radius: 3px;
	}

	input
		{
			width: 100%;
			height: 40px;
			padding-left: 10px;
	}
</style>
</head>
<body style="background-color:#ecf0f5">
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
<div class="container-fluid">

<div class="row">
<div class="col-md-12">
					

	
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading" style="font-size: 20px;">Edit User Profile</div>

<div class="panel-body">


<form method="post" class="form-horizontal" enctype="multipart/form-data" action="edit_gal_info.php?edit_form=<?php echo $split[0]; ?>">
	

	<div class="form-group col-md-12"><a href="view_gallery_info.php" class="btn btn-danger"> Cancel </a>
		
		<div class="">
			
	

<div class="form-group">
		<!--<label class="col-sm-2 control-label">Mobile</label>-->
	<div class="col-sm-8 col-sm-offset-2">
		
		<center><img src="galimage/<?php echo "$split[1]"; ?>" width=150px; height=150px;> </center>
	</div>
</div>
<div class="form-group">
		<!--<label class="col-sm-2 control-label">Mobile</label>-->
	<div class="col-sm-8 col-sm-offset-2">
		<label class="control-label">Chhole Gallery Image</label>
		<input type="file" name="file1">
	</div>
</div>
<div class="form-group">
		<!--<label class="col-sm-2 control-label">Mobile</label>-->
	<div class="col-sm-8 col-sm-offset-2">
		<label class="control-label">TITLE</label>
		<input type="text" name="title1" value="<?php echo $split[2]; ?>" id="ipt2">
	</div>
</div>
<div class="form-group">
		<!--<label class="col-sm-2 control-label">Mobile</label>-->
	<div class="col-sm-8 col-sm-offset-2">
		<label class="control-label">CATEGORY:</label>
	 <input type="text" name="category1" value="<?php echo $split[3]; ?>" id="ipt2">
	</div>
</div>
<div class="form-group">
		<!--<label class="col-sm-2 control-label">Mobile</label>-->
	<div class="col-sm-8 col-sm-offset-2">
		<label  class="control-label">DATE:</label>
	    <input type="text" name="date1" value="<?php echo $split[4]; ?>" id="ipt2">
	</div>
</div>
<div class="form-group">
		<!--<label class="col-sm-2 control-label">Mobile</label>-->
	<div class="col-sm-8 col-sm-offset-2">
		<input type="submit" name="update" value="UPDATE" class="btn-primary" style="line-height: -90px; border-radius: 3px;">
	</div>
</div>
<div class="form-group">
		<!--<label class="col-sm-2 control-label">Mobile</label>-->
	<div class="col-sm-8 col-sm-offset-2">
		<a href="view_gallery_info.php" class="btn btn-danger"> Cancel </a>
	</div>
</div>
		
</div>



</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div> 	
</div>
</div>






	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</script>
</body>

</html>

<?php

if(isset($_POST["update"]))
{
	$edit_record1 = $_GET['edit_form'];

	$edit_profilepic=$_FILES['file1']['name'];
	$type1f=$_FILES['file1']['type'];
	$size=$_FILES['file1']['size'];
	$tmp=$_FILES['file1']['tmp_name'];

	//$move = "/Users/mani.com/Desktop/uploads/";
		
	$title1 = $_POST['title1'];
	$category1 = $_POST['category1'];
	$date1 = $_POST['date1'];
	
	
					
		
		
if($edit_profilepic=="")
{
	$query1 = mysqli_query($mysqli,"update gallery_info set title='$title1', category='$category1', date='$date1'  where id='$edit_record1'");
	if($query1)
	{
		
	
		echo "<script> window.location.href = 'view_gallery_info.php';</script>";
	}
}
else
{
	$query2 = mysqli_query($mysqli,"update gallery_info set gal_image='$edit_profilepic',title='$title1', category='$category1', date='$date1'  where id='$edit_record1'");
	if($query2)
	{
		$path = 'img/'.$edit_profilepic;
		move_uploaded_file($tmp,$path);
	
		echo "<script> window.location.href = 'view_gallery_info.php';</script>";
	}
}		
		
			
}
?>