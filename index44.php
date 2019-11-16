<!DOCTYPE html>
<html>
  <head>
	<title>Maroon Entertainment</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	
	
	<!-- Included Google Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" rel='stylesheet' type='text/css'>
	<link href="http://fonts.googleapis.com/css?family=Merriweather:400,300,700,900,300italic,400italic,700italic,900italic" rel='stylesheet' type='text/css'>
	
	
	<!-- CSS Files comes here -->
	<link href="css/grid12.css" rel="stylesheet" media="screen">                              	 <!-- Grid System -->
	<link href="css/james_typography.css" rel="stylesheet" media="screen">                       <!-- James Framework - TYPOGRAPHY -->
	<link href="css/main.css" rel="stylesheet" media="screen">                                   <!-- Main CSS file -->
    <link href="css/color_scheme_dark.css" rel="stylesheet" media="screen">                      <!-- Color scheme (dark/light)-->
	<link href="css/colors/color_palette_blue.css" rel="stylesheet" media="screen">              <!-- Color palette -->
	<link href="css/rapid-icons.css" rel="stylesheet" media="screen">                            <!-- James Framework - ICONS -->
	<link href="css/js_styles/jquery.maximage.min.css" rel="stylesheet" media="screen">          <!-- MaxImage background image slideshow -->
	<link href="css/responsivity.css" rel="stylesheet" media="screen">                           <!-- Responsive Fixes -->
	<link href="css/animate.css" rel="stylesheet" media="screen">                                <!-- Animate - animations -->
	<link href="css/nivo-lightbox.css" rel="stylesheet" media="screen">                          <!-- Lightbox Styles -->
    <link href="css/nivo_lightbox_themes/default/default.css" rel="stylesheet" media="screen">   <!-- Lightbox Styles -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">                           <!-- Owl - Carousel -->
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">                      		 <!-- Owl - Carousel -->
    <link href="css/owl.transitions.css" rel="stylesheet" media="screen">                        <!-- Owl - Carousel -->
    
    
    
    
    <link href="fonts/css/font-awesome.min.css" rel="stylesheet" media="screen">
    
    
    
    
	<!-- Modernizer and IE specyfic files -->  
	<script src="js/modernizr.custom.js"></script>
	
	<!--[if IE 9]>
    	<link href="css/ie.css" rel="stylesheet" media="screen">
    <![endif]--> 
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	   
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	   
	   
  </head>
  
  <body>


  
	<!-- Mobile nav -->      
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
	    <div class="mobile_nav_close_button"><a href="" id="hideRight"><div data-icon="&#xe13f;" class="button_icon close_icon"></div></a></div>
	    <nav id="mobile_menu_content">
	    	<a href="#home" >Home</a>
	        <a href="#more_info" >Features</a>
	        <a href="#about_video" >Video</a>
	        <a href="#reviews" >Clients</a>
	        <a href="#screenshots" >Screenshots</a>
	        <a href="#pricing" >Pricing</a>
	        <a href="#team" >Team</a>
	        <a href="#cta_download" >Download</a>
	        <a href="#contact" >Contact</a>
	    </nav>
	</div>
	<!-- //Mobile nav -->
  
	<div id="preloader_container">
	    
	    <!-- Preloader Screen -->
		<header class="preloader_header">	 
	        <div class="preloader_loader">
	            <svg class="preloader_inner" width="60px" height="60px" viewBox="0 0 80 80">
	                <path class="preloader_loader_circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
	                <path id="preloader_loader_circle" class="preloader_loader_circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
	            </svg>
	        </div>
	    </header>
	    <!-- //Preloader Screen -->
	
	
	



<style>
    #tickets1,#tickets2,#tickets3,#tickets4,#tickets5
    {
        display:none;
    }
    #name,#email,#mobile
    {
        padding-left:10px;
        width:97%;
        height:40px;
        border:1px solid black;
    }
</style>






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
        <form method="post" action="payments/pay.php">
			          <div class="form-group">
			            
			            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name Here" required>
			          </div>

			          <div class="form-group">
			           
			            <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email Here" required>
		              </div>

		              <div class="form-group">
			            
			            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Your Mobile No. Here" required>
		              </div>

		              <div class="price form-group">
			            
			            <input type="hidden" class="form-control" name="tickets" id="tickets" required>
		              </div>

                      <div class="modaltitle form-group"> <br></div>
			 
		              

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
		                <input type="text" class="form-control" name="tickets1" id="tickets1" placeholder="Enter Ticket Holder Name" required>
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
		                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		                  <input type="submit" class="btn btn-primary" name="submit" value="Pay Now">
		              </div>
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
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 align-center pricing_anim3">
						<div class="pricing_box pricing_box_featured">
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
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 align-center pricing_anim3">
						<div class="pricing_box pricing_box_featured">
							<div data-icon="&#xe064;" class="iconbox_icon"></div>
							<h6>VIP Couple</h6>
							<p>This ticket grants entry to 2 person</p>
							<div class="pricing_box_price"><h3><i class="fa fa-inr" aria-hidden="true"></i> 9</h3></div>
							
							<div>
								<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="9">Book Now</button>
								<p>Max 5 tickets per transaction.</p>
							</div>
							
						</div>
					</div>
					<!-- //Pricing box -->
					
					<!-- Pricing box -->
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 align-center pricing_anim3">
						<div class="pricing_box pricing_box_featured">
							<div data-icon="&#xe064;" class="iconbox_icon"></div>
							<h6>VIP seating</h6>
							<p>This ticket grants entry to 1 person</p>
							<div class="pricing_box_price"><h3><i class="fa fa-inr" aria-hidden="true"></i> 3000</h3></div>
							
							<div>
								<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="3000">Book Now</button>
								<p>Max 5 tickets per transaction.</p>
							</div>
							
						</div>
					</div>
					<!-- //Pricing box -->
					
					<!-- Pricing box -->
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 align-center pricing_anim3">
						<div class="pricing_box pricing_box_featured">
							<div data-icon="&#xe064;" class="iconbox_icon"></div>
							<h6>gold seating</h6>
							<p>This ticket grants entry to 1 person</p>
							<div class="pricing_box_price"><h3><i class="fa fa-inr" aria-hidden="true"></i> 1500</h3></div>
							
							<div>
								<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="1500">Book Now</button>
								<p>Max 5 tickets per transaction.</p>
							</div>
							
						</div>
					</div>
					<!-- //Pricing box -->
					
					<!-- Pricing box -->
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 align-center pricing_anim3">
						<div class="pricing_box pricing_box_featured">
							<div data-icon="&#xe064;" class="iconbox_icon"></div>
							<h6>Vip rocker standing</h6>
							<p>This ticket grants entry to 1 person</p>
							<div class="pricing_box_price"><h3><i class="fa fa-inr" aria-hidden="true"></i> 1000</h3></div>
							
							<div>
								<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="1000">Book Now</button>
								<p>Max 5 tickets per transaction.</p>
							</div>
							
						</div>
					</div>
					<!-- //Pricing box -->
					
					
					<!-- Pricing box -->
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 align-center pricing_anim3">
						<div class="pricing_box pricing_box_featured">
							<div data-icon="&#xe064;" class="iconbox_icon"></div>
							<h6>rocker standing</h6>
							<p>This ticket grants entry to 1 person</p>
							<div class="pricing_box_price"><h3><i class="fa fa-inr" aria-hidden="true"></i> 500</h3></div>
							
							<div>
								<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="500">Book Now</button>
								<p>Max 5 tickets per transaction.</p>
							</div>
							
						</div>
					</div>
					<!-- //Pricing box -->
					
				</div>						
			</div>	
	
	<hr style="border-color:gray; width:82%;"/>
	
	
<style>
    .address,.email,.mobile
    {
        width:31%;
        height:100px;
        background-color:transparent;
        margin-left:15px;
        text-align:center;
       
    }
</style>		
		<!-- Contact #################### -->
		<section id="contact" class="subsection background_color1">
			<div class="container">
			    <center><h4>You can buy tickets from given address below</h4></center><br><br>
				<div class="row">
					
					
					<div class="address">
						<h6>ADDRESS</h6>
						<p>Sandwich Junction Beside NIT GE Road Raipur</p>
					</div>

					<div class="email">
						<h6>EMAIL</h6>
						<p>info@maroonentertainment.in</p>
					</div>

					<div class="mobile">
						<h6>MOBILE</h6>
						<p>+91 9111199998 / 9285578949</p>
					</div>

				</div>				
			</div>
		</section>
		<!-- //Contact -->
		
		<!-- Footer #################### -->
		<section id="footer" class="subsection background_color2 ">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center">
					
						<!-- Social Icons -->
						<div class="social_icons_container align-center">
						  	<div class="social_icons">
				                <ul>
				                    <li><div data-icon="&#xe282;" class="social_icon twitter_icon" onclick="location.href='#'"></div></li>
				                    <li><div data-icon="&#xe281;" class="social_icon facebook_icon" onclick="location.href='#'"></div></li>
				                    <li><div data-icon="&#xe279;" class="social_icon linkdin_icon" onclick="location.href='#'"></div></li>
				                    <li><div data-icon="&#xe27f;" class="social_icon dribbble_icon" onclick="location.href='#'"></div></li>
				                </ul>
						    </div>
					    </div>	
						<!-- //Social Icons -->

					<p>Copyright © 2015 SPOT, Made with ❤ by Mat Przegietka</p>	
					</div>
				</div>				
			</div>
		</section>
		<!-- //Footer -->
		

		
		
		
		
		
	</div>
	<!-- //preloader -->
	

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






   
	<!-- JavaScript plugins comes here -->	
    <script src="js/jquery-2.1.3.min.js"></script>        <!-- jQuery -->
    <script src="js/jquery.easing.min.js"></script>       <!-- jQuery easing -->    
    <script src="js/jquery.scrollTo.js"></script>         <!-- Scroll to -->
    <script src="js/jquery.cycle.all.min.js"></script>    <!-- jQuery cycle -->
    <script src="js/jquery.form.js"></script>    		  <!-- jQuery form -->
    <script src="js/jquery.maximage.min.js"></script>     <!-- MaxImage background image slideshow -->
    <script src="js/classie.js"></script>                 <!-- Class helper function -->
	<script src="js/pathLoader.js"></script>              <!-- Preloader Loading Animation -->
	<script src="js/preloader.js"></script>               <!-- Preloader -->
    <script src="js/retina.js"></script>                  <!-- Retina.js - support for HiDPI Displays -->
    <script src="js/waypoints.min.js"></script>           <!-- Waypoints -->
    <script src="js/materialize.js"></script>     		  <!-- Materialize -->
    <script src="js/nivo-lightbox.min.js"></script>       <!-- Lightbox/Modalbox -->
    <script src="js/jquery.fitvids.js"></script>      	  <!-- Responsive Video -->
    <script src="js/owl.carousel.js"></script>      	  <!-- Owl Carousel --> 
    <script src="js/main.js"></script>                    <!-- Main Js file -->
    
    
    
    
    <!-- Ticket holder names jq Starts -->
    
    <script type="text/javascript">
        $('document').ready(function()
            {
            $('#ticketQuantity').change(function() {
               
               var quantity = $('#ticketQuantity').val();
                if(quantity == 1){
                  //console.log('hello');
                   $(".name1").css("margin-bottom", "25px");
                   $("#tickets1").css("padding-left","10px");
                   $("#tickets1").css("width","97%");
                   $("#tickets1").css("height", "35px");
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
                   $("#tickets1").css("width","97%");
                   $("#tickets1").show().css("border", "1px solid red");
                   
                  
                   
                   $(".name2").css("margin-top", "-25px");
                   $("#tickets2").css("padding-left","10px");
                   $("#tickets2").css("width","97%");
                   $("#tickets2").css("height", "35px");
                   $("#tickets2").show().css("border", "1px solid red");
                   
                   $("#tickets3").hide();
                   
                   $("#tickets4").hide();
                   
                   $("#tickets5").hide();
               }
               else if(quantity == 3){
                  //console.log('hello');
                   $("#tickets1").css("height", "35px");
                   $("#tickets1").css("padding-left","10px");
                   $("#tickets1").css("width","97%");
                   $("#tickets1").show().css("border", "1px solid red");
                   
                   $(".name2").css("margin-top", "-25px");
                   $("#tickets2").css("padding-left","10px");
                   $("#tickets2").css("width","97%");
                   $("#tickets2").css("height", "35px");
                   $("#tickets2").show().css("border", "1px solid red");
                   
                   $(".name3").css("margin-top", "-25px");
                   $("#tickets3").css("padding-left","10px");
                   $("#tickets3").css("width","97%");
                   $("#tickets3").css("height", "35px")
                   $("#tickets3").show().css("border", "1px solid red");
                   
                   $("#tickets4").hide();
                   
                   $("#tickets5").hide();
               }
               else if(quantity == 4){
                  //console.log('hello');
                   $("#tickets1").css("height", "35px");
                   $("#tickets1").css("padding-left","10px");
                   $("#tickets1").css("width","97%");
                   $("#tickets1").show().css("border", "1px solid red");
                   
                   $(".name2").css("margin-top", "-25px");
                   $("#tickets2").css("padding-left","10px");
                   $("#tickets2").css("width","97%");
                   $("#tickets2").css("height", "35px");
                   $("#tickets2").show().css("border", "1px solid red");
                   
                   $(".name3").css("margin-top", "-25px");
                   $("#tickets3").css("padding-left","10px");
                   $("#tickets3").css("width","97%");
                   $("#tickets3").css("height", "35px");
                   $("#tickets3").show().css("border", "1px solid red");
                   
                   $(".name4").css("margin-top", "-25px");
                   $("#tickets4").css("padding-left","10px");
                   $("#tickets4").css("width","97%");
                   $("#tickets4").css("height", "35px");
                   $("#tickets4").show().css("border", "1px solid red");
                   
                   $("#tickets5").hide();
               }
               else if(quantity == 5){
                  //console.log('hello');
                   $("#tickets1").css("height", "35px");
                   $("#tickets1").css("padding-left","10px");
                   $("#tickets1").css("width","97%");
                   $("#tickets1").show().css("border", "1px solid red");
                   
                   $(".name2").css("margin-top", "-25px");
                   $("#tickets2").css("padding-left","10px");
                   $("#tickets2").css("width","97%");
                   $("#tickets2").css("height", "35px");
                   $("#tickets2").show().css("border", "1px solid red");
                   
                   $(".name3").css("margin-top", "-25px");
                   $("#tickets3").css("padding-left","10px");
                   $("#tickets3").css("width","97%");
                   $("#tickets3").css("height", "35px");
                   $("#tickets3").show().css("border", "1px solid red");
                   
                   $(".name4").css("margin-top", "-25px");
                   $("#tickets4").css("padding-left","10px");
                   $("#tickets4").css("width","97%");
                   $("#tickets4").css("height", "35px");
                   $("#tickets4").show().css("border", "1px solid red");
                   
                   $(".name5").css("margin-top", "-25px");
                   $("#tickets5").css("padding-left","10px");
                   $("#tickets5").css("width","97%");
                   $("#tickets5").css("height", "35px");
                   $("#tickets5").show().css("border", "1px solid red");
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
    
    <!-- Ticket holder names jq ends -->
    
    
    
    
    
    
    
    
    
    
    
    
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

    <!-- MOBILE NAVIGATION -->
    <script>
        var showRight = document.getElementById( 'showRight' ),
        hideRight = document.getElementById( 'hideRight' ),
        menuRight = document.getElementById( 'cbp-spmenu-s2' ),
        body = document.body;
        
        showRight.onclick = function(event) {
       		"use strict";
       		event.preventDefault();
            classie.toggle( this, 'active' );
            classie.toggle( menuRight, 'cbp-spmenu-open' );
            disableOther( 'showRight' );
            return false;
        };
    
        hideRight.onclick = function(event) {
        	"use strict";
        	event.preventDefault();
            classie.toggle( this, 'active' );
            classie.toggle( menuRight, 'cbp-spmenu-open' );
            disableOther( 'showRight' );
            return false;
        };
    </script>
    
    
    <!-- Nav Bar show/hide after scrolling -->
	<script>
	var $head = $( '#menu_bar' );
	$( '.menu_bar-waypoint' ).each( function(i) {
		var $el = $( this ),
			animClassDown = $el.data( 'animateDown' ),
			animClassUp = $el.data( 'animateUp' );
			

		$el.waypoint( function( direction ) {
			if( direction === 'down' && animClassDown ) {
				$head.attr('class', 'menu_bar ' + animClassDown);
			}
			else if( direction === 'up' && animClassUp ){
				$head.attr('class', 'menu_bar ' + animClassUp);
			}
		}, { offset: function() {
			navbarheight = $("#menu_bar").outerHeight()+1;
			return navbarheight;
			}
		 } );
	} );
	</script>





    
  </body>
</html>