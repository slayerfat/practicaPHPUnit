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
  protected $fillable = ['operacion'];

}
