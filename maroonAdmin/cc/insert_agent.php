<?php

    include"connection.php";
    
    
    
   
        
        
        
       $agentName = $_POST['agentName'];
       $agentEmail = $_POST['agentEmail'];
       $agentMobile = $_POST['agentMobile'];
       $agentBusiness = $_POST['agentBusiness'];
       $agentAddress = $_POST['agentAddress'];
       $agentArea = $_POST['agentArea'];
       $agentCity = $_POST['agentCity'];
        
        $min = 1000;
        $max = 8000;
       $agentId ="maroon".rand($min,$max);
        
       $agentStatus = "Active";
        
        
       $query=mysqli_query($conn,"select * from agents where agentEmail='".$agentEmail."'");
	   $numrow=mysqli_num_rows($query);		
		
	   if ($numrow==0) 
	   {
			$sql="insert into agents(agentName,agentEmail,agentMobile,agentBusiness,agentAddress,agentArea,agentCity,agentId,agentStatus,agentDate) values('$agentName','$agentEmail','$agentMobile','$agentBusiness','$agentAddress','$agentArea','$agentCity','$agentId','$agentStatus',NOW())";	
			$result=mysqli_query($conn,"$sql");
					
			if($result)
			{
				echo "Aggent is Successfully added!";
			}
			else
			{
			    echo "Please try again";
				exit();
			}

		}
		else
		{
		    echo "This email is already exist! Try another one.";
		}   
			


?>