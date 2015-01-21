<?php 
use App\php\controladores\Calculadora;

class CalculadoraTest extends PHPUnit_Framework_TestCase{

  public function setup(){
    $this->calculadora = new Calculadora;
  }

  public function numeros(){
    return [
      [2, 2, 4],
      [2.5, 2.5, 5],
      [-3, 1, -2],
      [-9, -9, -18]
    ];
  }
  public function noNumeros(){
    return [
      ['a', 1],
      [1, 'a'],
      [[], 1]
    ];
  }

  /**
   * @dataProvider numeros
   */
  public function testSumarNumeros($x, $y, $resultadoEsperado){

    $this->assertEquals($resultadoEsperado, $this->calculadora->sumar($x, $y));
  }

  /**
   * @dataProvider noNumeros
   * @expectedException        Exception
   * @expectedExceptionMessage Error Processing Request
   */
  public function testSoloOperacionConNumeros($x, $y){
    $this->calculadora->sumar($x, $y);
  }
}
