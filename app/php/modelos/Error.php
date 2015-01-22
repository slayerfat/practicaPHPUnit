<?php
namespace App\php\modelos;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Error extends Eloquent{

  protected $id;
  protected $descripcion;
  protected $status;
  protected $usrReg;
  protected $usrMod;
}
