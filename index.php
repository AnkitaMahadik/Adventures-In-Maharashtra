<!DOCTYPE HTML>
<html>
<title>Adventures In Maharashtra </title>
<head>

<link href="css/owl.carousel.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

 
 
 </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>

<!--/animated-css-->
</head>
<body>
<!--header-->
<!--sticky-->


<?php include('top.php'); ?>


<?php include('slider.php'); ?>
<!--About-->
     <div class="about section" id="section-2">
	  <div class="about-head text-center">
	  <h3>About Us</h3>
	  <span></span><img src="images/about-img.png" alt=""><span></span>
	  </div>
	   <div class="container">		  
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon1"></span>Our Vision</h4>
			 <p>Adventure and delight await your presence as you are entitled to enjoy fun-filled rafting activity with your loved ones.</p>
		 </div>
		 <div class="col-md-4 about-grids grid2">
			 <h4><span class="icon2"></span>Our Mission</h4>
			 <p>To ensure adventures always benefits people by challenging themselves and getting new expierences.</p>
		 </div>
		 
	 </div>
</div>
<!--/About-->
<!--top-tours-->	
<div  class="section" id="section-3">
<div id="portfolio" class="portfolio">
   <div class="top-tours-head text-center">
		    <h3>Adventures</h3>
		<br><h6>Categories</h6>
		  <span></span><img src="images/guide.png" alt=""><span></span>
		  <div class="container">
				<p>Choose your favourite adventure whether it's a trekking, pargliding, or nature camps. 
				Have a ball-park time allotment in mind, whether it's a half-day, a full-day, or a multi-day experience. Once you have chosen a an adventure, 
				you'll probably refine your ideas based upon the guide's knowledge.</p>
		  </div>
		 
		  </div>
	      <ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
			<li><span class="filter active" data-filter="app card icon logo fun">ALL</span></li>
			<li><span class="filter" data-filter="app">Paragliding</span></li>
			<li><span class="filter" data-filter="card">Trekking</span></li>
			<li><span class="filter" data-filter="icon">WaterFall Rappling</span></li>
			<li><span class="filter" data-filter="fun">Water Rafting</span></li>
			<li><span class="filter" data-filter="scuba">Scuba Diving</span></li>
	        </ul>
	     <div id="portfoliolist">
								
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/paragliding1.jpg" class="img-responsive" alt=""/></a>
						<div class="caption">
			          			<div class="header-info">
							<h3 ><a href="paragliding.php">Paragliding -Panchgani</a></h3><h5>click here for more info</h5>
							</div>
			          			</div>
                             </div>
					</div>		
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/trekking1.jpg" class="img-responsive" alt=""/></a>
						<div class="caption">
			          			<div class="header-info">
							<h3><a href="trekking.php">Trekking-Raigad</a></h3><h5>click here for more info</h5>
							</div>
			          			</div>

							
					</div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/waterfallrappeling1.jpg" class="img-responsive" alt=""/></a>
							<div class="caption">
			          			<div class="header-info">
							<h3><a href="rappeling.php">Waterfall Rappelling -Vihigaon</a></h3><h5>click here for more info</h5>
							</div>
			          			</div>
							 
						</div>
					</div>	
								
				
				  <div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/waterrafting1.jpg" class="img-responsive" alt=""/></a>
							<div class="caption">
			          			<div class="header-info">
							<h3><a href="rafting.php">Water Rafting -Kundalika/a></h3><h5>click here for more info</h5>
							</div>
			          			</div>
							
						</div>
			      </div>
			  <div class="portfolio scuba mix_all" data-cat="scuba" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/scubadiving1.jpg" class="img-responsive" alt=""/></a>
							<div class="caption">
			          			<div class="header-info">
							<h3><a href="scuba.php">Scuba Diving -Malvan</a></h3><h5>click here for more info</h5>
							</div>
			          			</div>
						</div>
			      </div>
				  
		   <div class="clearfix"></div>	
	  </div>
</div>
</div>  
<!-- Script for gallery Here-->
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
	$(function () {
		var filterList = {
		init: function () {
// MixItUp plugin
// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
			
				onMixEnd: filterList.hoverEffect()
	});				
},
		hoverEffect: function () {
// Simple parallax effect
		$('#portfoliolist .portfolio').hover(
			function () {
			$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
			$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
			},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
			}		
		);				
	}
};
// Run the show!
		filterList.init();
	});	
</script>
<!--Gallery Script Ends-->	 
<!--/top-tours-->




<div id="section-4" class="contact section">
	  <div class="contact-head text-center">
		  <h3>Contact Us</h3>
		  <span></span><img src="images/mail.png" alt=""><span></span><br/><br/>
          <h4 style="color:#000">Plan YourAdventures
Our travel experts can help you book now!</h4>

		  <div class="contact-grids">
			  <div class="container">
				  <div class="col-md-4 address">
						<h4 style="color:#09F">Ankita Enterprises</h4>
						<p style="color:#000">NEED HELP BOOKING PACKAGE</p>
						<h5 style="color:#000"><span class="img1"></span>(+91) 77777777777</h5>
						<h5 style="color:#000"><span class="img2"></span><a href="#">bookingsupport@gmail.com</a></h5>
						<h5 style="color:#000"><span class="img3"></span>Mumbai,Maharashtra</h5>
                        <br/>
                    
                      </div>
				  <div class="col-md-8 contact">
                  
                  	
					  <form method="post">
                      <table border="0" width="700px" height="500px">
                      <tr><td align="left"> <input type="text" class="text" value=" Name"  name="t1" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name';}" required pattern="[a-zA-z1 _]{1,50}" title"Please Enter Only Characters and numbers between 1 to 50 for Name"></td></tr>
                      <tr><td align="left"><input type="text" class="text" value=" Contact No" name="t2" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Contact NO';}" required pattern="[0-9]{10,12}" title"Please Enter Only  numbers between 10 to 12 for Contact no"></td></tr>
					 <tr><td align="left"> <input type="text" class="text" value="Email" name="t3" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your mail';}" required></td></tr>
					 <tr><td><textarea onFocus="if(this.value == 'Message') this.value='';" name="t4" onBlur="if(this.value == '') this.value='Enter Message Here';" required/ >Message</textarea></td></tr>
					  <tr><td><input type="submit" value="Send message" name="sbmt"></td></tr></table>
					  <div class="clearfix"></div>
					   </form>
				   </div>
				  <div class="clearfix"></div>
			  </div>
		  </div>
	       



<?php include('bottom.php'); ?>
</body>
</html>

