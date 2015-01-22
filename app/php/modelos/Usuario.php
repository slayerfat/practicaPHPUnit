<?php
namespace App\php\modelos;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Usuario extends Eloquent{

  public $nombre;
  public $correo;
  protected $fillable = ['usuario', 'correo'];
}
