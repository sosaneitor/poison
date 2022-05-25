<?php


session_start();


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <title>POISON STORE</title>
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
        <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link href="css/fontawesome-all.css" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
            rel="stylesheet">
    </head>
</head>
<body>
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
                    <?php echo "BIENVENIDE " .$_SESSION["Nombre"];?>
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
   
    <div>
        <h3 class="titulos-h3">PERSONALIZA TU PRENDA</h3>
    </div>

    
    <div class="personalizar1">

        
        <form class="#" name="form" action="personalizar.php"  method="post">
            
            <div class="col-lg-4 address-grid">
                <div class="row address-info">
                    <div class="col-md-3 address-left text-center">
                        <a class="menu__button" href="/designers/sketchomat/productTypes">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2em" height="2em" fill="currentColor">
                                <path d="m.7 11.1 6 5.9L8 15.6v10.5c0 1.6 1.3 2.9 2.9 2.9h10.2a3 3 0 0 0 3-2.9V15.5l1.4 1.5 6-5.9-8.1-8h-5.3v1a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-1H8.7zm2.8 0 6-6h2.6c.5 1.7 2.1 3 3.9 3a4 4 0 0 0 3.9-3h2.7l6 6-3.1 3-3.4-3.5v15.5c0 .5-.4.9-1 .9H10.9a.9.9 0 0 1-.9-.9V10.6l-3.4 3.5z"></path>
                            </svg></a>
                    </div>
                    <div class="col-md-9 address-right text-left">
                        
                                        Escoger prenda:<select name="prenda" id="prenda" >
                                            <option value="camiseta"> CAMISETA </option>
                                            <option value="buzo">BUZO</option>
                                            <option value="buzo">Buzo con capota y bolsillos </option>
											<option value="buzo-cremallera"> Buzo con cremallera </option>
											<option value="buzo-sin-bolsillos">Buzo sin bolsillos</option>
											<option value="buzo-sin-mangas">Buzo sin mangas</option>
											<option value="buzo-sencillo">Buzo sin capota ni bolsillos</option>
											<option value="buzo-sin-capota">Buzo sin capota con bolsillos</option>
                                        </select> <P>
                        
                    </div>
                </div>

            </div>
            
               
             
            
                <div class="col-lg-4 address-grid">
                    <div class="row address-info">
                        <div class="col-md-3 address-left text-center">
                            <i class="far fa-map"></i>
                        </div>
                        <div class="col-md-9 address-right text-left">
                            Color: <select name="color" id="color" >
                                <option value="blanco" style="background-color: white;color: black;">BLANCO</option>
                                <option value="negro" style="background-color: rgb(0, 0, 0);color: rgb(255, 255, 255);">NEGRO</option>
                                <option value="grisclaro"style="background-color: rgb(170, 170, 170);color: black;">GRIS CLARO</option>
                                <option value="grisoscuro" style="background-color: rgb(60, 60, 60);color: rgb(255, 255, 255);">GRIS OSCURO</option>
                                <option value="rosado" style="background-color: rgb(255, 0, 217);color: black;">ROSADO</option>
                                <option value="paloderosa" style="background-color: rgb(223, 137, 212);color: black;">PALO DE ROSA</option>
                                <option value="rojo">ROJO</option>
                                <option value="hueso">HUESO</option>
                                <option value="beish">BEISH</option>
                                <option value="lila">LILA</option>
                                <option value="azulaguamarina">AZUL AGUA MARINA</option>
                                <option value="azulrey">AZUL REY</option>
                            </select><P>
                            
                                            
                            
                        </div>
                    </div>
    
                </div>
            

            <div class="pz-container">

            Talla: <select name="talla" id="talla" >
                
                <option value="s">S</option>
                <option value="m">M</option>
                <option value="l">L</option>
                <option value="xl">XL</option>
                <option value="xxl">XXL</option>
                <option value="xxxl">XXXL</option>
                <option value="xxxxl">XXXXL</option>
    
            </select> <p>
                </div>

            <div class="pz-container">
                Celular: <?php echo $_SESSION["celular"]; ?>
            </div> 

                    
            <div class="pz-container">
                        Seleccione una imagen que desea agregar a la prenda:  <input type="file" name="imagen" id="imagen"> <p>
                        </div>
                        
            
                            
            <div class="pz-container">
                                Descripcion: <input type="text" name="descripcion" id="descripcion"> <p></p>
                            </div>

            <input type="submit" value="COMPRAR AHORA">
                                
                           
                            
                            
                            
        </form> <p>
                 
                            
    </div>

    
                            

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
	<!-- Count-down -->
	<script src="js/simplyCountdown.js"></script>
	<link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
	<script>
		var d = new Date();
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script>
	<!--// Count-down -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					900: {
						items: 3,
						nav: false
					},
					1000: {
						items: 4,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>

	<!-- //end-smooth-scrolling -->


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

	<script src="js/bootstrap.js"></script>
</body>
</html>