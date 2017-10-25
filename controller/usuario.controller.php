<?php
require_once 'model/usuario.php';
class UsuarioController{

  private $model;

  public function __CONSTRUCT(){
    $this->model = new Usuario();
  }

  public function Registro(){
    require_once 'view/registro.php';
  }

  public function Guardar(){
    $usuario= new Usuario();
    $usuario->nombre = $_REQUEST['nombre'];
    $usuario->usuario = $_REQUEST['usuario'];
    $usuario->correo=$_REQUEST['correo'];
    $usuario->tipoUsuario = 2;
    $password =$_REQUEST['password'];
    $password=md5($password);
    $password=crc32($password);
    $password=crypt($password,"xtem");
    $password=sha1($password);
    $usuario->password=$password;       
    $this->model->Registrar($usuario);
    header('Location: index.php?c=login');
  }

  //Metodo  para eliminar
  public function Eliminar(){
    if(isset($_REQUEST['acceso'])){
      $this->model->Eliminar($_REQUEST['idUsuario']);
     $administracion=true; //variable cargada para activar la opcion administracion en el menu
      $usuarios=true; //variable cargada para activar la opcion usuarios en el menu
      $page="view/usuario/index.php";
      $mensaje="Se ha eliminado correctamente el usuario";
      require_once 'view/index.php';
    }else{
      $this->Lockscreen();
    }
  }
}

