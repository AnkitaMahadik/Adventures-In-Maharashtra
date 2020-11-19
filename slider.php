
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<!---banner--->
<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			<div id="section-1" class="section">
			    <div id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="images/paragliding.jpg" alt="">
					  <div class="caption">
			     	  		<div class="header-info">
						
							<h2><a href="#">Paragliding</a></h2>
							
						
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/scubadiving.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Scuba Diving</a></h2>
							
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/trekking.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Trekking</a></h2>
							
							</div>
			          </div>
			        </li>
					<li>
			          <img src="images/naturecamps.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Nature Camps</a></h2>
							
							</div>
			          </div>
			        </li>
                   
			      </ul>
			    </div>	         
			    <div class="clearfix"> </div>
				</div>
		<!----- //End-slider---->
<!---banner--->	
</body>
</html>