<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Calculadora extends Model {

	/**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'calculadoras';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'operacion', 
    'user_id', 
    'resultado_id', 
    'created_by', 
    'updated_by'
  ];

  /**
   * obtiene los resultados segun la calculadora u operacion
   * @return [type] [description]
   */
  public function resultados(){
    return $this->hasMany('App\Resultado');
  }

  public function user(){
    return $this->belongsTo('App\User');
  }

  /**
   * la operacion que se hara segun el tipo
   * @param  float   $x         [description]
   * @param  float   $y         [description]
   * @param  integer $operacion sumar, restar, multiplicar, dividir
   * @return float
   */
  public function operacion($x, $y, $tipo){

    switch ($tipo) {
      case 1:
        $this->attributes['operacion'] = "$x + $y";
        return $this->sumar($x, $y);
        break;
      
      case 2:
        $this->attributes['operacion'] = "$x - $y";
        return $this->restar($x, $y);
        break;
      
      case 3:
        $this->attributes['operacion'] = "$x * $y";
        return $this->multiplicar($x, $y);
        break;
      
      case 4:
        $this->attributes['operacion'] = "$x / $y";
        return $this->dividir($x, $y);
        break;
      
      default:
        # code...
        break;
    }
  }

  /**
   * la suma de dos operandos
   * @param  float $x
   * @param  float $y 
   * @return float
   */
  protected function sumar($x, $y){

    return $x + $y;
  }

  /**
   * la resta de dos operandos
   * @param  float $x
   * @param  float $y 
   * @return float
   */
  protected function restar($x, $y){

    return $x - $y;
  }

  /**
   * la multiplicacion de dos operandos
   * @param  float $x
   * @param  float $y 
   * @return float
   */
  protected function multiplicar($x, $y){

    return $x * $y;
  }

  /**
   * la division de dos operandos
   * @param  float $x
   * @param  float $y 
   * @return float
   */
  protected function dividir($x, $y){

    if (self::chequearDivisor($y)) return $x / $y;

    return false;
  }

  /**
   * chequea el divisor no sea cero
   * @param  float $x
   * @return boolean
   */
  static function chequearDivisor($x){
    return $x = (0) ? false : true ;
  }

  /**
   * añade el codigo de usuario que crea el row
   */
  public function setCreatedByAttribute(){
    $this->attributes['created_by'] = \Auth::user()->id;
  }
  /**
   * añade el codigo de usuario que updatea el row
   */
  public function setUpdatedByAttribute(){
    $this->attributes['updated_by'] = \Auth::user()->id;
  }

}
