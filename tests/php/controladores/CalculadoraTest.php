<?php 
use App\php\controladores\Calculadora;

class CalculadoraTest extends PHPUnit_Framework_TestCase{

  public function setup(){
    $this->calculadora = new Calculadora;
  }

  public function numerosSuma(){
    return [
      [2, 2, 4],
      [2.5, 2.5, 5],
      [-3, 1, -2],
      [-9, -9, -18]
    ];
  }
  public function numerosResta(){
    return [
      [2, 2, 0],
      [2.5, 2.5, 0],
      [-3, 1, -4],
      [-9, -9, 0]
    ];
  }
  public function numerosMultiplicion(){
    return [
      [2, 2, 4],
      [2.5, 2.5, 6.25],
      [-3, 1, -3],
      [-9, -9, 81]
    ];
  }
  public function numerosDivision(){
    return [
      [2, 2, 1],
      [2.5, 2.5, 1],
      [-3, 1, -3],
      [-9, -9, 1]
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
   * @dataProvider numerosSuma
   */
  public function testSumarNumeros($x, $y, $resultadoEsperado){

    $this->assertEquals($resultadoEsperado, $this->calculadora->sumar($x, $y));
  }

  /**
   * @dataProvider numerosResta
   */
  public function testRestarNumeros($x, $y, $resultadoEsperado){

    $this->assertEquals($resultadoEsperado, $this->calculadora->restar($x, $y));
  }

  /**
   * @dataProvider noNumeros
   * @expectedException        Exception
   * @expectedExceptionMessage Error, solo se espera numeros
   */
  public function testSumarSoloOperacionConNumeros($x, $y){

    $this->calculadora->sumar($x, $y);
    
  }
  /**
   * @dataProvider noNumeros
   * @expectedException        Exception
   * @expectedExceptionMessage Error, solo se espera numeros
   */
  public function testRestarSoloOperacionConNumeros($x, $y){

    $this->calculadora->restar($x, $y);
    
  }
  /**
   * @dataProvider noNumeros
   * @expectedException        Exception
   * @expectedExceptionMessage Error, solo se espera numeros
   */
  public function testMultiplicarSoloOperacionConNumeros($x, $y){

    $this->calculadora->multiplicar($x, $y);
    
  }
  /**
   * @dataProvider noNumeros
   * @expectedException        Exception
   * @expectedExceptionMessage Error, solo se espera numeros
   */
  public function testDividirSoloOperacionConNumeros($x, $y){

    $this->calculadora->sumar($x, $y);
    
  }
}
// $this->calculadora->restar($x, $y);
// $this->calculadora->multiplicar($x, $y);
// $this->calculadora->dividir($x, $y);
