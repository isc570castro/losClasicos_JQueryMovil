<?php
require_once 'model/inicio.php';
class InicioController{

  private $model;
  
  public function __CONSTRUCT(){
    $this->model = new Inicio();
  }

  public function Index(){
    $page="view/inicio.php";
    require_once 'view/index.php';
  } 
  
  public function Publicar(){
   if (isset($_FILES["file"]))
   {
    $pub = new Inicio();
    $file = $_FILES["file"];
    $pub->imagen = $file["name"];
    $pub->descripcion=$_POST['descripcion'];
    $archivo = $file["tmp_name"];
    $carpeta = "assets/img/publicaciones/";
    $src = $carpeta.$pub->imagen;
    move_uploaded_file($archivo, $src);
    $this->model->Publicar($pub);
    echo "<script type='text/javascript'>alert('Su publicación se ha realizado con éxito');</script>";
    $page="view/inicio.php";
    require_once 'view/index.php';

  }else{
    echo "<script type='text/javascript'>alert('Hubo un problema al subir la imagen, intentelo de nuevo');</script>";
    $page="view/inicio.php";
    require_once 'view/index.php';
  }
}
public function Galeria(){
 $page="view/galeria.php";
 require_once 'view/index.php';
}
public function Publicarimg(){
 if (isset($_FILES["file"])){
  echo "exito";
}else{
  echo "vale pura madre";
}
}
} 
?>
