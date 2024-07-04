<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Ekem's Creative - Produits</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="css/test.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/Style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shCjH9BA29r2xk1TK6a0xVb1+0b5zUg0jLHR0" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<style>
        .ie-panel{
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);
            clear: both;
            text-align:center;
            position: relative;
            z-index: 1;
        }
        html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {
            display: block;
        }
        .navbar-brand,
        .navbar-nav .nav-link.active {
            color: #FF9027;
        }
	</style>
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
	
</head>
<body>

<nav class="navbar navbar-expand-lg rd-navbar-classic navbar-light bg-white fixed-top page-header-corporate">
	<div class="container">
		<div class="rd-navbar-panel d-flex justify-content-between align-items-center w-100">
			<!-- Bouton de bascule pour la navigation responsive -->
			<button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="navbar-brand mx-auto d-flex align-items-center">
				<img src="assets/img.png" height="35" width="35" class="mr-2">
				<h4 class="font-weight-light font-weight-bold mb-0">Ekem's Creative</h4>
			</div>
		</div>
		
		<!-- Contenu de la navigation -->
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item">
					<a class="nav-link font-weight-bolder" href="index.html">Accueil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link font-weight-bolder active" href="produits.html">Produits</a>
				</li>
				<li class="nav-item">
					<a class="nav-link font-weight-bolder" href="services.html">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link font-weight-bolder" href="about_us.html">À Propos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link font-weight-bolder" href="contact_us.html">Contact</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- Header -->
<section class="breadcrumbs-custom my-5 mt-5">
	<div class="parallax-container" data-parallax-img="images/plural-3.jpg">
		<div class="material-parallax parallax">
			<img src="images/ind-print-2.jpg" alt="" style="display: block; transform: translate3d(-50%, 176px, 0px);">
		</div>
		<div class="breadcrumbs-custom-body parallax-content context-dark">
			<div class="container">
				<h2 class="breadcrumbs-custom-title"><i class="fas fa-box-open"></i> Nos Produits</h2>
			</div>
		</div>
	</div>
	<div class="breadcrumbs-custom-footer">
		<div class="container">
			<ul class="breadcrumbs-custom-path">
				<li><a href="index.html">Acceuil</a></li>
				<i class="fas fa-arrow-right small-icon"></i>
				<li class="active">Produits</li>
			</ul>
		</div>
	</div>
</section>

<!-- Product -->
<section class="section section-xxl bg-default text-md-left">
	<div class="container">
		<div class="row row-50">

			<div class="col-lg-8 col-xl-9">
				<div class="product-top-panel group-md">
					<p class="product-top-panel-title">Les resultats 1–9 sur 28</p>
				</div>


				<?php
					$right_path = 'backend/' ;
					$db = 'AdminSpace/db.php' ;
					include $db;
					include "config/card_product.php"
				?>
			</div>
		</div>
	</div>
</section>


<!-- Footer -->
<footer class="bg-gradient-2 section footer-classic">
	<div class="footer-classic-body section-lg context-dark">
		<div class="container">
			<div class="row row-40 row-md-50 justify-content-xl-between">
				<div class="col-sm-6 col-lg-4 col-xl-3 wow fadeInRight">
					<div class="footer-classic-brand"><a class="brand" href="index.html">
						<img class="brand-logo-dark" src="assets/img.png" alt="" width="65" height="65" srcset="assets/img.png 2x">
						<img class="brand-logo-light" src="assets/img.png" alt="" width="65" height="65" srcset="assets/img.png 2x"></a>
					</div>
					<ul class="list-schedule">
						<li><span>Jour de la Semaine :</span><span>08H - 20H</span></li>
						<li><span>En fin de Semaine :</span><span>10H - 18H</span></li>
					</ul>
					<div class="footer-classic-social">
						<div class="group-lg group-middle">
							<p>Get Social</p>
							<div>
								<ul class="list-inline list-social list-inline-sm">
									<li><a class="icon mdi mdi-facebook" href="#">
										<i class="fab fa-facebook-f"></i>
									</a></li>
									<li><a class="icon mdi mdi-twitter" href="#">
										<i class="fab fa-telegram-plane"></i>
									</a></li>
									<li><a class="icon mdi mdi-instagram" href="#">
										<i class="fab fa-whatsapp"></i>
									</a></li>
									<li><a class="icon mdi mdi-google-plus" href="#"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 col-xl-3 wow fadeInRight" data-wow-delay=".1s">
					<h4 class="footer-classic-title text-transform-uppercase">Contacts</h4>
					<ul class="contacts-creative">
						<li>
							<div class="unit unit-spacing-sm flex-column flex-md-row">
								<div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
								<div class="unit-body"><a href="#">xxx xxxxxxx xxxxx xxx, xxxxx<br>xxxx xxxxx, Yaounde Cameroun</a></div>
							</div>
						</li>
						<li>
							<div class="unit unit-spacing-sm flex-column flex-md-row">
								<div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
								<div class="unit-body"><a href="tel:#">+237 6 xx xx xx xx</a></div>
							</div>
						</li>
						<li>
							<div class="unit unit-spacing-sm flex-column flex-md-row">
								<div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
								<div class="unit-body"><a href="mailto:#">ekemscreative@gmail.com</a></div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-lg-4 wow fadeInRight" data-wow-delay=".2s">
					<h4 class="footer-classic-title text-transform-uppercase">Newsletter</h4>
					<p>"Inscrivez-vous à notre newsletter pour recevoir chaque semaine les dernières actualités, mises à jour, offres spéciales et réductions exclusives."</p>
					<!-- RD Mailform-->
					<form class="rd-form rd-mailform rd-form-inline rd-form-inline-2" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" novalidate="novalidate">
						<div class="form-wrap">
							<input class="form-input form-control-has-validation" id="subscribe-form-2-email" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
							<label class="form-label rd-input-label" for="subscribe-form-2-email">Votre adresse mail</label>
						</div>
						<div class="form-button">
							<button class="button button-icon-2 button-zakaria button-secondary" type="submit">
                <span class="linearicons-paper-plane">
                  <i class="fas fa-paper-plane"></i>
                </span>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-classic-panel">
		<div class="container">
			<div class="row row-10 align-items-center justify-content-sm-between">
				<div class="col-md-auto">
					<p class="rights">
						<span>©&nbsp;</span>
						<span class="copyright-year">2024</span>
						<span>&nbsp;</span>
						<span>Mani Entreprises</span>
						<span>.&nbsp; All rights reserved</span></p>
				</div>
				<div class="col-md-auto order-md-1">
					<a href="">Privacy Policy</a>
				</div>
			</div>
		</div>
	</div>
</footer>

<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
<script async="" src="//www.googletagmanager.com/gtm.js?id=GTM-P9FT69"></script>
<script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
<script src="js/script.js"></script>
<script src="js/core.min.js"></script>

<style>
    .navbar-brand,
    .navbar-nav .nav-link.active {
        color: #FF9027 !important;
        font-weight: bold;
    }

    /* Assurer que le texte et le bouton de navigation responsive soient sur la même ligne */
    .rd-navbar-panel {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .navbar-brand {
        flex-grow: 1;
        text-align: center;
    }

    /* Enlever les bordures du bouton de navigation responsive et changer la couleur */
    .custom-toggler .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 144, 39, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    .custom-toggler {
        border: none;  /* Enlever les bordures */
        padding: 0;    /* Enlever le padding */
        background: none; /* Enlever le fond */
    }

    /* Ajuster l'espacement des liens de navigation pour éviter le passage à deux lignes */
    .navbar-nav .nav-link {
        white-space: nowrap; /* Empêcher le passage à deux lignes */
        margin-right: 15px;  /* Ajuster l'espacement entre les liens */
    }

    .navbar-nav .nav-item {
        margin-left: 5px;  /* Ajuster l'espacement entre les items */
    }

    .navbar-nav .nav-item:last-child .nav-link {
        margin-right: 0; /* Enlever la marge à droite du dernier élément */
    }
</style>

</body>
</html>