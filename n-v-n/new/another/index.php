<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>JJEVENTS | HOME </title>	<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--//fonts-->
			<link href="css/bootstrap.css" rel="stylesheet">
			<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		 <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->	
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!-- start-smoth-scrolling -->
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
	<!-- start-smoth-scrolling -->
</head>
<body>
<!-- header -->
<div class="header">
	<div class="container">
		<div class="header-left">
			<a href="index.php"><img src="images/02 copy.png" class="img-responsive"></a>
		</div>
		<div class="navigation">
			<nav class="navbar navbar-default">
					<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"> </span>
							<span class="icon-bar"> </span>
							<span class="icon-bar"> </span>
						  </button>
					</div>
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						  <ul class="nav navbar-nav">
							<li class="hvr-bounce-to-bottom active"><a href="index.php">HOME <span class="sr-only">(current)</span></a></li>
							<li class="hvr-bounce-to-bottom"><a href="about.php">ABOUT  </a></li>
							<li class="hvr-bounce-to-bottom"><a href="light-music-in-chennai.php">LIGHT MUSIC</a></li>
							<li class="hvr-bounce-to-bottom"><a href="events.php">EVENTS</a></li>
							<li class="hvr-bounce-to-bottom"><a href="gallery.php">  GALLERY</a></li>
							<li class="hvr-bounce-to-bottom"><a href="contact.php">CONTACT  </a></li>
						  </ul>
						<div class="clearfix"> </div>
					</div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header -->
<!-- banner -->
<div class="banner">
	<div class="container">
		<script src="js/responsiveslides.min.js"></script>
			<script>  
				$(function () {
				  $("#slider").responsiveSlides({
					auto: true,
					nav: true,
					speed: 500,
					namespace: "callbacks",
					pager: true,
				  });
				});
			  </script>
			<div class="caption">
				<div class="slider">
					<div class="callbacks_container">
						    <ul class="rslides" id="slider">
								<li><h3>THE MUSIC WORLD</h3></li>	
								<li><h3>WORLDS BEST MUSIC</h3></li>	
						    </ul>
							<p>Which Have You Never Seen Before!!</p>
						    <a class="hvr-bounce-to-bottom morebtn" href="#">MORE</a>
					</div>
				</div>
			</div>
	</div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div class="banner-bottom">
	<div class="container">
		<div class="bottom-grids">
			<div class="col-md-3 bottom-one">
				<div class="bottom-text">
					<h3>LIGHT MUSIC</h3>
					<p>OUR LIGHTING GIVE A MESMERIZING PERFORMANCE FOR YOR EYES WITH COLOUR FULL STAGE... <a class="hvr-bounce-to-bottom morebtn" href="#">MORE</a>
 </p>
				</div>
			</div>
			<div class="col-md-3 bottom-two">
				<div class="bottom-text">
					<h3>DJ</h3>
					<p>DJ LAYER LED LIGHTING, LASER LIGHTING, SMOKE, LIGHT BARGUN, SPEAKERS, BASS SPEAKERS... <a class="hvr-bounce-to-bottom morebtn" href="#">MORE</a>
 </p>
				</div>
			</div>
			<div class="col-md-3 bottom-three">
				<div class="bottom-text">
					<h3>Audio System</h3>
					<p>FOR MARRIAGE, BIRTHDAY PARITES, RETIRED FUNCTION, RESIDENTAL EVENTS, COLLEGE EVENTS... <a class="hvr-bounce-to-bottom morebtn" href="#">MORE</a></p>
				</div>
			</div>
			<div class="col-md-3 bottom-four">
				<div class="bottom-text">
					<h3>PHOTOGRAPHY</h3>
					<p> PHOTOGRAPHY CAN BE TAKEN INDOOR AND OUT DOOR, WITHCANDID, LIVE SHORTS, HD 1080... <a class="hvr-bounce-to-bottom morebtn" href="#">MORE</a></p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //banner-bottom -->
<!-- welcome -->
<div class="welcome">
	<div class="container">
		<div class="welcome-head">
			<h3>WELCOME TO JJEVENTS</h3>
			<p><strong>JJ Events - Light Music in Chennai : </strong>We are Chennai is one of the Famous light music Orchestra for marriage and Corporate Event service providers in Chennai. Our orchestra specialized with cine professional live players, and equipped with hi fi quality Instruments, branded Speakers, Laser lights and Excellent mixing console. We maintain descent and beautiful players, uniform looks, and highly talented musicians. Our orchestra gives soothing sounds and pleasant hearing for your soul and mind.</p>
		</div>
	</div>
</div>
<!-- //welcome -->
<!-- popular -->
<div class="popular">
	<div class="container">
		<div class="popular-head">
			<h3>MY ALBUM</h3>
		</div>
		<div class="popular-grids">
			<div class="col-md-4 popular-grid">
				<img src="images/s13.jpg" alt=""/>
				<div class="pop-desc">
					<p>MODERN MUSIC</p>
				</div>
			</div>
			<div class="col-md-4 popular-grid">
				<img src="images/s16.jpg" alt=""/>
				<div class="pop-desc">
					<p>HIP HOP MUSIC</p>
				</div>
			</div>
			<div class="col-md-4 popular-grid">
				<img src="images/s17.jpg" alt=""/>
				<div class="pop-desc">
					<p>FOLK MUSIC</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //popular -->
<!-- experience -->
<div class="we-focus">
	<div class="container">
		<div class="focus-grids">
			<div class="col-md-6 focus-grid">
				<h3>EXPERIENCE <span>THE FEEL OF GOOD MUSIC</span></h3>
				<p>We maintain descent and beautiful players, uniform looks, and highly talented musicians. Our orchestra gives soothing sounds and pleasant hearing for your soul and mind. </p>
			</div>
			<div class="col-md-3 focus-grid">
				<div class="focus-border">
					<div class="focus-layout">
						<div class="focus-image a">
							<span class="glyphicon glyphicon-music" aria-hidden="true"></span>
						</div>
						<h4>DRUM STICKS</h4>
					</div>
				</div>
			</div>
			<div class="col-md-3 focus-grid">
				<div class="focus-border">
					<div class="focus-layout">
						<div class="focus-image b"><span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span></div>
						<h4>SAXOPHONE</h4>
					</div>
				</div>
			</div>
			<div class="col-md-3 focus-grid">
				<div class="focus-border">
					<div class="focus-layout">
						<div class="focus-image c"><span class="glyphicon glyphicon-film" aria-hidden="true"></span></div>
						<h4>TUBA</h4>
					</div>
				</div>
			</div>
			<div class="col-md-3 focus-grid">
				<div class="focus-border">
					<div class="focus-layout">
						<div class="focus-image d"><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span></div>
						<h4>GUITAR</h4>
					</div>
				</div>
			</div>
			<div class="col-md-3 focus-grid">
				<div class="focus-border">
					<div class="focus-layout">
						<div class="focus-image e"><span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></div>
						<h4>SILHOUETTE</h4>
					</div>
				</div>
			</div>
			<div class="col-md-3 focus-grid">
				<div class="focus-border">
					<div class="focus-layout">
						<div class="focus-image f"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></div>
						<h4>DRUM SET</h4>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- experience -->
<!-- full -->
<div class="full">
	<div class="container">
		<div class="col-md-4 full-grid">
			<div class="full-text">
				<div class="full-left">
					<span class="glyphicon glyphicon-music" aria-hidden="true"></span>
				</div>
				<div class="full-right">
					<h3>Audio system</h3>
				</div>
				<div class="clearfix"></div>
			</div>
			<p>FOR MARRIAGE, BIRTHDAY PARITES, RETIRED FUNCTION, RESIDENTAL EVENTS, COLLEGE EVENTS, FARVOL PARTIES, ETC,  INSTRUMENTAL KARAOKE, DANCE PROGRAMME, TEMPLE, IT COMPANY, CORPORATE COMPANY, ETC., </p>
			<a class="hvr-bounce-to-bottom read-more" href="gallery.php">MORE</a>
		</div>
		<div class="col-md-4 full-grid">
			<div class="full-text">
				<div class="full-left">
					<span class="glyphicon glyphicon-music" aria-hidden="true"></span>
				</div>
				<div class="full-right">
					<h3>Lightings</h3>
				</div>
				<div class="clearfix"></div>
			</div>
			<p>OUR LIGHTING GIVE A MESMERIZING PERFORMANCE FOR YOR EYES WITH COLOUR FULL STAGE OUT LOOKS. LED LIGHTS, LASER LIGHTS, BARGUN, SHARPEE, FOLLOW SPOT, WALL LED, SMOKE. </p>
			<a class="hvr-bounce-to-bottom read-more" href="gallery.php">MORE</a>
		</div>
		<div class="col-md-4 full-grid">
			<div class="full-text">
				<div class="full-left">
					<span class="glyphicon glyphicon-music" aria-hidden="true"></span>
				</div>
				<div class="full-right">
					<h3>DJ</h3>
				</div>
				<div class="clearfix"></div>
			</div>
			<p>DJ LAYER LED LIGHTING, LASER LIGHTING, SMOKE, LIGHT BARGUN, SPEAKERS, BASS SPEAKERS SUB WOOFER, MONITOR, ETC.  WE PERFORM DJ WITH HI FI QUALITY PROFESSIONAL DJ. </p>
			<a class="hvr-bounce-to-bottom read-more" href="gallery.php">MORE</a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //full -->
<?php

require'footer.php';

?>
</body>
</html>
