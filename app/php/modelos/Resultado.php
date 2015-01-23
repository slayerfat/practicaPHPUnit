<?php 
namespace App\php\modelos;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Resultado extends Eloquent{

  protected $fillable = ['resultado', 'status', 'calculadoraID'];

  public function calculadoras(){
    return $this->belongsTo('calculadoras');
  }

  public function getResultado(){
    return $this->resultado;
  }
  public function putResultado($datos){
    $this->resultado = $datos;
  }

}
