<?php
namespace App\php\modelos;
use Illuminate\Database\Eloquent\Model as Eloquent;
use App\php\modelos\Resultado; 


class Calculadora extends Eloquent{

  protected $fillable = ['operacion', 'status'];

  public function resultados(){
    return $this->hasMany('resultados');
  }

  public function validar($x, $y){
    if ( !is_numeric($x) or !is_numeric($y) ):   
      return false;
    endif;
    return true;
  }
  /**
   * inserta los datos referente al formulario de la calculadora.
   * @param  int    $x operando 1
   * @param  int    $y operando 2
   * @param  string $o simbolo
   * @param  mixed  $r el resultado
   */
  public function insertar($x, $y, $o, $r){
    $this->operacion = "$x $o $y";
    $this->save();

    $resultado = new Resultado;
    $resultado->calculadoraID = $this->id;
    $resultado->resultado     = $r;
    $resultado->save();
  }
  
}
