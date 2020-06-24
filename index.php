<!doctype html>
<html class="" lang="ru">
    <head>
        <meta charset="utf-8">
       <!-- <meta http-equiv="x-ua-compatible" content="ie=edge">-->
        <title>Главная страница | Azazara</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- иконка сайта во вкладке
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">

		<!-- Шрифты
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
		<!-- \хэдер -->
		<!-- Зона категории-слайдер -->
		<div class="category-slider-area">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<!-- МенюСбоку -->
	                    <div class="left-category-menu hidden-sm hidden-xs">
	                        <div class="left-product-cat">
	                            <div class="category-heading">
	                                <h2>Продукция</h2>
	                            </div>
	                            <div class="category-menu-list">
	                                <ul>
	                                    <!-- внутреннее меню -->
	                                    <li class="arrow-plus">
	                                        <a href="shop.php">Женская одежда</a>
	                                        <!--  меню подкатегорий -->
	                                        <div class="cat-left-drop-menu">
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">Одежда</a>
	                                                <ul>
	                                                    <li><a href="#">Юбки и блузы</a></li>
	                                                    <li><a href="#">Топы</a></li>
	                                                    <li><a href="#">Кардиганы</a></li>
	                                                    <li><a href="#">Брюки</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">Обувь</a>
	                                                <ul>
	                                                    <li><a href="#">Повседневная</a></li>
	                                                    <li><a href="#">Уличная</a></li>
	                                                    <li><a href="#">Спортивная</a></li>
	                                                    <li><a href="#">Деловая</a></li>
	                                                    <li><a href="#">Вечерняя</a></li>
	                                                </ul>
	                                            </div>
												<div class="cat-left-drop-menu-left">
													<a class="menu-item-heading" href="#">Акксесуары</a>
													<ul>
														<li><a href="#">Ремни</a></li>
														<li><a href="#">Перчатки</a></li>
														<li><a href="#">Сумки</a></li>
														<li><a href="#">Часы</a></li>
													</ul>
												</div>
	                                    </li>
	                                    <!-- ВнутреннееМеню -->
										<!-- МенюКатегорий -->
	                                    <li class="arrow-plus">
	                                        <a href="shop.php">Мужская одежда</a>
	                                        <!--  МенюПодкатегорий -->
													<div class="cat-left-drop-menu">
														<div class="cat-left-drop-menu-left">
															<a class="menu-item-heading" href="#">Одежда</a>
															<ul>
																<li><a href="#">Юбки и блузы</a></li>
																<li><a href="#">Топы</a></li>
																<li><a href="#">Кардиганы</a></li>
																<li><a href="#">Брюки</a></li>
															</ul>
														</div>
														<div class="cat-left-drop-menu-left">
															<a class="menu-item-heading" href="#">Обувь</a>
															<ul>
																<li><a href="#">Повседневная</a></li>
																<li><a href="#">Уличная</a></li>
																<li><a href="#">Спортивная</a></li>
																<li><a href="#">Деловая</a></li>
																<li><a href="#">Вечерняя</a></li>
															</ul>
														</div>
														<div class="cat-left-drop-menu-left">
															<a class="menu-item-heading" href="#">Акксесуары</a>
															<ul>
																<li><a href="#">Ремни</a></li>
																<li><a href="#">Перчатки</a></li>
																<li><a href="#">Сумки</a></li>
																<li><a href="#">Часы</a></li>
															</ul>
														</div>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- \меню продукции -->
	                </div>
	                <div class="col-md-9">
                		<!-- Слайдер -->
						<div class="slider-area">
							<div class="bend niceties preview-1">
								<div id="ensign-nivoslider" class="slides">
									<img src="img/sliders/slider-1/Thing1.jpg" alt="Azazara" title="#slider-direction-1"/>
				 					<img src="img/sliders/slider-1/Thing2.jpg" alt="Azazara" title="#slider-direction-2"/>
									<img src="img/sliders/slider-1/Thing3.jpg" alt="Azazara" title="#slider-direction-3"/>
								</div>
								<!-- Первый блок -->
								<div id="slider-direction-1" class="t-lfr slider-direction">
									<div class="slider-progress"></div>
									<!-- Первый текст -->
									<div class="layer-1-1 ">
										<h1 class="title1">Название предмета одежды</h1>
									</div>
									<!-- Второй текст-->
									<div class="layer-1-2">
										<p class="title2">Красивые слова про него</p>
									</div>
									<!-- Третий текст -->
									<div class="layer-1-3">
										<h2 class="title3">$Стоимтость</h2>
									</div>
									<!-- Четвертый текст -->
									<div class="layer-1-4">
										<a href="#" class="title4">Купить сейчас</a>
									</div>
								</div>
								<!-- Второй блок -->
								<div id="slider-direction-1" class="t-lfr slider-direction">
									<div class="slider-progress"></div>
									<!-- Первый текст -->
									<div class="layer-1-1 ">
										<h1 class="title1">Название предмета одежды</h1>
									</div>
									<!-- Второй текст-->
									<div class="layer-1-2">
										<p class="title2">Красивые слова про него</p>
									</div>
									<!-- Третий текст -->
									<div class="layer-1-3">
										<h2 class="title3">$Стоимтость</h2>
									</div>
									<!-- Четвертый текст -->
									<div class="layer-1-4">
										<a href="#" class="title4">Купить сейчас</a>
									</div>
								</div>
								<!-- Третий блок блок -->
								<div id="slider-direction-1" class="t-lfr slider-direction">
									<div class="slider-progress"></div>
									<!-- Первый текст -->
									<div class="layer-1-1 ">
										<h1 class="title1">Название предмета одежды</h1>
									</div>
									<!-- Второй текст-->
									<div class="layer-1-2">
										<p class="title2">Красивые слова про него</p>
									</div>
									<!-- Третий текст -->
									<div class="layer-1-3">
										<h2 class="title3">$Стоимтость</h2>
									</div>
									<!-- Четвертый текст -->
									<div class="layer-1-4">
										<a href="#" class="title4">Купить сейчас</a>
									</div>
								</div>
								</div>
							</div>
						</div>
						<!-- \слайдер-->
	                </div>
	            </div>
			</div>
		<!-- \Зона категории-слайдер -->
		<!-- Наполнение страницы -->
		<section class="page-content">
			<div class="container">
	            <div class="row">
	            	<div class="col-md-3 col-sm-3">
	                    <!-- Горячие предложения -->
	            		<div class="hot-deals-area carosel-circle">
	            			<div class="row">
								<div class="col-md-12">
									<div class="area-title">
										<h3 class="title-group border-red gfont-1">Горячие предложения</h3>
									</div>
								</div>
							</div>
	                    	<div class="row">
		                    	<div class="active-hot-deals">
		                    		<!-- ГП1 -->
		                    		<div class="col-xs-12">
			                    		<div class="single-hot-deals">
			                    			<div class="hot-deals-photo">
			                    				<a href="#"><img src="img/product/mediam/women1.png" alt="Product"></a>
			                    			</div>
			                    			<div class="count-down">
							                    <div class="timer">
							                        <div data-countdown="2020/12/31"></div>
								                </div>
			                    			</div>
			                    			<div class="hot-deals-text">
			                    				<h5><a href="#" class="name-group">Название товара</a></h5>
			                    				<span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
			                    				<div class="price-box">
			                    					<span class="price gfont-2">$99.00</span>
			                    					<span class="old-price gfont-2">$110.00</span>
			                    				</div>
			                    			</div>
			                    		</div>
		                    		</div>
		                    		<!-- \ГП1 -->
		                    		<!-- ГП2 -->
		                    		<div class="col-xs-12">
			                    		<div class="single-hot-deals">
			                    			<div class="hot-deals-photo">
			                    				<a href="#"><img src="img/product/mediam/women5.png" alt="Product"></a>
			                    			</div>
			                    			<div class="count-down">
							                    <div class="timer">
							                        <div data-countdown="2020/12/30"></div>
								                </div>
			                    			</div>
			                    			<div class="hot-deals-text">
			                    				<h5><a href="#" class="name-group">Название товара</a></h5>
			                    				<span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
			                    				<div class="price-box">
			                    					<span class="price gfont-2">$85.00</span>
			                    					<span class="old-price gfont-2">$120.00</span>
			                    				</div>
			                    			</div>
			                    		</div>
		                    		</div>
		                    		<!-- \ГП2 -->
		                    		<!-- ГП3 -->
		                    		<div class="col-xs-12">
			                    		<div class="single-hot-deals">
			                    			<div class="hot-deals-photo">
			                    				<a href="#"><img src="img/product/mediam/men3.png" alt="Product"></a>
			                    			</div>
			                    			<div class="count-down">
							                    <div class="timer">
							                        <div data-countdown="2020/12/30"></div>
								                </div>
			                    			</div>
			                    			<div class="hot-deals-text">
			                    				<h5><a href="#" class="name-group">Название товара</a></h5>
			                    				<span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
			                    				<div class="price-box">
			                    					<span class="price gfont-2">$90.00</span>
			                    					<span class="old-price gfont-2">$105.00</span>
			                    				</div>
			                    			</div>
			                    		</div>
		                    		</div>
		                    		<!-- \ГП3 -->
		                    	</div>
	                    	</div>
	                    </div>
	                    <!-- \ГП -->
	                </div>
					<div class="col-md-9 col-sm-9">
						<!-- ЗонаПродукции -->
						<div class="product-area">
							<div class="row">
								<div class="col-xs-12 col-md-12">
									<!-- Категория продукции -->
									<div class="product-menu">
										<div class="product-title">
											<h3 class="title-group-2 gfont-1">Женская одежда</h3>
										</div>
									</div>
								</div>
							</div>
							<!-- \КП -->
							<div class="clear"></div>
							<!-- Продукция 1 -->
							<div class="row">
								<div class="col-xs-12 col-md-12">
									<div class="product carosel-navigation">
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane fade in active" id="display-1-1">
												<div class="row">
													<div class="active-product-carosel">
														<!-- Единица продукта -->
														<div class="col-xs-12">
															<div class="single-product">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/women1.png" alt="Product">
																	</a>
																</div>
																<div class="product-description">
																	<h5><a href="#">Название одежды</a></h5>
																	<div class="price-box">
																		<span class="price">$99.00</span>
																		<span class="old-price">$120.00</span>
																	</div>
																	<span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																			</div>

																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xs-12">
															<div class="single-product">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/women2.png" alt="Product">
																	</a>
																</div>
																<div class="product-description">
																	<h5><a href="#">Название одежды</a></h5>
																	<div class="price-box">
																		<span class="price">$99.00</span>
																		<span class="old-price">$120.00</span>
																	</div>
																	<span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																			</div>

																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xs-12">
															<div class="single-product">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/women3.png" alt="Product">
																	</a>
																</div>
																<div class="product-description">
																	<h5><a href="#">Название одежды</a></h5>
																	<div class="price-box">
																		<span class="price">$99.00</span>
																		<span class="old-price">$120.00</span>
																	</div>
																	<span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																			</div>

																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xs-12">
															<div class="single-product">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/women4.png" alt="Product">
																	</a>
																</div>
																<div class="product-description">
																	<h5><a href="#">Название одежды</a></h5>
																	<div class="price-box">
																		<span class="price">$99.00</span>
																		<span class="old-price">$120.00</span>
																	</div>
																	<span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																			</div>

																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xs-12">
															<div class="single-product">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/women5.png" alt="Product">
																	</a>
																</div>
																<div class="product-description">
																	<h5><a href="#">Название одежды</a></h5>
																	<div class="price-box">
																		<span class="price">$99.00</span>
																		<span class="old-price">$120.00</span>
																	</div>
																	<span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																			</div>

																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xs-12">
															<div class="single-product">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/women6.png" alt="Product">
																	</a>
																</div>
																<div class="product-description">
																	<h5><a href="#">Название одежды</a></h5>
																	<div class="price-box">
																		<span class="price">$85.00</span>
																		<span class="old-price">$110.00</span>
																	</div>
																	<span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																			</div>

																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Конец продукции  -->
										</div>
						<!-- Конец продукции 1 -->
						<!-- Продукция 2-->
						<div class="product-area">
							<!-- Категория продукции-->
							<div class="row">
								<div class="col-xs-12 col-md-12">
									<div class="product-menu  border-red">
										<div class="product-title">
											<h3 class="title-group-2 gfont-1">Мужская одежда</h3>
										</div>
									</div>
								</div>
							</div>
							<!-- /КП -->
							<!-- Продукция -->
							<div class="row">
								<div class="col-xs-12 col-md-12">
									<div class="product carousel-navigation">
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane fade in active" id="display-2-1">
												<div class="row">
													<div class="active-product-carosel">
														<!-- Единица продукта -->
														<div class="col-xs-12">
															<div class="single-product">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/men1.png" alt="Product">
																	</a>
																</div>
																<div class="product-description">
																	<h5><a href="#">Название одежды</a></h5>
																	<div class="price-box">
																		<span class="price">$90.00</span>
																		<span class="old-price">$120.00</span>
																	</div>
																	<span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xs-12">
															<div class="single-product">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/men2.png" alt="Product">
																	</a>
																</div>
																<div class="product-description">
																	<h5><a href="#">Название одежды</a></h5>
																	<div class="price-box">
																		<span class="price">$85.00</span>
																		<span class="old-price">$105.00</span>
																	</div>
																	<span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																			</div>

																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xs-12">
															<div class="single-product">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/men3.png" alt="Product">
																	</a>
																</div>
																<div class="product-description">
																	<h5><a href="#">Название одежды</a></h5>
																	<div class="price-box">
																		<span class="price">$99.00</span>
																		<span class="old-price">$120.00</span>
																	</div>
																	<span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																			</div>

																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xs-12">
															<div class="single-product">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/men4.png" alt="Product">
																	</a>
																</div>
																<div class="product-description">
																	<h5><a href="#">Название одежды</a></h5>
																	<div class="price-box">
																		<span class="price">$85.00</span>
																		<span class="old-price">$110.00</span>
																	</div>
																	<span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																			</div>

																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xs-12">
															<div class="single-product">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/men5.png" alt="Product">
																	</a>
																</div>
																<div class="product-description">
																	<h5><a href="#">Название одежды</a></h5>
																	<div class="price-box">
																		<span class="price">$90.00</span>
																		<span class="old-price">$120.00</span>
																	</div>
																	<span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																			</div>

																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xs-12">
															<div class="single-product">
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/men6.png" alt="Product">
																	</a>
																</div>
																<div class="product-description">
																	<h5><a href="#">Название одежды</a></h5>
																	<div class="price-box">
																		<span class="price">$85.00</span>
																		<span class="old-price">$105.00</span>
																	</div>
																	<span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button><i class="fa fa-shopping-cart"></i> В корзину</button>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Конец продукции 2 -->
						</div>
			</div>
			</section>
			<footer></footer><!-- /Конец футера -->

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
