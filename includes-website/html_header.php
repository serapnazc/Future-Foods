<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$_SESSION['token'] ='F751461E769BE848888C1D793A7FA14A2F30A8E786C4194C9878022FFB634254';
	include('./includes/config.php');
	include('./includes/functions.php');
	include('./includes/library.php');
	include('./includes/crud-mysqli.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Future Foods Competition</title>
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
	<link href="./css/footer-3.css" rel="stylesheet">
	<link href="./css/custom.css" rel="stylesheet">
	<link href="./css/basic.css" rel="stylesheet">
	<link href="./css/contact-1.css" rel="stylesheet">
	<link href="./css/content1-3.css" rel="stylesheet">
	<link href="./css/content1-5.css" rel="stylesheet">
	<link href="./css/content1-9.css" rel="stylesheet">
	<link href="./css/content3-4.css" rel="stylesheet">
	<link href="./css/content3-6.css" rel="stylesheet">
		<link href="./css/gallery-1.css" rel="stylesheet">

</head>
<body>
<div class="wrapper">

		<!-- The KVKK BİLGİLENDİRME METNİ MODAL -->
		<div class="modal" id="kvkkModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">KVKK BİLGİLENDİRME METNİ</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<!-- Modal body -->
					<div class="modal-body">
						Modal body..
					</div>
					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
					</div>
				</div>
			</div>
		</div>

		<!-- The ÇEREZ POLİTİKASI MODAL -->
		<div class="modal" id="cplModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">ÇEREZ POLİTİKASI</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<!-- Modal body -->
					<div class="modal-body">
						<object type="application/pdf" data="./assets/website-files/Çerez-Politikası.pdf" width="100%" height="500" style="height: 85vh;"></object>
					</div>
					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
					</div>
				</div>
			</div>
		</div>

		<!-- The KATILIM KOŞULLARI MODAL -->
		<div class="modal" id="kkModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">KATILIM KOŞULLARI</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<!-- Modal body -->
					<div class="modal-body">
						<object type="application/pdf" data="./assets/website-files/YARIŞMAYA-KATILIM-KOŞULLARI.pdf" width="100%" height="500" style="height: 85vh;"></object>
					</div>
					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
					</div>
				</div>
			</div>
		</div>

		<!-- The SARTNAME METNİ MODAL -->
		<div class="modal" id="sartnameModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">ŞARTNAME</h4>
					</div>
					<!-- Modal body -->
					<div class="modal-body">
						<object type="application/pdf" data="./assets/website-files/sartname.pdf" width="100%" height="500" style="height: 85vh;"></object>
					</div>
					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
					</div>
				</div>
			</div>
		</div>

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
					<a href="index.php"><img src="./assets/images/ffc-logo.png" class="brand-img img-responsive" ></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item "><a href="nasil-katilirsin.php">Nasıl Katılırsın?</a></li>
						<li class="nav-item  "><a href="basvuru.php">Başvuru Formu</a></li>
						<li class="nav-item  "><a href="proje-gonderimi.php">Proje Gönderİmİ</a></li>
						<li class="nav-item  "><a href="oduller.php">Ödüller</a></li><li class="nav-item dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">FFC <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li class=""><a href="ffc-hakkinda.php">Hakkında</a></li>
								<li class=""><a href="sss.php">SSS</a></li>
								<li class=""><a href="surec.php">Süreç</a></li>
							<!--	<li class=""><a href="galeri.php">Galerİ</a></li> -->
							</ul>
						</li>
						<li class="nav-item "><a href="fonksiyonel-bar.php">Fonksiyonel Bar Nedir?</a></li><li class="nav-item dropdown">

					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>



	</header>
	<!-- // End HEADER 2 -->
<div class="content-wrapper" id="content-wrapper" >
