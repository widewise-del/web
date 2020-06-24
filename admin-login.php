<?php
	require 'db.php';

	$data = $_POST;
	if ( isset($data['do_login']) )
	{
		$admin = R::findOne('admin', 'login = ?', array($data['login']));
		if ( $admin )
		{
			//логин существует
			if ( password_verify($data['password'], $admin->password) )
			{
				//если пароль совпадает, то нужно авторизовать пользователя
				$_SESSION['logged_user'] = $admin;
				echo '<div style="color:dreen;">Вы авторизованы!<br/> Можете перейти на <a href="/">главную</a> страницу.</div><hr>';

				ob_start();
				$new_url = 'http://localhost/admin-single.php';
				header('Location: '.$new_url);
				ob_end_flush();

			}else
			{
				$errors[] = 'Неверно введен пароль!';
			}

		}else
		{
			$errors[] = 'Пользователь с таким логином не найден!';
		}

		if ( ! empty($errors) )
		{
			//выводим ошибки авторизации
			echo '<div id="errors" style="color:red;">' .array_shift($errors). '</div><hr>';
		}

	}

?>
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
								<p class="welcome-msg">Приветственные слова</p>
							</div>
							<!-- ссылки сверху -->
							<div class="top-link">
								<ul class="link">
									<li><a href="login.php"><i class="fa fa-user"></i>Войти в личный кабинет</a></li>
									<li><a href="account.php"><i class="fa fa-unlock-alt"></i> Создать личный кабинет</a></li>
								</ul>
							</div>
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
								<a href="index.html" title="Azazara"><img src="img/logo1.png" alt="Azazara"></a>
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
											<a href="cart..html">
												<span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
												<span class="cart-total">
			                    					<span class="cart-title">Ваши покупки</span>
				                    				<span class="cart-item">Предметы -</span>
				                    				<span class="top-cart-price">Цена</span>
			                    				</span>
											</a>
											<div class="mini-cart-content">
												<div class="cart-img-details">
													<div class="cart-img-photo">
														<a href="#"><img src="img/product/mediam/women1.png" alt="#"></a>
													</div>
													<div class="cart-img-content">
														<a href="#"><h4>Prod Aldults</h4></a>
														<span>
															<strong class="text-right">1 x</strong>
															<strong class="cart-price text-right">$180.00</strong>
														</span>
													</div>
													<div class="pro-del">
														<a href="#"><i class="fa fa-times"></i></a>
													</div>
												</div>
												<div class="clear"></div>
												<div class="cart-img-details">
													<div class="cart-img-photo">
														<a href="#"><img src="img/product/mediam/men1.png" alt="#"></a>
													</div>
													<div class="cart-img-content">
														<a href="#"><h4>Fact Prone</h4></a>
														<span>
															<strong class="text-right">1 x</strong>
															<strong class="cart-price text-right">$185.00</strong>
														</span>
													</div>
													<div class="pro-del">
														<a href="#"><i class="fa fa-times"></i></a>
													</div>
												</div>
												<div class="cart-inner-bottom">
													<span class="total">
														Total:
														<span class="amount">$550.00</span>
													</span>
													<span class="cart-button-top">
														<a href="cart.html">Просмотр корзины</a>
													</span>
												</div>
											</div>
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
										<li><a href="index.html">Главная страница</a>
											<ul>
												<li><a href="index.html">Главная страница</a></li>
											</ul>
										</li>
										<li><a href="shop.html">Самые продающиеся</a></li>
										<li><a href="shop.html">Особые предложения</a></li>
										<li><a href="#">Навигация по сайту</a>
											<ul>
												<li><a href="cart.html">Корзина</a></li>
												<li><a href="account.html">Создать личный кабинет</a></li>
												<li><a href="my-account.html">Мой личный кабинет</a></li>
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
		<!-- HEADER AREA END -->
		<!-- START PAGE-CONTENT -->
		<section class="page-content">
			<!-- Start Account-Create-Area -->
			<div class="account-create-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="page-menu">
								<li><a href="index.html">Главная страница</a></li>
								<li class="active"><a href="login.php">Личный кабинет</a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="area-title">
								<h3 class="title-group gfont-1">Войти</h3>
							</div>
						</div>
					</div>
					<div class="account-create">
						<form action="admin-login.php" method="POST">
							<div class="row">
								<div class="col-md-12">
									<div class="account-create-box">
										<h2 class="box-info">Введите данные</h2>
										<div class="row">
											<div class="col-sm-4 col-xs-12">
												<div class="single-create"
                                                					<p>Логин </p>
                                                					<input type="text" name="login" value="<?php echo @$data['login']; ?>"><br/>

                                                				  </div>
												 <div class="single-create"
                                                					<p>Пароль</p>
                                                					<input type="text" name="password" value="<?php echo @$data['password']; ?>"><br/></input>

                                                				  </div>
											</div>
									</div>

									<div class="submit-area">
										<p class="required text-right">* Поля, обязательные для заполнения</p>

										<button type="submit" name="do_login" class="btn btn-primary floatright">Подтвердить</button>
										</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- End Account-Create-Area -->

			<!-- START SUBSCRIBE-AREA -->
			<div class="subscribe-area">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-7 col-xs-12">
							<label class="hidden-sm hidden-xs">Подпишитесь на рассылку:</label>
							<div class="subscribe">
								<form action="#">
									<input type="text" placeholder="Введите Ваш e-mail">
									<button type="submit">Подписаться</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END SUBSCRIBE-AREA -->
		</section>
		<!-- END PAGE-CONTENT -->
		<!-- FOOTER-AREA START -->
		<footer class="footer-area">
			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-3">
							<div class="footer-title">
								<h5>Личный кабинет</h5>
							</div>
							<nav>
								<ul class="footer-content">
									<li><a href="login.php">Войти в личный кабинет</a></li>
									<li><a href="#">История заказов</a></li>
									<li><a href="#">Условия возврата</a></li>
								</ul>
							</nav>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3">
							<div class="footer-title">
								<h5>Для покупателей</h5>
							</div>
							<nav>
								<ul class="footer-content">
									<li><a href="#">О доставке</a></li>
									<li><a href="#">Политика обработки персональных данных</a></li>
									<li><a href="#">Условия и соглашения</a></li>
								</ul>
							</nav>
						</div>
						<div class="col-xs-12 hidden-sm col-md-3">
							<div class="footer-title">
								<h5>Покупки и возврат</h5>
							</div>
							<nav>
								<ul class="footer-content">
									<li><a href="#">Подарочные сертификаты</a></li>
									<li><a href="#">Специальные предложения</a></li>
									<li><a href="#">Условия возврата</a></li>
								</ul>
							</nav>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3">
							<div class="footer-title">
								<h5>Контакты</h5>
							</div>
							<nav>
								<ul class="footer-content box-information">
									<li>
										<i class="fa fa-home"></i><span>Город, Улица, Дом/строение</span>
									</li>
									<li>
										<i class="fa fa-envelope-o"></i><p>Почта@.сом</p>
									</li>
									<li>
										<i class="fa fa-phone"></i>
										<span>01234-56789</span> <br> <span> 01234-56789</span>
									</li>
									<li>
										<i class="fa fa-bank"></i>
										<span><a href="#"><img src="img/payment.png" alt="Payment"></a></span>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- FOOTER-AREA END -->


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
