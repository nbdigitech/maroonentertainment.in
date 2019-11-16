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




include"includes/connection.php";
	
	$id = $_GET['agntView'] ;


	$query =mysqli_query($conn,"select * from agents where a_id='$id'");

					
			     
		
					while($row=mysqli_fetch_array($query))
					{
						$id=$row['a_id'];
						$agentName=$row['agentName'];
						$agentEmail=$row['agentEmail'];
						$agentMobile=$row['agentMobile'];
						$agentBusiness=$row['agentBusiness'];	
						$agentAddress=$row['agentAddress'];
						$agentArea=$row['agentArea'];
						$agentCity=$row['agentCity'];
						$agentId=$row['agentId'];
						$agentStatus=$row['agentStatus'];
						$agentDate=$row['agentDate'];	
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
#agnt
{
	border-radius: 50%;
	float: right;
	background-color: white;
	width:80px;
	height: 80px;
	line-height: 80px;
	text-align:center;
}
.agnti
{

}
#addi
{
	font-size:30px;
	margin-top: 25px;
	color:black; 
}

@media (min-width: 701px) and (max-width: 3800px)
{
	.rdiv1
	{
	
		height: auto;
		width: 100%;
		padding-bottom: 10px;
		padding-top: 10px;
	}
	.rdiv11
	{
		
		height: auto;
		width: 95%;
		margin: auto;
		margin-bottom: 10px;
		margin-top: 10px;
	}
	.rdiv12
	{
		width: 19%;
		height: 30px;
		background-color: white; 
		
		border-radius: 3px;
	}
	.rdiv122
	{
		width: 19%;
		height: 30px;
		background-color: white; 
		
		border-radius: 3px;
	}
	#rdiv1
	{
		width: 5%;
		text-align: center;
		line-height: 32px;
		margin-left: 93px;
	}
	#rdiv2
	{
	    width: 33%;
		margin-left: 142px;
		margin-top: -30px;
		text-align: center;
		line-height: 32px;
	}
	#rdiv3
	{
	    width: 21.5%;
		margin-left: 446px;
		margin-top: -30px;
		text-align: center;
		line-height: 32px;
	}
	#rdiv4
	{
		margin-left: 645px;
		margin-top: -30px;
		text-align: center;
		line-height: 32px;
	}
	#rdiv5
	{
		margin-left: 735px;
		margin-top: -30px;
		text-align: center;
		line-height: 32px;
	}
	#rdiv6
	{
		width: 19%;
		margin-left: 772px;
		margin-top: -30px;
		text-align: center;
		line-height: 32px;
	}


	#rdiv11
	{
		width: 5%;
		height: 50px;
		
		padding-top:10px;
		margin-left: 93px;
		text-align: center;
	}
	#rdiv22
	{
	    width: 33%;
		margin-left: 51px;
		margin-top: -50px;
		height: 50px;
		padding-left:10px;
        padding-top:10px;
        word-break: keep-all;
        margin-left: 142px;
        text-align: center;
	}
	#rdiv33
	{
		
		margin-top: -50px;
		height: 50px;
		width: 21.5%;
		padding-left:10px;
        word-break: keep-all;
        padding-top:10px;
        margin-left: 446px;
        text-align: center;
	}
	#rdiv44
	{
		margin-left: 557px;
		margin-top: -50px;
		height: 50px;
		
		padding-top:10px;
		word-break: keep-all;
		margin-left: 645px;
		text-align: center;
	}
	#rdiv55
	{
		margin-left: 735px;
		margin-top: -50px;
		height: 50px;
	}
	#rdiv66
	{
		width: 19%;
		margin-left: 772px;
		margin-top: -50px;
		height: 50px;
	}
	#ii
	{
	        width:35%;
	        
	        margin-top:-2px;
	       
	}
	 #a1,#a2,#a3,#a4,#a5,#a6,#a7,#a8,#a9,#a10,#a11,#a12,#a13,#a14,#a15,#a16,#a17
	 {
	 	width:98%;
	 	height: 35px;
	 	line-height: 35px;
	 	background-color: white;
	 	margin-bottom: 3px;
	 	padding-left: 5px;
	 }
	#aDetail
	{
		width:60%;
		height: 400px;
		background-color: ;
		margin: auto;
	}	
	
	#aName,#aEmail,#aMobile,#aBusi,#aAdd,#aArea,#aCity,#aLogId,#aStatus,#aDate,#aSubmit
	{
		height: 35px;
		width:78%;
		border:none;
	}
	#aAdd
	{
		height: 49px;
	}
	#aSubmit
	{
		border-radius: 0px;
		margin-top: -5px;
	}
	#aBack
	{
		border-radius: 0px;
		margin-top: -5px;
		height: 35px;
	}	
}






@media (min-width: 100px) and (max-width: 980px)
{
	.rdiv1
	{
		
		height: auto;
		width: 100%;
		padding-bottom: 10px;
		padding-top: 10px;
	}
	.rdiv11
	{
		
		height: auto;
		width: 95%;
		margin: auto;
		margin-bottom: 10px;
		margin-top: 10px;
	}
	.rdiv12
	{
		width: 22%;
		min-height: 70px;
		max-height:auto;
		
		background-color: white; 
		border: none;
		border-radius: 3px;
	}
	.rdiv122
	{
		width: 22%;
		min-height: 50px;
		max-height:auto;
		background-color: white; 
		border: none;
		border-radius: 3px;
	}
	#rdiv1
	{
		width: 10%;
		text-align: center;
		line-height: 50px;
		font-size: 30px;
		margin-left: -3px;
	}
	#rdiv2
	{
		margin-left: 88px;
		margin-top: -50px;
		text-align: center;
		line-height: 50px;
		font-size: 30px;
		width: 42.9%;
	}
	#rdiv3
	{
		margin-left: 455px;
		margin-top: -50px;
		text-align: center;
		line-height: 50px;
		font-size: 30px;
		width:23%;
	}
	#rdiv4
	{
		margin-left: 655px;
		margin-top: -50px;
		text-align: center;
		line-height: 50px;
		font-size: 30px;
	}
	#rdiv5
	{
		margin-left: 293px;
		margin-top: -30px;
		text-align: center;
		line-height: 30px;
		font-size: 10px;
		width:22%;
	}
	#rdiv6
	{
		width: 19%;
		margin-left: 772px;
		margin-top: -30px;
		text-align: center;
		line-height: 32px;
	}


	#rdiv11
	{
		width: 10%;
		font-size: 30px;
		
		text-align: center;
		line-height: -30px;
		margin-left: -3px;
	}
	#rdiv22
	{
		margin-left: 88px;
		margin-top:-70px;
		font-size: 30px;
		word-wrap: break-word;
		padding-left:3px;
		padding-top:10px;
		width:42.9%;
		text-align: center;
	}
	#rdiv33
	{
		margin-left: 455px;
		margin-top:-70px;
		font-size: 30px;
		width:23%;
		word-wrap: break-word; 
		padding-left:3px;
		padding-top:10px;
		text-align: center;
	}
	#rdiv44
	{
		margin-left: 655px;
		font-size: 30px;
		margin-top:-70px;
		
		padding-top:15px;
		text-align: center;
	}
	#rdiv55
	{
		margin-left: 683px;
		font-size: 12px;
		margin-top:-50px;
		width:15%;
	}
	#rdiv66
	{
		width: 19%;
		margin-left: 771px;
		font-size: 10px;
		
	}
	
	#ii
	{
	    width:35%;
	    margin-top:-19px;
	}
}

</style>
	
	
	
</head>
<body>



		



		<div class="containerBody">
			<div class="dsbrd">

				


				<div class="viewAgents">

				  
				  	<center><h4 style="color: red;">FULL DETAIL</h4></center>
				  	
				  	<div class="rdiv1">
				  		<?php $get_ticket = explode(",",$_GET['agntView']); ?>
					       <div id="aDetail">
                              
                              <input type="hidden" name="aid" value="<?php echo $id; ?>" id="aid">
					       	   
						       <div id="a1"><strong>NAME : </strong> <input type="text" value="<?php echo $agentName; ?>" name="aName" id="aName"></div>
						       <div id="a2"><strong>EMAIL : </strong> <input type="text" value="<?php echo $agentEmail; ?>" name="aEmail" id="aEmail"></div>
						       <div id="a3"><strong>MOBILE : </strong> <input type="text" value="<?php echo $agentMobile; ?>" name="aMobile" id="aMobile"></div>
						       <div id="a4"><strong>BUSINESS : </strong> <input type="text" value="<?php echo $agentBusiness; ?>" name="aBusi" id="aBusi"></div>
						       <div id="a5" style="min-height: 50px;max-height:auto;line-height: 15px;"><strong>ADDRESS : </strong> <textarea name="aAdd" id="aAdd"> <?php echo $agentAddress; ?></textarea></div>
						       <div id="a6"><strong>AREA : </strong> <input type="text" value="<?php echo $agentArea; ?>" name="aArea" id="aArea"></div>
						       <div id="a7"><strong>CITY : </strong> <input type="text" value="<?php echo $agentCity; ?>" name="aCity" id="aCity"></div>
						       <div id="a8"><strong>LOGIN ID : </strong> <input type="text" value="<?php echo $agentId; ?>" name="aLogId" id="aLogId" ></div>
					       	   <div id="a9"><strong>STATUS : </strong> <input type="text" value="<?php echo $agentStatus; ?>" name="aStatus" id="aStatus"></div>
					       	   
					       	   <div id="a10"><strong>DATE : </strong> <input type="text" value="<?php echo $agentDate; ?>" name="aDate" id="aDate"></div>
					       	   <div id="a11"><center><input type="submit" class="btn btn-primary" value="UPDATE" name="aSubmit" id="aSubmit"><a href="agents.php" class="btn btn-danger" id="aBack">BACK</a></center></div>
					       </div> 

					       
			         </div>
					 
				</div>
				<style type="text/css">
					.res
					{
						margin-top: 35px;
						
						font-size:25px; 
					}
				</style>
				<center><div id="result" class="res"></div></center>
			
                       
				      
			
			</div>

		</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>	

<script src="js/jquery.js"></script>



<script>
		$(document).ready(function()
		{
			$("#aSubmit").click(function()
			{
                var aid = $("#aid").val();
                var aName = $("#aName").val();
                var aEmail = $("#aEmail").val();
                var aMobile = $("#aMobile").val();
                var aBusi = $("#aBusi").val();
                var aAdd = $("#aAdd").val();
                var aArea = $("#aArea").val();
                var aCity = $("#aCity").val();
                var aLogId = $("#aLogId").val();
                var aStatus = $("#aStatus").val();
                var aDate = $("#aDate").val();
			/*	$.post("insert.php",{name:uname,email:uemail,pass:upass},function(data)
					{
						$("$result").html(data);
					});*/


					$.ajax(
					{
					
						url:'includes/update_agent.php',
						data:{'aid':aid,'aName':aName,'aEmail':aEmail,'aMobile':aMobile,'aBusi':aBusi,'aAdd':aAdd,'aArea':aArea,'aCity':aCity,'aLogId':aLogId,'aStatus':aStatus,'aDate':aDate},
						type:'POST',
						async:true,
                        cache:false,
						
						success:function(data)
						{
						   
							$("#result").html(data);
						}
					});
			});
		});


	</script>	
</body>
</html>