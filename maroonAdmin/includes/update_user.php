<?php

    include"connection.php";
    
       $uid = $_POST['uid'];
       $uName = $_POST['uName'];
       $uEmail = $_POST['uEmail'];
       $uMobile = $_POST['uMobile'];
       $uBusi = $_POST['uBusi'];
       $uAdd = $_POST['uAdd'];
       $uArea = $_POST['uArea'];
       $uCity = $_POST['uCity'];
       $uLogId =$_POST['uLogId']; 
       $uStatus = $_POST['uStatus'];
       $uDate = $_POST['uDate'];
        
        
       
	   
			$sql="update users set userName='$uName',userEmail='$uEmail',userMobile='$uMobile',userBusiness='$uBusi',userAddress='$uAdd',userArea='$uArea',userCity='$uCity',userId='$uLogId',userStatus='$uStatus',userDate='$uDate' where u_id='$uid' ";	
			$result=mysqli_query($conn,"$sql");
					
			if($result)
			{
				echo "<a style='color:green'>Updation is Successfully done!</a>";
			}
			else
			{
			    echo "<a style='color:red'>Please try again</a>";
				exit();
			}

		 
			


?>