<?php
ob_start();
 session_start();


include("Header.php");
include("conexion.php");
?>

	<!--/ End Header -->

<!-- Banner -->

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	     <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="https://nahunmeza.com/ExComp/images/banner1.jpg" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="https://nahunmeza.com/ExComp/images/banner4.jpg" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="https://nahunmeza.com/ExComp/images/banner5.jpg" alt="Third slide">
	    </div>
	      <div class="carousel-item">
	      <img class="d-block w-100" src="https://nahunmeza.com/ExComp/images/banner2.jpg" alt="Four slide">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<!--/ End Slider Area -->

	<!-- Start Small Banner  -->
	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://nahunmeza.com/ExComp/images/banner6.jpg" alt="#">
						<div class="content" style="color:white;">

				<h3 style="color:white;">CORE i7-8700 <br><span></span></h3>
							<a href="#">Ver Zona Gaming</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://nahunmeza.com/ExComp/images/banner7.jpg" alt="#">
            <div class="content" style="color:white;">

        <h3 style="color:white;">CORE i5-8400 <br><span></span></h3>
              <a href="#">Ver Zona Gaming</a>
            </div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="https://nahunmeza.com/ExComp/images/banner8.jpg" alt="#">
            <div class="content" style="color:white;">

        <h3 style="color:white;">AMD RYZEN <br><span></span></h3>
              <a href="#">Ver Zona Gaming</a>
            </div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Small Banner -->

	<!-- Start Product Area -->

    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Productos en Tendencias</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<!-- Tab Nav -->
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Accesorios</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Laptops</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Audio</a></li>

									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Promos</a></li>

								</ul>
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="man" role="tabpanel">
                  <div class="tab-single">
                    <?php
                    $query= ("SELECT * FROM tbproductos  WHERE  TipoProd = 'accesorio/gaming' ");
                    $add=$mysqli->query($query);

                                 ?>

                        <div class="row">
                            <?php while($producto=$add->fetch_assoc()){
                                ?>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                              <div class="single-product">
                                <div class="product-img">
                                  <a href="product-details.html">
                                    <img class="default-img" src="<?php echo $producto['Img']; ?>" alt="#">
                                    <img class="hover-img" src="<?php echo $producto['Img']; ?>" alt="#">
                                  </a>
                                  <div class="button-head">
                                    <div class="product-action">

                                      </div>

                                <input type="hidden" name="idProd"  id="idProd" value="<?php echo $producto['idProd']; ?>">
                                <input type="hidden" name="CantProd"  id="CantProd" value="1">
                                  <div class="product-action-2">
                                    <a href="MyCart.php?idProd=<?php  echo $producto['idProd'];?>" class="btn btn-danger" title="Agregar al Carrito" style="border-color:red;">
                                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Agrega</a>
																		<a href="ArticDet.php?idProd=<?php  echo $producto['idProd'];?>" class="btn btn-danger" title="Ver Detalle">
                                      <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Detalle</a>
								                 </div>


                                  </div>
                                </div>
                                <div class="product-content">
                                  <h3><a href="product-details.html"><?php echo $producto['NombreProd']; ?></a></h3>
                                  <div class="product-price">
                                    <span>Lps.<?php echo $producto['PrecioProd']; ?></span>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <?php
                       }
                             ?>
                          </div>


                        </div>
                      </div>

                  <!--/ End Single Tab -->
                  <!-- Start Single Tab -->
                  <div class="tab-pane fade" id="kids" role="tabpanel">
                    <div class="tab-single">
                    <?php
                    $query= ("SELECT * FROM tbproductos  WHERE  TipoProd = 'Audio/gaming' ");
                    $add=$mysqli->query($query);

                                 ?>

                        <div class="row">
                            <?php while($producto=$add->fetch_assoc()){
                                ?>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                          <div class="single-product">
                            <div class="product-img">
                              <a href="product-details.html">
                                <img class="default-img" src="<?php echo $producto['Img']; ?>" alt="#">
                                <img class="hover-img" src="<?php echo $producto['Img']; ?>" alt="#">
                              </a>
                              <div class="button-head">
                                <div class="product-action">

                                </div>

                                   <input type="hidden" name="idProd"  id="idProd" value="<?php echo $producto['idProd']; ?>">

                                   <input type="hidden" name="CantProd"  id="CantProd" value="1">

                                   <div class="product-action-2">
                                     <a href="MyCart.php?idProd=<?php  echo $producto['idProd'];?>" class="btn btn-danger" title="Agregar al Carrito" style="border-color:red;">
                                       <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Agrega</a>
                                     <a href="ArticDet.php?idProd=<?php  echo $producto['idProd'];?>" class="btn btn-danger" title="Ver Detalle">
                                       <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Detalle</a>
                                  </div>


                              </div>
                            </div>
                            <div class="product-content">
                              <h3><a href="product-details.html"><?php echo $producto['NombreProd']; ?></a></h3>
                              <div class="product-price">
                                <span>Lps.<?php echo $producto['PrecioProd']; ?></span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <?php
                         }
                         ?>
                       </div>
                       </div>
                       </div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="women" role="tabpanel">
									<div class="tab-single">
                    <?php
                    $query= ("SELECT * FROM tbproductos  WHERE  TipoProd = 'Laptop' ");
                    $add=$mysqli->query($query);

                                 ?>

                        <div class="row">
                            <?php while($producto=$add->fetch_assoc()){
                                ?>
      											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
      												<div class="single-product">
      													<div class="product-img">
      														<a href="product-details.html">
      															<img class="default-img" src="<?php echo $producto['Img']; ?>" alt="#">
      															<img class="hover-img" src="<?php echo $producto['Img']; ?>" alt="#">
      														</a>
      														<div class="button-head">
      															<div class="product-action">

      															</div>

                                       <input type="hidden" name="idProd"  id="idProd" value="<?php echo $producto['idProd']; ?>">

                                       <input type="hidden" name="CantProd"  id="CantProd" value="1">
                                       <div class="product-action-2">
                                         <a href="MyCart.php?idProd=<?php  echo $producto['idProd'];?>" class="btn btn-danger" title="Agregar al Carrito" style="border-color:red;">
                                           <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Agrega</a>
                                         <a href="ArticDet.php?idProd=<?php  echo $producto['idProd'];?>" class="btn btn-danger" title="Ver Detalle">
                                           <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Detalle</a>
                                      </div>


      														</div>
      													</div>
      													<div class="product-content">
      														<h3><a href="product-details.html"><?php echo $producto['NombreProd']; ?></a></h3>
      														<div class="product-price">
      															<span>Lps.<?php echo $producto['PrecioProd']; ?></span>
      														</div>
      													</div>
      												</div>
      											</div>

                            <?php
                       }
                             ?>
      										</div>


      									</div>
      								</div>

								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="essential" role="tabpanel">
                  <div class="tab-single">
                    <?php
                    $query= ("SELECT * FROM tbproductos  WHERE  TipoProd = 'laptop/promo' ");
                    $add=$mysqli->query($query);
                       ?>

                        <div class="row">
                            <?php while($producto=$add->fetch_assoc()){
                                ?>
      											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
      												<div class="single-product">
      													<div class="product-img">
      														<a href="product-details.html">
      															<img class="default-img" src="<?php echo $producto['Img']; ?>" alt="#">
      															<img class="hover-img" src="<?php echo $producto['Img']; ?>" alt="#">
      														</a>
      														<div class="button-head">
      															<div class="product-action">

      															</div>

                                       <input type="hidden" name="idProd"  id="idProd" value="<?php echo $producto['idProd']; ?>">

                                       <input type="hidden" name="CantProd"  id="CantProd" value="1">

                                       <div class="product-action-2">
                                         <a href="MyCart.php?idProd=<?php  echo $producto['idProd'];?>" class="btn btn-danger" title="Agregar al Carrito" style="border-color:red;">
                                           <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Agrega</a>
                                         <a href="ArticDet.php?idProd=<?php  echo $producto['idProd'];?>" class="btn btn-danger" title="Ver Detalle">
                                           <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Detalle</a>
                                      </div>


      														</div>
      													</div>
      													<div class="product-content">
      														<h3><a href="product-details.html"><?php echo $producto['NombreProd']; ?></a></h3>
      														<div class="product-price">
      															<span>Lps.<?php echo $producto['PrecioProd']; ?></span>
      														</div>
      													</div>
      												</div>
      											</div>

                            <?php
                       }
                             ?>
      										</div>


      									</div>
      								</div>

								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="accessories" role="tabpanel">
                  <div class="tab-pane fade" id="essential" role="tabpanel">

								<!--/ End Single Tab -->


										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product Area -->

	<!-- Start Midium Banner  -->
	<section class="midium-banner">
		<div class="container">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://nahunmeza.com/ExComp/images/cpu1.jpg" alt="#">
						<div class="content" style="color:white;">

							<h3 style="color:white;">AMD RYZEN <br><span></span></h3>
							<a href="#">Ver Zona Gaming</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://nahunmeza.com/ExComp/images/laptop16.jpg" alt="#">
						<div class="content" style="color:white;">

								<h3 style="color:white;">CORE i7 9750 <br><span></span></h3>
							<a href="#" class="btn">Ver Zona Gaming</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Midium Banner -->

	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Lo Nuevo</h2>
					</div>
				</div>
            </div>
            <?php
            $query= ("SELECT * FROM tbproductos  WHERE  TipoProd = 'accesorio/gaming' LIMIT 4 ");
            $add=$mysqli->query($query);
?>

            <div class="row">

                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
            <?php while($producto=$add->fetch_assoc()){
                ?>
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
									<img class="default-img" src="<?php echo $producto['Img']; ?>" alt="#">
									<img class="hover-img" src="<?php echo $producto['Img']; ?>" alt="#">
									<span class="out-of-stock">Hot</span>
								</a>
								<div class="button-head">
									<div class="product-action">
										<form  action="ArticDet.php" method="GET">
											 <input type="hidden" name="idProd"  id="idProd" value="<?php echo $producto['idProd']; ?>">
											<button class="btn btn-danger" name="btnAccion" value="Agregar" type="submit" ><i class="fa fa-eye"></i>Detalle</button>
											</form>
									</div>
                  <form  action="	MyCart.php" method="GET">
                     <input type="hidden" name="idProd"  id="idProd" value="<?php echo $producto['idProd']; ?>">

                  <div class="product-action-2">
  <button class="btn btn-danger" name="btnAccion" value="Agregar" type="submit" ><i class="fa fa-shopping-cart" aria-hidden="true"></i>Agregar</button>
									</form>

                  </div>




								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html"><?php echo $producto['NombreProd']; ?></a></h3>
								<div class="product-price">
									<span class="old">$60.00</span>
									<span>Lps.<?php echo $producto['PrecioProd']; ?></span>
								</div>
							</div>
						</div>
            <?php
        }
             ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
	<!-- End Most Popular Area -->

	<!-- Start Shop Home List  -->
	<section class="shop-home-list section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
          <?php
          $query= ("SELECT * FROM tbproductos  WHERE  TipoProd = 'laptop/promo'  LIMIT 4 ");
          $add=$mysqli->query($query);
   ?>
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Ofertas</h1>
							</div>
						</div>
					</div>

					<!-- Start Single List  -->
          <?php while($producto=$add->fetch_assoc()){
              ?>
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="<?php echo $producto['Img']; ?>" alt="#">

									<a href="ArticDet.php?idProd=<?php  echo $producto['idProd'];?>" class="buy"><i class="fa fa-shopping-bag" title="Ver Detalle"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#"><?php echo $producto['NombreProd']; ?></a></h5>
									<p class="price with-discount">Lps.<?php echo $producto['PrecioProd']; ?></p>
								</div>
							</div>
						</div>
					</div>
          <?php
          }
           ?>
					<!-- End Single List  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
          <?php
          $query= ("SELECT * FROM tbproductos  WHERE  TipoProd = 'accesorio/gaming' limit 4 ");
          $add=$mysqli->query($query);

                   ?>
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Recientes</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
          <?php while($producto=$add->fetch_assoc()){
              ?>
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="<?php echo $producto['Img']; ?>" alt="#">
									<a href="ArticDet.php?idProd=<?php  echo $producto['idProd'];?>" class="buy"><i class="fa fa-shopping-bag" title="Ver Detalle"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#"><?php echo $producto['NombreProd']; ?></a></h5>
									<p class="price with-discount">Lps.<?php echo $producto['PrecioProd']; ?></p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->

          <?php
          }
           ?>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
          <?php
          $query= ("SELECT * FROM tbproductos  WHERE  TipoProd = 'laptop/gaming' ");
          $add=$mysqli->query($query);


         ?>
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Mas Vistos</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
          <?php while($producto=$add->fetch_assoc()){
              ?>
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="<?php echo $producto['Img']; ?>" alt="#">
									<a href="ArticDet.php?idProd=<?php  echo $producto['idProd'];?>" class="buy"><i class="fa fa-shopping-bag" title="Ver Detalle"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#"><?php echo $producto['NombreProd']; ?></a></h5>
									<p class="price with-discount">Lps.<?php echo $producto['PrecioProd']; ?></p>
								</div>
							</div>
						</div>
					</div>
          <?php
          }
           ?>
					<!-- End Single List  -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Home List  -->

	<!-- Start Cowndown Area -->
	<section class="cown-down">
		<div class="section-inner ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-12 padding-right">
						<div class="image" style="width: 100%;height: auto;">
							<img src="https://nahunmeza.com/ExComp/images/audio1.jpg" alt="#">
						</div>
					</div>
					<div class="col-lg-6 col-12 padding-left">
						<div class="image" style="width: 100%;height: auto;">
							<img src="https://nahunmeza.com/ExComp/images/monitor.jpg" alt="#">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /End Cowndown Area -->

	<!-- Start Shop Blog  -->
	<section class="shop-blog section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Nuestro Blog de Tecnologia</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Blog  -->
					<div class="shop-single-blog">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/S9LkHxPLPSc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<div class="content">
							<p class="date">22 July , 2020. Monday</p>
							<a href="#" class="title">UNBOXING MSI GF75.</a>
							<a href="#" class="more-btn">Continue Reading</a>
						</div>
					</div>
					<!-- End Single Blog  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Blog  -->
					<div class="shop-single-blog">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/3JZq49-8cJE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<div class="content">
							<p class="date">22 July, 2020. Monday</p>
							<a href="#" class="title">SOMOS EXCOMP</a>

						</div>
					</div>
					<!-- End Single Blog  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Blog  -->
					<div class="shop-single-blog">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/Xu0D9503ado" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<div class="content">
							<p class="date">22 July, 2020. Monday</p>
							<a href="#" class="title">¿Cuanto cuesta armar una computadora?</a>
							<a href="#" class="more-btn">Continue Reading</a>
						</div>
					</div>
					<!-- End Single Blog  -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Blog  -->

	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
          <div class="single-service">
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->

	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->



	<?php   include("footer.php"); ?>
