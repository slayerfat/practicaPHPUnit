<?php 

class CalculadoraTest extends PHPUnit_Framework_TestCase{

  public function testOperando1MasOperando2IgualCero(){
    $a = new Calculadora(1,2);

    $a->sumar();

    $this->assertEquals(3, $a->resultado);
  }
}
