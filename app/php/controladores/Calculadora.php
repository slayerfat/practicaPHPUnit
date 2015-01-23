<?php
namespace App\php\controladores;
use App\php\core\Controlador;

/**
 * clase que hace las operaciones de la calculadora (considerando
 * dividir las operaciones de las vistas a otra clase)
 */
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

  /**
   * genera la vista con los datos suministrados
   */
  public function index(){
    $calculadora = $this->modelo('Calculadora');

    $archivo = parent::getInfoSistema();
    $datos   = [
      'infoSistema'       => $archivo,
      'CalculadoraModelo' => $calculadora
    ];
    $this->vista('calculadora/index', $datos);
  }
  /**
   * genera el formulario (la calculadora)
   */
  public function form(){
    $calculadora = $this->modelo('Calculadora');
    $archivo     = parent::getInfoSistema();
    $datos       = [
      'infoSistema'       => $archivo,
      'CalculadoraModelo' => $calculadora
    ];
    $this->vista('calculadora/form', $datos);
  }
  
}
