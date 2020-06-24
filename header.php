<!doctype html>
<html class="" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Войти в личный кабинет | Azazara</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">


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
    </head>
    <body>

        <!-- Add your site or application content here -->

		<!-- HEADER-AREA START -->
		<header class="header-area">
			<!-- верх хэдера -->
			<div class="header-top hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="top-menu">
                            								<p class="welcome-msg"><?php if ( isset ($_SESSION['logged_user']) ) : ?>

                                                                                       <a>Приветствуем, <?php echo $_SESSION['logged_user']->login; ?>!</p></a>

                            							</div>
                            							<!-- ссылки сверху -->
                            							<div class="top-link">
                            								<ul class="link">
                                                                <li><a href="my-account.php"><i class="fa fa-user"></i>личный кабинет</a></li>
                                                            	<li><a href="logout.php"><i class="fa fa-unlock-alt"></i>Выйти</a></li>
                                                            </ul>
                            							</div>
                            							<?php else: ?>
                            							  <a>Вы не авторизованы</p></a>

                                                        							</div>
                                                        							<!-- ссылки сверху -->
                                                        							<div class="top-link">
                                                        	<ul class="link">
                                                                <li><a href="login.php"><i class="fa fa-user"></i>Войти</a></li>
                                                            	<li><a href="account.php"><i class="fa fa-unlock-alt"></i> Регистрация</a></li>
                                                            </ul>
                                                        </div>
                            							 <?php endif ?>
							<!-- \ссылки сверху -->
						</div>
					</div>
				</div>
			</div>
			<!-- \верх хэдера -->
			<!-- середина хэдера -->
			<div class="header-middle">
				<div class="container">
					<!-- для клиента -->
					<div class="support-client hidden-xs">
						<div class="row">
							<div class="col-md-3 hidden-sm">
								<div class="single-support">
									<div class="support-content">
										<i class="fa fa-clock-o"></i>
										<div class="support-text">
											<h1 class="zero gfont-1">График работы</h1>
											<p>Пн- Вс: 8.00 - 18.00</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="single-support">
									<i class="fa fa-truck"></i>
									<div class="support-text">
										<h1 class="zero gfont-1">Бесплатная доставка</h1>
										<p>При заказе от 5000р</p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="single-support">
									<i class="fa fa-money"></i>
									<div class="support-text">
										<h1 class="zero gfont-1">100% кэшбек</h1>
										<p>В течение 30 дней после доставки</p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="single-support">
									<i class="fa fa-phone-square"></i>
									<div class="support-text">
										<h1 class="zero gfont-1">Наш телефон: 0123456789</h1>
										<p>Заказы онлайн</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- для клиента -->
					<!-- лого и поиска -->
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="logo">
								<a href="index.php" title="Azazara"><img src="img/logo1.png" alt="Azazara"></a>
							</div>
						</div>
						<div class="col-md-9 col-sm-12">
							<div class="quick-access">
								<div class="search-by-category">
									<div class="search-container">
										<select>
											<option class="all-cate">Все категории</option>
											<optgroup  class="cate-item-head" label="Одежда">
												<option class="cate-item-title">Куртки</option>
												<option class="c-item">Свитшоты и толстовки</option>
												<option class="c-item">Футболки</option>
												<option class="c-item">Брюки</option>
												<option class="c-item">Джинсы</option>
												<option class="c-item">Шорты</option>
											</optgroup>
											<optgroup  class="cate-item-head" label="Обувь">
												<option class="c-item">Классическая</option>
												<option class="c-item">Уличная</option>
												<option class="c-item">Спортивная</option>
											</optgroup>
										</select>
									</div>
									<div class="header-search">
										<form action="#">
											<input type="text" placeholder="Поиск">
											<button type="submit"><i class="fa fa-search"></i></button>
										</form>
									</div>
								</div>
								<div class="top-cart">
									<ul>
										<li>
											<a href="cart.html">
												<span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- конец лого и строки поиска -->
				</div>
			</div>
			<!-- \Середина хэдера -->
			<!-- Основное меню -->
			<div class="mainmenu-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mainmenu hidden-sm hidden-xs">
								<nav>
									<ul>
										<li><a href="index.php">Главная страница</a>
											<ul>
												<li><a href="index.php">Главная страница</a></li>
											</ul>
										</li>
										<li><a href="shop.php">Каталог</a></li>
										<li><a href="shop.php">Особые предложения</a></li>
										<li><a href="#">Навигация по сайту</a>
											<ul>
												<li><a href="cart.html">Корзина</a></li>
												<li><a href="account.php">Создать личный кабинет</a></li>
												<li><a href="login.php">Войти в личный кабинет</a></li>
												<li><a href="shop.html">Список товаров</a></li>
											</ul>
										</li>
										</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- \основное меню -->
		</header>
