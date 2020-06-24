<?php
	session_start();


					$data = $_POST;

					$link=mysqli_connect('localhost', 'root', '', 'usertable')
						or die("Ошибка " . mysqli_error($link));

					$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

					$n = $_GET['id'];


					$query ="SELECT * FROM `products` WHERE id='$n'";

					$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
					while($row = mysqli_fetch_array($result)){


					    	$id=$row['id'];
					    	$name=$row['name'];
					    	$price=$row['price'];
					    	$description=$row['description'];
					 		$img=$row['image'];
				    }


					?>
<!doctype html>
<html class="" lang="ru">
<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="x-ua-compatible" content="ie=edge">-->
	<title>Товар | Azazara</title>
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
<!-- HEADER AREA END -->
		<!-- START PAGE-CONTENT -->
		<section class="page-content">
			<div class="container">
	            <div class="row">
					<div class="col-md-12">
						<ul class="page-menu">
							<li><a href="index.html">Главная страница</a></li>
							<li class="active"><a href="#"><?php echo "<p>$name </p>"?></a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<!-- END SIDEBAR-BANNER -->
					</div>
					<div class="col-md-9 col-sm-12 col-xs-12">
						<!-- Start Toch-Prond-Area --
						<div class="toch-prond-area">
							<div class="row">
								<div class="col-md-5 col-sm-5 col-xs-12">
									<div class="clear"></div>
									<div class="tab-content">
										<!-- Product = display-1-1 -->
										<div role="tabpanel" class="tab-pane fade in active" id="display-1">
											<div class="row">
												<div class="col-md-3 col-sm-4">
													<div class="toch-photo">
														<a href="#"><img src='/img/product/mediam/<?php echo "$img"?>' data-imagezoom="true" alt="#" /></a>
													</div>
												</div>
											</div>
										</div>
										<!-- End Toch-prond-Menu -->
								</div>
								<div class="col-md-7 col-sm-7 col-xs-12">
									<h2 class="title-product"> <?php echo "<p>$name </p>"?></h2>
									<div class="about-toch-prond">
										<p>
											<span class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											</span>
										</p>
										<hr />
										<p class="short-description"><?php echo "<p>$description </p>"?></p>
										<hr />
										<span class="current-price"><?php echo "<p>$price $</p>"?></span>
										<button type="submit" class="btn btn-primary floatright">Добавить в корзину</button>
										</div>
										</div>
									</div>
								</div>


<!-- /конец контента домашней страницы -->
<!-- Футер -->
<footer></footer>
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
        <!-- Image zoom js
		============================================ --> 		
		<script src="js/imagezoom.js"></script>
		<!-- plugins JS
		============================================ -->		
        <script src="js/plugins.js"></script>
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
    </body>
</html>
