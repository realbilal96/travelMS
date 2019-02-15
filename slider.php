<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>my tour</title>
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
			          <img src="images/s1.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Pakistan Monument</a></h2>
							<lable></lable>
							<h1><a href="#">Islamabad, Pakistan</a></h1>
							</div>
			          </div>
			        </li>

			        <li>
			          <img src="images/s2.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Burj Khalifa Tower</a></h2>
							<lable></lable>
							<h1><a href="#">Dubai, UAE</a></h1>
							</div>
			          </div>
			        </li>

					<li>
			          <img src="images/s3.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Time Square </a></h2>
							<lable></lable>
							<h1><a href="#">New York, USA</a></h1>
							</div>
			          </div>
			        </li>

			        <li>
			          <img src="images/hunza.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Hunza Valley</a></h2>
							<lable></lable>
							<h1><a href="#">Gilgit-Baltistan, Pakistan</a></h1>
							</div>
			          </div>
			        </li>

                    <li>
			          <img src="images/s4.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Taj Mahal</a></h2>
							<lable></lable>
							<h1><a href="#">Agra, India </a></h1>
							</div>
			          </div>
			        </li>

                    <li>
			          <img src="images/s5.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Derawar Fort</a></h2>
							<lable></lable>
							<h1><a href="#">Bahawalpur, Pakistan</a></h1>
							</div>
			          </div>
			        </li>

                    <li>
			          <img src="images/s6.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Niagara Falls</a></h2>
							<lable></lable>
							<h1><a href="#">Ontario, Canada</a></h1>
							</div>
			          </div>
			        </li>

                    <li>
			          <img src="images/s7.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Badshahi Mosque</a></h2>
							<lable></lable>
							<h1><a href="#">Lahore, Pakistan</a></h1>
							</div>
			          </div>
			        </li>

			        <li>
			          <img src="images/s8.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Tower Bridge</a></h2>
							<lable></lable>
							<h1><a href="#">London, UK</a></h1>
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