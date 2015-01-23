<?php
namespace App\php\modelos;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Usuario extends Eloquent{
  
  protected $fillable = ['usuario', 'correo'];
}
