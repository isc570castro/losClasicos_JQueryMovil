
<ul data-role="listview" data-split-theme="d">
	<li data-role="list-divider">Peticiones</li>
</ul>
<h2><?php echo $promo->promocion; ?></h2>
<form id="form1" action="?c=Promo&a=Registrarpedido" method="post" data-ajax="false">
	<input type="hidden" name="solicitud" value="<?php echo $promo->promocion; ?>">
	<label>Comentario:</label>
	<textarea placeholder="Introduce el comentario necesario" name="comentario"></textarea>
	<label>Télefono:</label>
	<input type="text" name="telefono" placeholder="Ingresa tu número de télefono para contactarte">
	<input type="submit" name="enviar" value="Enviar">
</form>