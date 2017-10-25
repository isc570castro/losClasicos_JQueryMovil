<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<link rel="stylesheet" href="assets/css/login.css"/>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<body>
	<div data-role="page" id="inicio">
		<div data-role="header" data-theme="a">
			<h1><img src="assets/img/logo.png" style="width: 100%; margin-bottom: -10px; margin-top: -20px"></h1>
		</div>
		<div data-role="content" data-theme="a">
			<form class="login" name="login" method="POST" action="?c=login&a=acceder" enctype="multipart/part-data" data-ajax="false">
				<h1 class="login-title">Login</h1>
				<input name="usuario" type="text" class="login-input" placeholder="Usuario" autofocus>
				<input name="password" type="password" class="login-input" placeholder="Contraseña">
				<input type="submit" value="Aceptar" class="login-button" id="btnLogin">
				<center><p><a href="?c=Usuario&a=Registro">Registrarse</a></p></center>
				<br>
			</form>
		</div>
	</div>
</body>
</html>