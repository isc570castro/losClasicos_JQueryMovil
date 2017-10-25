<?php if($_SESSION['user_type']==1){ ?>
<ul data-role="listview" data-split-theme="d">
	<li data-role="list-divider">Publicar</li>
	<li>
		<form class="frmRegistro" action="?c=inicio&a=Publicar" method="POST" enctype="multipart/form-data" name="frmaltaClientes" id="frmRegistro" data-ajax="false" >
			<label for="correo">Descripcion:</label>
			<textarea name="descripcion"></textarea>
			<label for="imagen">Imagen:</label>
			<input type="file" name="file" id="imagen" >
			<button type="submit" class="ui-btn ui-corner-all ui-icon-left ui-icon-check ui-shaw ui-btn-b">Publicar</button>
		</form>
	</li>
</ul>
<?php } ?>
<ul data-role="listview" data-split-theme="d">
	<li data-role="list-divider">Inicio</li>
	<?php foreach($this->model->Listar() as $r):
	$ruta = "assets/img/publicaciones/" . $r->imagen; ?>  
	<li class="li-pub">
		<img src="assets/img/perfil.jpg" alt="" class="logo">
		<label style="margin-left: -50px;"><strong>Los clásicos</strong></label>
		<label style="margin-left: -50px; font-size: 13px;margin-bottom: 10px;"><?php echo $r->descripcion; ?></label>
		<img src="<?php echo $ruta;?>" class="img-pub">
	</li>
<?php endforeach; ?>
<li class="li-pub">
</li>
</ul>
