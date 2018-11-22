<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>JJEVENTS | Gallery  </title>	<!--fonts-->
	<!--fonts-->
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
		<script src="js/modernizr.custom.97074.js"></script>
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
							<li class="hvr-bounce-to-bottom"><a href="events.php">EVENTS</a></li>
							<li class="hvr-bounce-to-bottom active"><a href="gallery.php">  GALLERY</a></li>
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
<!--album-->
<!--gallery-->
<div class="gallery">
		<div class="container">
				<script src="js/jquery.chocolat.js"></script>
			<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
			<!--light-box-files -->
			<script type="text/javascript" charset="utf-8">
			$(function() {
				$('.gallery a').Chocolat();
			});
			</script>
			<h3>GALLERY</h3>
			<section>
				<ul id="da-thumbs" class="da-thumbs">
							<li>
						<a href="images/smslider/s1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s1.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s2.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s3.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s4.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>	
						<a href="images/smslider/s5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s5.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s6.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s7.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s7.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s8.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s8.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s9.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s9.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s10.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s10.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s11.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s11.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s12.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s12.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s13.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s13.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s14.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s14.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s15.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s15.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s16.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s16.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s17.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s17.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s18.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s18.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s19.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s19.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s20.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s20.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s21.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s21.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s22.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s22.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s23.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s23.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s24.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s24.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s25.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s25.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s26.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s26.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s27.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s27.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s28.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s28.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s29.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s29.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="images/smslider/s30.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/smslider/s30.jpg" alt="" />
							<div>
								<h5>Music</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</section>
				<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
				<script type="text/javascript">
					$(function() {
						$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
					});
				</script>
        </div>
		
</div>
<!--//gallery-->
<!--//album-->
<?php

require'footer.php';

?>
</body>
</html>