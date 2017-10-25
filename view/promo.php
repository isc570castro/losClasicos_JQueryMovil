<?php if($_SESSION['user_type']==1){ ?>
<ul data-role="listview" data-split-theme="d">
	<li data-role="list-divider">Nueva promo</li>
	<li>
		<form data-ajax="false" id="publicacion" action="?c=Promo&a=Publicar" method="POST" style="margin-bottom:20px;"" enctype="multipart/part-data">
			<label for="correo">Titulo:</label>
			<input type="text" name="promocion">
			<label for="imagen">Descripcion:</label>
			<textarea name="descripcion"></textarea>
			<button type="submit" class="ui-btn ui-corner-all ui-icon-left ui-icon-check ui-shaw ui-btn-b">Publicar</button>
		</form>
		
	</li>
</ul>
<?php } ?>
<ul data-role="listview" data-inset="true" data-theme="b" data-divider-theme="d" data-count-theme="b" data-split-theme="d">
	<li data-role="list-divider">Promociones</li>
	<?php foreach($this->model->Listar() as $r): ?>
		<li data-icon="gear">
			<a onclick="pedirPromo(<?php echo $r->idPromocion; ?>);" href="#mensaje" data-rel="popup"><?php echo $r->promocion; ?>
				<br>
				<p><?php echo $r->descripcion; ?></p>
			</a>
		</li>
	<?php endforeach ?>
</ul>
<div data-role="popup" id="mensaje" data-theme="a" data-dismissible="false">
	<div data-role="header" data-theme="a">
		<h3>Pedir promo</h3>
	</div>
	<div data-role="main">
		<div class="ui-content">
			
			<form method="POST" action="index.php?c=Promo&a=Pedir" enctype="multipart/part-data" data-ajax="false">
				<input type="hidden" name="idPromocion" id="promo1">
				<a href="#" data-role="button" data-rel="back" data-inline="true">Cancelar</a>
			<button data-role="button" data-inline="true" type="submit" >Aceptar</button>
			</form>
		</div>
	</div>
</div>
<script>
	pedirPromo = function(promo){
		$('#promo1').val(promo);	
	};
</script>