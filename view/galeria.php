<?php if($_SESSION['user_type']==1){ ?>
<ul data-role="listview" data-split-theme="d">
	<li data-role="list-divider">Subir imagen</li>
	<li>
		<form data-ajax="false" id="publicacion" action="?c=inicio&a=Publicarimg" method="POST" style="margin-bottom:20px;">
			<label for="imagen">Imagen:</label>
			<input type="file" name="file" id="imagen" >
			<button type="submit" class="ui-btn ui-corner-all ui-icon-left ui-icon-check ui-shaw ui-btn-b">Publicar</button>
		</form>
		
	</li>
</ul>
<?php } ?>
<ul data-role="listview" data-split-theme="d">
	<li data-role="list-divider">Galería</li>
	<?php foreach($this->model->Listar2() as $r):
	$ruta = "assets/img/galeria/" . $r->imagen; ?>  
	<li class="li-pub">
		<img src="assets/img/" alt="" class="logo">
		<img src="<?php echo $ruta;?>" class="img-pub">
	</li>
<?php endforeach; ?>
<li class="li-pub">
</li>
</ul>
