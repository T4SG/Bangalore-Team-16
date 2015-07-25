<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>India School Leadership Institute</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!--web-font-->
<link href='http://fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!--//web-font-->
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Adornment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js -->	
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-logo">
				<a href="index.php"><img src="images/logo.jpg" alt="logo" width="90"/></a>					
			</div>
			<!--top-nav-->
			<div class="top-nav cl-effect-11">
				<span class="menu-icon"><img src="images/menu-icon.png" alt=""/></span>		
				<ul class="nav1">
					<li><a href="index.php" data-hover="Home" class="active">Home</a></li>
					<li><a href="" data-hover="About">About</a></li>
					<? php if (!isset($_SESSION['isloggedin'])) { ?>
					<li><a href="#bottom" data-hover="login" >Login</a></li> <? php else if {?>
					<!--<li><a href="blog.html" data-hover="Blog">Blog</a></li>-->
					
					
					<li><a href="logout.php" data-hover="logout">logout</a></li>
					<? php }?>
					<li><a href="contact.html" data-hover="Contact">Contact</a></li>
				</ul>
				<!-- script-for-menu -->
				<script>
				   $( "span.menu-icon" ).click(function() {
					 $( "ul.nav1" ).slideToggle( 300, function() {
					 // Animation complete.
					  });
					 });
				</script>
				<!-- /script-for-menu -->
			</div>
			<!--//top-nav-->
			<div class="clearfix"> </div>
		</div>	
	</div>

	<!--//header-->
	<!--banner-->
	<div class="banner-text">
		<div class="container">
			<h4>Being Positive In A Negative Situation Is Not Naive .It's Leadership</h4>			
		</div>
	</div>
	<!--//banner-->
	<!--features-->
	<div class="features">
		<div class="container">
			<div class="banner-top">
				<div class="banner">			
					<div class="col-md-8 banner-left">
						<!-- banner-text Slider starts Here -->
						<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
								$(function () {
								// Slideshow 4
									$("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
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
						<!--//End-slider-script -->
						<div class="banner-title"> 
							<div  id="top" class="callbacks_container">
								<ul class="rslides" id="slider3">
									<li>
										<div class="banner-slide">
										</div>
									</li>
									<li>
										<div class="banner1">
										</div>
									</li>
									<li>
										<div class="banner2">
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>			
					<div class="col-md-4 banner-right">
						<h1>Success stories</h1>
						<p>A wonderful designs has takenpossession of lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	
	<!--//slid-->
	<!--specials-->
	<div class="specials">
		<div class="container">
			<div class="col-md-6 specials-grids">
				<h3 id="bottom">Login</h3>
				<form action="logincheck.php" method="post">
                    <p><label for="username">Username:</label> 
                    <input align="right" name="uname" id="uname" value="" type="text" /></p><br>
                    <p><label for="pwd">Password:</label>
                    <input align="right" name="pwd" id="pwd" value="" type="password" /></p><br>

                    <p><input name="save" style="margin-left: 150px;"  value="Login" type="submit" /></p>
                </form>
			</div>
			
				
							
			<div class="clearfix"> </div>
				<!-- script for tabs -->
				<script type="text/javascript">
					$(function() {
					
						var menu_ul = $('.menu > li > ul'),
							   menu_a  = $('.menu > li > a');
						
						menu_ul.hide();
					
						menu_a.click(function(e) {
							e.preventDefault();
							if(!$(this).hasClass('active')) {
								menu_a.removeClass('active');
								menu_ul.filter(':visible').slideUp('normal');
								$(this).addClass('active').next().stop(true,true).slideDown('normal');
							} else {
								$(this).removeClass('active');
								$(this).next().stop(true,true).slideUp('normal');
							}
						});
					
					});
				</script>
				<!-- script for tabs -->
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<p>Copyright © 2015 Adornment. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"> </script>
</body>
</html>