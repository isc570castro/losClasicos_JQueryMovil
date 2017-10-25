<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<link rel="stylesheet" href="assets/css/login.css"/>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

<!--<link rel="stylesheet" href="css/jquery.mobile-1.3.0.min.css"/>
<script type="js/jquery.js"></script>
<script src="js/jquery.mobile-1.3.0.js"></script>
<script src="js/jquery.mobile-1.3.0.min.js"></script>-->

<body>
	<div data-role="page" id="inicio">
		<div data-role="header" data-theme="a">
			<h1><img src="assets/img/logo.png" style="width: 100%; margin-bottom: -10px; margin-top: -20px"></h1>
		</div>
		<div data-role="content" data-theme="a">
			<form class="login" name="login" method="POST" action="index.php?c=Usuario&a=Guardar" enctype="multipart/part-data" data-ajax="false">
				<h1 class="login-title">Ingresa tus datos</h1>
				<input name="nombre" type="text" class="login-input" placeholder="Nombre" autofocus>
				<input type="text" class="login-input" placeholder="Correo electrónico" name="correo">
				<input type="text" class="login-input" placeholder="Usuario" name="usuario">
				<input type="password" class="login-input" placeholder="Contraseña" name="password">
				<a href="#mensaje" data-role="button" type="button" data-rel="popup" data-position-to="window" data-transition="flip" onclick="$(this).closest('form').submit()">Aceptar</a>
				<div data-role="popup" id="mensaje" data-theme="b" data-dismissible="false">		
						<h3>Felicidades</h3>
					<div data-role="main">
						<div class="ui-content">
							<p>Su registro ha sido exitoso</p>
							<button type="submit"> Aceptar</button>
						</div>
					</div>
				</div>
				<center><p class="btnregistrase"><a href="?c=login&a=index">Volver</a></p></center>
				<br>
			</form>
		</div>
	</div>
</body>
</html>