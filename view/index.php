<?php
include_once './model/database.php';
if (!isset($_SESSION['seguridad1'])){
	header("Location: index.php");
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>Los clásicos</title>
</head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<link rel="stylesheet" href="assets/css/index.css">
<link rel="stylesheet" href="assets/css/inicio.css">

<style type="text/css">

</style>
<body>
	<div data-role="page">
		<div data-role="header" data-theme="b" class="header">
			<a href="?c=inicio" data-icon="home">Inicio</a>
			<h1><img src="assets/img/logo2.png" class="img-logo"></h1>
			<a href="?c=login&a=logout" data-icon="arrow-u-l">Salir</a>
			<nav data-role="navbar">
				<ul>
					<li><center><a href="?c=index&a=Acerca" data-icon="star" data-theme="e"></a>Acerca</center></li>
					<li><center><a href="?c=inicio&a=Galeria" data-icon="camera" data-theme="e"></a>Galeria</center></li>
					<li><center><a href="?c=promo" data-icon="check" data-theme="e"></a>Promos</center></li>
					<li><center><a href="?c=index&a=Contacto" data-icon="info" data-theme="e"></a>Contacto</center></li>
					<li><center><a href="?c=index&a=Contacto" data-icon="mail" data-theme="e"></a>Msn</center></li>

				</ul>
			</nav>
		</div>
		<div data-role="content">
			<?php include($page); ?> 
		</div>
		<div data-role="footer" data-position="fixed">
			<div style="margin-top:-10px;">
				<img src="assets/img/youtube.png" class="img-youtube"><label style="margin-left: 50px;""><strong><a href="https://www.youtube.com/channel/UCqXOS_q7ehHQBv7Pst6Wu1Q">Los clásicos show</a></strong></label>
			</div>
			<div class="div-facebook">
				<img src="assets/img/facebook.png" class="img-facebook"><label style="margin-left: 50px; margin-top:3px"><strong><a href="https://www.facebook.com/Trio-Los-Cl%C3%A1sicos-666946803385163/">Trío los clásico</a></strong></a>
			</div>
		</div>
	</div>
</body>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</html>