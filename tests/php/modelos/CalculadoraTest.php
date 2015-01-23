<?php 
use App\php\modelos\Calculadora;

class ModeloCalculadoraTest extends PHPUnit_Framework_TestCase{

  public function setup(){
    $this->calculadora = new Calculadora;
  }

  public function numeros(){
    return [
      [2, 2],
      [2.5, 2.5],
      [-3, 1],
      [-9, -9]
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
  public function testComprobarSoloNumerosEsVerdadero($x, $y){
    $this->assertEquals( true, $this->calculadora->validar($x, $y) );
  }

  /**
   * @dataProvider noNumeros
   */
  public function testComprobarNoNumerricosEsFalso($x, $y){
    $this->assertEquals( false, $this->calculadora->validar($x, $y) );
  }
}

