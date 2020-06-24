<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Каталог |Azazara</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
		
		<!-- Google Fonts
		============================================ -->		
       <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
       <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	   
		<!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Font awesome CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
		<!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="css/jquery-ui.css">
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="css/main.css">
		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="css/style.css">
		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        <script>
            fetch("./header.php")
                .then(response => {
                  return response.text()
                })
                .then(data => {
                  document.querySelector("header").innerHTML = data;
                });

            fetch("./footer.php")
                .then(response => {
                  return response.text()
                })
                .then(data => {
                  document.querySelector("footer").innerHTML = data;
                });
          </script>
    </head>
    <body>

        <header></header>
		<!-- START PAGE-CONTENT -->
		<section class="page-content">
			<div class="container">
	            <div class="row">
					<div class="col-md-12">
						<ul class="page-menu">
							<li><a href="index.html">На главную</a></li>
							<li class="active"><a href="#">Самые продающиеся</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-0">
						<!-- CATEGORY-MENU-LIST START -->
	                    <div class="left-category-menu hidden-sm hidden-xs">
	                        <div class="left-product-cat">
	                            <div class="category-heading">
	                                <h2>Категории</h2>
	                            </div>
								<div class="category-menu-list">
									<ul>
										<li class="">
											<a href="shop.php">Женская одежда</a>
										</li>
										<li class="">
											<a href="shop.php">Мужская одежда</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- \меню продукции -->
					</div>
						<!-- END CATEGORY-MENU-LIST -->

						<!-- filter-by end -->
					</div>
					<div class="col-md-0 col-xs-12">
						<!-- START PRODUCT-BANNER -->
						<!-- END PRODUCT-BANNER -->
						<!-- START PRODUCT-AREA -->
						<div class="product-area">
							<div class="row">
								<div class="col-xs-12">
									<!-- Start Product-Menu -->
									<div class="product-menu">
										<div class="product-title">
											<h3 class="title-group-3 gfont-1">Женская одежда</h3>
										</div>
									</div>
									<div class="product-filter">
										<ul role="tablist">
											<li role="presentation"  class="grid active">
												<a href="#display-1" role="tab" data-toggle="tab"></a>
											</li>
										</ul>
									</div>

									<div class="clear"></div>
								</div>
							</div>
							<?php
$data = $_POST;
$link=mysqli_connect('localhost', 'root', '', 'usertable')
or die("Ошибка " . mysqli_error($link));

$sql_select = " SELECT * FROM `products` WHERE `category_id`=1 ";
$result = mysqli_query($link, $sql_select);

$row = mysqli_fetch_array($result);
do
{
	        $id=$row['id'];
			$name=$row['name'];
			$price=$row['price'];
			$description=$row['description'];
			$img=$row['image'];

  $_SESSION['id'] = 4;
	printf("<form action='single.php' method='POST'>
							<div class='col-md-4 chain-grid  simpleCart_shelfItem'>
								<div class='grid-span-1'>
									<a  href='single.php?id=$id'><img class='img-responsive' style='height: 100px; width: 100px' src='/img/product/mediam/$img ' alt=''>
										<div class='link'>
											<ul >
												<li><i> </i></li>
												<li><i class='white1'> </i></li>
											</ul>
										</div>
									</a>
								</div>
								<div class='grid-chain-bottom ''>
								<h8><a href='single.php?id=$id'><php echo '<p>$name </p></a></h8>
								<div class='star-price'>
									<div class='price-at'>
									</div>
									<div class='price-at-bottom '>
										<span class='item_price'><php echo '<p>$price ₽</p></span>
									</div>
									<div class='clearfix'> </div>
								</div>
								<div class='cart-add'>
									<div class='product-button'>
                                    <button><i class='fa fa-shopping-cart'></i> В корзину</button>
                                    </div>

									<a class='add2' href='#''><i> </i></a>
									<div class='clearfix'> </div>
								</div>
							</div>
						</div>
						</form>"




						);

						}
						while($row = mysqli_fetch_array($result));
						?>
							<!--<div class="row">
								<div class="col-xs-12 col-md-12">		
									<!-- Start Product --
									<div class="product">
										<div class="tab-content">
											<!-- Product --
											<!-- End Product --
											<!-- Start Product--
											<div role="tabpanel" class="tab-pane fade in  active" id="display-1">
												<div class="row">
													<!-- Start Single-Product --
													<div class="col-md-3 col-sm-4 col-xs-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="primary-img" src="img/product/mediam/women1.jpg" alt="Product">
																</a>
															</div>
															<!--<div class="product-description">
																<h5><a href="#">Название</a></h5>
																<div class="price-box">
																	<span class="price">$99.00</span>
																	<span class="old-price">$110.00</span>
																</div>
																<span class="rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																</span>
															</div>--
															<div class="product-action">
																<div class="button-group">
																	<div class="product-button">
																		<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																	</div>

																</div>
															</div>
														</div>
													</div>
														<div class="col-md-3 col-sm-4 col-xs-12">
															<div class="single-product">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/women2.jpg" alt="Product">
																	</a>
																</div>
																<div class="product-description">
																	<h5><a href="#">Название</a></h5>
																	<div class="price-box">
																		<span class="price">$99.00</span>
																		<span class="old-price">$110.00</span>
																	</div>
																	<span class="rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																</span>
																</div>
																<div class="product-action">
																	<div class="button-group">
																		<div class="product-button">
																			<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																		</div>
																	</div>
																</div>
															</div>
														</div><div class="col-md-3 col-sm-4 col-xs-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="primary-img" src="img/product/mediam/women3.jpg" alt="Product">
																	</a>
															</div>
															<div class="product-description">
																<h5><a href="#">Название</a></h5>
																<div class="price-box">
																	<span class="price">$99.00</span>
																	<span class="old-price">$110.00</span>
																</div>
																<span class="rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																</span>
															</div>
															<div class="product-action">
																<div class="button-group">
																	<div class="product-button">
																		<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																	</div>
																</div>
															</div>
														</div>
													</div><div class="col-md-3 col-sm-4 col-xs-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="primary-img" src="img/product/mediam/women4.jpg" alt="Product">
																</a>
															</div>
															<div class="product-description">
																<h5><a href="#">Название</a></h5>
																<div class="price-box">
																	<span class="price">$99.00</span>
																	<span class="old-price">$110.00</span>
																</div>
																<span class="rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																</span>
															</div>
															<div class="product-action">
																<div class="button-group">
																	<div class="product-button">
																		<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																	</div>
																</div>
															</div>
														</div>
													</div><div class="col-md-3 col-sm-4 col-xs-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="primary-img" src="img/product/mediam/women5.jpg" alt="Product">
																</a>
															</div>
															<div class="product-description">
																<h5><a href="#">Название</a></h5>
																<div class="price-box">
																	<span class="price">$99.00</span>
																	<span class="old-price">$110.00</span>
																</div>
																<span class="rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																</span>
															</div>
															<div class="product-action">
																<div class="button-group">
																	<div class="product-button">
																		<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																	</div>
																</div>
															</div>
														</div>
													</div><div class="col-md-3 col-sm-4 col-xs-12">
														<div class="single-product">
															<div class="product-img">
																<a href="#">
																	<img class="primary-img" src="img/product/mediam/women6.jpg" alt="Product">
																</a>
															</div>
															<div class="product-description">
																<h5><a href="#">Название</a></h5>
																<div class="price-box">
																	<span class="price">$99.00</span>
																	<span class="old-price">$110.00</span>
																</div>
																<span class="rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																</span>
															</div>
															<div class="product-action">
																<div class="button-group">
																	<div class="product-button">
																		<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- End Single-Product --
												<!-- End Pagination Area --
											</div>
											<!-- End Product = TV --
										</div>
									</div>
									<!-- End Product --
								</div>
							</div>
						</div>
							<div class="col-md-0 col-xs-12">
								<!-- START PRODUCT-BANNER --
								<!-- END PRODUCT-BANNER --
								<!-- START PRODUCT-AREA -->
								<div class="product-area">
									<div class="row">
										<div class="col-xs-12">
											<!-- Start Product-Menu -->
											<div class="product-menu">
												<div class="product-title">
													<h3 class="title-group-3 gfont-1">Мужская одежда</h3>
												</div>
											</div>
											<div class="product-filter">
												<ul role="tablist">
													<li role="presentation"  class="grid active">
														<a href="#display-1" role="tab" data-toggle="tab"></a>
													</li>
												</ul>
											</div>

											<div class="clear"></div>
										</div>
									</div>
									<?php
                                    $data = $_POST;
                                    $link=mysqli_connect('localhost', 'root', '', 'usertable')
                                    or die("Ошибка " . mysqli_error($link));

                                    $sql_select = " SELECT * FROM `products` WHERE `category_id`=2 ";
                                    $result = mysqli_query($link, $sql_select);

                                    $row = mysqli_fetch_array($result);
                                    do
                                    {
                                    	        $id=$row['id'];
                                    			$name=$row['name'];
                                    			$price=$row['price'];
                                    			$description=$row['description'];
                                    			$img=$row['image'];

                                      $_SESSION['id'] = 4;
                                    	printf("<form action='single.php' method='POST'>
                                    							<div class='col-md-4 chain-grid  simpleCart_shelfItem'>
                                    								<div class='grid-span-1'>
                                    									<a  href='single.php?id=$id'><img class='img-responsive' style='height: 100px; width: 100px' src='/img/product/mediam/$img ' alt=''>
                                    										<div class='link'>
                                    											<ul >
                                    												<li><i> </i></li>
                                    												<li><i class='white1'> </i></li>
                                    											</ul>
                                    										</div>
                                    									</a>
                                    								</div>
                                    								<div class='grid-chain-bottom ''>
                                    								<h8><a href='single.php?id=$id'><php echo '<p>$name </p></a></h8>
                                    								<div class='star-price'>
                                    									<div class='price-at'>
                                    									</div>
                                    									<div class='price-at-bottom '>
                                    										<span class='item_price'><php echo '<p>$price ₽</p></span>
                                    									</div>
                                    									<div class='clearfix'> </div>
                                    								</div>
                                    								<div class='cart-add'>
                                    									<div class='product-button'>
                                                                        <button><i class='fa fa-shopping-cart'></i> В корзину</button>
                                                                        </div>

                                    									<a class='add2' href='cart.html''><i> </i></a>
                                    									<div class='clearfix'> </div>
                                    								</div>
                                    							</div>
                                    						</div>
                                    						</form>"




                                    						);

                                    						}
                                    						while($row = mysqli_fetch_array($result));
                                    						?>
									<!--<div class="row">
										<div class="col-xs-12 col-md-12">
											<!-- Start Product --
											<div class="product">
												<div class="tab-content">
													<!-- Product --
													<!-- End Product --
													<!-- Start Product--
													<div role="tabpanel" class="tab-pane fade in  active" id="display-1">
														<div class="row">
															<!-- Start Single-Product --
															<div class="col-md-3 col-sm-4 col-xs-12">
																<div class="single-product">
																	<div class="product-img">
																		<a href="#">
																			<img class="primary-img" src="img/product/mediam/men1.png" alt="Product">
																		</a>
																	</div>
																	<div class="product-description">
																		<h5><a href="#">Название</a></h5>
																		<div class="price-box">
																			<span class="price">$99.00</span>
																			<span class="old-price">$110.00</span>
																		</div>
																		<span class="rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																</span>
																	</div>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																			</div>

																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-3 col-sm-4 col-xs-12">
																<div class="single-product">
																	<div class="product-img">
																		<a href="#">
																			<img class="primary-img" src="img/product/mediam/men2.png" alt="Product">
																		</a>
																	</div>
																	<div class="product-description">
																		<h5><a href="#">Название</a></h5>
																		<div class="price-box">
																			<span class="price">$99.00</span>
																			<span class="old-price">$110.00</span>
																		</div>
																		<span class="rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																</span>
																	</div>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																			</div>
																		</div>
																	</div>
																</div>
															</div><div class="col-md-3 col-sm-4 col-xs-12">
															<div class="single-product">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/men3.png" alt="Product">
																	</a>
																</div>
																<div class="product-description">
																	<h5><a href="#">Название</a></h5>
																	<div class="price-box">
																		<span class="price">$99.00</span>
																		<span class="old-price">$110.00</span>
																	</div>
																	<span class="rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																</span>
																</div>
																<div class="product-action">
																	<div class="button-group">
																		<div class="product-button">
																			<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																		</div>
																	</div>
																</div>
															</div>
														</div><div class="col-md-3 col-sm-4 col-xs-12">
															<div class="single-product">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/men4.png" alt="Product">
																	</a>
																</div>
																<div class="product-description">
																	<h5><a href="#">Название</a></h5>
																	<div class="price-box">
																		<span class="price">$99.00</span>
																		<span class="old-price">$110.00</span>
																	</div>
																	<span class="rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																</span>
																</div>
																<div class="product-action">
																	<div class="button-group">
																		<div class="product-button">
																			<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																		</div>
																	</div>
																</div>
															</div>
														</div><div class="col-md-3 col-sm-4 col-xs-12">
															<div class="single-product">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/men5.png" alt="Product">
																	</a>
																</div>
																<div class="product-description">
																	<h5><a href="#">Название</a></h5>
																	<div class="price-box">
																		<span class="price">$99.00</span>
																		<span class="old-price">$110.00</span>
																	</div>
																	<span class="rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																</span>
																</div>
																<div class="product-action">
																	<div class="button-group">
																		<div class="product-button">
																			<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																		</div>
																	</div>
																</div>
															</div>
														</div><div class="col-md-3 col-sm-4 col-xs-12">
															<div class="single-product">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/men6.png" alt="Product">
																	</a>
																</div>
																<div class="product-description">
																	<h5><a href="#">Название</a></h5>
																	<div class="price-box">
																		<span class="price">$99.00</span>
																		<span class="old-price">$110.00</span>
																	</div>
																	<span class="rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																</span>
																</div>
																<div class="product-action">
																	<div class="button-group">
																		<div class="product-button">
																			<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
															<!-- End Single-Product --
															<!-- End Pagination Area --
														</div>
														<!-- End Product = TV --
													</div>
												</div>
												<!-- End Product --
											</div>
										</div>
									</div>
									<!-- END PRODUCT-AREA -->
								</div>
							</div>
						</div>
						<!-- END PRODUCT-AREA -->
					</div>
				</div>
			</div>
<footer></footer>
				<!-- jquery
		============================================ -->		
        <script src="js/jquery-1.11.3.min.js"></script>
		<!-- bootstrap JS
		============================================ -->		
        <script src="js/bootstrap.min.js"></script>
		<!-- wow JS
		============================================ -->		
        <script src="js/wow.min.js"></script>
		<!-- meanmenu JS
		============================================ -->		
        <script src="js/jquery.meanmenu.js"></script>
		<!-- owl.carousel JS
		============================================ -->		
        <script src="js/owl.carousel.min.js"></script>
		<!-- scrollUp JS
		============================================ -->		
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- countdon.min JS
		============================================ -->		
        <script src="js/countdon.min.js"></script>
        <!-- jquery-price-slider js
		============================================ --> 
        <script src="js/jquery-price-slider.js"></script>
        <!-- Nivo slider js
		============================================ --> 		
		<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
		<!-- plugins JS
		============================================ -->		
        <script src="js/plugins.js"></script>
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
    </body>
</html>
