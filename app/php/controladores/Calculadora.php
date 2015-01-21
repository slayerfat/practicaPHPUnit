<?php
namespace App\php\controladores;
use App\php\core\Controlador;

class Calculadora extends Controlador{

  public function sumar($x, $y){

    if ( !is_numeric($x) or !is_numeric($y) ):   
      throw new \Exception("Error, solo se espera numeros", 1);
    endif;

    return $x + $y;
  }

  public function restar($x, $y){

    if ( !is_numeric($x) or !is_numeric($y) ):   
      throw new \Exception("Error, solo se espera numeros", 1);
    endif;

    return $x - $y;
  }
  public function multiplicar($x, $y){

    if ( !is_numeric($x) or !is_numeric($y) ):   
      throw new \Exception("Error, solo se espera numeros", 1);
    endif;

    return $x * $y;
  }
  public function dividir($x, $y){

    if ( !is_numeric($x) or !is_numeric($y) ):   
      throw new \Exception("Error, solo se espera numeros", 1);
    endif;

    return $x / $y;
  }
  
}
