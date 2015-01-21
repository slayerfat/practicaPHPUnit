<?php
namespace App\php\controladores;
use App\php\core\Controlador;

class Calculadora extends Controlador{

  public function sumar($x, $y){

    if ( !is_numeric($x) or !is_numeric($y) ):   
      throw new \Exception("Error Processing Request", 1);
    endif;

    return $x + $y;
  }
  
}
