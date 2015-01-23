<?php
namespace App\php\modelos;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Usuario extends Eloquent{

  protected $id;
  public $nombre;
  public $correo;
  protected $fillable = ['usuario', 'correo'];
}
