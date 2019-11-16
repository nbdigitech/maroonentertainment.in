<?php
include"includes/connection.php";

session_start();
if(!isset($_SESSION['sess_user']))
{
  header("location:index.php");
}

else
{
   if(isset($_SESSION['sess_user']))
    $uId = $_SESSION['sess_user'];

  $select = mysqli_query($conn,"select * from users where userId='$uId'");

  while($row = mysqli_fetch_assoc($select))
  {
    $userName = $row['userName'];
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
  <style type="text/css">
     @media (min-width:701px) and (max-width:3700px)
    { .WelcomeAgent
    {
      width: 98%;
      height: 380px;
      background-color:white;
      margin:5.5% auto;
      text-align:center;
    }
    }
    
    @media (min-width:100px) and (max-width:990px)
    {
    	.WelcomeAgent
	    {
	      width: 98%;
	      height: 380px;
	      background-color:white;
	      margin:30% auto;
	      text-align:center;
	    }
	     
    }
  </style>
</head>
<body>
    <div id="hideMenu"><?php include('includes/header1.php');?></div>
    <div> <?php include('includes/mob_header1.php');?></div>
  



    <div class="containerBody">
      <div class="dsbrd">

        


        <div class="WelcomeAgent">
        <br><br> <br><br> <br><br>
          <h1>Welcome Back</h1>
          <h4><?php echo $userName; ?></h4>
        </div>

       
      </div>
    </div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>    
</body>
</html>


<?php } ?>