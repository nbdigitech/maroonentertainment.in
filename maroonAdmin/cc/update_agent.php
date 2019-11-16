<?php

    include"connection.php";
    
       $aid = $_POST['aid'];
       $aName = $_POST['aName'];
       $aEmail = $_POST['aEmail'];
       $aMobile = $_POST['aMobile'];
       $aBusi = $_POST['aBusi'];
       $aAdd = $_POST['aAdd'];
       $aArea = $_POST['aArea'];
       $aCity = $_POST['aCity'];
       $aLogId =$_POST['aLogId']; 
       $aStatus = $_POST['aStatus'];
       $aDate = $_POST['aDate'];
        
        
       
	   
			$sql="update agents set agentName='$aName',agentEmail='$aEmail',agentMobile='$aMobile',agentBusiness='$aBusi',agentAddress='$aAdd',agentArea='$aArea',agentCity='$aCity',agentId='$aLogId',agentStatus='$aStatus',agentDate='$aDate' where a_id='$aid' ";	
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