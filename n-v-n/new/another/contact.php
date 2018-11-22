<?php 
session_start();
if( isset($_POST['submit'])) {
 
 echo "<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Your Request Has Been Sent Successfully!')
    
    </SCRIPT>";

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$message=$_POST['message'];
	
     $to="jjevents2011@gmail.com";        
	 $cc="ecemuthumeena@gmail.com";
	   $from="$name";
        $body="";
		$body=$body."<table width=650px align=center  border=1>";
		$body=$body."<caption align=center><h3>JJ Events Website Enquiry Form</h3></caption>";
		$body=$body."<tr><td align=left ><b>Name :</b></td><td align=left >$name</td></tr>";
		$body=$body."<tr><td align=left ><b>Email:</b></td><td align=left >$email</td></tr>";
		$body=$body."<tr><td align=left ><b>Phone:</b></td><td align=left >$mobile</td></tr>";
		$body=$body."<tr><td align=left ><b>Message:</b></td><td align=left >$message</td></tr>";
		$body=$body."</table>";
		$subject=" JJ Events Website Enquiry Form";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		$headers .= "From: <$from>" . "\r\n";
		$headers .="Cc: $cc\n";
	mail($to,$subject,$body,$headers);
		
		$strmsg ="JJ Events Website Enquiry Form" ." ". "Name :" ." ". $name ." ". "Email :" ." ". $email ." ". "Mobile :" ." ". $mobile ." ". "Message :" ." ". $message ." ";
        
        $gatewayURL = 'http://bhashsms.com/api/sendmsg.php?';
        $request = 'user=dzcorner';  
        $request .= '&pass=123';
		$request .= '&sender=WIZTEC';
        $request .= '&phone=7598185836';
        $request .= '&priority=ndnd';
		 $request .= '&stype=normal';
        $request .= '&text='.urlencode($strmsg);  
        
      $url =  $gatewayURL . $request; 
        
        @file($url) or die('Sorry , cannot access the url'); 
        
}
 
?>
<script type="application/javascript">

function validateformquick()

{

var x=document.forms["quick"]["name"].value;

if (x==null || (!isNaN(x)))

  {

  window.alert("Name must be filled out");

  return false;

  }

 

var z=document.forms["quick"]["email"].value;

var atpos=z.indexOf("@");

var dotpos=z.lastIndexOf(".");

if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length)

  {

  alert("Not a valid e-mail address");

  return false;

  }  

 

 var v_mobile = document.forms["quick"]["mobile"].value;

 

  if (v_mobile==null || v_mobile=="" ||  isNaN(v_mobile) || v_mobile.length != 10 )

  {

  alert("Please enter a valid mobile number with 10 digit");

  return false;

  }


 var v_mobile = document.forms["quick"]["message"].value;

 

  if (v_mobile==null || v_mobile=="" ||  isNaN(v_mobile) || v_mobile.length != 10 )

  {

  alert("Please enter message");

  return false;

  }

}



</script>

<!DOCTYPE html>
<html>
<head>
<title>JJEVENTS | Contact </title>	<!--fonts-->
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
			<a href="index.html"><img src="images/02 copy.png" class="img-responsive"></a>
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
							<li class="hvr-bounce-to-bottom "><a href="index.html">HOME <span class="sr-only">(current)</span></a></li>
							<li class="hvr-bounce-to-bottom"><a href="about.html">ABOUT  </a></li>
							<li class="hvr-bounce-to-bottom"><a href="light-music-in-chennai.html">LIGHT MUSIC</a></li>
							<li class="hvr-bounce-to-bottom"><a href="events.html">EVENTS</a></li>
							<li class="hvr-bounce-to-bottom"><a href="gallery.html">  GALLERY</a></li>
							<li class="hvr-bounce-to-bottom active"><a href="contact.html">CONTACT  </a></li>
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
<!-- contact -->
<div class="contact">
	<div class="container">
		<h3 class="tittle">VIEW ON MAP</h3>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d15542.796975677558!2d80.2349335!3d13.1182296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3a5265054291a09b%3A0x276fe51caf7b48d3!2sPerambur%2C+Chennai%2C+Tamil+Nadu!3m2!1d13.1160178!2d80.2316646!5e0!3m2!1sen!2sin!4v1441041133487"   frameborder="0" style="border:1" allowfullscreen></iframe>
		</div>
		 
		<div class="contact-form">
			<h3>CONTACT FORM</h3>
			<form   action="" method="post"  name="quick" onsubmit="return validateformquick()">
				<input type="text" placeholder="Name"  name="name">
				<input type="text" placeholder="Email"   name="email">
				<input type="text" placeholder="Subject"    name="mobile">
				<div class="clearfix"> </div>
				<textarea placeholder="Message"    name="message"></textarea>
				<input type="submit" value="SEND" name="submit">
			</form>
		</div>
	</div>
</div>
<!-- //contact -->
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="footer-grids">	
			<div class="col-md-3 footer-grid clearfix">
				<h4>ADDRESS</h4>
				<ul>
					<li>JJ Events</li>
					<li>#8/11, Aandal Avenue</li>
<li>3rd Street, T.V.K Nagar</li>
<li>Perambur, chennai- 11</li>
<li>Tamil Nadu, India. </li>
				</ul>
			</div>
			<div class="col-md-3 footer-grid clearfix">
				<h4>GET IN TOUCH</h4>
				<ul>
					<li>Mobile : +91-9791-0943-42.</li>
					 <li>Email: <a href="mailto:info@example.com">info@jjevents.in </a></li>
					 <li>Website : <a href="jjevents.in">jjevents.in </a></li>
				</ul>
			</div>
			<div class="col-md-3 footer-grid clearfix">
				<h4>GET FREE CALL</h4>
				<form>
					<input type="text" placeholder="Enter your Mobile Number"  required="">
					<input type="submit" value=" ">
				</form>
			</div>
			<div class="col-md-3 footer-grid clearfix">
				<h4>SOCIAL MEDIA</h4>
				<a href="#"><img src="images/facebook.png"></a>
				<a href="#"><img src="images/twitter.png"> </a>
				<a href="#"><img src="images/google.png"></a>
				<a href="#"><img src="images/ytd.png"></a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //footer -->
<!-- copy -->
<div class="copy-right">
	<div class="container">
		<p> &copy; 2016 jjevents.in. All Rights Reserved | Design by  <a href="#"> Kanagakavi</a></p>
	</div>
</div>
<!-- copy -->
<!-- smooth scrolling -->
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
<!-- //smooth scrolling -->


<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>