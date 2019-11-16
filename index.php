<!DOCTYPE html>
<html>
  <head>
	<title>Maroon Entertainment</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	
	
	<!-- Included Google Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" rel='stylesheet' type='text/css'>
	<link href="http://fonts.googleapis.com/css?family=Merriweather:400,300,700,900,300italic,400italic,700italic,900italic" rel='stylesheet' type='text/css'>

	<link href="css/james_typography.css" rel="stylesheet" media="screen">   
    <link href="css/color_scheme_dark.css" rel="stylesheet" media="screen">   	
	<link href="css/main.css" rel="stylesheet" media="screen">                                   
    <link href="css/colors/color_palette_blue.css" rel="stylesheet" media="screen">              
     <link href="css/responsivity.css" rel="stylesheet" media="screen">   
<link href="css/rapid-icons.css" rel="stylesheet" media="screen">  	<!-- icon  -->   
	
	<link href="css/nivo-lightbox.css" rel="stylesheet" media="screen">    
    <link href="css/animate.css" rel="stylesheet" media="screen">   
    <link href="css/nivo_lightbox_themes/default/default.css" rel="stylesheet" media="screen">      
   <link href="css/owl.transitions.css" rel="stylesheet" media="screen">       
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen">                          
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">                      		 
    <link href="css/owl.transitions.css" rel="stylesheet" media="screen">            
    <link href="css/js_styles/jquery.maximage.min.css" rel="stylesheet" media="screen">
	 <link href="css/grid12.css" rel="stylesheet" media="screen">  

	<link href="css/nivo-lightbox.css" rel="stylesheet" media="screen">    
    <link href="css/animate.css" rel="stylesheet" media="screen">   
    <link href="css/nivo_lightbox_themes/default/default.css" rel="stylesheet" media="screen"> 
<link href="css/grid12.css" rel="stylesheet" media="screen">	
    
	<!-- Modernizer and IE specyfic files --> 
	 
	<script src="js/modernizr.custom.js"></script>
	

    	<link href="css/ie.css" rel="stylesheet" media="screen">

 
     
    
    <link href="fonts/css/font-awesome.min.css" rel="stylesheet" media="screen">
    	
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 
 
	   
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    
	   
	   
  </head>
  
  <body>
  
  
  
  <div class="modal fade" id="exampleModalone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelone" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content mobsize">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelone">Find Your Ticket Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="findTkt.php" method="post">
        
                <div class="form-group"> 
                  <input type="email" class="form-control" name="fEmail" id="fEmail" placeholder="Enter Your Email" required>
                </div>

                <div class="form-group"> 
                  <input type="text" class="form-control" name="fMobile" id="fMobile" placeholder="Enter Your Mobile No." required>
                </div>
                  
                  
                  <div class="btnn">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Close</button>
                      <input type="submit" class="btn btn-primary" name="findtkt" value="Find" id="findtkt">
                      <!--<a class="btn btn-success" name="submitOff" id="submitOff" style="color: white;">Pay Offline</a>-->
                  </div>
                  <div id="result"></div>
                </form>
            
      </div>
      <div class="modal-footer">

        
      </div>
    </div>
  </div>
</div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
	<!-- Mobile nav -->      
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
	    <div class="mobile_nav_close_button"><a href="" id="hideRight"><div data-icon="&#xe13f;" class="button_icon close_icon"></div></a></div>
	    <nav id="mobile_menu_content">
	    	<a href="#home" >Previous Concerts</a>
	        <a href="#more_info" >Upcoming</a>
	        <a href="#about_video" >Tickets</a>
	        <!--<a href="#reviews" >Gallery</a> -->
	        <a href="#screenshots" >Gallery</a>
	        <a href="#pricing" >Pricing</a>
	       <!-- <a href="#team" >Team</a> -->
	        <a href="#cta_download" >Our Associates</a>
	        <a href="#contact" >Contact us </a>
	        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModalone">Find Your Tickets</button>
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
	
	

		<!-- Fullscreen homepage -->
		<section class="hero_fullscreen background_solid solid_02 menu_bar-waypoint" data-animate-down="menu_bar-hide" data-animate-up="menu_bar-hide" id="home">
		<!-- This section class is where you can edit background choice (background_single, background_slider, background_video) you can also enable gradient overlay (gradient_overlay)-->
		


		
		  	<div class="container top_bar" >
		  		<div class="row">
		  			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center home_anim1">
		  			    <br /><br /><br /><br /><br /><br /><br />
		  			<!-- Logo and navigation 	<img src="images/logo_home.png" alt="logo" class="logo_home"  width="180px" height="150px" />//Logo and navigation -->
		  			</div>
		  		</div> 
			</div>
			
			
			<!-- Main content -->
		  	<div class="container align-center" id="main_content">
				<div class="content_container row" >
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 home_content">
					
					    <!-- Available Area -->
						<div class="available_area home_anim2">
				
						</div>
						<!-- //Available Area -->

						<h2 class="slogan home_anim3"></h2>
						
						<!-- CTA Buttons -->
					<div class="cta_button_area home_anim4">
						    
								<div>
								    <br/> <br/> <br/>
								    <!--<button class="btn"  onclick="window.location.href='#pricing'">Book Tickets </button>--></div>
						</div>
						<!-- //CTA Buttons-->
									
					</div>
				</div>			
			</div>  
			<!-- //Main content -->
			
		
			
			<!-- Single Image Background -->
			<div id="maximage_single">
				<img src="images/home_backgrounds/home_bg_02_blue.jpg" alt=""/>
			</div>
			<!-- //Single Image Background -->
			
			
		</section>
		<!-- //Homepage -->
		
		<!-- Menu bar -->
		<header id="menu_bar" class="menu_bar">
			<div class="container">
			
				<a href="" class="go_to_home logo_light logo"><img src="images/logo_light.png" alt="logo" style="margin-top:-25px;" /></a>
				<nav class="menu_bar_navigation">
	  				<ul>
					
					
	  					<li class="visible-lg visible-md"><a href="#more_info" class="go_to_overview" >Previous Concerts</a></li>
	  					<li class="visible-lg visible-md"><a href="#about_video" >Upcoming</a></li>
	  					<!--<li class="visible-lg visible-md"><a href="#reviews" >Clients</a></li> -->
	  					<li class="visible-lg visible-md"><a href="#screenshots" >Gallery</a></li>
	  					<li class="visible-lg visible-md"><a href="#pricing" >Book Tickets</a></li>
	  					<!--<li class="visible-lg visible-md"><a href="#team" ></a></li> -->
	  					<li class="visible-lg visible-md"><a href="#cta_download" >Our Associates</a></li>
	  					<li class="visible-lg visible-md"><a href="#contact" >Contact</a></li>
	  					<li class="visible-lg visible-md"><a href="" data-toggle="modal" data-target="#exampleModalone">Find Your Tickets</a></li>
	  					<li class="hidden-lg hidden-md"><div class="mobile_nav_open_button "><a href="" id="showRight"><div data-icon="&#xe2f3;" class="button_icon close_icon"></div></a></div></li>
	  				</ul>
	  			</nav>
			</div>
		</header>
	
		<!-- Logos #################### -->
		<section id="reviews_logos" class="menu_bar-waypoint subsection background_color2" data-animate-down="menu_bar-show" data-animate-up="menu_bar-hide">
			<div class="container">
			
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center">
						<div class="intro">
							<h6 style="color:black;">Live Concerts!</h6>
						</div>
					</div>
				</div>
				
				<div class="row" style="align:center;">

					<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 reviews_logo "><img src="images/reviews_logos/logo1.png" alt=""></div>
					
					<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 reviews_logo "><img src="images/reviews_logos/logo2.png" alt=""></div>
					
					<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 reviews_logo "><img src="images/reviews_logos/logo3.png" alt=""></div>					
					<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 reviews_logo "><img src="images/reviews_logos/logo4.png" alt=""></div>

					<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 reviews_logo "><img src="images/reviews_logos/spon.png" alt=""></div>					
					<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 reviews_logo "><img src="images/reviews_logos/asso.png" alt=""></div>
					
				</div>
					
			</div>
		</section> 
		<!-- //Logos-->
		
		
		<!-- More Info #################### -->
		<section id="more_info" class="subsection background_color1">
			<div class="container">
			
				<!-- INTRO -->
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center more_info_anim1">
						<div class="intro">
							<h3>Previous Concerts</h3>
							<h5>14+ Concerts 34+ Artists </h5>
						</div>
					</div>
				</div>
				<!-- //INTRO -->
				
				
				<!-- Feature 1 - right image -->
			<div class="row feature_box" id="feature2">
				
					
				<div class="row feature_box_center" id="feature3">

					
					<!-- //Image - mobile display -->
					
					<!-- Content - left column -->
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 align-left feature_box_center_content_row">
						<div class="row">
						    <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12 more_info_anim7">
								<div class="feature_content">
									<h6>KK</h6>
									<p>15 Oct 2016  Venue - Naya Raipur</p>
								</div>
							</div>
							
							<div class="col-xs-6 col-sm-6 col-md-12 col-lg-12 more_info_anim8">
								<div class="feature_content">
									<h6>USHA UTHUP</h6>
									<p>25 June 2017 Venue - Naya Raipur</p>
								</div>
							</div>
						</div>
					</div>
					<!-- //Content - left column -->
				
				    <!-- Image - destop display -->
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 align-center visible-md visible-lg more_info_anim6">
						<div class="feature_image">
							<img src="images/mockups/1.gif" alt="" class="img_responsive">
						</div>
					</div>
					<!-- //Image - destop display -->
			
					<!-- Content - right column -->
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 align-left feature_box_center_content_row">
						<div class="row">
						    <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12 more_info_anim9">
								<div class="feature_content">
									<h6>ANKIT TIWARI</h6>
									<p>30 July 2017 Venue - Indoor Stadium Raipur</p>
								</div>
							</div>
							
							<div class="col-xs-6 col-sm-6 col-md-12 col-lg-12 more_info_anim10">
								<div class="feature_content">
									<h6>MANCH</h6>
									<p>7 Oct 2017 Venue - Phoneix Market City Bangalore</p>
								</div>
							</div>		
						</div>
					</div>
					<!-- //Content - right column -->
					
				</div>
			</div>		
			
			<div class="row feature_box" id="feature2">
				
					
				<div class="row feature_box_center" id="feature3">

					
					<!-- //Image - mobile display -->
					
					<!-- Content - left column -->
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 align-left feature_box_center_content_row">
						<div class="row">
						    <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12 more_info_anim7">
								<div class="feature_content">
									<h6>SPUNK BAND</h6>
									<p>29 Oct 2017 Venue - Oriana 2017 AIIMS Raipur</p>
								</div>
							</div>
							
							<div class="col-xs-6 col-sm-6 col-md-12 col-lg-12 more_info_anim8">
								<div class="feature_content">
									<h6>ACRO SOUND & TERI MIKO EDM NITE</h6>
									<p>30 Oct 2017 Venue - Oriana 2017 AIIMS Raipur</p>
								</div>
							</div>
						</div>
					</div>
					<!-- //Content - left column -->
				
				    <!-- Image - destop display -->
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 align-center visible-md visible-lg more_info_anim6">
						<div class="feature_image">
							<img src="images/mockups/2.gif" alt="" class="img_responsive">
						</div>
					</div>
					<!-- //Image - destop display -->
			
					<!-- Content - right column -->
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 align-left feature_box_center_content_row">
						<div class="row">
						    <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12 more_info_anim9">
								<div class="feature_content">
									<h6>KUNAL KAMRA - STAND UP COMEDY</h6>
									<p>31 Oct 2017 Venue - Oriana 2017 AIIMS Raipur</p>
								</div>
							</div>
							
							<div class="col-xs-6 col-sm-6 col-md-12 col-lg-12 more_info_anim10">
								<div class="feature_content">
									<h6>WADALI BROTHERS</h6>
									<p>8 Oct 2017 Venue - Phoneix Market City Bangalore</p>
								</div>
							</div>		
						</div>
					</div>
					<!-- //Content - right column -->
					
				</div>
			</div>		
			
			
				<!-- //Feature 1 - right image -->
				
				<!-- Feature 2 - left image -->
				<div class="row feature_box" id="feature2">
				
					
				<div class="row feature_box_center" id="feature3">

					
					<!-- //Image - mobile display -->
					
					<!-- Content - left column -->
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 align-left feature_box_center_content_row">
						<div class="row">
						    <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12 more_info_anim7">
								<div class="feature_content">
									<h6>ANKIT TIWARI</h6>
									<p>14 Oct 2017 Venue - Phoneix Market City Bangalore</p>
								</div>
							</div>
							
							<div class="col-xs-6 col-sm-6 col-md-12 col-lg-12 more_info_anim8">
								<div class="feature_content">
									<h6>KARSH KALE-COLLECTIVE</h6>
									<p>31 Oct 2017 Venue - Oriana 2017 AIIMS Raipur</p>
								</div>
							</div>
						</div>
					</div>
					<!-- //Content - left column -->
				
				    <!-- Image - destop display -->
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 align-center visible-md visible-lg more_info_anim6">
						<div class="feature_image">
							<img src="images/mockups/3.gif" alt="" class="img_responsive">
						</div>
					</div>
					<!-- //Image - destop display -->
			
					<!-- Content - right column -->
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 align-left feature_box_center_content_row">
						<div class="row">
						    <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12 more_info_anim9">
								<div class="feature_content">
									<h6>SUKHWINDER SINGH</h6>
									<p>31 Oct 2017 Venue - Rajyotsav Naya Raipur</p>
								</div>
							</div>
							
							<div class="col-xs-6 col-sm-6 col-md-12 col-lg-12 more_info_anim10">
								<div class="feature_content">
									<h6>SHILPA RAO</h6>
									<p>31 Oct 2017 Venue - Oriana 2017 AIIMS Raipur</p>
								</div>
							</div>		
						</div>
					</div>
					<!-- //Content - right column -->
					
				</div>
			</div>		
		</section>
		<!-- //More info -->
		
		
		<!-- About - Video #################### -->
		<section id="about_video" class="">
			<div class="container">
			    <!-- INTRO -->
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center about_video_anim1">
						<div class="intro">
							<h3 style="color:black;">Diljit Dosanjh Live in Raipur </h3>
							<h5 style="color: black;">This Lohri Maroon Entertainment is coming to Raipur again, Get a taste of the happiest music festival in a power packed day with incredible performance by The Star Diljit Dosanjh.Join us and Experience the vibes.</h5>
						</div>
					</div>
				</div>
				<!-- //INTRO -->
				
				<!-- Video -->
				<!--<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 align-center about_video_anim2">
						<div class="about_video_player">
							<iframe src="//player.vimeo.com/video/120433187?title=0&amp;byline=0&amp;portrait=0" width="500" height="281"></iframe>
						</div>
					</div>
				</div> -->
				<!-- //Video -->
				
			<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 align-center about_video_anim2">
							<img src="images/dil.png" alt="" class="img_responsive">
						</div>
					</div>
				
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 align-center about_video_anim3">
						<div class="feature_content">
							<div data-icon="&#xe139;" class="iconbox_icon icon_rounded"></div>
							<h6 style="color:black;">Venue</h6>
							<p style="color: black;">Kamal Vihar ,Raipur ,Chhattisgarh </p>
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 align-center about_video_anim4">
						<div class="feature_content">
							<div data-icon="&#xe1cf;" class="iconbox_icon icon_rounded"></div>
							<h6 style="color:black;">Date </h6>
							<p style="color: black;">13th January 2018</p>
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 align-center about_video_anim5">
						<div class="feature_content">
							<div data-icon="&#xe08e;" class="iconbox_icon icon_rounded"></div>
							<h6 style="color: black;">Book Tickets </h6>
							<p style="color: black;"> Call : 9111199998,9285578949 </p>
						</div>
					</div>
				</div>
									
			</div>		
		</section>
		<!-- //About - Video -->
		
		<!-- Client Reviews #################### -->
		<!--<section id="reviews" class="subsection background_color1">
			<div class="container">
			    
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center reviews_anim1">
						<div class="intro">
							<h3>Testimonial</h3>
							<h5>What our clients say about Maroon?</h5>
							
					</div>
				</div>
			   
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 reviews_anim2">
						<div class="owl-carousel">
						
						   
							<div class="single_review align-center">	
								<div class="review_content">
									<div class="review_top_ornament">
										<div class="review_top_ornament_line"></div>
										<div class="review_top_ornament_quotemark">„</div>
										<div class="review_top_ornament_line"></div>
									</div>
									<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
									
									<div class="review_bottom_ornament">
										<div class="review_bottom_ornament_line"></div>
										<div class="review_bottom_ornament_triangle"></div>
										<div class="review_bottom_ornament_line"></div>
									</div>
									
									<img src="images/review_01.jpg" alt="" class="img-circle">
									<h6>Jane Kovalsky, Apple</h6>
								</div>
							</div>
							
							<div class="single_review align-center">	
								<div class="review_content">
									<div class="review_top_ornament">
										<div class="review_top_ornament_line"></div>
										<div class="review_top_ornament_quotemark">„</div>
										<div class="review_top_ornament_line"></div>
									</div>
									<h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</h4>
									
									<div class="review_bottom_ornament">
										<div class="review_bottom_ornament_line"></div>
										<div class="review_bottom_ornament_triangle"></div>
										<div class="review_bottom_ornament_line"></div>
									</div>
									
									<img src="images/review_02.jpg" alt="" class="img-circle">
									<h6>John McLane, Microsoft</h6>
								</div>
							</div>
							
							<div class="single_review align-center">	
								<div class="review_content">
									<div class="review_top_ornament">
										<div class="review_top_ornament_line"></div>
										<div class="review_top_ornament_quotemark">„</div>
										<div class="review_top_ornament_line"></div>
									</div>
									<h4>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</h4>
									
									<div class="review_bottom_ornament">
										<div class="review_bottom_ornament_line"></div>
										<div class="review_bottom_ornament_triangle"></div>
										<div class="review_bottom_ornament_line"></div>
									</div>
									
									<img src="images/review_03.jpg" alt="" class="img-circle">
									<h6>Maria Johnson, Twitter</h6>
								</div>
							</div>
							
							
						</div>
					</div>	
				</div>		
									
			</div>		
		</section> -->
		<!-- //Client Reviews -->
		
		<!-- Screenshots #################### -->
		<section id="screenshots" class="subsection background_color2">
			<div class="container">
			
			    <!-- INTRO -->
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center screenshots_anim1">
						<div class="intro">
							<h3 style="color:black;">Our Gallery</h3>
							<h5 style="color: black;"></h5>
						</div>
					</div>
				</div>
				<!-- //INTRO -->
				
				<!-- screenshots gallery -->
				<div class="screenshots_gallery">
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 align-center screenshots_anim2" >
						<div class="screenshot">
						<a href="images/screenshots/1.jpg" data-lightbox-gallery="gallery1"><img src="images/screenshots/1.jpg" class="img_responsive img-rounded_corner" alt="" width="528"></a>
						</div>
					</div>
						
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 align-center screenshots_anim3">
						<div class="screenshot">
						<a href="images/screenshots/2.jpg" data-lightbox-gallery="gallery1"><img src="images/screenshots/2.jpg" class="img_responsive img-rounded_corner" alt="" width="528"></a>
						</div>
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 align-center screenshots_anim4">
						<div class="screenshot">
						<a href="images/screenshots/3.jpg" data-lightbox-gallery="gallery1"><img src="images/screenshots/3.jpg" class="img_responsive img-rounded_corner" alt="" width="528"></a>
						</div>
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 align-center screenshots_anim5">
						<div class="screenshot">
						<a href="images/screenshots/4.jpg" data-lightbox-gallery="gallery1"><img src="images/screenshots/4.jpg" class="img_responsive img-rounded_corner" alt="" width="528"></a>
						</div>
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 align-center screenshots_anim6">
						<div class="screenshot">
						<a href="images/screenshots/5.jpg" data-lightbox-gallery="gallery1"><img src="images/screenshots/5.jpg" class="img_responsive img-rounded_corner" alt="" width="528"></a>
						</div>
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 align-center screenshots_anim7">
						<div class="screenshot">
						<a href="images/screenshots/6.jpg" data-lightbox-gallery="gallery1"><img src="images/screenshots/6.jpg" class="img_responsive img-rounded_corner" alt="" width="528"></a>
						</div>
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 align-center screenshots_anim8">
						<div class="screenshot">
						<a href="images/screenshots/2.jpg" data-lightbox-gallery="gallery1"><img src="images/screenshots/9.jpg" class="img_responsive img-rounded_corner" alt="" width="528"></a>
						</div>
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 align-center screenshots_anim9">
						<div class="screenshot">
						<a href="images/screenshots/1.jpg" data-lightbox-gallery="gallery1"><img src="images/screenshots/10.jpg" class="img_responsive img-rounded_corner" alt="" width="528"></a>
						</div>
					</div>	
				</div>
				<!-- //screenshots gallery -->	
									
			</div>		
		</section>
        <!-- //screenshots -->
        
        
		<!-- Pricing #################### -->
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




<!--  

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


       
        
		 Pricing #################### 
		<section id="pricing" class="subsection background_color1">
			<div class="container">
			
			    
				
				
				<div class="row">
				
				
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
				


					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 align-center pricing_anim3">
						<div class="pricing_box pricing_box_featured">
							<div data-icon="&#xe064;" class="iconbox_icon"></div>
							<h6>VIP Couple</h6>
							<p>This ticket grants entry to 2 person</p>
							<div class="pricing_box_price"><h3><i class="fa fa-inr" aria-hidden="true"></i> 5000</h3></div>
							
							<div>
								<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="5000">Book Now</button>
								<p>Max 5 tickets per transaction.</p>
							</div>
							
						</div>
					</div>
					


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
					Pricing box 
					
				</div>						
			</div>	
	
		Pricing box -->
		
		<!-- Team #################### -->
		<section id="team" class="subsection background_color2">
			<div class="container">
			
			    <!-- INTRO -->
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center team_anim1">
						<div class="intro">
							<h3 style="color:black;">Earlier Concerts </h3>
							<h5> ------</h5>
						</div>
					</div>
				</div>
				<!-- //INTRO -->
				
				<div class="row">
					<!-- Team member -->
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 align-center team_anim2">
						<img src="images/team/1.jpg" class="img_responsive" alt="" width="275">
						<div class="team_member_info">
							<h4 style="color: black;">Ankit Tiwari</h4>
							<h6 style="color:black;">Phoenix Marketcity </h6>
						</div>
						
						<!-- Social Icons -->
						<div class="social_icons_container align-center">
						  	<div class="social_icons">
				                <h5 style="color: black;">#Bengaluru </h5>
						    </div>
					    </div>	
						<!-- //Social Icons -->
					</div>
					<!-- //Team member -->
					
					<!-- Team member -->
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 align-center team_anim3">
						<img src="images/team/2.jpg" class="img_responsive" alt="" width="275">
						<div class="team_member_info">
							<h4 style="color: black;">Sukhwinder Singh </h4>
							<h6 style="color:black;">Rajyotsav Naya Raipur</h6>
						</div>
						
						<!-- Social Icons -->
						<div class="social_icons_container align-center">
						  	<div class="social_icons">
				              <h5 style="color: black;">#Raipur </h5>
						    </div>
					    </div>	
						<!-- //Social Icons -->
					</div>
					<!-- //Team member -->
					
					<!-- Team member -->
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 align-center team_anim4">
						<img src="images/team/3.jpg" class="img_responsive" alt="" width="275">
						<div class="team_member_info">
							<h4 style="color: black;">KK</h4>
							<h6 style="color:black;">Rajyotsav Naya Raipur</h6>
						</div>
						
						<!-- Social Icons -->
						<div class="social_icons_container align-center">
						  	<div class="social_icons">
				                 <h5 style="color: black;">#Raipur </h5>
						    </div>
					    </div>	
						<!-- //Social Icons -->
					</div>
					<!-- //Team member -->
					
					<!-- Team member -->
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 align-center team_anim5">
						<img src="images/team/4.jpg" class="img_responsive" alt="" width="275">
						<div class="team_member_info">
							<h4 style="color: black;">Usha Uthup</h4>
							<h6 style="color:black;" >Raipur</h6>
						</div>
						
						<!-- Social Icons -->
						<div class="social_icons_container align-center">
						  	<div class="social_icons">
				                 <h5 style="color: black;">#Raipur </h5>
						    </div>
					    </div>	
						<!-- //Social Icons -->
					</div>
					<!-- //Team member -->
					
				</div>
			</div>		
		</section>
		<!-- //Team -->
		
		<!-- CTA #################### -->
		<section id="cta_download" class="subsection background_color4">
			<div class="container">
			
			    <!-- INTRO -->
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center cta_download_anim1">
						<div class="intro">
							<h3>Our Associates</h3>
						</div>
					</div>
				</div>
				<!-- //INTRO -->
				
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center">
						
               
					<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 reviews_logo "><img src="images/sponsor1.png" alt=""></div>
					
					<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 reviews_logo "><img src="images/sponsor2.png" alt=""></div>
					<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 reviews_logo "><img src="images/sponsor3.png" alt=""></div>
					<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 reviews_logo "><img src="images/sponsor4.png" alt=""></div>
					<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 reviews_logo "><img src="images/sponsor5.png" alt=""></div>
					<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 reviews_logo "><img src="images/sponsor6.png" alt=""></div>

					
			
					
					
						
						
					</div>
				</div>				
			</div>		
		</section>
		<!-- //CTA -->
		
		<!-- Contact #################### -->
		<section id="contact" class="subsection background_color1">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 contact_form_container contact_anim1" >
						<h3>Contact Us</h3>
						<p>Contact Us for FeedBack and Queries. </p>

						<!-- Contact Form -->
						<form action="php/contactform.php" id="contact-form" method="post">
							<div class="contact_form">
								<div class="input-field">
					  				<input id="first_name" type="text" name="contact-name">
					  				<label for="first_name">Your Name</label>
					  			</div>
					  			<div class="input-field">
					  				<input id="contact_email" type="email" name="contact-email">
					  				<label for="contact_email">Email Address</label>
					  			</div>
								
					  			<div class="input-field">
						  			<textarea class="materialize-textarea" name="contact-message"></textarea>
						  			<label>Message</label>
						  		</div>
				  			</div>	
				  			<button class="btn waves-effect waves-light" type="submit" name="action">Send</button>
						</form>
						<!-- //Contact Form -->

						<div id="message"><div id="alert"></div></div><!-- Message container --> 
					</div>
				
				
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 contact_anim2">
					<h3>Address :</h3>
					
					
					<ul class="icon_list">
						<li><div data-icon="&#xe1b4;" class="icon_small float-left"></div><h6>Bangalore, India , 560017<br>Raipur, India, 492001</h6></li>
						<li><div data-icon="&#xe23a;" class="icon_small float-left"></div><h6>7828 - 234 - 567</h6></li>
						<li><div data-icon="&#xe242;" class="icon_small float-left"></div><h6><a href="mailto:info@maroonentertainment.in">info@maroonentertainment.in</a></h6></li>
					</ul>
					
					<p>Feel Free to Contact Us. </p>	
					</div>
				</div>				
			</div>
			
			<!--  privacy    -->
			
			<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 align-center about_video_anim3">
						<div class="feature_content">
							
							<a href="privacy.html" class="" target="_blank" ><h6 style="color:black;">Privacy Policies</h6></a>
							
							

						</div>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 align-center about_video_anim4">
						<div class="feature_content">
							
							<a href="refunds.html" class="" target="_blank" ><h6 style="color:black;">Refunds</h6></a>
								
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 align-center about_video_anim5">
						<div class="feature_content">
							
							<a href="terms.html" class="" target="_blank" ><h6 style="color:black;">Terms Of Services</h6></a>
							
						</div>
					</div>
				</div>
			
			
		</section>
		<!-- //Contact -->
		
		<!-- Footer #################### <section id="footer" class="subsection background_color2 "> -->
		<section id="footer" class="subsection background_color3 ">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center">
					
						<!-- Social Icons -->
						<div class="social_icons_container align-center">
						  	<div class="social_icons">
				                <ul>
				                    <li><div  class="social_icon twitter_icon" onclick="location.href='#'"> <img src="images/insta.png"/></div></li>
				                    <li><div  class="social_icon facebook_icon" onclick="location.href='https://www.facebook.com/maroon.ent/'"><img src="images/fb.png"/></div></li>
				                   
				                    
				                </ul>
						    </div>
					    </div>	
						<!-- //Social Icons -->
 <img src="images/logo_home.png" alt="logo" class="logo_home"  width="180px" height="150px" />
					<p style="color:yellow;">Copyright © 2017  Maroon Entertaiment Pvt. Ltd.</p><p style="color:yellow;">Design and Developed by  <a href="http://www.nbdigitech.com"  target="_blank" rel="dofollow" style="color:yellow;">NB Digital Technologies </a></p>	
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


<!-- JavaScript plugins comes here -->	
	
    
    <script src="js/jquery-2.1.3.min.js"></script>        <!--  jQuery -->
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