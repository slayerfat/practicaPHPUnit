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

  public function index(){
    $calculadora = $this->modelo('Calculadora');

    $archivo = file_get_contents('../../package.json', FILE_USE_INCLUDE_PATH);
    $archivo = utf8_encode($archivo); 
    $archivo = json_decode($archivo, true);
    $datos = [
      'infoSistema'       => $archivo,
      'CalculadoraModelo' => $calculadora
    ];
    $this->vista('calculadora/index', $datos);
  }

  public function form(){
    $calculadora = $this->modelo('Calculadora');

    $archivo = file_get_contents('../../package.json', FILE_USE_INCLUDE_PATH);
    $archivo = utf8_encode($archivo); 
    $archivo = json_decode($archivo, true);
    $datos   = [
      'infoSistema'       => $archivo,
      'CalculadoraModelo' => $calculadora
    ];
    $this->vista('calculadora/form', $datos);
  }
  
}
