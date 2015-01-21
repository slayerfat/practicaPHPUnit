<?php 
namespace App\php\core;
use App\php\modelos\Calculadora;
class Controlador{

  protected $modelo = 'Calculadora';
  
  protected function modelo($modelo){

    if (file_exists('../php/modelos/' . $modelo . '.php')):
      $this->modelo = $modelo;
    endif;
    $clase = 'App\\php\\modelos\\'.'Usuario';
    return new $clase;
  }

  protected function vista($vista, $datos = []){

    require_once '../php/vistas/'. $vista .'.php';

  }
}
