<!DOCTYPE html>
<html>
<head>
	<title>Maroon Entertainment</title>
<!-- Style Sheet link of CSS and JS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">





	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/admin_profile.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="css/agent.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/fonts/css/font-awesome.min.css">

<!-- Bootstrap link of CSS and JS-->

<style>

</style>

</head>
<body>
		<div id="hideMenu"><?php include('includes/header.php');?></div>


			<div> <?php include('includes/mob_header.php');?></div>






		<div class="containerBody">




			<div class="dsbrd">


				<div class="agent">
					<center><h4 style="color: red;">ADD USER</h4></center>
				 <div class="agentForm">

						    <!--<div class="inptFeild">
						  		<div class="col-12">
						  			<label for="agentPic" class="form-control inptlbl"><i class="fa fa-picture-o" aria-hidden="true"></i> &nbsp;Upload agent profile pic</label>
						  			<input type="file" class="form-control" name="agentPic" id="agentPic">
						  		</div>
						  	</div>-->

						  	<div class="inptFeild">
						  		<div class="col-12">
						  			<input type="text" class="form-control fontS" name="userName" id="userName" placeholder="Enter user name here...">
						  		</div>
						  	</div>

						  	<div class="inptFeild">
						  		<div class="col-12">
						  			<input type="text" class="form-control fontS" name="userEmail" id="userEmail" placeholder="Enter user email here...">
						  		</div>
						  	</div>

						  	<div class="inptFeild">
						  		<div class="col-12">
						  			<input type="text" class="form-control fontS" name="userMobile" id="userMobile" placeholder="Enter user mobile here...">
						  		</div>
						  	</div>

						  	<div class="inptFeild">
						  		<div class="col-12">
						  			<input type="text" class="form-control fontS" name="userBusiness" id="userBusiness" placeholder="Enter user business here...">
						  		</div>
						  	</div>

						  	<div class="inptFeild">
						  		<div class="col-12">
						  			<textarea class="form-control fontST" name="userAddress" id="userAddress" placeholder="Enter user address here..."></textarea>
						  		</div>
						  	</div>

						  	<div class="inptFeild">
						  		<div class="col-12">
						  			<input type="text" class="form-control fontS" name="userArea" id="userArea" placeholder="Enter user area here...">
						  		</div>
						  	</div>

						  	<div class="inptFeild">
						  		<div class="col-12">
						  			<input type="text" class="form-control fontS" name="userCity" id="userCity" placeholder="Enter user city here...">
						  		</div>
						  	</div>

						  	<div class="inptFeild">
						  		<div class="col-12">
						  			<input type="submit" class="form-control btn btn-primary fontS" name="submit" id="usersave">
						  		</div>
						  	</div><br>
						  	 <center><div id="result" style="color:green"></div></center>

				</div>
				</div>


			</div>
		</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<script src="js/jquery.js"></script>



<script>
		$(document).ready(function()
		{
			$("#usersave").click(function()
			{
                var userName = $("#userName").val();
                var userEmail = $("#userEmail").val();
                var userMobile = $("#userMobile").val();
                var userBusiness = $("#userBusiness").val();
                var userAddress = $("#userAddress").val();
                var userArea = $("#userArea").val();
                var userCity = $("#userCity").val();
			/*	$.post("insert.php",{name:uname,email:uemail,pass:upass},function(data)
					{
						$("$result").html(data);
					});*/


					$.ajax(
					{

						url:'includes/insert_user.php',
						data:{'userName':userName,'userEmail':userEmail,'userMobile':userMobile,'userBusiness':userBusiness,'userAddress':userAddress,'userArea':userArea,'userCity':userCity},
						type:'POST',
						async:true,
                        cache:false,

						success:function(data)
						{
						    var userName = $("#userName").val("");
			                var userEmail = $("#userEmail").val("");
			                var userMobile = $("#userMobile").val("");
			                var userBusiness = $("#userBusiness").val("");
			                var userAddress = $("#userAddress").val("");
			                var userArea = $("#userArea").val("");
			                var userCity = $("#userCity").val("");

							$("#result").html(data);
						}
					});
			});
		});


	</script>



</body>
</html>
