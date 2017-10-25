<?php
class IndexController{

 public function Index(){
   $page="view/inicio.php";
   require_once 'view/index.php';
 } 
 public function Acerca(){
   $page="view/acerca.html";
   require_once 'view/index.php';
 } 
 public function Contacto(){
   $page="view/contacto.html";
   require_once 'view/index.php';
 } 
 public function Servicios(){
   $page="view/servicios.php";
   require_once 'view/index.php';
 } 
 public function Promos(){
   $page="view/promos.php";
   require_once 'view/index.php';
 } 
} 
?>