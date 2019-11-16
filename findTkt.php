 <?php echo $row['name']; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Maroon Entertainment | Event Organiser In Ripur | Event Organiser In Chhattisgarh</title>
	
	
	<style>
	html,body
	{
		padding:0px;
		margin:0px;
	}
	   header
	   {
               background-color:#00CCFF;
	       width:100%;
	       height:80px;
	       line-height:80px;
	      
	   } 
	   .leftdiv
	   {	
	       width:10%;
	       height:80px;
	       color:white; 
	       line-height:130px; 
	       margin-left:50px; 
	       font-size:35px;
	       font-weight:bold;
	   }
	   
	   .leftdiv > img 
	    {
	       width:80px;
	    } 
	   .container
	   {
	   	width:100%;
	   	height:420px;
	   	 
	   }
	  
	   .head_body
	   {
	     width:100%;
	     height:300px;
	     
	     
	   }
	  
	   #customers 
	   {
	        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	        border-collapse: collapse;
		width: 70%;
		margin:5% auto;
		
	   }

	   #customers td, #customers th 
	   {
		border: 1px solid #ddd;
		padding: 8px;
		text-align:center;
           }
		
           #customers tr:nth-child(even){background-color: #f2f2f2;}

           #customers tr:hover {background-color: #ddd;}

           #customers th 
           {
	        padding-top: 12px;
		padding-bottom: 12px;
		
		background-color: gray;
		color: white;
          }
	  #bClick
          {
          	background-color:#3498DB;
          	width:100px;
          	height:50px;
          	color:white;
          	border:none;
          	font-size:20px;
          	
          }
	  
	  
	  @media (min-width:100px) and (max-width:990px)
	  {
	  
	     header
	   {
               background-color:#00CCFF;
	       width:100%;
	       height:130px;
	       line-height:130px;
	      
	   } 
	  .leftdiv
	   {	
	       width:10%;
	       height:130px;
	       color:white; 
	       line-height:170px; 
	       margin-left:50px; 
	       font-size:35px;
	       font-weight:bold;
	   }
	    .leftdiv > img 
	    {
	       width:135px;
	    }   
	  	#customers 
	   {
	        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	        font-size:25px;
	        border-collapse: collapse;
		width: 99%;
		margin:10% auto;
		
	   }

	   #customers td, #customers th 
	   {
		border: 1px solid #ddd;
		padding: 8px;
		text-align:center;
           }
		
           #customers tr:nth-child(even){background-color: #f2f2f2;}

           #customers tr:hover {background-color: #ddd;}

           #customers th 
           {
	        padding-top: 12px;
		padding-bottom: 12px;
		
		background-color: gray;
		color: white;
          }
          #bClick
          {
          	background-color:#3498DB;
          	width:200px;
          	height:100px;
          	color:white;
          	border:none;
          	font-size:50px;
          	margin:30% auto;
          }
          
	  }
	</style>
</head>
<body>
	<header>
	  <div>
	     <div class="leftdiv"><img src="img/logo.png"></div>
	  </div>
	</header>
   
   
   
   
                <div class="container">
                	 
                	<div class="head_body">
              	
   <table id="customers">             	
                  	
                	
            	  <tr>
            	  	<th>SNo.</th>
            	  	<th>ORDER NO.</th>
            	  	<th>TICKET NO.</th>
            	  	<th>BOOKING DATE</th> 	
            	  </tr>
    
    
    <?php 

	                   include"includes/connection.php";



		
				$fEmail= $_POST["fEmail"];
				$fMobile= $_POST["fMobile"];
		
				$query =mysqli_query($conn,"select * from tktbooking where email='$fEmail' and mobile='$fMobile'");

					
				   $i=1;     
		
					while($row=mysqli_fetch_array($query))
					{
						$id=$row['id'];
						$order_id=$row['order_id'];
						$ticket=$row['tickets'];
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
			
	        
	        <?php 
	        
	        $tic1 = $ticket[0];
	        $tic2 = $ticket[1];
	        $tic3 = $ticket[2];
	        $tic4 = $ticket[3];
	        $tic5 = $ticket[4];
	        
	        ?>
	       
	     <tr>
	        <td><?php echo $i;$i++; ?></td>
	        <td><?php echo $order_id; ?></td>
	        <td><?php echo $ticket; ?></td>
	        <td><?php echo $date; ?></td>
	    </tr>
	    	<?php } ?>
	    	
	    	  <tr> <th>NAME </th> <th>EMAIL </th> <th>MOBILE </th> <th>CONCET NAME </th> </tr>
                  <tr><td><?php echo $name; ?> </td>   <td><?php echo $email; ?> </td> <td><?php echo $mobile; ?> </td> <td><?php echo $purpose; ?> </td> </tr>
                  	
	</table> 
				
				                	
                	</div><center><button onclick="myFunction()" id="bClick">Print</button></center>
                </div>
  


<script>
function myFunction() {
    window.print();
}
</script>
   
   
       <!--<footer>
   	  <div>
	   
	  </div>
       </footer>-->
   
   
 


 <script src="jquery.js"></script> 
   
   
   
   <script>
   	$(document).ready(function(){
   	
   		
   		var quan = $('#quan').val();
   		var prc= $('#prc').val();
   		
   		if(quan == 1){
   		       // console.log(quan);
   		        $('#ticket11').show();
   		        $('#ticket22').hide();
   		        $('#ticket33').hide();
   		        $('#ticket44').hide();
   		        $('#ticket55').hide();
   		}
   		
   		if(quan == 2){
   		        //console.log(quan);
   		        $('#ticket11').show();
   		        $('#ticket22').show();
   		        $('#ticket33').hide();
   		        $('#ticket44').hide();
   		        $('#ticket55').hide();
   		}
   		
   		if(quan == 3){
   		       // console.log(quan);
   		        $('#ticket11').show();
   		        $('#ticket22').show();
   		        $('#ticket33').show();
   		        $('#ticket44').hide();
   		        $('#ticket55').hide();
   		}
   		
   		if(quan == 4){
   		        //console.log(quan);
   		        $('#ticket11').show();
   		        $('#ticket22').show();
   		        $('#ticket33').show();
   		        $('#ticket44').show();
   		        $('#ticket55').hide();
   		}
   		
   		if(quan == 5){
   		       // console.log(quan);
   		        $('#ticket11').show();
   		        $('#ticket22').show();
   		        $('#ticket33').show();
   		        $('#ticket44').show();
   		        $('#ticket55').show();
   		}
   		
   		
   		if(prc == 5000){
   		       // console.log(quan);
   		        $('#im1').show();
   		        $('#im2').hide();
   		        $('#im3').hide();
   		        $('#im4').hide();
   		        $('#im5').hide();
   		}
   		
   		if(prc == 3000){
   		       // console.log(quan);
   		        $('#im1').hide();
   		        $('#im2').show();
   		        $('#im3').hide();
   		        $('#im4').hide();
   		        $('#im5').hide();
   		}
   		
   		if(prc == 1500){
   		       // console.log(quan);
   		        $('#im1').hide();
   		        $('#im2').hide();
   		        $('#im3').show();
   		        $('#im4').hide();
   		        $('#im5').hide();
   		}
   		
   		if(prc == 1000){
   		       // console.log(quan);
   		        $('#im1').hide();
   		        $('#im2').hide();
   		        $('#im3').hide();
   		        $('#im4').show();
   		        $('#im5').hide();
   		}
   		
   		if(prc == 500){
   		       // console.log(quan);
   		        $('#im1').hide();
   		        $('#im2').hide();
   		        $('#im3').hide();
   		        $('#im4').hide();
   		        $('#im5').show();
   		}
   	});
   	
   </script>
   
   
   

</body>
</html>



















