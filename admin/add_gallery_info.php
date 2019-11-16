<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add users

if(isset($_POST["submit"]))
{
	

	$name = $_FILES['file']['name'];
	$type = $_FILES['file']['type'];
	$size = $_FILES['file']['size'];
	$tmp = $_FILES['file']['tmp_name'];

	//$move = "/Users/mani.com/Desktop/uploads/";
		
	$title = $_POST['title'];
	$category = $_POST['category'];
	
	/*$role = mysqli_real_escape_string($mysqli,implode(",", $_POST['userRoles']));*/
	
	
		if($name=="")
	    {
		   echo "<script> alert('Plaes select a file')</script>";
		   echo "<script> window.location.href = 'add_gallery_info.php';</script>";
		   exit();
		}

		else
		{
			if($size <= 60000)
		   {

		       $query=mysqli_query($mysqli,"select * from gallery_info where title='".$title."'");
		       $numrow=mysqli_num_rows($query);		
		
		       if ($numrow==0) 
		       {
			     
                 
                  $sql="insert into gallery_info(gal_image,title,category,date) values('$name','$title','$category',NOW())";	
			      $result=mysqli_query($mysqli,"$sql");
					
					if($result)
					{
					   echo "<script>alert('Information is Successfully added!')</script>";
					   $path = 'galimage/'.$name;
			                   move_uploaded_file($tmp,$path);
					}
					else
					{
					   echo "<script>alert('Please try again')</script>";
					   exit();
					}

		       }
			   else
			   {
				   echo "<script>alert('This title is already exist! Try another one.')</script>";
			   }   
			
		   }
		   else
		   {
		   		 echo "<script>alert('Size is not valid! Try max size 6mb.')</script>";
		   }

		}
			
}
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
	<title>Maroon Entertainment</title>
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
<div class="" style="font-size: 20px; height: 40px; background-color: #325D88; line-height: 40px; color: white;" > &nbsp;&nbsp;&nbsp;Add Gallery Deatils</div>

<div class="panel-body">


<form method="post" class="form-horizontal" enctype="multipart/form-data">
	<div class="hr-dashed"></div>
	 <div class="form-group">
		
		
		<div class="col-sm-8 col-sm-offset-2">
		<label for="fileIMG" class="form-control"><i class="fa fa-picture-o" aria-hidden="true"></i> Choose Gallery Image </label>	
		 
		 <input type="file" name="file" id="fileIMG" style="display: none;">	
        </div>
     </div>

	<div class="form-group">
		<!--<label class="col-sm-2 control-label">Name</label><br>-->
		<div class="col-sm-8 col-sm-offset-2">
		<label class="control-label">Title</label>
		<input type="text" class="form-control" name="title" id="title" value="" required="required" placeholder="Enter title here">
		</div>
	</div>


	<div class="form-group">
		<!--<label class="col-sm-2 control-label">Mobile</label>-->
		<div class="col-sm-8 col-sm-offset-2">
		<label class="control-label">Category</label>
			<select class="form-control" name="category" id="category" value="" required="required">
				
				<option>Select Category</option>
				<option>Education</option>
				<option>Environment</option>
				<option>Building Homes</option>
				<option>Donating Clothes</option>
				<option>Food</option>
				<option>Others</option>
				
			</select>

		</div>
	</div>


    <div class="col-sm-8 col-sm-offset-5">
       <input class="btn btn-primary" type="submit" name="submit" value="ADD" style="font-size: 20px;">
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