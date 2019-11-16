<?php
session_start();

if(isset($_SESSION['sess_admin'])){
include "includes/header.php";
include"includes/mob_header.php";
}
elseif(isset($_SESSION['sess_user'])){
include "includes/header1.php";

include"includes/mob_header1.php";
echo "<style> #agnDel{display:none}</style>";
}
else{
include"includes/heade2.php";

include"includes/mob_header2.php";
echo "<style> #agnDel{display:none}</style>";
}

?>

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

            

	


		<div class="containerBody">
		    
		   
		    
		    
			<div class="dsbrd">


				<div class="agent">
					<center><h4 style="color: red;">ADD AGENT</h4></center>
				 <div class="agentForm">
				  	
						    <!--<div class="inptFeild"> 
						  		<div class="col-12">
						  			<label for="agentPic" class="form-control inptlbl"><i class="fa fa-picture-o" aria-hidden="true"></i> &nbsp;Upload agent profile pic</label>
						  			<input type="file" class="form-control" name="agentPic" id="agentPic">
						  		</div> 
						  	</div>-->

						  	<div class="inptFeild"> 
						  		<div class="col-12">
						  			<input type="text" class="form-control fontS" name="agentName" id="agentName" placeholder="Enter agent name here...">
						  		</div> 
						  	</div>

						  	<div class="inptFeild"> 
						  		<div class="col-12">
						  			<input type="text" class="form-control fontS" name="agentEmail" id="agentEmail" placeholder="Enter agent email here...">
						  		</div> 
						  	</div>

						  	<div class="inptFeild"> 
						  		<div class="col-12">
						  			<input type="text" class="form-control fontS" name="agentMobile" id="agentMobile" placeholder="Enter agent mobile here...">
						  		</div> 
						  	</div>
						  	
						  	<div class="inptFeild"> 
						  		<div class="col-12">
						  			<input type="text" class="form-control fontS" name="agentBusiness" id="agentBusiness" placeholder="Enter agent business here...">
						  		</div> 
						  	</div>

						  	<div class="inptFeild"> 
						  		<div class="col-12">
						  			<textarea class="form-control fontST" name="agentAddress" id="agentAddress" placeholder="Enter agent address here..."></textarea>
						  		</div> 
						  	</div>

						  	<div class="inptFeild"> 
						  		<div class="col-12">
						  			<input type="text" class="form-control fontS" name="agentArea" id="agentArea" placeholder="Enter agent area here...">
						  		</div> 
						  	</div>

						  	<div class="inptFeild"> 
						  		<div class="col-12">
						  			<input type="text" class="form-control fontS" name="agentCity" id="agentCity" placeholder="Enter agent city here...">
						  		</div> 
						  	</div>

						  	<div class="inptFeild"> 
						  		<div class="col-12">
						  			<input type="submit" class="form-control btn btn-primary fontS" name="submit" id="save">
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
			$("#save").click(function()
			{
                var agentName = $("#agentName").val();
                var agentEmail = $("#agentEmail").val();
                var agentMobile = $("#agentMobile").val();
                var agentBusiness = $("#agentBusiness").val();
                var agentAddress = $("#agentAddress").val();
                var agentArea = $("#agentArea").val();
                var agentCity = $("#agentCity").val();
			/*	$.post("insert.php",{name:uname,email:uemail,pass:upass},function(data)
					{
						$("$result").html(data);
					});*/


					$.ajax(
					{
					
						url:'includes/insert_agent.php',
						data:{'agentName':agentName,'agentEmail':agentEmail,'agentMobile':agentMobile,'agentBusiness':agentBusiness,'agentAddress':agentAddress,'agentArea':agentArea,'agentCity':agentCity},
						type:'POST',
						async:true,
                        cache:false,
						
						success:function(data)
						{
						    var agentName = $("#agentName").val("");
                            var agentEmail = $("#agentEmail").val("");
                            var agentMobile = $("#agentMobile").val("");
                            var agentBusiness = $("#agentBusiness").val("");
                            var agentAddress = $("#agentAddress").val("");
                            var agentArea = $("#agentArea").val("");
                            var agentCity = $("#agentCity").val("");
                            
							$("#result").html(data);
						}
					});
			});
		});


	</script>



</body>
</html>