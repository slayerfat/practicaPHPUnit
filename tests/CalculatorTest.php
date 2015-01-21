<?php

use App\libraries\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase{

  public function setUp(){
    $this->calculator = new Calculator;
  }

  public function inputNumbers(){
    return [
      [2, 2, 4],
      [2.5, 2.5, 5],
      [-3, 1, -2],
      [-9, -9, -18]
    ];
  }

  /**
   * @dataProvider inputNumbers
   */
  public function testAddNumbers($x, $y, $sum){

    $this->assertEquals($sum, $this->calculator->Add($x, $y));
  }

  /**
   * @expectedException InvalidArgumentException
   */
  public function testThrowsExceptionIfNonNumericIsPassed(){
    
    $this->calculator->Add( 'a', [] );
  }

}
