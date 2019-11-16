<?php
session_start();
if(isset($_SESSION['sess_agent'])){


$aSes = $_SESSION['sess_agent'];

echo "<style> #dtkt{display:none}</style>";

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
	#searchTktSale
    {
		width: 45%;
		height: 35px;
		margin-bottom: 10px;
		margin-left: 70px;
		border-radius: 4px;
		border: none;
		padding-left: 10px;
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
	    margin-top:-6.5px;
	}
	
	#searchTktSale
	{
	    width:70%;
	    height:70px;
	    font-size: 30px;
	}
	
}

</style>
	
	
	
</head>
<body>

<div id='hideMenu'> <?php include('includes/header2.php');?> </div>
<div> <?php include('includes/mob_header2.php');?> </div>

		



		<div class="containerBody">
			<div class="dsbrd">

				


				<div class="viewAgents">

				  
				  	<center><h4 style="color: red;">TICKETS</h4></center>
				  	
				  	<div class="rdiv1">

				  		<div id="agnt">
				  			<a href="bookTkt.php">
                    	        <i class="fa fa-plus" aria-hidden="true" id="addi"></i>
                            </a>
				  		</div><br><br><br>
				  		
				  		<center><div><input type="text" name="searchTktSale" id="searchTktSale" placeholder="Search by Ticket No. or User Mobile No."></div></center>
				  		<div id="reasult"></div>
				      

				       <div class="rdiv11">

				  		
                        

        					<div class="rdiv122" id="rdiv1">
        						<strong>SNo.</strong>
        					</div>
        					
        					<div class="rdiv122" id="rdiv2">
        						<strong>NAME</strong>
        					</div>
        					<div class="rdiv122" id="rdiv3">
        						<strong>MOBILE</strong>
        					</div>
        					<div class="rdiv122" id="rdiv4">
        						<strong>ACTION</strong>
        					</div>
        					<!--<div class="rdiv122" id="rdiv5">
        						<strong>ACTION</strong>
        					</div>-->
				       </div>

				<?php 
				    
				    include"includes/connection.php";
					

					$query =mysqli_query($conn,"select * from tktbooking where agentId='$aSes' order by 1 DESC");

					
			        $i=1;
		
					while($row=mysqli_fetch_array($query))
					{
						$id=$row['id'];
						$tickets=$row['tickets'];
						$purpose=$row['purpose'];
						$name=$row['name'];
						$ticket_holders=$row['ticket_holders'];	
						$email=$row['email'];
						$mobile=$row['mobile'];
						$price=$row['price'];
						$quantity=$row['quantity'];
						$total_amount=$row['total_amount'];
						$payment_type=$row['payment_type'];
						$agentId=$row['agentId'];
						$date=$row['date'];	
					
						
			?>
				<div class="rdiv11">
					<div class="rdiv12" id="rdiv11">
						<?php echo $i;$i++; ?>
					</div>
					
					<div class="rdiv12" id="rdiv22">
						<?php echo $name; ?>
					</div>
					<div class="rdiv12" id="rdiv33">
						<?php echo $mobile; ?>
					</div>
					<div class="rdiv12" id="rdiv44">
						<center><a href='full_ticketDet.php?edit=<?php echo $id; ?>,<?php echo $tickets; ?>,<?php echo $purpose; ?>,<?php echo $name; ?>,<?php echo $ticket_holders; ?>,<?php echo $email; ?>,<?php echo $mobile; ?>,<?php echo $price; ?>,<?php echo $quantity; ?>,<?php echo $total_amount; ?>,<?php echo $payment_type; ?>,<?php echo $agentId; ?>,<?php echo $date; ?>' class="fa-lg" id="vtkt"><i class="fa fa-eye btn btn-primary" aria-hidden="true" id="ii"></i></a>

		<a href="includes/ticketDelete.php?del=<?php echo $id; ?>" class="fa-lg" id="dtkt"><i class="fa fa-trash btn btn-danger" aria-hidden="true" id="ii"></i></a></center>
					</div>
					<!--<div class="rdiv12" id="rdiv55">
						
					</div>-->
				</div>

				<?php } ?>
			</div>
					
				</div>
			
<input type="hidden" value="<?php echo $aSes; ?>" id="aSess">  
			
			</div>
		</div>


<script src="js/jquery.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>	




<script type="text/javascript">
	$(document).ready(function(){
		$("#searchTktSale").keyup(function(){
			var search = $('#searchTktSale').val();
			var aSess= $('#aSess').val();

			//alert('hello');

			if($.trim(search.length) == 0)
		     {
		       $(".rdiv11").show();
			   $('#reasult').hide();
		     }
		     else
		     {
				$.ajax({
					type : 'POST',
					url : 'includes/search_one.php',
					data : {'search':search,'aSess':aSess},
					success : function(data)
					{
					  $(".rdiv11").hide();	
					  $('#reasult').html(data);
					}
				})
		     }
		});
	});
</script>

</body>
</html>