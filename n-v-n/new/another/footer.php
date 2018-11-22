<?php  
if( isset($_POST['submit1'])) {
 
 echo "<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Your Request Has Been Sent Successfully!')
    
    </SCRIPT>";
 
$phone=$_POST['phone']; 
	
     $to="jjevents2011@gmail.com";        
	 $cc="ecemuthumeena@gmail.com";
	   $from="$name";
        $body="";
		$body=$body."<table width=650px align=center  border=1>";
		$body=$body."<caption align=center><h3>JJ Events Get Free Call Form</h3></caption>";
		$body=$body."<tr><td align=left ><b>Mobile :</b></td><td align=left >$phone</td></tr>"; 
		$body=$body."</table>";
		$subject=" JJ Events Get Free Call Form";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		$headers .= "From: <$from>" . "\r\n";
		$headers .="Cc: $cc\n";
	mail($to,$subject,$body,$headers);
		
		$strmsg ="JJ Events Get Free Call Form" ." ". "Mobile :" ." ". $mobile ." ";
        
        $gatewayURL = 'http://bhashsms.com/api/sendmsg.php?';
        $request = 'user=dzcorner';  
        $request .= '&pass=123';
		$request .= '&sender=WIZTEC';
        $request .= '&phone=917598185836';
        $request .= '&priority=ndnd';
		 $request .= '&stype=normal';
        $request .= '&text='.urlencode($strmsg);  
        
      $url =  $gatewayURL . $request; 
        
        @file($url) or die('Sorry , cannot access the url'); 
        
}
 
?>

<script type="application/javascript">

function validateformquick1()

{
 

 var v_mobile = document.forms["quick1"]["phone"].value;

 

  if (v_mobile==null || v_mobile=="" ||  isNaN(v_mobile) || v_mobile.length != 10 )

  {

  alert("Please enter a valid mobile number with 10 digit");

  return false;

  }

}
</script>

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
				<form   action="" method="post"  name="quick1" onSubmit="return validateformquick1()">
					<input type="text" placeholder="Enter your Mobile Number"   name="phone">
					<input type="submit" value=" " name="submit1">
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
<script>
		$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
</script>