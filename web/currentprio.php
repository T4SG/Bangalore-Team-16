<?php
							@session_start();
							
//Database Connections
$con = mysql_connect("localhost", "root", "") or die(mysql_error());
$db = mysql_select_db("team16", $con) or die(mysql_error());

$uname = $_SESSION['name'];
$query = mysql_query("SELECT * FROM `comments` WHERE username = '".$uname."'") or die(mysql_error());
$count = mysql_num_rows($query);

$res = mysql_fetch_array($query);
$_SESSION['com']=$res['comment'];?>
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
				<a href="index.html"><img src="images/logo.png" alt="logo"/></a>					
			</div>
			<!--top-nav-->
			<div class="top-nav cl-effect-11">
				<span class="menu-icon"><img src="images/menu-icon.png" alt=""/></span>		
				<ul class="nav1">
					<li><a href="index.php" data-hover="Home">Home</a></li>
					<li><a href="#" data-hover="About">About</a></li>
					
					<li><a href="#" class="active" data-hover="Blog">Blog</a></li>
					<li><a href="contact.html" data-hover="Contact">Contact</a></li>
				</ul>
				
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
					<div class="col-md-6 specials-grids">
				<h3>Priorities</h3>
				<ul class="menu">
					<li class="item1"><a href="#">Nemo enim ipsam <span class="icon"> </span></a>
						<ul> 
							<li class="subitem1"><a href="#"><?php echo $_SESSION['name']; echo "  " ;echo $_SESSION['com'];?>
							

<form action="submit.php" method="post">

							<input type="text" name="com">
							<input type="button" value="submit" type="submit">
							</form></a>

							</li>		
															
						</ul>
					</li>
					<li class="item2"><a href="#">Voluptatemdolor <span class="icon"> </span></a>
						<ul>
							<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Nemo enim ipsam voluptatem.</a></li>
						</ul>
					</li>
					<li class="item3"><a href="#">Odit aut fugit <span class="icon"> </span></a>
						<ul>
							<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Nemo enim ipsam voluptatem.</a></li>
						</ul>
					</li>
					<li class="item4"><a href="#">Temdolorlupta <span class="icon"> </span></a>
						<ul>
							<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Nemo enim ipsam voluptatem.</a></li>
						</ul>
					</li> 
					<li class="item5"><a href="#">Ptatemdolor aut <span class="icon"> </span></a>
						<ul>
							<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Nemo enim ipsam voluptatem.</a></li>
						</ul>
					</li>
					<li class="item5"><a href="#">Dolor autptatem <span class="icon"> </span></a>
						<ul>
							<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Nemo enim ipsam voluptatem.</a></li>
						</ul>
					</li>
				</ul>
			</div>
				</div>	
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
					
			</div>	
			
	</div>	
	</div>
	</div>

	<!--//blog-->
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