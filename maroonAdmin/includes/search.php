<?php 
session_start();
	if(isset($_SESSION['sess_admin']))
	{
	 echo"<style>
	     @media (min-width:100px) and (max-width:990px)
	     {
	       #ii{margin-top:-10px}
	     }
	     </style>";
	}
	
	else
	{
	echo"<style>#dR{display:none}</style>";
	echo"<style>
	     @media (min-width:100px) and (max-width:990px)
	     {
	       #ii{margin-top:-8px}
	     }
	     </style>";
	}

?>





 
<div class="rdiv1">

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

</div>



<?php
include("connection.php");
if(isset($_POST['search']))
{
	$search = $_POST['search'];
	$query = mysqli_query($conn,"SELECT * FROM tktbooking WHERE CONCAT(order_id,tickets,name,ticket_holders,mobile,agentId) LIKE '%$search%'");

    $result = mysqli_num_rows($query);

  

    if($result!=0)
    {
       
        $i=1;
       while ($row = mysqli_fetch_assoc($query)) 
       {
	    
			   $id=$row['id'];
			   $order_id=$row['order_id'];
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
			  
			   $i++;
		 
	  
	  echo 
	    	"<div class='rdiv11'>
					<div class='rdiv12' id='rdiv11'>
				    $i
					</div>
					
					<div class='rdiv12' id='rdiv22'>
						$name
					</div>
					<div class='rdiv12' id='rdiv33'>
						$mobile
					</div> 
		    	
		    	
		    	<div class='rdiv12' id='rdiv44'> <center><a href='full_ticketDet.php?edit=$id' class='fa-lg' id='p'><i class='fa fa-eye btn btn-primary' aria-hidden='true' id='ii'></i></a>

		<a href='includes/ticketDelete.php?del=$id' class='fa-lg' id='dR'><i class='fa fa-trash btn btn-danger' aria-hidden='true' id='ii'></i></a></center></div> 
	    	</div>";	
	  	
       }
       echo "</div>";
    }
else
    {
    	echo "<h5 style='color:red'>Record has been not found</h5>";
    }
}
?>