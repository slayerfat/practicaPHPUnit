<?php 
namespace app\php\core;
class Controlador{

  protected $modelo = 'Calculadora';
  
  protected function modelo($modelo){

    if (file_exists('../php/modelos/' . $modelo . '.php')):
      $this->modelo = $modelo;
    endif;
    require_once '../php/modelos/' . $this->modelo . '.php';

    return new $modelo;
  }

  protected function vista($vista, $datos = []){

    require_once '../php/vistas/'. $vista .'.php';

  }
}
