<!--Author: Template Stock
Author URL: http://templatestock.co
-->
<!DOCTYPE html>
<html>
<head>
<title>Portfolio Vignon Nicolas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Onepage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	    
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>
<div class="header" id="head">	
      <div class="container"> 
         <div class="header-top">
      		 <div class="logo">
				<a href="index.php"><img src="images/logo.png" alt=""/></a>
			 </div>
		   <div class="top-menu">
		   	<span class="menu"> </span>
			<ul>
			 	<nav class="cl-effect-6">
				<li><a class="active" href="home"><span data-hover="Home">accueil</span></a></li>
				<li><a href="home" ><span data-hover="about">à propos</span></a></li>
				<li><a href="projet" class="scroll"><span data-hover="work"><span>réalisations</span></a></li>
				<li><a href="service" class="scroll"><span data-hover="services">services</span></a></li>
				<li><a href="#contact" class="scroll"><span data-hover="contact">contact</span></a></li>
				<li><a href="connexion"><span data-hover="contact">connexion</span></a></li>
				</nav>
			 </ul>
			 </div>
			 <!--script-nav-->
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>
			<div class="clearfix"></div>
		 </div>  
		  <div class="index-banner">
       	   <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
				   	       	<div class="banner_center">
				   		 		<h1>Vignon Nicolas</h1> 
				   		 		<h2>étudiant en <span>BTS SIO option SLAM</span></h2>
				   		 		<h2>à l'IRIS </h2>
				   		 		</div>
				   		 </div>
					</article>
				   <article style="position: relative; width: 100%; opacity: 1;"> 
				   	   	<div class="banner-wrap">
				   	      <div class="banner_center">
				   		 		<h1>Content here,</h1> 
				   		 		<h2>Lorem <span>graphic &  designer</span></h2>
				   		 		<h2>Contrary</h2>
				   		 		</div>
				   		  </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	  	<div class="banner-wrap">
				   	       <div class="banner_center">
				   		 		<h1>Lorem Ipsum ,</h1> 
				   		 		<h2>Contrary to <span>&  designer</span></h2>
				   		 		<h2>reproduced below</h2>
				   		 		</div>
				   		 </div>
					 </article>
				 </div>
				
            </div>
            <script src="js/jquery.wmuSlider.js"></script> 
			  <script>
       			$('.example1').wmuSlider();         
   		     </script> 	           	      
      </div>
	 </div>     
	</div>
	
	<div class="footer-section" id="contact" id="contact">
			<div class="container"> 
			
			<div class="footer-bottom">

					<p>&copy; 2015 Onepage . All rights  Reserved | Template by<a href="http://templatestock.com" target="target_blank">Template Stock</a></p>

					</div>
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
</div>

		</div>		
	</div>
	
	
</body>
</html>