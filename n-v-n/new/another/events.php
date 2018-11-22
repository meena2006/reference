<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>JJEVENTS | Events  </title>	<!--fonts-->
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
							<li class="hvr-bounce-to-bottom "><a href="index.php">HOME <span class="sr-only">(current)</span></a></li>
							<li class="hvr-bounce-to-bottom"><a href="about.php">ABOUT  </a></li>
							<li class="hvr-bounce-to-bottom"><a href="light-music-in-chennai.php">LIGHT MUSIC</a></li>
							<li class="hvr-bounce-to-bottom active"><a href="events.php">EVENTS</a></li>
							<li class="hvr-bounce-to-bottom"><a href="gallery.php">  GALLERY</a></li>
							<li class="hvr-bounce-to-bottom "><a href="contact.php">CONTACT  </a></li>
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
<div class="banner page-head">
</div>
<!-- //banner -->
<!--start-about-->
<div class="about two">
		<div class="container">
		 <h3 class="tittle">EVENTS</h3>
				<div class="about-top">
					 
					 
					<div class="col-md-12 about-top-right">
					
					
					<div class="col-sm-12 bhoechie-tab-container">
            <div class="col-sm-3 col-xs-12 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                    Photography
                </a>
                <a href="#" class="list-group-item text-center">
                   DJ
                </a>
                <a href="#" class="list-group-item text-center">
                  Audio system
                </a>
                <a href="#" class="list-group-item text-center">
                   Lightings
                </a>
                
              </div>
            </div>
            <div class="col-sm-9 col-xs-12 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                     
                     <div class="col-md-4" style="padding-left:0;"> <img src="images/6.jpg" width="256" height="220" /></div>
				<div class="col-md-8"><h3>PHOTOGRAPHY</h3>
				<p>PHOTOGRAPHY CAN BE TAKEN INDOOR AND OUT DOOR, WITH
</p><p>
1.	CANDID, LIVE SHORTS, HD 1080, BLUE RAY, CONVERA, ULTERASHORT
</p><p>
2.	WITH CANON 5D, SONY 160 HD, HELICOPTER, LED TV 4 NO,
</p><p>
3.	PROJECTOR, SOFT BOX, ZIMME ZIP, TRALLY.</p>
                     </div>
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                    <div class="col-md-4" style="padding-left:0;"> <img src="images/video.jpg" width="256" height="220" /></div>
				<div class="col-md-8"><h3>DJ MUSIC PERFORMANCE</h3>
				<p>1.DJ LAYER LED LIGHTING, LASER LIGHTING, SMOKE, LIGHT BARGUN, SPEAKERS, BASS SPEAKERS SUB WOOFER, MONITOR, ETC.,
</p><p>
2. WE PERFORM DJ WITH HI FI QUALITY PROFESSIONAL DJ
</p><p>
3. HI FI SOUND AND MIXING CONSOLE WITH GOOD DJ FEEL TO ANY SONGS</p>
                     </div>
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                   <div class="col-md-4" style="padding-left:0;"> <img src="images/2.png" width="256" height="220" /></div>
				<div class="col-md-8"><h3>SOUND SYSTEM</h3>
				<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
                     </div>
                </div>
                <div class="bhoechie-tab-content">
                    <div class="col-md-4" style="padding-left:0;"> <img src="images/lighting.jpg" width="256" height="220" /></div>
				<div class="col-md-8"><h3>LIGHTINGS</h3>
				<p>OUR LIGHTING GIVE A MESMERIZING PERFORMANCE FOR YOR EYES WITH COLOUR FULL STAGE OUT LOOKS.

LED LIGHTS, LASER LIGHTS, BARGUN, SHARPEE, FOLLOW SPOT, WALL LED, SMOKE</p>
                     </div>
                </div>
                 
            </div>
        </div>
					
					
					
 </div>
					<div class="clearfix"></div>
				</div>
		</div>	 
</div>
<!--start-team-->
<div class="team">
	<div class="container">
		<h3 class="tittle">OUR TEAM</h3>
			<div class="main">
				<div class="col-md-3 view-grid">
					<div class="view fifth-effect">
						 <a href="#" title="Full Image"><img src="images/s25.jpg" /></a>
						 <div class="mask"></div>
					</div> 
				</div>
				<div class="col-md-3 view-grid">
					<div class="view fifth-effect">
						 <a href="#" title="Full Image"><img src="images/s13.jpg" /></a>
						 <div class="mask"></div>
					</div> 
				</div>
				<div class="col-md-3 view-grid">
					<div class="view fifth-effect">
						 <a href="#" title="Full Image"><img src="images/s17.jpg" /></a>
						 <div class="mask"></div>
					</div> 
				</div>
				<div class="col-md-3 view-grid">
					<div class="view fifth-effect">
						 <a href="#" title="Full Image"><img src="images/s29.jpg" /></a>
						 <div class="mask"></div>
					</div> 
				</div>
				<div class="clearfix"></div>
			</div>
	</div>
</div>
<!--//team-->
<!--start-camps-->
 
<?php

require'footer.php';

?>
</body>
</html>