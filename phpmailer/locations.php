<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>International Clothiers</title>
		<meta name="Description" content="International Clothiers is Canada's premiere destination for men's, young men's and boys fashions. Offering quality designer menswear since 1986, our fashions are exclusively designed to offer style, quality and value for your money. From business to casual from formal wear to weekend wear, International Clothiers can dress you right for any occasion at unbeatable prices. Store locations across Canada." >
		<meta name="keywords" content="menswear, suits, mens clothing, boys clothing, young mens suits, Canadian menswear stores, mens sportswear sale, suit sale, clothing sale">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet" media="screen">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
		<script src="js/main.js"  type="text/javascript" media="media screen and (max-width: 500px)" ></script>
		<script src="js/internal.js" type="text/javascript" media="media screen and (max-width: 500px)" ></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="/inc/js/html5shiv.js"></script>
		<script src="/inc/js/respond.min.js"></script>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Custom styles for this template -->
		<link href="navbar.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/internal.css">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	</head>
	<body>

		<div id="container">

			<!-- Header -->
			<div class="row">
				<div class="col-md-offset-8 col-md-3">
					<div id="topMenu">
						<a href="#" class="textSingUp"> SING UP </a>
					</div>
				</div>
			</div>

			<!-- Menu -->
			<div class="row">
				<div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
					<div id="menuBg">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div id="menu" ></div>
						</div>
					</div>
				</div>
			</div>

			<!-- Locations jumbotron and Menu -->
			<div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
				<div class="jumbotron">
					<div class="col-md-2">
						<div id="locations_submenu">
							<ul>
								<li >
									<p class="submenu_locations_title">
										Find a Store
									</p>
								</li>
								<li >
									<a href="#AL" class="submenu_locations_txt">Alberta</a>
								</li>
								<li>
									<a href="#BC" class="submenu_locations_txt">British Columbia</a><br/>
								</li>
								<li>
									<a href="#Manitoba" class="submenu_locations_txt">Manitoba</a>
								</li>
								<li>
									<a href="#NB" class="submenu_locations_txt">New Brunswick</a>
								</li>
								<li>
									<a href="#NFLD" class="submenu_locations_txt">Newfoundland/Labrador</a>
								</li>
								<li>
									<a href="#NS" class="submenu_locations_txt">Nova Scotia</a>
								</li>
								<li>
									<a href="#Ontario" class="submenu_locations_txt">Ontario</a>
								</li>
								<li>
									<a href="#PEI" class="submenu_locations_txt">Prince Edward Island</a>
								</li>
								<li>
									<a href="#Quebec" class="submenu_locations_txt">Quebec</a>
								</li>
								<li>
									<a href="#Saskatchewan" class="submenu_locations_txt">Saskatchewan</a>
								</li>
							</ul>
						</div>
					</div>
					<img src="images/internal/inc_locations.jpg " class="img-responsive hidden-xs" />
					<img src="images/internal/inc_locations.jpg " class="img-responsive visible-xs " />
				</div>
			</div>

			<!-- Location list -->
			<div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
				<div id="locations_list"></div>
			</div>

			<div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
				<div>
					<?php
					include 'storeres.php';
					?>
				</div>
				<p>
					qualquer coisa
				</p>
			</div>

			<!-- Find your Store -->
			<div class="row">
				<div class="col-md-offset-1 col-md-10 col-sm-12">
					<div id="find_your_store"></div>
				</div>
			</div>
			<!-- Footer -->
			<div class="row">
				<div id="footer" class="footer_bottom"></div>
			</div>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>

	</body>
</html>