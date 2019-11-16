<?php
session_start();

if(isset($_SESSION['sess_admin'])){
include "includes/header.php";
include"includes/mob_header.php";
}
if(isset($_SESSION['sess_user'])){
include "includes/header1.php";

include"includes/mob_header1.php";
echo "<style> #agnDel{display:none}</style>";
}
if(isset($_SESSION['sess_agent'])){
include"includes/header2.php";
include"includes/mob_header2.php";

$agntId = $_SESSION['sess_agent'];

echo "<style> #agnDel{display:none}</style>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Maroon Entertainment</title>
    
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/admin_profile.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" type="text/css" href="css/fonts/css/font-awesome.min.css">

  <!-- Bootstrap link of CSS and JS-->
  
  
  
  
  
  
  
<style>

#tickets1,#tickets2,#tickets3,#tickets4,#tickets5
    {
        display:none;
    }



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
  
  
  
   #tk2
  {
  
    font-size:80px;
  }
  #tk3
  {
    
    margin-top:380px;
    margin-left:-240px;
    font-size:80px;
    
    
  }

  #tk4
  {
    margin-top:760px;
    margin-left:-240px;
  }
  #tk5
  {
    margin-top:1140px;
    margin-left:-240px;
  }
  #tk6
  {
    margin-top:1520px;
    margin-left:-240px;
  }
  #tk11
  {
    width:710px;
    font-size:40px;
    border:1px solid black;
  }
  #btS
  {
    height:100px;
    font-size:40px;
  }
  h3
  {
    font-size:40px;
  }
  h6
  {
    font-size:40px;
  }
  #pMax
  {
    font-size:30px;
  }
  .mobsize
  {
    width:900px;
    height:auto;
    margin-left:-200px;
  }
  #name,#email,#mobile,#tickets,#agentId,#ticketQuantity,#submitOn,#submitOff,#close
  {
    height:110px;
    font-size:30px;
  }
  #submitOff
  {
  line-height:90px;
  }
  .modaltitle
  {
    font-size:30px;
  } 
  
}

</style>
  
  
  
</head>
<body>


    



    <div class="containerBody">
      <div class="dsbrd">

        


        <div class="viewAgents">

          
            <center><h4 style="color: red;">BOOK TICKET</h4></center>
            
            <div class="rdiv1">


              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content mobsize">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fill Al The Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="payments/pay.php" method="post">
        
                <div class="form-group">
                  
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Ticket Booker Name" required>
                </div>

                <div class="form-group">
                 
                  <input type="text" class="form-control" name="email" id="email" placeholder="Enter Ticket Booker Email" required>
                  </div>

                  <div class="form-group">
                  
                  <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Ticket Booker Mobile No." required>
                  </div>

                  <div class="price form-group">
                  
                  <input type="hidden" class="form-control" name="tickets" id="tickets" required>
                  </div>

                  <div class="modaltitle form-group"> <br></div>
       
                  <div class="form-group"><input type="hidden" class="form-control" name="agentId" id="agentId" value="<?php echo $agntId ; ?>"></div>

                  <div class="form-group">
                  
                  <select class="form-control" name="ticketQuantity" id="ticketQuantity" required>
                    <option value="">Select Ticket Quantity</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select> 
                  </div>
                  
                  <div class="name1 form-group"> 
                    <input type="text" class="form-control" name="tickets1" id="tickets1" placeholder="Enter Ticket Holder Name">
                  </div>
                  <div class="name2 form-group"> 
                    <input type="text" class="form-control" name="tickets2" id="tickets2" placeholder="Enter Second Ticket Holder Name">
                  </div>
                  <div class="name3 form-group"> 
                    <input type="text" class="form-control" name="tickets3" id="tickets3" placeholder="Enter Third Ticket Holder Name">
                  </div>
                  <div class="name4 form-group"> 
                    <input type="text" class="form-control" name="tickets4" id="tickets4" placeholder="Enter Fourth Ticket Holder Name">
                  </div>
                  <div class="name5 form-group"> 
                    <input type="text" class="form-control" name="tickets5" id="tickets5" placeholder="Enter Fifth Ticket Holder Name">
                  </div>
                  
                  <div class="btnn">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Close</button>
                      <input type="submit" class="btn btn-primary" name="submit" value="Pay Online" id="submitOn">
                      <a class="btn btn-success" name="submitOff" id="submitOff" style="color: white;">Pay Offline</a>
                  </div>
                  <div id="result"></div>
                </form>
            
      </div>
      <div class="modal-footer">

        
      </div>
    </div>
  </div>
</div> 


       
        
    <!-- Pricing #################### -->
    <section id="pricing" class="subsection background_color1">
      <div class="container">
      
          
        
        
        <div class="row">
        
          <!-- Pricing box
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 align-center pricing_anim3" id="tk1">
            <div class="pricing_box pricing_box_featured" id="tk11">
              <div data-icon="&#xe064;" class="iconbox_icon"></div>
              <h6>platinum lounge</h6>
              <div class="pricing_box_price"><h3>$25000</h3></div>
              
              <div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="25000">Book</button>
              </div>
              
            </div>
          </div>
           //Pricing box -->
          
          <!-- Pricing box -->
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 align-center pricing_anim3" id="tk2">
            <div class="pricing_box pricing_box_featured" id="tk11">
              <div data-icon="&#xe064;" class="iconbox_icon"></div>
              <h6>VIP Couple</h6>
              <p>This ticket grants entry to 2 person</p>
              <div class="pricing_box_price"><h3><i class="fa fa-inr" aria-hidden="true"></i> 5000</h3></div>
              
              <div>
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="5000" id="btS">Book Now</button>
                <p id="pMax">Max 5 tickets per transaction.</p>
              </div>
              
            </div>
          </div>
          <!-- //Pricing box -->
          
          <!-- Pricing box -->
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 align-center pricing_anim3" id="tk3">
            <div class="pricing_box pricing_box_featured" id="tk11">
              <div data-icon="&#xe064;" class="iconbox_icon"></div>
              <h6>VIP seating</h6>
              <p>This ticket grants entry to 1 person</p>
              <div class="pricing_box_price"><h3><i class="fa fa-inr" aria-hidden="true"></i> 3000</h3></div>
              
              <div>
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="3000" id="btS">Book Now</button>
                <p id="pMax">Max 5 tickets per transaction.</p>
              </div>
              
            </div>
          </div>
          <!-- //Pricing box -->
          
          <!-- Pricing box -->
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 align-center pricing_anim3" id="tk4">
            <div class="pricing_box pricing_box_featured" id="tk11">
              <div data-icon="&#xe064;" class="iconbox_icon"></div>
              <h6>gold seating</h6>
              <p>This ticket grants entry to 1 person</p>
              <div class="pricing_box_price"><h3><i class="fa fa-inr" aria-hidden="true"></i> 1500</h3></div>
              
              <div>
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="1500" id="btS">Book Now</button>
                <p id="pMax">Max 5 tickets per transaction.</p>
              </div>
              
            </div>
          </div>
          <!-- //Pricing box -->
          
          <!-- Pricing box -->
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 align-center pricing_anim3" id="tk5">
            <div class="pricing_box pricing_box_featured" id="tk11">
              <div data-icon="&#xe064;" class="iconbox_icon"></div>
              <h6>Vip rocker standing</h6>
              <p>This ticket grants entry to 1 person</p>
              <div class="pricing_box_price"><h3><i class="fa fa-inr" aria-hidden="true"></i> 1000</h3></div>
              
              <div>
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="1000" id="btS">Book Now</button>
                <p id="pMax">Max 5 tickets per transaction.</p>
              </div>
              
            </div>
          </div>
          <!-- //Pricing box -->
          
          
          <!-- Pricing box -->
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 align-center pricing_anim3" id="tk6">
            <div class="pricing_box pricing_box_featured" id="tk11">
              <div data-icon="&#xe064;" class="iconbox_icon"></div>
              <h6>rocker standing</h6>
              <p>This ticket grants entry to 1 person</p>
              <div class="pricing_box_price"><h3><i class="fa fa-inr" aria-hidden="true"></i> 500</h3></div>
              
              <div>
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="500" id="btS">Book Now</button>
                <p id="pMax">Max 5 tickets per transaction.</p>
              </div>
              
            </div>
          </div>
          <!-- //Pricing box -->
          
        </div>            
      </div>



            </div>
          
        </div>
      
<div id="result"></div>
      
      </div>
    </div>









<script src="js/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>





<script>
    $(document).ready(function()
    {
      $("#submitOff").click(function()
      {
                var name = $("#name").val();
                var email = $("#email").val();
                var mobile = $("#mobile").val();
                var tickets = $("#tickets").val();
                var agentId = $("#agentId").val();
                var ticketQuantity = $("#ticketQuantity").val();

                var name1 = $("#tickets1").val();
                var name2 = $("#tickets2").val();
                var name3 = $("#tickets3").val();
                var name4 = $("#tickets4").val();
                var name5 = $("#tickets5").val();

               
      /*$.post("includes/submitOff.php",{'name':name,'email':email,'mobile':mobile,'tickets':tickets,'agentId':agentId,'ticketQuantity':ticketQuantity,'tickets1':tickets1,'tickets2':tickets2,'tickets3':tickets3,'tickets4':tickets4,'tickets5':tickets5},function(data)
          {
            $("$result").html(data);
          });*/


          

                $.ajax({
                          
                  url:'includes/submitOff.php',
                  data:{'name':name,'email':email,'mobile':mobile,'tickets':tickets,'agentId':agentId,'ticketQuantity':ticketQuantity,'name1':name1,'name2':name2,'name3':name3,'name4':name4,'name5':name5},
                  type:'POST',
                  async:true,
                  cache:false,
                            
                  success:function(data)
                  {

                      var name = $("#name").val("");
                      var email = $("#email").val("");
                      var mobile = $("#mobile").val("");
                      var tickets = $("#tickets").val("");
                      var agentId = $("#agentId").val("");
                      var ticketQuantity = $("#ticketQuantity").val("");

                      var name1 = $("#tickets1").val("");
                      var name2 = $("#tickets2").val("");
                      var name3 = $("#tickets3").val("");
                      var name4 = $("#tickets4").val("");
                      var name5 = $("#tickets5").val("");

                      $("#result").html(data);
                  }
                });

         
      });
    });

  </script> 
/*
<script>
    $(document).ready(function()
    {
      $("#submitOn").click(function()
      {
                var name = $("#name").val();
                var email = $("#email").val();
                var mobile = $("#mobile").val();
                var tickets = $("#tickets").val();
                var agentId = $("#agentId").val();
                var ticketQuantity = $("#ticketQuantity").val();

                var tickets1 = $("#tickets1").val();
                var tickets2 = $("#tickets2").val();
                var tickets3 = $("#tickets3").val();
                var tickets4 = $("#tickets4").val();
                var tickets5 = $("#tickets5").val();

               
      $.post("insert.php",{name:uname,email:uemail,pass:upass},function(data)
          {
            $("$result").html(data);
          });


          //alert('hello')



          $.ajax(
          {
          
            url:'payments/pay.php',
            data:{'name':name,'email':email,'mobile':mobile,'tickets':tickets,'agentId':agentId,'ticketQuantity':ticketQuantity,'tickets1':tickets1,'tickets2':tickets2,'tickets3':tickets3,'tickets4':tickets4,'tickets5':tickets5},
            type:'POST',
            async:true,
                        cache:false,
            
            success:function(data)
            {
               
              $("#result").html(data);
            }
          });
      });
    });


  </script>
*/


<script>
    $(document).ready(function()
    {
      $("#submitOn").click(function()
      {
                var name = $("#name").val();
                var email = $("#email").val();
                var mobile = $("#mobile").val();
                var tickets = $("#tickets").val();
                var agentId = $("#agentId").val();
                var ticketQuantity = $("#ticketQuantity").val();

                var tickets1 = $("#tickets1").val();
                var tickets2 = $("#tickets2").val();
                var tickets3 = $("#tickets3").val();
                var tickets4 = $("#tickets4").val();
                var tickets5 = $("#tickets5").val();

               
      $.post("payments/pay.php",{name':name,'email':email,'mobile':mobile,'tickets':tickets,'agentId':agentId,'ticketQuantity':ticketQuantity,'tickets1':tickets1,'tickets2':tickets2,'tickets3':tickets3,'tickets4':tickets4,'tickets5':tickets5},function(data)
          {
            $("$result").html(data);
          });


          //alert('hello')

/*$.ajax(
          {
          
            url:'payments/pay.php',
            data:{'name':name,'email':email,'mobile':mobile,'tickets':tickets,'agentId':agentId,'ticketQuantity':ticketQuantity,'tickets1':tickets1,'tickets2':tickets2,'tickets3':tickets3,'tickets4':tickets4,'tickets5':tickets5},
            type:'POST',
            async:true,
                        cache:false,
            
            success:function(data)
            {
               
              $("#result").html(data);
            }
          });*/

          
      });
    });


  </script>












<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  //modal.find('.modal-title').text('New message to ' + recipient)
 // modal.find('.modal-body input').val(recipient)
  modal.find('.price input').val(recipient)
  modal.find('.modaltitle').text(recipient + ' /Ticket')
  
})
</script>


<!-- Ticket holder names jq Starts -->
    
    <script type="text/javascript">
        $('document').ready(function()
            {
            $('#ticketQuantity').change(function() {
               
               var quantity = $('#ticketQuantity').val();
                if(quantity == 1){
                  //console.log('hello');
                   $(".name1").css("margin-bottom", "10px");
                   $("#tickets1").css("padding-left","10px");
                   $("#tickets1").css("width","100%");
                   $("#tickets1").css("height", "35px");
                   if($(window).width() < 997)
                   {
                   
                     $("#tickets1").css("height", "105px");
                     $("#tickets1").css("font-size", "30px");
                   
                   }
                   $("#tickets1").show().css("border", "1px solid red");
                   
                   $("#tickets2").hide();
                   
                   $("#tickets3").hide();
                   
                   $("#tickets4").hide();
                   
                   $("#tickets5").hide();
               }
               if(quantity == 2){
                  //console.log('hello');
                  
                   $("#tickets1").css("height", "35px");
                   $("#tickets1").css("padding-left","10px");
                   $("#tickets1").css("width","100%");
                   $("#tickets1").show().css("border", "1px solid red");
                   if($(window).width() < 997)
                   {
                   
                     $("#tickets1").css("height", "105px");
                     $("#tickets1").css("font-size", "30px");
                   
                   }
                  
                   
                   $(".name2").css("margin-top", "-5px");
                   $("#tickets2").css("padding-left","10px");
                   $("#tickets2").css("width","100%");
                   $("#tickets2").css("height", "35px");
                   $("#tickets2").show().css("border", "1px solid red");
                   if($(window).width() < 997)
                   {
                   
                     $("#tickets2").css("height", "105px");
                     $("#tickets2").css("font-size", "30px");
                   
                   }
                   
                   $("#tickets3").hide();
                   
                   $("#tickets4").hide();
                   
                   $("#tickets5").hide();
               }
               else if(quantity == 3){
                  //console.log('hello');
                   $("#tickets1").css("height", "35px");
                   $("#tickets1").css("padding-left","10px");
                   $("#tickets1").css("width","100%");
                   $("#tickets1").show().css("border", "1px solid red");
                   if($(window).width() < 997)
                   {
                   
                     $("#tickets1").css("height", "105px");
                     $("#tickets1").css("font-size", "30px");
                   
                   }
                   
                   $(".name2").css("margin-top", "-5px");
                   $("#tickets2").css("padding-left","10px");
                   $("#tickets2").css("width","100%");
                   $("#tickets2").css("height", "35px");
                   $("#tickets2").show().css("border", "1px solid red");
                   if($(window).width() < 997)
                   {
                   
                     $("#tickets2").css("height", "105px");
                     $("#tickets2").css("font-size", "30px");
                   
                   }
                   
                   $(".name3").css("margin-top", "-5px");
                   $("#tickets3").css("padding-left","10px");
                   $("#tickets3").css("width","100%");
                   $("#tickets3").css("height", "35px")
                   $("#tickets3").show().css("border", "1px solid red");
                   if($(window).width() < 997)
                   {
                   
                     $("#tickets3").css("height", "105px");
                     $("#tickets3").css("font-size", "30px");
                   
                   }
                   
                   $("#tickets4").hide();
                   
                   $("#tickets5").hide();
               }
               else if(quantity == 4){
                  //console.log('hello');
                   $("#tickets1").css("height", "35px");
                   $("#tickets1").css("padding-left","10px");
                   $("#tickets1").css("width","100%");
                   $("#tickets1").show().css("border", "1px solid red");
                   if($(window).width() < 997)
                   {
                   
                     $("#tickets1").css("height", "105px");
                     $("#tickets1").css("font-size", "30px");
                   
                   }
                   
                   $(".name2").css("margin-top", "-5px");
                   $("#tickets2").css("padding-left","10px");
                   $("#tickets2").css("width","100%");
                   $("#tickets2").css("height", "35px");
                   $("#tickets2").show().css("border", "1px solid red");
                   if($(window).width() < 997)
                   {
                   
                     $("#tickets2").css("height", "105px");
                     $("#tickets2").css("font-size", "30px");
                   
                   }
                   
                   $(".name3").css("margin-top", "-5px");
                   $("#tickets3").css("padding-left","10px");
                   $("#tickets3").css("width","100%");
                   $("#tickets3").css("height", "35px");
                   $("#tickets3").show().css("border", "1px solid red");
                   if($(window).width() < 997)
                   {
                   
                     $("#tickets3").css("height", "105px");
                     $("#tickets3").css("font-size", "30px");
                   
                   }
                   
                   $(".name4").css("margin-top", "-5px");
                   $("#tickets4").css("padding-left","10px");
                   $("#tickets4").css("width","100%");
                   $("#tickets4").css("height", "35px");
                   $("#tickets4").show().css("border", "1px solid red");
                   if($(window).width() < 997)
                   {
                   
                     $("#tickets4").css("height", "105px");
                     $("#tickets4").css("font-size", "30px");
                   
                   }
                   
                   $("#tickets5").hide();
               }
               else if(quantity == 5){
                  //console.log('hello');
                   $("#tickets1").css("height", "35px");
                   $("#tickets1").css("padding-left","10px");
                   $("#tickets1").css("width","100%");
                   $("#tickets1").show().css("border", "1px solid red");
                   if($(window).width() < 997)
                   {
                   
                     $("#tickets1").css("height", "105px");
                     $("#tickets1").css("font-size", "30px");
                   
                   }
                   
                   $(".name2").css("margin-top", "-5px");
                   $("#tickets2").css("padding-left","10px");
                   $("#tickets2").css("width","100%");
                   $("#tickets2").css("height", "35px");
                   $("#tickets2").show().css("border", "1px solid red");
                   if($(window).width() < 997)
                   {
                   
                     $("#tickets2").css("height", "105px");
                     $("#tickets2").css("font-size", "30px");
                   
                   }
                   
                   $(".name3").css("margin-top", "-5px");
                   $("#tickets3").css("padding-left","10px");
                   $("#tickets3").css("width","100%");
                   $("#tickets3").css("height", "35px");
                   $("#tickets3").show().css("border", "1px solid red");
                   if($(window).width() < 997)
                   {
                   
                     $("#tickets3").css("height", "105px");
                     $("#tickets3").css("font-size", "30px");
                   
                   }
                   
                   $(".name4").css("margin-top", "-5px");
                   $("#tickets4").css("padding-left","10px");
                   $("#tickets4").css("width","100%");
                   $("#tickets4").css("height", "35px");
                   $("#tickets4").show().css("border", "1px solid red");
                   if($(window).width() < 997)
                   {
                   
                     $("#tickets4").css("height", "105px");
                     $("#tickets4").css("font-size", "30px");
                   
                   }
                   
                   $(".name5").css("margin-top", "-5px");
                   $("#tickets5").css("padding-left","10px");
                   $("#tickets5").css("width","100%");
                   $("#tickets5").css("height", "35px");
                   $("#tickets5").show().css("border", "1px solid red");
                   if($(window).width() < 997)
                   {
                   
                     $("#tickets5").css("height", "105px");
                     $("#tickets5").css("font-size", "30px");
                   
                   }
               }
              
                });
                
                
                
                $("#tickets1").click(function(){
                    $("#tickets1").show().css("border", "1px solid blue");
                });
                
                $("#tickets2").click(function(){
                    $("#tickets2").show().css("border", "1px solid blue");
                });
                $("#tickets3").click(function(){
                    $("#tickets3").show().css("border", "1px solid blue");
                });
                $("#tickets4").click(function(){
                    $("#tickets4").show().css("border", "1px solid blue");
                });
                $("#tickets5").click(function(){
                    $("#tickets5").show().css("border", "1px solid blue");
                });
            });
    </script>
    
    <!-- Show message after newsletter form submit -->
  <script type="text/javascript">
        $('document').ready(function()
            {
            $('#subscribe-form').ajaxForm( {
                target: '#preview',
                success: function() {       
                      $('#preview').addClass( "show_message" );
                    }
                });
            });
    </script>
    
<!--<script src="js/jquery.js"></script>-->
 





</body>
</html>



















 

