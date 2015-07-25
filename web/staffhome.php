<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Adornment a Interior and Furniture Category Flat bootstrap Responsive website Template | Blog :: w3layouts</title>
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
<script src="js/modernizr.custom.63321.js"></script>
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
				<a href="index.html"><img src="images/logo.jpg" alt="logo" width="90"/></a>					
			</div>
			<!--top-nav-->
			<div class="top-nav cl-effect-11">
				<span class="menu-icon"><img src="images/menu-icon.png" alt=""/></span>		
				<ul class="nav1">
					<li><a href="index.php" data-hover="Home">Home</a></li>
					<li><a href="about.html" data-hover="About">About</a></li>
					<li><a href="gallery.html" data-hover="Gallery">Gallery</a></li>
					<li><a href="blog.html" class="active" data-hover="Blog">Blog</a></li>
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
	<!--blog-->
	<div class="blog">
		<div class="container">
			<div class="col-md-8 blog-left" >
				<div class="blog-info">
					<h3><a href="single.html"></a></h3>
					<!--code for schools hyperlinks   -->
					
					<!--<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on march 2, 2015 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>-->
					<!--<div class="blog-info-text">
						<div class="blog-img">
							<a href="single.html"> <img src="images/img12.jpg" class="img-responsive" alt=""/></a>
						</div>						
						<p class="snglp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor If you are going to use a passage							There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration  
							in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
							you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
						<a href="single.html" class="hvr-bounce">Read more</a>
					</div>	-->
					<!--<div class="col-md-6 specials-grids">-->
				<h3>School List Under Staff</h3>
				<ul class="menu">
					<li class="item1"><a href="school.php"> School 1 Link</a>
						
					</li>
					<li class="item2"><a href="#"> School 1 Link </a>
						
					</li>
					<li class="item3"><a href="#">School 1 Link</a>
						
					</li>
					<li class="item4"><a href="#">School 1 Link</a>
						
					</li> 
					<li class="item5"><a href="#">  School 1 Link</a>
						
					</li>
					<li class="item5"><a href="#">School 1 Link</a>
						
					</li>
				</ul>
			</div>
				</div>	
				
			</div>
			<div class="clearfix"> </div>
			
		</div>	
	</div>	
	<!--//blog-->
	<div class="footer">
		<div class="container">
			<p>Copyright © 2015 ISLI. All rights reserved </p>
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