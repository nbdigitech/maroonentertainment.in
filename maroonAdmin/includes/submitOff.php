<?php

    include"connection.php";
     
       
       $name1 = $_POST['name1'];
       $name2 = $_POST['name2'];
       $name3 = $_POST['name3'];
       $name4 = $_POST['name4'];
       $name5 = $_POST['name5'];
       $val = array($name1,$name2,$name3,$name4,$name5);
       $ticket_hold = implode(",",$val);

       
       
       $purpose = "Live Concert";
       $name = $_POST['name'];
       $ticket_holders = $ticket_hold; 
       $email = $_POST['email'];
       $mobile = $_POST['mobile'];

       $price = $_POST['tickets'];
       $quantity = $_POST['ticketQuantity'];
       $total_amount = $price * $quantity;

       $payment_type = "Cash";

       $agentId = $_POST['agentId'];
       
       $min = 1000;
       $max = 9000;
       


       if($quantity==1)
          {
            $tickets1 =rand($min,$max);
            $order_id = "MAROON".rand($min,$max);
            $sql = "insert into tktbooking(order_id,tickets,purpose,name,ticket_holders,email,mobile,price,quantity,total_amount,payment_type,agentId,date) values('$order_id','$tickets1','$purpose','$name','$ticket_holders','$email','$mobile','$price','$quantity','$total_amount','$payment_type','$agentId',NOW())";
          $run = mysqli_query($conn,"$sql");

            if($run)
            {
            
            
            
            	$text = "Hello! " .$name." 
Ticket details for Diljit Dosanjh concert is:
Order ID : ".$order_id.", 
Ticket/s : ".$tickets1.", 
Venue - Kamal Vihar Raipur 
Date - 13 Jan 2017
(Note : Ticket holders photo id is compulsory for entry)";
	

              $mobileNo = $mobile;
              $message = urlencode($text);
              $authKey = "189400AOUmlmC15a3e1c68";
              $senderId = "MAROON";
              $route = "4";
              $postData = array(
                  'authkey' => $authKey,
                  'mobiles' => $mobileNo,
                  'message' => $message,
                  'sender' => $senderId,
                  'route' => $route,
                  'country'=>'0'
              );
              $url="https://control.msg91.com/api/sendhttp.php";
              $ch = curl_init();
                  curl_setopt_array($ch, array(
                  CURLOPT_URL => $url,
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_POST => true,
                  CURLOPT_POSTFIELDS => $postData
              ));
              curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
              $output = curl_exec($ch);
               if(curl_errno($ch))
              {
                  echo 'error:' . curl_error($ch);
              }
              curl_close($ch);
//echo '<script>alert("Message sent Successfully")</script>';


	        $to = $email;
		$subject = "Ticket Confirmation";
		$txt = 
            	$text = "Hello! " .$name." 
Ticket details for Diljit Dosanjh concert is:
Order ID : ".$order_id.", 
Ticket/s : ".$tickets1.", 
Venue - Kamal Vihar Raipur 
Date - 13 Jan 2017
(Note : Ticket holders photo id is compulsory for entry)";
		$headers = "From: info@maroonentertainment.in";
		//"CC: somebodyelse@example.com";
		
		mail($to,$subject,$txt,$headers);
		





              echo "<script>alert('Ticket/s Successfully Sold')</script>";
             
            }
            
            
            else{
             echo "Ticket/s Not Sold" ;
            }
          }
          
          else if($quantity==2)
          {
            $ticket1 =rand($min,$max);
            $ticket2 =rand($min,$max);
            $ticket = array($ticket1,$ticket2);
            $tickets2 = implode(",",$ticket);
            $order_id = "MAROON".rand($min,$max);
            $sql1 = "insert into tktbooking(order_id,tickets,purpose,name,ticket_holders,email,mobile,price,quantity,total_amount,payment_type,agentId,date) values('$order_id','$tickets2','$purpose','$name','$ticket_holders','$email','$mobile','$price','$quantity','$total_amount','$payment_type','$agentId',NOW())";
            $run1 = mysqli_query($conn,"$sql1");

            if($run1)
            {
              $text = "Hello! " .$name." 
Ticket details for Diljit Dosanjh concert is:
Order ID : ".$order_id.", 
Ticket/s : " .$ticket1.", ".$ticket2.", 
Venue - Kamal Vihar Raipur
Date - 13 Jan 2017
(Note : Ticket holders photo id is compulsory for entry)";
  

              $mobileNo = $mobile;
              $message = urlencode($text);
              $authKey = "189400AOUmlmC15a3e1c68";
              $senderId = "MAROON";
              $route = "4";
              $postData = array(
                  'authkey' => $authKey,
                  'mobiles' => $mobileNo,
                  'message' => $message,
                  'sender' => $senderId,
                  'route' => $route,
                  'country'=>'0'
              );
              $url="https://control.msg91.com/api/sendhttp.php";
              $ch = curl_init();
                  curl_setopt_array($ch, array(
                  CURLOPT_URL => $url,
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_POST => true,
                  CURLOPT_POSTFIELDS => $postData
              ));
              curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
              $output = curl_exec($ch);
               if(curl_errno($ch))
              {
                  echo 'error:' . curl_error($ch);
              }
              curl_close($ch);
//echo '<script>alert("Message sent Successfully")</script>';


                 $to = $email;
		$subject ="Hello! " .$name." 
Ticket details for Diljit Dosanjh concert is:
Order ID : ".$order_id.", 
Ticket/s : " .$ticket1.", ".$ticket2.", 
Venue - Kamal Vihar Raipur
Date - 13 Jan 2017
(Note : Ticket holders photo id is compulsory for entry)";
		$headers = "From: info@maroonentertainment.in";
		//"CC: somebodyelse@example.com";
		
		mail($to,$subject,$txt,$headers);



              echo "<script>alert('Ticket/s Successfully Sold')</script>";
            }

            else{
             echo "Ticket/s Not Sold"; 
            }
          }
          
          else if($quantity==3)
          {
            $ticket1 =rand($min,$max);
            $ticket2 =rand($min,$max);
            $ticket3 =rand($min,$max);
            $ticket = array($ticket1,$ticket2,$ticket3);
            $tickets = implode(",",$ticket);
            $order_id ="MAROON".rand($min,$max);
            $sql2 = "insert into tktbooking(order_id,tickets,purpose,name,ticket_holders,email,mobile,price,quantity,total_amount,payment_type,agentId,date) values('$order_id','$tickets','$purpose','$name','$ticket_holders','$email','$mobile','$price','$quantity','$total_amount','$payment_type','$agentId',NOW())";
            $run2 = mysqli_query($conn,"$sql2");
            if($run2)
            {
              $text = "Hello! " .$name." 
Ticket details for Diljit Dosanjh concert is:
Order ID : ".$order_id.", 
Ticket/s : " .$ticket1.", ".$ticket2.", ".$ticket3.", 
Venue - Kamal Vihar Raipur
Date - 13 Jan 2017 
(Note : Ticket holders photo id is compulsory for entry)";
  

              $mobileNo = $mobile;
              $message = urlencode($text);
              $authKey = "189400AOUmlmC15a3e1c68";
              $senderId = "MAROON";
              $route = "4";
              $postData = array(
                  'authkey' => $authKey,
                  'mobiles' => $mobileNo,
                  'message' => $message,
                  'sender' => $senderId,
                  'route' => $route,
                  'country'=>'0'
              );
              $url="https://control.msg91.com/api/sendhttp.php";
              $ch = curl_init();
                  curl_setopt_array($ch, array(
                  CURLOPT_URL => $url,
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_POST => true,
                  CURLOPT_POSTFIELDS => $postData
              ));
              curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
              $output = curl_exec($ch);
               if(curl_errno($ch))
              {
                  echo 'error:' . curl_error($ch);
              }
              curl_close($ch);
//echo '<script>alert("Message sent Successfully")</script>';


		$to = $email;
		$subject = "Ticket Confirmation";
		$txt = "Hello! " .$name." 
Ticket details for Diljit Dosanjh concert is:
Order ID : ".$order_id.", 
Ticket/s : " .$ticket1.", ".$ticket2.", ".$ticket3.", 
Venue - Kamal Vihar Raipur
Date - 13 Jan 2017 
(Note : Ticket holders photo id is compulsory for entry)";
		$headers = "From: info@maroonentertainment.in";
		//"CC: somebodyelse@example.com";
		
		mail($to,$subject,$txt,$headers);


             echo "<script>alert('Ticket/s Successfully Sold')</script>";
            }

            else{
             echo "Ticket/s Not Sold"; 
            }
          }
          
          else if($quantity==4)
          {
            $ticket1 =rand($min,$max);
            $ticket2 =rand($min,$max);
            $ticket3 =rand($min,$max);
            $ticket4 =rand($min,$max);
            $ticket = array($ticket1,$ticket2,$ticket3,$ticket4);
            $tickets = implode(",",$ticket);
            $order_id ="MAROON".rand($min,$max);
            $sql3 = "insert into tktbooking(order_id,tickets,purpose,name,ticket_holders,email,mobile,price,quantity,total_amount,payment_type,agentId,date) values('$order_id','$tickets','$purpose','$name','$ticket_holders','$email','$mobile','$price','$quantity','$total_amount','$payment_type','$agentId',NOW())";
            $run3 = mysqli_query($conn,"$sql3");
            if($run3)
            {

              $text = "Hello! " .$name." 
Ticket details for Diljit Dosanjh concert is:
Order ID : ".$order_id.", 
Ticket/s : " .$ticket1.", ".$ticket2.", ".$ticket3.", ".$ticket4.", 
Venue - Kamal Vihar Raipur
Date - 13 Jan 2017
(Note : Ticket holders photo id is compulsory for entry)";
  

              $mobileNo = $mobile;
              $message = urlencode($text);
              $authKey = "189400AOUmlmC15a3e1c68";
              $senderId = "MAROON";
              $route = "4";
              $postData = array(
                  'authkey' => $authKey,
                  'mobiles' => $mobileNo,
                  'message' => $message,
                  'sender' => $senderId,
                  'route' => $route,
                  'country'=>'0'
              );
              $url="https://control.msg91.com/api/sendhttp.php";
              $ch = curl_init();
                  curl_setopt_array($ch, array(
                  CURLOPT_URL => $url,
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_POST => true,
                  CURLOPT_POSTFIELDS => $postData
              ));
              curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
              $output = curl_exec($ch);
               if(curl_errno($ch))
              {
                  echo 'error:' . curl_error($ch);
              }
              curl_close($ch);
//echo '<script>alert("Message sent Successfully")</script>';

	        $to = $email;
		$subject = "Ticket Confirmation";
		$txt = "Hello! " .$name." 
Ticket details for Diljit Dosanjh concert is:
Order ID : ".$order_id.", 
Ticket/s : " .$ticket1.", ".$ticket2.", ".$ticket3.", ".$ticket4.", 
Venue - Kamal Vihar Raipur
Date - 13 Jan 2017
(Note : Ticket holders photo id is compulsory for entry)";
		$headers = "From: info@maroonentertainment.in";
		//"CC: somebodyelse@example.com";
		
		mail($to,$subject,$txt,$headers);


              echo "<script>alert('Ticket/s Successfully Sold')</script>";
            }
            else{
             echo "Ticket/s Not Sold"; 
            }
          }
                
            else
          {
            $ticket1 =rand($min,$max);
            $ticket2 =rand($min,$max);
            $ticket3 =rand($min,$max);
            $ticket4 =rand($min,$max);
            $ticket5 =rand($min,$max);
            $ticket = array($ticket1,$ticket2,$ticket3,$ticket4,$ticket5);
            $tickets = implode(",",$ticket);
            $order_id = "MAROON".rand($min,$max);
            $sql4 = "insert into tktbooking(order_id,tickets,purpose,name,ticket_holders,email,mobile,price,quantity,total_amount,payment_type,agentId,date) values('$order_id','$tickets','$purpose','$name','$ticket_holders','$email','$mobile','$price','$quantity','$total_amount','$payment_type','$agentId',NOW())";
            $run4 = mysqli_query($conn,"$sql4");
            if($run4)
            {
              $text = "Hello! " .$name." 
Ticket details for Diljit Dosanjh concert is:
Order ID : ".$order_id.", 
Ticket/s : ".$ticket1.", ".$ticket2.", ".$ticket3.", ".$ticket4.", ".$ticket5.",
Venue - Kamal Vihar Raipur 
Date - 13 Jan 2017
(Note : Ticket holders photo id is compulsory for entry)";
  

              $mobileNo = $mobile;
              $message = urlencode($text);
              $authKey = "189400AOUmlmC15a3e1c68";
              $senderId = "MAROON";
              $route = "4";
              $postData = array(
                  'authkey' => $authKey,
                  'mobiles' => $mobileNo,
                  'message' => $message,
                  'sender' => $senderId,
                  'route' => $route,
                  'country'=>'0'
              );
              $url="https://control.msg91.com/api/sendhttp.php";
              $ch = curl_init();
                  curl_setopt_array($ch, array(
                  CURLOPT_URL => $url,
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_POST => true,
                  CURLOPT_POSTFIELDS => $postData
              ));
              curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
              $output = curl_exec($ch);
               if(curl_errno($ch))
              {
                  echo 'error:' . curl_error($ch);
              }
              curl_close($ch);
//echo '<script>alert("Message sent Successfully")</script>';


		$to = $email;
		$subject = "Ticket Confirmation";
		$txt = "Hello! " .$name." 
Ticket details for Diljit Dosanjh concert is:
Order ID : ".$order_id.", 
Ticket/s : " .$ticket1.", ".$ticket2.", ".$ticket3.", ".$ticket4.", ".$ticket5.", 
Venue - Kamal Vihar Raipur
Date - 13 Jan 2017
(Note : Ticket holders photo id is compulsory for entry)";
		$headers = "From: info@maroonentertainment.in";
		//"CC: somebodyelse@example.com";
		
		mail($to,$subject,$txt,$headers);

		

             echo "<script>alert('Ticket/s Successfully Sold')</script>";
            }
            else{
             echo "Ticket/s Not Sold"; 
            }
          }
        
        



			
					
			
      
			


?>