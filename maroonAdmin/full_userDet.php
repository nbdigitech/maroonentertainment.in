<?php

include"includes/connection.php";

	$id = $_GET['userView'] ;


	$query =mysqli_query($conn,"select * from users where u_id='$id'");




					while($row=mysqli_fetch_array($query))
					{
						$id=$row['u_id'];
						$userName=$row['userName'];
						$userEmail=$row['userEmail'];
						$userMobile=$row['userMobile'];
						$userBusiness=$row['userBusiness'];
						$userAddress=$row['userAddress'];
						$userArea=$row['userArea'];
						$userCity=$row['userCity'];
						$userId=$row['userId'];
						$userStatus=$row['userStatus'];
						$userDate=$row['userDate'];
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

	#uName,#uEmail,#uMobile,#uBusi,#uAdd,#uArea,#uCity,#uLogId,#uStatus,#uDate,#uSubmit
	{
		height: 35px;
		width:78%;
		border:none;
	}
	#uAdd
	{
		height: 49px;
	}
	#uSubmit
	{
		border-radius: 0px;
		margin-top: -5px;
	}
	#uBack
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
	#aDetail
	{
		width:90%;
		height: 400px;
		background-color: ;
		margin: auto;
	}

	#a1,#a2,#a3,#a4,#a5,#a6,#a7,#a8,#a9,#a10,#a11,#a12,#a13,#a14,#a15,#a16,#a17
	 {
	 	width:98%;
	 	height: 105px;
	 	line-height: 35px;
	 	background-color: white;
	 	margin-bottom: 3px;
	 	padding-left: 5px;
	 }
	 #uName,#uEmail,#uMobile,#uBusi,#uAdd,#uArea,#uCity,#uLogId,#uStatus,#uDate,#uSubmit
	{
		height: 105px;
		width:75%;
		border:none;
		font-size:35px;
	}
	#uAdd
	{
		height: 135px;
		padding-top:30px;
	}
	#a5
	{
		height: 135px;
		
	}
	#uSubmit
	{
		border-radius: 0px;
		margin-top: 0px;
	}
	#uBack
	{
		border-radius: 0px;
		margin-top: 1px;
		height: 105px;
		line-height: 105px;
		font-size:35px;
	}
	#str
	{
		font-size:35px;	
	}
	.dsbrd
	{
	  height:1310px;
	  }
	
}

</style>



</head>
<body>
		<div id="hideMenu"><?php include('includes/header.php');?></div>
		<div> <?php include('includes/mob_header.php');?></div>





		<div class="containerBody">
			<div class="dsbrd">




				<div class="viewAgents">


				  	<center><h4 style="color: red;">FULL DETAIL</h4></center>

				  	<div class="rdiv1">
				  		<?php $get_user = explode(",",$_GET['userView']); ?>
					       <div id="aDetail">

                              <input type="hidden" name="uid" value="<?php echo $get_user[0]; ?>" id="uid">

						       <div id="a1"><strong id="str">NAME : </strong> <input type="text" value="<?php echo $get_user[1]; ?>" name="uName" id="uName"></div>
						       <div id="a2"><strong id="str">EMAIL : </strong> <input type="text" value="<?php echo $get_user[2]; ?>" name="uEmail" id="uEmail"></div>
						       <div id="a3"><strong id="str">MOBILE : </strong> <input type="text" value="<?php echo $get_user[3]; ?>" name="uMobile" id="uMobile"></div>
						       <div id="a4"><strong id="str">BUSINESS : </strong> <input type="text" value="<?php echo $get_user[4]; ?>" name="uBusi" id="uBusi"></div>
						       <div id="a5" style="min-height: 50px;max-height:auto;line-height: 15px;"><strong id="str">ADDRESS : </strong> <textarea name="uAdd" id="uAdd"> <?php echo $get_user[5]; ?></textarea></div>
						       <div id="a6"><strong id="str">AREA : </strong> <input type="text" value="<?php echo $get_user[6]; ?>" name="uArea" id="uArea"></div>
						       <div id="a7"><strong id="str">CITY : </strong> <input type="text" value="<?php echo $get_user[7]; ?>" name="uCity" id="uCity"></div>
						       <div id="a8"><strong id="str">LOGIN ID : </strong> <input type="text" value="<?php echo $get_user[8]; ?>" name="uLogId" id="uLogId" ></div>
					       	   <div id="a9"><strong id="str">STATUS : </strong> <input type="text" value="<?php echo $get_user[9]; ?>" name="uStatus" id="uStatus"></div>

					       	   <div id="a10"><strong id="str">DATE : </strong> <input type="text" value="<?php echo $get_user[10]; ?>" name="uDate" id="uDate"></div>
					       	   <div id="a11"><center><input type="submit" class="btn btn-primary" value="UPDATE" name="uSubmit" id="uSubmit"><a href="users.php" class="btn btn-danger" id="uBack">BACK</a></center></div>
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
			$("#uSubmit").click(function()
			{
                var uid = $("#uid").val();
                var uName = $("#uName").val();
                var uEmail = $("#uEmail").val();
                var uMobile = $("#uMobile").val();
                var uBusi = $("#uBusi").val();
                var uAdd = $("#uAdd").val();
                var uArea = $("#uArea").val();
                var uCity = $("#uCity").val();
                var uLogId = $("#uLogId").val();
                var uStatus = $("#uStatus").val();
                var uDate = $("#uDate").val();
			/*	$.post("insert.php",{name:uname,email:uemail,pass:upass},function(data)
					{
						$("$result").html(data);
					});*/


					$.ajax(
					{

						url:'includes/update_user.php',
						data:{'uid':uid,'uName':uName,'uEmail':uEmail,'uMobile':uMobile,'uBusi':uBusi,'uAdd':uAdd,'uArea':uArea,'uCity':uCity,'uLogId':uLogId,'uStatus':uStatus,'uDate':uDate},
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
