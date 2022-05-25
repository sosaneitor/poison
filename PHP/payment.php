<?php

session_start();

$pedido=$_SESSION["Nropedido"];


?>



<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>POISON</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>NECESITA AYUDA</h6>
					<ul>
						<li>
							<a href="https://wa.me/message/O2Y4AO5C5KN2L1"><i class="fas fa-phone" ></i style.color: "red";> WHATSAPP</li></a>
						
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="sesion.php">
							POISON </a>
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
						<li class="button-log">
						<?php echo "Nombre: " .$_SESSION["Nombre"];?>
						</li>
						<li class="galssescart galssescart2 cart cart box_1">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="top_googles_cart" type="submit" name="submit" value="">
									MI CARRITO
									<i class="fas fa-cart-arrow-down"></i>
								</button>
							</form>
						</li>
					</ul>
					<!---->
					
				</div>
			</div>
			<div class="search">
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>
				<!-- open/close -->
				<div class="overlay overlay-door">
					<button type="button" class="overlay-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<form action="#" method="post" class="d-flex">
						<input class="form-control" type="search" placeholder="Search here..." required="">
						<button type="submit" class="btn btn-primary submit">
							<i class="fas fa-search"></i>
						</button>
					</form>

				</div>
				<!-- open/close -->
			</div>
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="sesion.php">Inicio
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="personalizarS.php">Personaliza</a>
						</li>
					
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								CATALOGO
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> BUZOS </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="shop.html">Buzos de Anime</a>
												</li>
												<li class="">
													<a href="shop.html">Buzos de Peliculas</a>
												</li>
												<li>
													<a href="shop.html">Buzos de Pareja</a>
												</li>
												<li>
													<a href="shop.html">Personaliza tu Buzo</a>
												</li>
												<li>
													<a href="shop.html">Buzos para Niños</a>
												</li>
												
												
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Camisetas </h5>
											<ul>
												<li class="media-mini mt-3">

													<a href="shop.html">Camisetas de Anime</a>
												</li>
												<li>
													<a href="shop.html">Camisetas de Peliculas</a>
												</li>
												<li>
													<a href="shop.html">Personaliza tu camiseta</a>
												</li>
												<li>
													<a href="shop.html">Camiseta de Pareja </a>
												</li>
												<li>
													<a href="shop.html">Camiseta para niños </a>
												</li>
												
											</ul>
											

										</div>
										<div class="col-md-4 media-list span4 text-left">

											<h5 class="tittle-w3layouts-sub-nav">Promociones </h5>
											<div class="media-mini mt-3">
												<a href="shop.html">
													<img src="images/angelica1.jpeg" class="img-fluid" alt="">
												</a>
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">SOPORTE</a>
						</li>
					</ul>

				</div>
			</nav>
		</header>
    </div>
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="sesion.php">Home</a>
							<i>|</i>
						</li>
						<li>Metodos de Pago </li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
		<!--// header_top -->
		<!--Payment-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container">
				<div class="inner-sec-shop px-lg-4 px-3">
                    <h2 class="titulos-h3"><?php echo "Codigo de Compra: ".$pedido; ?> </h2>
                    <p> <a href="www.poisonst.com"> Una vez echo el pago, por favor envia el comprobante y el codigo de compra via whatsapp (puedes hacerlo dando click aqui) </a> </p>
					<h3 class="titulos-h3">Metodos de pago </h3>

					<!--/tabs-->
					<div class="responsive_tabs">
						<div id="horizontalTab">
							<ul class="resp-tabs-list">
								<li>DAVIPLATA</li>
								<li>BANCOLOMBIA</li>
								<li>NEQUI</li>
								<li>Paypal </li>
							</ul>
							<div class="resp-tabs-container">
								<!--/tab_one-->
								<div class="tab1">
									<div class="pay_info">
										<div class="vertical_post check_box_agile">
											<h5>DAVIPLATA</h5>
											<div class="checkbox">
												<div class="check_box_one cashon_delivery">
													<label class="anim">
														
														<span> NUMERO DAVIPLATA: 3212210569</span>
													</label>
												</div>

											</div>
										</div>
									</div>

								</div>
								<!--//tab_one-->
								<div class="tab2">
									<div class="pay_info">
									<h5>BANCOLOMBIA</h5>
											<div class="checkbox">
												<div class="check_box_one cashon_delivery">
													<label class="anim">
														
														<span> AHORROS BANCOLOMBIA: 03212210569</span> <p></p>
														<span> NOMBRE RESPONSABLE: SEBASTIAN SOSA  </span> <p></p>
														<span> CC: 1088352638</span>
													</label>
												</div>

											</div>

									</div>
								</div>
								<div class="tab3">

									<div class="pay_info">
										<div class="vertical_post">
										<h5>NEQUI</h5>
											<div class="checkbox">
												<div class="check_box_one cashon_delivery">
													<label class="anim">
														
														<span> NUMERO NEQUI: 3157063375 </span> <P>
														<span> </span>
													</label>
												</div>

											</div>
										</div>
									</div>
								</div>
								<div class="tab4">
									<div class="pay_info row">
										<div class="col-md-6 tab-grid">
											<img class="pp-img" src="images/paypal.png" alt="Image Alternative text" title="Image Title">
											<p>Important: You will be redirected to PayPal's website to securely complete your payment.</p>
											<a class="btn btn-primary">Checkout via Paypal</a>
										</div>
										<div class="col-md-6">
										<form action="#" method="post" class="cc-form">
												<div class="clearfix">
													<div class="form-group form-group-cc-number">
														<label>Card Number</label>
														<input class="form-control" placeholder="xxxx xxxx xxxx xxxx" type="text">
														<span class="cc-card-icon"></span>
													</div>
													<div class="form-group form-group-cc-cvc">
														<label>CVV</label>
														<input class="form-control" placeholder="xxxx" type="text">
													</div>
												</div>
												<div class="clearfix">
													<div class="form-group form-group-cc-name">
														<label>Card Holder Name</label>
														<input class="form-control" type="text">
													</div>
													<div class="form-group form-group-cc-date">
														<label>Valid Thru</label>
														<input class="form-control" placeholder="mm/yy" type="text">
													</div>
												</div>
												<div class="checkbox checkbox-small mt-4">
													<label>
														<input class="i-check" type="checkbox" checked="">Add to My Cards</label>
												</div>
												<input class="btn btn-primary submit mt-4" type="submit" value="Proceed Payment">
											</form>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--//tabs-->
				</div>

			</div>
			<!-- //payment -->
		</section>
		<!--//Payment-->
		<!--footer -->
		<!--footer -->
	<footer class="py-lg-5 py-3">
		<div class="container-fluid px-lg-5 px-3">
			<div class="row footer-top-w3layouts">
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>SOBRE NOSOTROS</h3>
					</div>
					<div class="footer-text">
						<p>Somos un emprendimiento creado en la ciudad de pereira, desde el inicio pensamos 
							en ser una marca unica con la que nuestros clientes se puedan indentificar.
						</p>
						<ul class="footer-social text-left mt-lg-4 mt-3">

							<li class="mx-2">
								<a href="#">
									<span class="fab fa-facebook-f"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-twitter"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-google-plus-g"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-whatsapp-w"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fas fa-rss"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-vk"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Donde nos encontramos </h3>
					</div>
					<div class="contact-info">
						<h4>Locacion:</h4>
						<p>Bosques de cuba - apto 1942</p>
						<div class="phone">
							<h4>Contact :</h4>
							<p>Celular: 3212210569 - 3157063378</p>
							<p>Email : 
								<a href="sss_sosa@hotmail.com">sss_sosa@hotmail.com</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Links</h3>
					</div>
					<ul class="links">
						<li>
							<a href="sesion.php">INICIO</a>
						</li>
						<li>
							<a href="Personalizar.html">PERSONALIZA</a>
						</li>
						<li>
							<a href="Shop.html">CATALOGO</a>
						</li>
					
						<li>
							<a href="contact.html">CONTACTANOS</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Resgistrate para recibir ofertas </h3>
					</div>
					<div class="footer-text">
						<li>
							<a href="iniciar.html">Registrate aqui</a>
						</li>
						
					</div>
				</div>
			</div>
			
		</div>
	</footer>
		<!-- //footer -->
		<!--jQuery-->
		<script src="js/jquery-2.2.3.min.js"></script>
		<!-- newsletter modal -->
		<!--search jQuery-->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<script src="js/classie-search.js"></script>
		<script src="js/demo1-search.js"></script>
		<!--//search jQuery-->
		<!-- cart-js -->
		<script src="js/minicart.js"></script>
		<script>
			googles.render();

			googles.cart.on('googles_checkout', function (evt) {
				var items, len, i;

				if (this.subtotal() > 0) {
					items = this.items();

					for (i = 0, len = items.length; i < len; i++) {}
				}
			});
		</script>
		<!-- //cart-js -->
		<script>
			$(document).ready(function () {
				$(".button-log a").click(function () {
					$(".overlay-login").fadeToggle(200);
					$(this).toggleClass('btn-open').toggleClass('btn-close');
				});
			});
			$('.overlay-close1').on('click', function () {
				$(".overlay-login").fadeToggle(200);
				$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
				open = false;
			});
		</script>
		<!-- carousel -->
		<!-- easy-responsive-tabs -->
		<script src="js/easy-responsive-tabs.js"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>

		<!-- credit-card -->
		<script type="text/javascript" src="js/creditly.js"></script>
		<link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />

		<script type="text/javascript">
			$(function () {
				var creditly = Creditly.initialize(
					'.creditly-wrapper .expiration-month-and-year',
					'.creditly-wrapper .credit-card-number',
					'.creditly-wrapper .security-code',
					'.creditly-wrapper .card-type');

				$(".creditly-card-form .submit").click(function (e) {
					e.preventDefault();
					var output = creditly.validate();
					if (output) {
						// Your validated credit card output
						console.log(output);
					}
				});
			});
		</script>
		<!-- //credit-card -->
		<!-- dropdown nav -->
		<script>
			$(document).ready(function () {
				$(".dropdown").hover(
					function () {
						$('.dropdown-menu', this).stop(true, true).slideDown("fast");
						$(this).toggleClass('open');
					},
					function () {
						$('.dropdown-menu', this).stop(true, true).slideUp("fast");
						$(this).toggleClass('open');
					}
				);
			});
		</script>
		<!-- //dropdown nav -->
		<script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->


		<!-- //smooth-scrolling-of-move-up -->
		<script src="js/bootstrap.js"></script>
		<!-- js file -->
</body>

</html>