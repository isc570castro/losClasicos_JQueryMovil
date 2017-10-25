<?php
require_once 'model/login.php';
class LoginController{

  private $model;
  
  public function __CONSTRUCT(){
    $this->model = new Login();
  }
  
  public function Index(){
    require_once 'view/login.php';
  }

  public function Acceder(){
   $log = new Login();
   $usuario=$log->usuario = $_POST['usuario'];
   $password = $_POST['password'];
   $password=md5($password);
   $password=crc32($password);
   $password=crypt($password,"xtem");
   $password=sha1($password);
   //echo $password;
   $consulta=$this->model->verificar($log);
   if($consulta!=null){
    if($consulta->password == $password){
      $this->login($usuario,$password,$consulta->tipoUsuario);
       header("Location: index.php?c=inicio"); 
    }else{
      echo '<script type="text/javascript">alert("Acceso incorrecto");</script>';
      require_once 'view/login.php';
    }
  }else{
   echo '<script type="text/javascript">alert("Acceso incorrecto");</script>';
   require_once 'view/login.php';
 }
}

public function login($usuario,$password,$type)
{
 $_SESSION['user_session'] = $usuario;
 $_SESSION['user_password'] = $password;
 $_SESSION['user_type'] = $type;
 $_SESSION['seguridad1'] = "ok";
}

public function redirect($url)
{
 header("Location: $url");
}

public function Galeria(){
   $page="view/galeria.php";
   require_once 'view/index.php';
 } 
}
