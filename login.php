<?php
	require 'db.php';

	$data = $_POST;
	if ( isset($data['do_login']) )
	{
		$user = R::findOne('users', 'login = ?', array($data['login']));
		if ( $user )
		{
			//логин существует
			if ( password_verify($data['password'], $user->password) )
			{
				//если пароль совпадает, то нужно авторизовать пользователя
				$_SESSION['logged_user'] = $user;
				echo '<div style="color:dreen;">Вы авторизованы!<br/> Можете перейти на <a href="/">главную</a> страницу.</div><hr>';

				ob_start();
				$new_url = 'http://localhost/my-account.php';
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
			<!-- Start Account-Create-Area -->
			<div class="account-create-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="page-menu">
								<li><a href="index.php">Главная страница</a></li>
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
						<form action="/login.php" method="POST">
							<div class="row">
								<div class="col-md-12">
									<div class="account-create-box">
										<h2 class="box-info">Введите данные</h2>
										<div class="row">
											<div class="col-sm-4 col-xs-12">
												<div class="single-create">
													<p>E-mail адрес <sup>*</sup></p>
													<input type="text" name="login" value="<?php echo @$data['login']; ?>"><br/>
												</div>
												<div class="single-create">
                                                    <p>Пароль <sup>*</sup></p>
                                                	<input type="text" name="password" value="<?php echo @$data['password']; ?>"><br/>
                                                </div>
											</div>
									</div>

									<div class="submit-area">
										<p class="required text-right">* Поля, обязательные для заполнения</p>

										<button type="submit" name="do_login" class="btn btn-primary floatright">Подтвердить</button>
										<!--<a href="login.html" class="float-left"><span><i class="fa fa-angle-double-left"></i></span> Назад</a>-->
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- End Account-Create-Area -->

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
