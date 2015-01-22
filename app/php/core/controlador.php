<?php 
namespace App\php\core;
use App\php\modelos\Calculadora;

class Controlador{

  protected $modelo = 'Calculadora';
  
  protected function modelo($modelo){

    if (file_exists('../php/modelos/' . ucfirst($modelo) . '.php')):
      $this->modelo = $modelo;
    endif;
    $clase = 'App\\php\\modelos\\'.ucfirst($modelo);
    return new $clase;
  }

  protected function vista($vista, $datos = []){

    require_once '../php/vistas/'. $vista .'.php';

  }
}
