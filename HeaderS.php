<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Excomp</title>
	<!-- Favicon -->

	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

	<!-- StyleSheet -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="slider.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">

	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">



</head>
<body class="js">

	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->


	<!-- Header -->
	<header class="header shop"  style="background-color: #1c1c1c;  color:white;">
		<!-- Topbar -->
		<div class="topbar"  style="background-color:#1c1c1c;  color:white;">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> +060 (800) 801-582</li>
								<li><i class="ti-email"></i> support@shophub.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<li><i class="ti-location-pin" style="color:white;"></i> Store location</li>
								<li><i class="ti-alarm-clock" style="color:white;"></i> <a href="#">Daily deal</a></li>
								<li><i class="ti-user" style="color:white;"></i> <a href="#">My account</a></li>
								<li>

							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo" style="width: 60%">
							<a href="home.php"><img src="Img/logo.png" alt="logo" ></a>

						</div>

						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
                <form  action="listaProd.php" method="POST">
									<input name="search"  id="search" placeholder="Buscar Articulos..." type="text"  autocomplete="off">
									<button class="btnn" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<select>
									<option selected="selected"></option>
									<option>watch</option>
									<option>mobile</option>
									<option>kid’s item</option>
								</select>
                <form  action="listaProd.php" method="POST">
									<input name="search"  id="search" placeholder="Buscar Articulos..." type="text"  autocomplete="off">
									<button class="btnn" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
                <a href="MyCart.php" class="single-icon"><i class="ti-bag"></i> <span class="total-count"><?php if (isset($_SESSION['carrito'])){
                   echo count($_SESSION['carrito']);
                }else {
                  echo 0;
                } ?></span></a>

								<!-- Shopping Item -->
								<div class="shopping-item">
									<div class="dropdown-cart-header">
										<span>2 Items</span>
										<a href="#">View Cart</a>
									</div>
									<ul class="shopping-list">
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
											<h4><a href="#">Woman Ring</a></h4>
											<p class="quantity">1x - <span class="amount">$99.00</span></p>
										</li>
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
											<h4><a href="#">Woman Necklace</a></h4>
											<p class="quantity">1x - <span class="amount">$35.00</span></p>
										</li>
									</ul>
									<div class="bottom">
										<div class="total">
											<span>Total</span>
											<span class="total-amount">$134.00</span>
										</div>
										<a href="checkout.html" class="btn animate">Checkout</a>
									</div>
								</div>
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner" >
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							<div class="all-category">
								<h3 class="cat-heading" style="background-color:#1c1c1c;"><i class="fa fa-bars" aria-hidden="true"></i>ExComp</h3>
								<ul class="main-category">

									<li class="main-mega"><a href="#">Lo Mejor<i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="mega-menu">
											<li class="single-menu">
												<a href="ListProd.php?Catg=accesorio/gaming" class="title-link">Accesorios Gamers</a>
												<div class="image">
													<img src="Img/accesorio4.jpg" alt="#">
												</div>
												<div class="inner-link">
													<a href="#">Kids Toys</a>

												</div>
											</li>
											<li class="single-menu">
												<a href="ListProd.php?Catg=impresora" class="title-link">Impresoras</a>
												<div class="image">
													<img src="Img/impresora3.jpg" alt="#">
												</div>
												<div class="inner-link">
													<a href="#">Watch</a>

												</div>
											</li>
											<li class="single-menu">
												<a href="ListProd.php?Catg=audio/gaming" class="title-link">Audio</a>
												<div class="image">
													<img src="Img/audio2.jpg" alt="#">
												</div>
												<div class="inner-link">
													<a href="#">Ladies Shirt</a>

												</div>
											</li>
										</ul>
									</li>
									<li><a href="ListProd.php?Catg=accesorio/gaming"> Accesorios</a></li>
								<li><a href="ListLap.php">Laptop</a></li>
									<li><a href="#">Recientes</a></li>
									<li><a href="#">Tendencias</a></li>
									<li><a href="ListProd.php?Catg=accesorio/gaming">Componentes</a></li>

								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">
										<div class="nav-inner">
											<ul class="nav main-menu menu navbar-nav" >
													<li ><a href="#">Nosotros</a></li>
													<li><a href="ListProd.php?Catg=laptop/promo">Ofertas</a></li>
                          	<li><a href="ListProd.php?Catg=accesorio/gaming">Gamers</a></li>
                            		<li><a href="#">Servicios</a></li>
													<li><a href="Contac.php">Contactanos</a></li>
                          <?php
                          include("ConexLog.php");
                          $EmailCliente = $_SESSION['EmailCliente'];
               $querySesion="SELECT tbclienteNombre from  tbcliente  where 	Email  = '$EmailCliente'";
               $resultado = mysqli_query($conexion,$querySesion);
               $array =  mysqli_fetch_array($resultado);
                          ?>
                 <li><a href="Contac.php">Hola,<?php   echo $array['tbclienteNombre'];?>!</a></li>
                          <li><a href="https://nahunmeza.com/ExComp/Sesion/SesionOFF.php">Salir</a></li>


												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->











	</header>
