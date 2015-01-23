<?php
namespace App\php\modelos;
use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Conexion;
class Calculadora extends Eloquent{

  protected $id;
  protected $operacion;
  protected $status;
  protected $usrReg;
  protected $usrMod;

  function __construct() {
    $this->conexion = new Conexion;
  }

  public function validar($x, $y){
    if ( !is_numeric($x) or !is_numeric($y) ):   
      return false;
    endif;
    return true;
  }
  
}
