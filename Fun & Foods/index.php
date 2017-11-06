
<!DOCTYPE html>
<html>
<head>
	<title>Fun and Foods by Rishabh Khanna</title>
	<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
		
	<!--//fonts-->
			<link href="css/bootstrap.css" rel="stylesheet">
			<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Favorites Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->	
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!-- cart -->
		<script src="js/simpleCart.min.js"> </script>
	<!-- cart -->
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
		<div class="top-header">
				<div class="header-left">
					<p>Place your order and get 20% off on each price</p>
				</div>
				<div class="login-section">
					<ul>
						<li><a href="login.php">Login</a>  </li> |
						<li><a href="register.php">Register</a> </li>
					</ul>
				</div>
				<!-- start search-->
				    <div class="search-box">
					    <div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search item..." type="search" name="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
				    </div>
					<!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
				<!-- //search-scripts -->
				<div class="header-right">
						<div class="cart box_1">
							<a href="checkout.html">
								<h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span> items)<img src="images/bag.png" alt=""></h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
				</div>
				<div class="clearfix"></div>
		</div>
	</div>
</div>

<!-- //header -->
<!-- banner -->
<div class="banner-slider">
	<div class="banner-pos">
		<!-- responsiveslides -->
							<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: false,
										nav: false,
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
		<!-- responsiveslides -->
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="banner one">
						<div class="container">
							<div class="navigation text-center">
								<span class="menu"><img src="images/menu.png" alt=""/></span>
									<ul class="nav1">
										<li><a class="active" href="index.php">HOME</a></li>
										<li><a href="about.html">ABOUT</a></li>
										<li><a href="menu.html">OUR MENU</a></li>
										<li><a href="gallery.html">GALLERY</a></li>
										<li><a href="typography.html">TODAY'S SPECIAL</a>
										<li><a href="contact.html">CONTACT</a></li>
										<div class="clearfix"></div>
									</ul>
								

							</div>
							<!-- point burst circle -->
							<div class="logo">
								<a href="index.php">
									<div class="burst-36 ">
									   <div>
											<div><span><img src="images/logo.png" alt=""/></span></div>
									   </div>
									</div>
									<h1>FAVORITES</h1>
								</a>
							</div>
							<!-- //point burst circle -->
							
							<div class="banner-info text-center">
								<p>Spicy , Tasty & Delicious Always!!</p>
								<div class="order"><a href="#">ORDER US NOW</a></div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner two">
						<div class="container">
							<div class="navigation text-center">
								<span class="menu"><img src="images/menu.png" alt=""/></span>
									<ul class="nav1">
										<li><a class="active" href="index.html">HOME</a></li>
										<li><a href="about.html">ABOUT</a></li>
										<li><a href="menu.html">OUR MENU</a></li>
										<li><a href="gallery.html">GALLERY</a></li>
										<li><a href="typography.html">TODAY'S SPECIAL</a>
										<li><a href="contact.html">CONTACT</a></li>
										<div class="clearfix"></div>
									</ul>
									<!-- script for menu -->
										<script> 
											$( "span.menu" ).click(function() {
											$( "ul.nav1" ).slideToggle( 300, function() {
											 // Animation complete.
											});
											});
										</script>
									<!-- //script for menu -->
							</div>
							<!-- point burst circle -->
							<div class="logo">
								<a href="index.html">
									<div class="burst-36 ">
									   <div>
											<div><span><img src="images/logo.png" alt=""/></span></div>
									   </div>
									</div>
									<h1>FAVORITES</h1>
								</a>
							</div>
							<!-- //point burst circle -->
							
							<div class="banner-info text-center">
								<p>Spicy , Tasty & Delicious Always!!</p>
								<div class="order"><a href="#">ORDER US NOW</a></div>
							</div>
						</div>
					</div>
				</li>				
			</ul>
		</div>
	</div>
	<div class="clearfix"></div>
	<!-- banner-bottom -->
		<div class="banner-bottom">
			<div class="container">
				<div class="bottom-grids">
					<div class="col-md-4 bottom-grid text-center">	
						<div class="btm-clr">
							<figure class="icon">
								<img src="images/k1.png" alt="" />
							</figure>
							<h3>New Dishes</h3>
							<p> The trended Dishes provided as per customer's fresh and refreshing taste. This could even be organised by yourself.</p>
						</div>
					</div>
					<div class="col-md-4 bottom-grid btm-gre text-center">
						<div class="btm-clr">
							<figure class="icon">
								<img src="images/k2.png" alt="" />
							</figure>
							<h3>Popular</h3>
							<p> People choice dishes on the top of list. Give your dish the best score.</p>
						</div>
					</div>
					<div class="col-md-4 bottom-grid text-center">
						<div class="btm-clr">
							<figure class="icon">
								<img src="images/k3.png" alt="" />
							</figure>
							<h3>Special Offer</h3>
							<p> The taste will not be suffered in case of price tags. Go for it and avail new offers.</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<!-- //banner-bottom -->
</div>
<!-- //banner -->
<!-- welcome -->
<div class="welcome">
	<div class="container">
		<div class="wel-info">
			<h3>WELCOME</h3>
			<div class="strip-line"></div>
			<p>Say Hi to the world of FUN & FOOD<br>
			This is newly launched website which provide services around the globe. 
			"AnyTime AnyWhere We Are There"</p>
		</div>
		<div class="welcome-grids">
			<div class="col-md-4 welcome-grid-img">
				<img src="images/pic10.jpg" alt=""/>
				<div class="wel-pos">
					<h4>FRUIT SALAD</h4>
				</div>
			</div>
			<div class="col-md-4 welcome-grid">
				<div class="welcome-gd second">
					<h4>At times </h4>
					<p> Our power of choice is the most effective way. You can opt any of your favourite dish and enjoy the meal.
					</p>
				</div>
			</div>
			<div class="col-md-4 welcome-grid-img">
				<img src="images/pic11.jpg" alt=""/>
				<div class="wel-pos">
					<h4>CARROT EGG</h4>
				</div>
			</div>
			<div class="col-md-4 welcome-grid">
				<div class="welcome-gd second">
					<h4>At times</h4>
					<p> This is the only way of happiness. Ask your partner the choice and be the first to make it. 
					</p>
				</div>
			</div>
			<div class="col-md-4 welcome-grid-img">
				<img src="images/pic2.jpg" alt=""/>
				<div class="wel-pos">
					<h4>SPECIAL PRAWNS</h4>
				</div>
			</div>
			<div class="col-md-4 welcome-grid">
				<div class="welcome-gd second">
					<h4>At times</h4>
					<p>Engage your senses in irresistable taste of our food and feel the worth of it.
					</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //welcome -->
<!-- good -->
<div class="good">
	<div class="container">
		<div class="good-info">
			<h3>FINE DESERTS</h3>
			<div class="strip-line"></div>
		</div>
		<div class="good-grids">
			<div class="col-md-5 good-right">
				<img src="images/pic12.jpg" alt=""/>
				<div class="desc">
					<p>DESERT</p>
				</div>
			</div>
			<div class="col-md-7 good-left">
				<h3>GOOD FOOD KEEPS YOU HEALTHY</h3>
				<div class="strip"></div>
				<p>Our food will never compromise with your health. It will keep you and your body strong. We make our food by keeping in mind that every customer can be satisfied.</p><p> Be a part of healthy community.</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //good -->
<!-- delicious -->
<div class="delicious">
	<div class="container">
		<div class="delicious-info">
			<h3>DELICIOUS FOOD FOR ALL TASTES</h3>
			<div class="strip-line"></div>
		</div>
		<div class="delicious-grids">
			<div class="col-md-3 delicious-grid">
				<h3>PASTA SPECIAL</h3>
				<img src="images/g3.jpg" alt=""/>
				
			</div>
			<div class="col-md-3 delicious-grid">
				<h3>FRIED CHICKEN</h3>
				<img src="images/g6.jpg" alt=""/>
				
			</div>
			<div class="col-md-3 delicious-grid">
				<h3>SAUSAGES</h3>
				<img src="images/g5.jpg" alt=""/>
						
			</div>
			<div class="col-md-3 delicious-grid">
				<h3>BREAD SLICE</h3>
				<img src="images/g1.jpg" alt=""/>
				
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //delicious -->
<!-- footer-top -->
<div class="footer-top">
	<div class="container">
		<div class="col-md-3 footer-grid">
			<h3><a href="#">FAVORITES</a></h3>
		</div>
		<div class="col-md-3 footer-grid">
			<h4>BUFFET</h4>
			<p>MONDAY - THURSDAY<span>7 : 00 - 21 : 00</span></p>
		</div>
		<div class="col-md-3 footer-grid">
			<h4>ORDERS</h4>
			<p>MONDAY - SUNDAY<span>7 : 00 - 21 : 00</span></p>
		</div>
		<div class="col-md-3 footer-grid">
			<h4>ADDRESS</h4>
			<ul>
				<li class="list-one">Vrindavan Road, Ludhiana</li>
				<li class="list-two"><a href="mailto:rishabhkhanna39@live.com">rishabhkhanna39@live.com</a></li>
				<li class="list-three">+91 95927-15648</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //footer-top -->
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="footer-left">
			<p>&copy; 2015 Favorites. Design by <a href="https://www.facebook.com/RK.rishabhkhanna39"> Rishabh Khanna</a></p>
		</div>
		<div class="footer-right">
			<ul>
				<li><a href="#" class="twitter"> </a></li>
				<li><a href="#" class="facebook"> </a></li>
				<li><a href="#" class="chrome"> </a></li>
				<li><a href="#" class="pinterest"> </a></li>
				<li><a href="#" class="linkedin"> </a></li>
				<li><a href="#" class="dribbble"> </a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- //footer -->
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

</body>
</html>
