<?php

	include"includes/connection.php";



	if(isset($_POST["login"]))
	{
		$who = $_POST["who"];
		$logid = $_POST["logid"];
		$logpass = $_POST["logpass"];

		if($who=="Admin")
		{
			$select = mysqli_query($conn,"select * from admin where email='".$logid."' and password='".$logpass."'");
			$numrow = mysqli_num_rows($select);

			if($numrow!=0)
			{
				while($row=mysqli_fetch_assoc($select))
			    {
				    $adminemail=$row['email'];
				    $adminpass=$row['password'];
			    }
			    if($logid==$adminemail && $logpass==$adminpass)
			    {
				    session_start();
				    $_SESSION['sess_admin']=$logid ;
				    header("location:admin_profile.php");
			    }
			}
			else
			{
				echo "Invalid user id or password";
			}
		}
		elseif($who=="User")
		{
			$select1 = mysqli_query($conn,"select * from users where userId='".$logid."'");
			$numrow1 = mysqli_num_rows($select1);

			if($numrow1!=0)
			{
				while($row1=mysqli_fetch_assoc($select1))
			    {
				    $useremail=$row1['userId'];
				    
			    }
			    if($logid==$useremail)
			    {
				    session_start();
				    $_SESSION['sess_user']=$logid ;
				    header("location:user_home.php");
			    }
			}
			else
			{
				echo "Invalid user id";
			}
		}
		else
		{
			$select2 = mysqli_query($conn,"select * from agents where agentId='".$logid."'");
			$numrow2 = mysqli_num_rows($select2);

			if($numrow2!=0)
			{
				while($row2=mysqli_fetch_assoc($select2))
			    {
				    $agentemail=$row2['agentId'];
				    
			    }
			    if($logid==$agentemail)
			    {
				    session_start();
				    $_SESSION['sess_agent']=$logid ;
				    header("location:agent_home.php");
			    }
			}
			else
			{
				echo "Invalid user id";
			}
		}
	}



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
	<style>
	#logid,#logpass
		{
			display: none;
		}
	@media (min-width:701px) and (max-width:3800px)
	{
		#bodyDiv > img
		{
		  width:100%;
		  height:670px;
	        }
		
		.indexFormDive
		{
		  width:20%;
		  margin-left:2%;	
		}
		.index
		{
		  width:100%;
		  height:650px;
		  margin-top:-650px;
	          margin-left:-0.0%;
		}
		
	}	
	@media (min-width:100px) and (max-width:990px)
	{
		#bodyDiv > img
		{
		  width:100%;
		  
	        }
		
		.indexFormDive
		{
		  width:96%;
		  margin-left:2%;	
		}
		.index
		{
		  width:100%;
		  height:auto;
		  margin-top:10px;
	          margin-left:0%;
		}
		
	}	
	</style>
</head>
<body>
		
  
<div id="bodyDiv">

<img src="images/indexBG.png">

		<div class="containerBody">
		
		
		
		
			<div class="index">

				


				<div class="indexFormDive">
				  <div class="emailForm">
				  	<center><h4 style="color: red;">LOGIN TO ACCESS YOUR DASHBOARD</h4></center>
					<form action="#" method="post">
						
							<br>
						<div class="form-group col-12">
							<select id="who" name="who" class="form-control" required="">
								<option value="">Select who are you</option>
								<option value="Admin">Admin</option>
								<option value="User">User</option>
								<option value="Agent">Agent</option>
							</select>
						</div>
						
				

						<div class="form-group col-12">
							<input type="text" id="logid" name="logid" class="form-control" placeholder="Enter Login ID">
						</div>

						<div class="form-group col-12">
							<input type="password" id="logpass" name="logpass" class="form-control" placeholder="Enter Login Password">
						</div>

						<div class="form-group col-12">
							<input type="submit" id="login" name="login" value="LOGIN" class="form-control btn btn-primary">
						</div>
					</form>
				</div>
				</div>

				
			</div>
		</div>


</div>


<script src="js/jquery.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>	




<script type="text/javascript">
	$(document).ready(function(){
		$("#who").change(function(){
			var who = $('#who').val();

			//alert('hello');

			if(who == 'Admin')
		     {
		       $("#logid").show();
			   $('#logpass').show();
		     }
		     else
		     {
				$("#logid").show();
			    $('#logpass').hide();
		     }
		});
	});
</script>


</body>
</html>