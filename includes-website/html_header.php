<?php
	include('./includes/config.php');
	include('./includes/functions.php');
	include('./includes/library.php');
		include('./includes/crud-mysqli.php');
/*	if(basename($_SERVER['PHP_SELF'])== "index.php"){
		$nav_active_index = 'active';
		$nav_active_kk = '';
		$nav_active_surec = '';
		$nav_active_oduller ='';
		$nav_active_sponsor = '';
		$nav_active_basvur = '';
		$nav_active_iletisim ='';
		$nav_active_yarisma = '';
	}else if(basename($_SERVER['PHP_SELF'])== "katilim-kosullari.php"){
		$nav_active_index = '';
		$nav_active_kk = 'active';
		$nav_active_surec = '';
		$nav_active_oduller ='';
		$nav_active_sponsor = '';
		$nav_active_basvur = '';
		$nav_active_iletisim ='';
		$nav_active_yarisma = '';
	}else if(basename($_SERVER['PHP_SELF'])== "surec.php"){
		$nav_active_index = '';
		$nav_active_kk = '';
		$nav_active_surec = 'active';
		$nav_active_oduller ='';
		$nav_active_sponsor = '';
		$nav_active_basvur = '';
		$nav_active_iletisim ='';
		$nav_active_yarisma = '';
	}else if(basename($_SERVER['PHP_SELF'])== "oduller.php"){
		$nav_active_index = '';
		$nav_active_kk = '';
		$nav_active_surec = '';
		$nav_active_oduller ='active';
		$nav_active_sponsor = '';
		$nav_active_basvur = '';
		$nav_active_iletisim ='';
		$nav_active_yarisma = '';
	}else if(basename($_SERVER['PHP_SELF'])== "sponsorumuz.php"){
		$nav_active_index = '';
		$nav_active_kk = '';
		$nav_active_surec = '';
		$nav_active_oduller ='';
		$nav_active_sponsor = 'active';
		$nav_active_basvur = '';
		$nav_active_iletisim ='';
		$nav_active_yarisma = '';
	}else if(basename($_SERVER['PHP_SELF'])== "iletisim.php"){
		$nav_active_index = '';
		$nav_active_kk = '';
		$nav_active_surec = '';
		$nav_active_oduller ='';
		$nav_active_sponsor = '';
		$nav_active_basvur = '';
		$nav_active_iletisim ='active';
		$nav_active_yarisma = '';
	}else if(basename($_SERVER['PHP_SELF'])== "hemen-basvur.php"){
		$nav_active_index = '';
		$nav_active_kk = '';
		$nav_active_surec = '';
		$nav_active_oduller ='';
		$nav_active_sponsor = '';
		$nav_active_basvur = 'active';
		$nav_active_iletisim ='';
		$nav_active_yarisma = '';
	}*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Future Foods Forum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="bskit, bootstrap starter kit, bootstrap builder" />
	<meta name="description" content="Business Startup & Prototyping HTML Framework" />

	<link rel="shortcut icon" href="ico/favicon.png">

    <!-- Core CSS -->
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Style Library -->
	<link href="./css/style-library-1.css" rel="stylesheet">

	<!-- Vendor Styles -->
	<link href="./css/bootstrap-4.css" rel="stylesheet">

	<!-- Block Styles -->
	<link href="./css/header-2.css" rel="stylesheet">
	<link href="./css/footer-5.css" rel="stylesheet">
	<link href="./css/custom.css" rel="stylesheet">
	<link href="./css/basic.css" rel="stylesheet">
	<link href="./css/content1-3.css" rel="stylesheet">
	<link href="./css/content1-5.css" rel="stylesheet">
	<link href="./css/content1-9.css" rel="stylesheet">
	<link href="./css/content3-4.css" rel="stylesheet">
	<link href="./css/content3-6.css" rel="stylesheet">
		<link href="./css/gallery-1.css" rel="stylesheet">


</head>
<body>



	<!-- HEADER 2 -->
	<header id="header-2">

		<nav class="main-nav navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<img src="./images/logo-eg.png" class="brand-img img-responsive" >
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item "><a href="index.php">Nasil Katilirsin?</a></li>
						<li class="nav-item  "><a href="basvuru.php">Basvuru Formu</a></li>
						<li class="nav-item  "><a href="proje-gonderimi.php">Proje Gonderimi</a></li>
						<li class="nav-item  "><a href="oduller.php">Oduller</a></li><li class="nav-item dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">FFF <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li class=""><a href="fff-hakkinda.php">Hakkinda</a></li>
								<li class=""><a href="sss.php">SSS</a></li>
								<li class=""><a href="surec.php">Surec</a></li>
								<li class=""><a href="galeri.php">Galeri</a></li>
							</ul>
						</li><!-- /.dropdown -->

					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

	</header>
	<!-- // End HEADER 2 -->
<div class="content-wrapper" id="content-wrapper" >
