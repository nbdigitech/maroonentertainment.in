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
include"includes/header2.php";

include"includes/mob_header2.php";
echo "<style> #agnDel{display:none}</style>";
}

include'includes/connection.php';

	$id = $_GET['edit'];

	$query = mysqli_query($conn,"SELECT * FROM tktbooking WHERE id='$id'");

    $result = mysqli_num_rows($query);

       $i = 1;
       while ($row = mysqli_fetch_assoc($query)) 
       {
	   
			   $id=$row['id'];
			   $tickets=explode(",",$row['tickets']);
			   $purpose=$row['purpose'];
			   $name=$row['name'];
			   $ticket_holders=explode(",",$row['ticket_holders']);	
			   $email=$row['email'];
			   $mobile=$row['mobile'];
			   $price=$row['price'];
			   $quantity=$row['quantity'];
			   $total_amount=$row['total_amount'];
			   $payment_type=$row['payment_type'];
			   $agentId=$row['agentId'];
			   $date=$row['date'];	

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
	 #t1,#t2,#t3,#t4,#t5,#t6,#t7,#t8,#t9,#t10,#t11,#t12,#t13,#t14,#t15,#t16,#t17,#t18,#t19
	 {
	 	width:98%;
	 	height: 40px;
	 	line-height: 40px;
	 	background-color: white;
	 	margin-bottom: 5px;
	 	border-radius: 0px;
	 	padding-left: 5px;
	 }
	 #t18
	 {
	 	width:98%;
	 	height: 40px;
	 	line-height: 40px;
	 	background-color: white;
	 	margin-bottom: 5px;
	 	border-radius: 0px;
	 
	 }
	 #tb18
	 {
	 	width:100%;
	 	height: 40px;
	 	
	 	border-radius: 0px;
	 	margin-bottom: 5px;
	 }
	#tkDel1
	{
		width:45%;
		height: 400px;
		background-color: ;
		margin-left: 5%;
	}	
	#tkDel2
	{
		width:45%;
		height: 400px;
		background-color: ;
		margin-left: 50.1%;
		margin-top: -41.8%;
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
	 #t1,#t2,#t3,#t4,#t5,#t6,#t7,#t8,#t9,#t10,#t11,#t12,#t13,#t14,#t15,#t16,#t17,#t18,#t19
	 {
	 	width:98%;
	 	height: 100px;
	 	line-height: 100px;
	 	background-color: white;
	 	margin-bottom: 5px;
	 	border-radius: 0px;
	 	padding-left: 5px;
	 	font-size:30px;
	 }
	 #t18
	 {
	 	width:98%;
	 	height: 100px;
	 	line-height: 100px;
	 	background-color: white;
	 	margin-bottom: 5px;
	 	border-radius: 0px;
	 
	 }
	 #tb18
	 {
	 	width:100%;
	 	height: 40px;
	 	
	 	border-radius: 0px;
	 	margin-bottom: 5px;
	 }
	#tkDel1
	{
		width:92%;
		height:auto;
		
		margin-left: 5%;
	}	
	#tkDel2
	{
		width:92%;
		height:auto;
		
		margin-left: 5%;
		margin-top: 5%;
	}
	#hideMenu
	{
		display:none;
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
				  		
					       <div id="tkDel1">
					       	   
					       	   <input type="hidden" name="hidQuan" id="hidQuan" value="<?php echo $quantity; ?>">
					       	   
					       	       <div id="t6"><strong>PURPOSE : </strong><?php echo $purpose; ?></div>
						       <div id="t6"><strong>NAME : </strong><?php echo $name; ?></div>
						       <div id="t12"><strong>EMAIL : </strong><?php echo $email; ?></div>
						       <div id="t13"><strong>MOBILE : </strong><?php echo $mobile; ?></div>
						       <div id="t14"><strong>PRICE : </strong><?php echo $price; ?></div>
						       <div id="t15"><strong>QUANTITY : </strong><?php echo $quantity; ?></div>
						       <div id="t16"><strong>TOTAL : </strong><?php echo $total_amount; ?></div>
						       <div id="t17"><strong>PAYMENT TYPE : </strong><?php echo $payment_type; ?></div>
						       <div id="t18"><strong>AGENT ID : </strong><?php echo $agentId; ?></div>
						       <div id="t19"><strong>BOOKING DATE : </strong><?php echo $date; ?></div>
<br>
					       </div>

					       <div id="tkDel2">

					       	   <div id="t7"><strong>TKT HOLDER : </strong><?php echo $ticket_holders[0]; ?></div>
					       	   <div id="t1"><strong>TKT No. : </strong><?php echo  $tickets[0]; ?></div>
					       	   
					       	   <div id="t8"><strong>TKT HOLDER : </strong><?php echo $ticket_holders[1]; ?></div>
						       <div id="t2"><strong>TKT No. : </strong><?php echo  $tickets[1]; ?></div>
						       
						       <div id="t9"><strong>TKT HOLDER : </strong><?php echo $ticket_holders[2]; ?></div>
						       <div id="t3"><strong>TKT No. : </strong><?php echo  $tickets[2]; ?></div>
						       
						       <div id="t10"><strong>TKT HOLDER : </strong><?php echo $ticket_holders[3]; ?></div>
						       <div id="t4"><strong>TKT No. : </strong><?php echo  $tickets[3]; ?></div>

						       <div id="t11"><strong>TKT HOLDER : </strong><?php echo $ticket_holders[4]; ?></div>
						       <div id="t5"><strong>TKT No. : </strong><?php echo  $tickets[4]; ?></div>


				       
				       <br>
				       
				       
					       </div><br><br>
			         </div>
					
				</div>
			
                       
				       
			
			</div>
		</div>


<script src="js/jquery.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>	



<script type="text/javascript">
	$(document).ready(function(){
		var hidQuan = $("#hidQuan").val();

		if(hidQuan==1)
		{
			$("#t7").show();
			$("#t1").show();

			$("#t8").hide();
			$("#t2").hide();
			$("#t9").hide();
			$("#t3").hide();
			$("#t10").hide();
			$("#t4").hide();
			$("#t11").hide();
			$("#t5").hide();
		}
		if(hidQuan==2)
		{
			$("#t7").show();
			$("#t1").show();
			$("#t8").show();
			$("#t2").show();

			$("#t9").hide();
			$("#t3").hide();
			$("#t10").hide();
			$("#t4").hide();
			$("#t11").hide();
			$("#t5").hide();
		}
		if(hidQuan==3)
		{
			$("#t7").show();
			$("#t1").show();
			$("#t8").show();
			$("#t2").show();
			$("#t9").show();
			$("#t3").show();

			$("#t10").hide();
			$("#t4").hide();
			$("#t11").hide();
			$("#t5").hide();
		}
		if(hidQuan==4)
		{
			$("#t7").show();
			$("#t1").show();
			$("#t8").show();
			$("#t2").show();
			$("#t9").show();
			$("#t3").show();
			$("#t10").show();
			$("#t4").show();

			$("#t11").hide();
			$("#t5").hide();
		}
		if(hidQuan==5)
		{
			$("#t7").show();
			$("#t1").show();
			$("#t8").show();
			$("#t2").show();
			$("#t9").show();
			$("#t3").show();
			$("#t10").show();
			$("#t4").show();
			$("#t11").show();
			$("#t5").show();
		}
	});
</script>


</body>
</html>