<?php 
namespace App\php\controladores;
use App\php\core\Controlador;
use App\php\modelos\Calculadora;

class CalculadoraForm extends Controlador{

  function __construct($datos = null, $tipo) {
    if ($datos):
      $calculadora = new Calculadora;
      $valido = $calculadora->$tipo($datos['x'], $datos['y']);
    else:
      //codigo
    endif;
    
  }
}
