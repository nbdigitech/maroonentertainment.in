<?php

    include"connection.php";
    
    
    
   
        
        
        
       $userName = $_POST['userName'];
       $userEmail = $_POST['userEmail'];
       $userMobile = $_POST['userMobile'];
       $userBusiness = $_POST['userBusiness'];
       $userAddress = $_POST['userAddress'];
       $userArea = $_POST['userArea'];
       $userCity = $_POST['userCity'];
        
        $min = 1000;
        $max = 8000;
       $userId ="user".rand($min,$max);
        
       $userStatus = "Active";
        
        
       $query=mysqli_query($conn,"select * from users where userEmail='".$userEmail."'");
	   $numrow=mysqli_num_rows($query);		
		
	   if ($numrow==0) 
	   {
			$sql="insert into users(userName,userEmail,userMobile,userBusiness,userAddress,userArea,userCity,userId,userStatus,userDate) values('$userName','$userEmail','$userMobile','$userBusiness','$userAddress','$userArea','$userCity','$userId','$userStatus',NOW())";	
			$result=mysqli_query($conn,"$sql");
					
			if($result)
			{
				echo "User is Successfully added!";
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