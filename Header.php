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
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalLogin"  style="margin-left: 2%;"><i class="fa fa-power-off" aria-hidden="true" title="Ingresar"></i>Ingresar</button>


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
							<a href="index.php"><img src="https://nahunmeza.com/ExComp/images/logo.png" alt="logo" ></a>

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
										<a href="#">Ver Carrito</a>
									</div>

									<ul class="shopping-list">


                  	<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
											<h4><a href="#"></a></h4>
											<p class="quantity">x - <span class="amount">Lps.</span></p>
										</li>

									</ul>
									<div class="bottom">
										<div class="total">
											<span>Total</span>
											<span class="total-amount">Lps.</span>
										</div>
										<a href="checkout.html" class="btn animate">Ver Compra</a>
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
													<img src="https://nahunmeza.com/ExComp/images/accesorio4.jpg" alt="#">
												</div>
												<div class="inner-link">
													<a href="#">Kids Toys</a>

												</div>
											</li>
											<li class="single-menu">
												<a href="ListProd.php?Catg=impresora" class="title-link">Impresoras</a>
												<div class="image">
													<img src="https://nahunmeza.com/ExComp/images/impresora3.jpg" alt="#">
												</div>
												<div class="inner-link">
													<a href="#">Watch</a>

												</div>
											</li>
											<li class="single-menu">
												<a href="ListProd.php?Catg=audio/gaming" class="title-link">Audio</a>
												<div class="image">
													<img src="https://nahunmeza.com/ExComp/images/audio2.jpg" alt="#">
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
                          <li><a href="">Inicia Sesion</a></li>
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





    <!-- Modal -->
      <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                      </div>
                      <div class="modal-body">
                          <div class="row no-gutters">
                              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                  <!-- Product Slider -->
                    <div class="product-gallery">
                      <div class="quickview-slider-active">
                        <div class="single-slider">
                          <img src="https://nahunmeza.com/ExComp/images/monitor.jpg" alt="#">
                        </div>
                        <div class="single-slider">
                          <img src="https://nahunmeza.com/ExComp/images/cpu1.jpg" alt="#">
                        </div>
                        <div class="single-slider">
                          <img src="https://nahunmeza.com/ExComp/images/audio1.jpg" alt="#">
                        </div>

                      </div>
                    </div>
                  <!-- End Product slider -->
                              </div>
                              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                   <center><img src="https://cdn1.iconfinder.com/data/icons/data-analytics-data-storage-double-color-black-a-7/52/user__person__avatar__man-512.png" alt="" style="width:20%;">  </center>
                                <br>
                                <center>
                                  <form style="margin-top:5%;"  action="https://nahummeza.000webhostapp.com/ExComp/Sesion/SesionON.php" method="post">
                                  <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                      <label style="color:black;">Ingresa tu Email<span>*</span></label>
                                      <input type="text" name="EmailCliente"  id="EmailCliente" placeholder="" required="required">
                                    </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                      <label style="color:black;">Ingresa tu Password <span>*</span></label>
                                      <input type="password" name="userPass"  id="userPass" placeholder="" required="required">
                                    </div>
                                  </div>

  <button type="submit" class="btn btn-primary">Ingresar </button>
  </form>  </center>

                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
      </div>
      <!-- Modal end -->




	</header>
