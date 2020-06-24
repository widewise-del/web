



<?php
    require 'db.php';
?>
<!doctype html>
<html class="" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Личный кабинет | Azazara</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
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
							<li class="active"><a href="my-account.html">Мой аккаунт</a></li>
						</ul>
					</div>
				</div>
						<!-- entry-header-area start -->
						<div class="entry-header-area">
							<div class="row">
								<div class="col-md-12">
									<div class="entry-header">
										<h2 class="entry-title">Личные данные</h2>
									</div>
								</div>
							</div>
						</div>
						<!-- entry-header-area end -->
						<!-- Start checkout-area -->
						<div class="checkout-area">
							<div class="row">
								<div class="col-md-12">
									<!-- Accordion start -->
									<div class="panel-group" id="accordion">
										<!-- Start My-First-Address -->
										<div class="panel panel_default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a class="accordion-trigger" data-toggle="collapse" data-parent="#accordion" href="#payment-address">Адрес доставки <i class="fa fa-caret-down"></i> </a>
												</h4>
											</div>
											<div id="payment-address" class="collapse">
												<div class="panel-body">
													<div class="row">
														<div class="col-md-6 col-xs-12">
														<form method="POST"action="/m-a.php"enctype="multipart/form-data">
															<fieldset id="account">
															<?php
															$id="";
                                                                                                                                         $name="";
                                                                                                                                         $lastname="";
                                                                                                                                         $adress="";
                                                                                                                                         $indecs="";
                                                                                                                                         $city="";
                                                                                                                                         $dop="";
                                                                                                                                         $pusto="";
                                                                                                                                         $email="";
                                                                                                                                         $tel="";
															if ( isset ($_SESSION['logged_user']) ) :
													    $name_p= $_SESSION['logged_user']->login;


														$link=mysqli_connect('localhost', 'root', '', 'usertable')
                                                                                or die("Ошибка " . mysqli_error($link));
                                                                            $query ="SELECT * FROM `users` WHERE login='$name_p'";
                                                                            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                                                                            while($row = mysqli_fetch_array($result)){
                                                                            $id_p=$row['id'];}
                                                        $link=mysqli_connect('localhost', 'root', '', 'usertable')
                                                                                or die("Ошибка " . mysqli_error($link));
                                                                            $query ="SELECT * FROM `dostavka` WHERE pusto='$id_p'";
                                                                            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                                                                            while($row = mysqli_fetch_array($result)){
                                                                             $id=$row['id'];
                                                                             $name=$row['name'];
                                                                             $lastname=$row['family'];
                                                                             $adress=$row['adre'];
                                                                             $indecs=$row['indecs'];
                                                                             $city=$row['city'];
                                                                             $dop=$row['dop-infa'];
                                                                             $pusto=$row['pusto'];
                                                                             $email=$row['e-mail'];
                                                                             $tel=$row['telephone'];
                                                                                          }

														?><?php endif ?>

																<legend>Ваши личные данные</legend>
																<div class="form-group">
																	<label><sup>*</sup>Имя</label>
											    					<input type="text" class="form-control" placeholder="имя" name="firstname" value="<?php echo $name ?>" />
																</div>
																<div class="form-group">
																	<label><sup>*</sup>Фамилия</label>
																	<input type="text" class="form-control" placeholder="фамилия" name="lastname" value="<?php echo $lastname ?>"/>
																</div>
																<div class="form-group">
																	<label><sup>*</sup>E-mail</label>
																	<input type="email" class="form-control" placeholder="E-mail" name="email" value="<?php echo $email ?>"/>
																</div>
																<div class="form-group">
																	<label><sup>*</sup>Номер телефона</label>
																	<input type="text" class="form-control" placeholder="Номер телефона" name="telephone" value="<?php echo $tel ?>"/>
																</div>
																</fieldset>

															<fieldset>
																<legend>Дополнительная информация</legend>
																<input class="form-control"  rows="6" name="dop-infa" value="<?php echo $dop ?>"></input>
															</fieldset>
														</div>
														<div class="col-md-6 col-xs-12">
															<fieldset id="address">
																<legend>Ваш адрес</legend>

																<div class="form-group">
																	<label><sup>*</sup>Адрес </label>
																	<input type="text" class="form-control" placeholder="Адрес " name="address" value="<?php echo $adress ?>" />
																</div>

																<div class="form-group">
																	<label><sup>*</sup>Город</label>
																	<input type="text" class="form-control" placeholder="Город" name="city" value="<?php echo $city ?>"/>
																</div>
																<div class="form-group">
																	<label><sup>*</sup>Почтовый индекс</label>
																	<input type="text" class="form-control" placeholder="Почтовый индекс" name="postcode" value="<?php echo $indecs ?>"/>
																</div>
															</fieldset>

														</div>
													</div>
													<div class="row">
														<div class="col-xs-12">
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="рассылка" checked />
																	 Я хочу подписаться на рассылку.
																</label>
															</div>
															<div class="buttons clearfix">
																<div class="pull-right">
																	Я прочел и согласен с
																	<a href="#"><b>Политикой обработки персональных данных</b></a>
																	<input type="checkbox" name="agree" />

																	<input type="submit"name="submit_image"value="Сохранить">
																</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- End My-First-Address -->
										<!-- Start My Address -->
										<!-- End My Address -->
										<!-- End My Wish List -->
									</div>
									<!-- Accordion end -->
								</div>
							</div>
						</div>
						<!-- End Shopping-Cart -->

						<!-- My-Account-Area start -->

						<!-- My-Account-Area end -->
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
