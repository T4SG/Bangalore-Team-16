<!DOCTYPE html>
<html>
<head>
<title>ISLI</title>
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
				<a href="index.html"><img src="images/logo.jpg" alt="logo"  width="90"/></a>					
			</div>
			<!--top-nav-->
			<div class="top-nav cl-effect-11">
				<span class="menu-icon"><img src="images/menu-icon.png" alt=""/></span>		
				<ul class="nav1">
					<li><a href="index.html" data-hover="Home">Home</a></li>
					<li><a href="about.html" class="active" data-hover="About">About</a></li>
					<li><a href="gallery.html" data-hover="Gallery">Gallery</a></li>
					<li><a href="blog.html" data-hover="Blog">Blog</a></li>
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
	<!--about-->
	<div class="about">
		<div class="container">
			<h3> News Feed </h3>
			<div class="about-grids">
				<div class="col-md-6 about-left">
					<img src="images/img51.jpg" alt=""/>
				</div>
				<form action="feedbk.php" method="post">
				<div class="col-md-6 about-right">
					<p>We would like to have your valuable feedback on the workshop .</p>
					<ul class="menu">
						<li class="item1"><a href="#">Did the workshop achieved its objective <span class="icon"> </span></a>
							<ul>
								<li class="subitem1"><a href="#"><TEXTAREA name="comment1" ROWS="" COLS="20" ></TEXTAREA></a></li>										
							</ul>
						</li>
						<li class="item2"><a href="#">Our history <span class="icon"> </span></a>
							<ul>
								<li class="subitem1"><a href="#"><TEXTAREA name="comment2" ROWS="" COLS=""></TEXTAREA></a></li>
							</ul>
						</li>
						<li class="item3"><a href="#">your special request for workshops if any <span class="icon"> </span></a>
							<ul>
								<li class="subitem1"><a href="#"><TEXTAREA name="comment3" ROWS="" COLS=""></TEXTAREA></a></li>
							</ul>
						</li>
					</ul>
					<br>
					
					<div>

<h5><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; would you like to give any suggestions</i><br><br><TEXTAREA NAME="" ROWS="5" COLS="73"></TEXTAREA>
</h5>


					</div>
					<input type="submit" value="submit"/>
					</div>
</form>
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
				<!--<div class="clearfix"> </div>
			</div>	
			<div class="about-team">
				<h3>workshop details</h3>
				<div class="main">
					<div id="mi-slider" class="mi-slider">
						<ul>
							<li>
								
									<div class="team-text">
										<h4><a href="#">Main Motive</a> </h4>
										<p>To achieve desipline in the class rooms.</p>
									</div>
								
							</li>
							<li>
								
									<div class="team-text">
										<h4> <a href="#">Work proto</a></h4>
										<p>to improve command over the subject by teacher</p>
									</div>
								
							</li>
							<li>
								
									
									<div class="team-text">
										<h4> <a href="#">Working model</a> </h4>				
										<p>By daily observation by the leader</p>
									</div>
								
							</li>
						</ul>
						<ul>
							<li>
								
									<div class="team-text">
										<h4><a href="#">Main Motive</a> </h4>
										<p>To achieve desipline in the class rooms.</p>
									</div>
								
							</li>
							<li>
								
									<div class="team-text">
										<h4> <a href="#">Work proto</a></h4>
										<p>to improve command over the subject by teacher</p>
									</div>
								
							</li>
							<li>
								
									
									<div class="team-text">
										<h4> <a href="#">Working model</a> </h4>				
										<p>By daily observation by the leader</p>
									</div>
								
							</li>
						</ul>
						<ul>
							<li>
								
									<div class="team-text">
										<h4><a href="#">Main Motive</a> </h4>
										<p>To achieve desipline in the class rooms.</p>
									</div>
								
							</li>
							<li>
								
									<div class="team-text">
										<h4> <a href="#">Work proto</a></h4>
										<p>to improve command over the subject by teacher</p>
									</div>
								
							</li>
							<li>
								
									
									<div class="team-text">
										<h4> <a href="#">Working model</a> </h4>				
										<p>By daily observation by the leader</p>
									</div>
								
							</li>
						</ul>
						<nav>
							<a href="#">workshop1</a>
							<a href="#">workshop2</a>
							<a href="#">workshop3</a>
						</nav>						
					</div>
					<br>
					<br>
					<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
						<script src="js/jquery.catslider.js"></script> 
						<script>
							$(function() {

								$( '#mi-slider' ).catslider();

							});
						</script>
				</div>
			</div>	-->
			<!--services-->
			
	<!--//about-->
	<div class="footer">
		<div class="container">
			<p>Copyright Â© 2015 Adornment. All rights reserved | Design by <a href="">W3layouts</a></p>
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