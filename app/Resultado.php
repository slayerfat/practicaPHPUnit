<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model {

	/**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'resultados';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['resultado'];

  public function resultado(){
    return $this->belongsTo('App\Calculadora');
  }

}
