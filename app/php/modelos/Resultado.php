<?php 
namespace App\php\modelos;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Resultado extends Eloquent{

  protected $resultado;
  protected $status;
  protected $usrReg;
  protected $usrMod;

  public function getResultado(){
    return $this->resultado;
  }
  public function putResultado($datos){
    $this->resultado = $datos;
  }

}
