<?php
include"includes/connection.php";

session_start();
if(!isset($_SESSION['sess_admin']))
{
	header("location:index.php");
}

else
{

?>






<!DOCTYPE html>
<html>
<head>
	<title>Maroon Entertainment</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/admin_profile.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/fonts/css/font-awesome.min.css">

	<!-- Bootstrap link of CSS and JS-->
	
</head>
<body>
		<div id="hideMenu"><?php include('includes/header.php');?></div>
		<div> <?php include('includes/mob_header.php');?></div>
  



		<div class="containerBody">
			<div class="dsbrd">

				


				<div class="dsbrdEmail">
				  <div class="emailForm">
				  	<center><h4 style="color: red;">UPDATE YOU'R EMAIL ID</h4></center>
					<form action="#" method="post">
						<div class="form-group col-12">
							<input type="text" name="name" value="" class="form-control">
						</div>

						<div class="form-group col-12">
							<input type="text" name="email" value="" class="form-control">
						</div>

						<div class="form-group col-12">
							<input type="submit" name="submitemail" value="UPDATE EMAIL" class="form-control btn btn-primary">
						</div>
					</form>
				</div>
				</div>

				<div class="dsbrdPass">
					<div class="emailForm">
				  	<center><h4 style="color: red;">UPDATE YOU'R PASSWORD</h4></center>
					<form action="#" method="post">
						<div class="form-group col-12">
							<input type="text" name="name" value="" class="form-control">
						</div>

						<div class="form-group col-12">
							<input type="text" name="email" value="" class="form-control">
						</div>

						<div class="form-group col-12">
							<input type="submit" name="submitemail" value="UPDATE PASSWORD" class="form-control btn btn-primary">
						</div>
					</form>
				</div>
				</div>
			</div>
		</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>		
</body>
</html>

<?php } ?>