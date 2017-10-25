<?php
require_once 'model/promo.php';
class ServiciosController{

  private $model;
  
  public function __CONSTRUCT(){
    $this->model = new Promo();
  }
  public function Mensaje(){
    $peticion = new Promo();
    $peticion->usuario=$_SESSION['user_session'];
    $peticion->solicitud=$_REQUEST['solicitud'];
    $peticion->comentario=$_REQUEST['comentario'];
    $peticion->telefono=$_REQUEST['telefono'];
    $this->model->Registrarpedido($peticion);
    echo '<script type="text/javascript">alert("Se ha enviado correctamente su mensaje");</script>';
    $page='view/contacto.html';
    require_once 'view/index.php';
  }
} 
?>