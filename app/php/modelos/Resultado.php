<?php 
namespace App\php\modelos;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Resultado extends Eloquent{

  protected $id;
  protected $calculadoraID;
  protected $resultado;
  protected $status = 1;
  protected $usrReg;
  protected $usrMod;

  protected $fillable = ['resultado', 'status', 'calculadoraID'];

  public function getResultado(){
    return $this->resultado;
  }
  public function putResultado($datos){
    $this->resultado = $datos;
  }

  public function insertar(){

    try {

      $this->create([
        'calculadoraID' => $this->calculadoraID,
        'resultado'     => $this->resultado,
        'status'        => $this->status
      ]);
      
    } catch (Exception $e) {
      return $e;
    }
  }

}
