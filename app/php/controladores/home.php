<?php 

/**
* 
*/
class Home extends Controlador{
  
  public function index($nombre = ''){
    $usuario = $this->modelo('Usuario');
    $usuario->nombre = $nombre;

    $this->vista('home/index', ['nombre' => $usuario->nombre]);
  }
}
