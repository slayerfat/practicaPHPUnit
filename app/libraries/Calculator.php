<?php
namespace App\libraries;

class Calculator {

  public function Add($x, $y){

    if ( !is_numeric($x) or !is_numeric($y) ) :
      throw new \InvalidArgumentException;
    endif;
    return $x + $y;
  }

}
