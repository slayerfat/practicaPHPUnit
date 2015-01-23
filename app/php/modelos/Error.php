<?php
namespace App\php\modelos;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Error extends Eloquent{

  protected $fillable = ['descripcion', 'status'];

}
