<?php
require_once 'model/promo.php';
class PromoController{

  private $model;
  
  public function __CONSTRUCT(){
    $this->model = new Promo();
  }

  public function Index(){
    $page="view/promo.php";
    require_once 'view/index.php';
  } 
   public function Publicar(){
    $promo = new Promo();
    $promo->promocion=$_POST['promocion'];
    $promo->descripcion=$_POST['descripcion'];
    $this->model->Registrar($promo);
    $page="view/promo.php";
    require_once 'view/index.php';
  } 
  public function Pedir(){
    $promo = new Promo();
    $promo=$this->model->Obtener($_REQUEST['idPromocion']);
    $page="view/pedirpromo.php";
    require_once 'view/index.php';
  }
  public function Registrarpedido(){
    $peticion = new Promo();
    $peticion->usuario=$_SESSION['user_session'];
    $peticion->solicitud=$_REQUEST['solicitud'];
    $peticion->comentario=$_REQUEST['comentario'];
    $peticion->telefono=$_REQUEST['telefono'];
    $this->model->Registrarpedido($peticion);
    echo '<script type="text/javascript">alert("Se ha generado correctamente su peticion");</script>';
    $page='view/promo.php';
    require_once 'view/index.php';
  }
} 
?>