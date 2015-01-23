<?php 
namespace App\php\controladores;
use App\php\core\Controlador;
use App\php\modelos\Calculadora as ModeloCalc;
use App\php\controladores\Calculadora as ControladorCalc;
use App\php\modelos\Resultado; 
use App\php\modelos\Error; 

class CalculadoraForm extends Controlador{

  public $x;
  public $y;
  public $resultado;

  function __construct($datos = null, $tipo = '') {

    if ($datos):
      $this->x = $datos['x'];
      $this->y = $datos['y'];
      $modeloCalc = new ModeloCalc;
      if ( $modeloCalc->validar($this->x, $this->y) ):
        $this->controladorCalc = new ControladorCalc;
        $this->objRes = new Resultado;
        switch ($tipo):

        case 'sumar':
          $this->generarSuma();
          break;
        case 'restar':
          $this->generarResta();
          break;
        case 'multiplicar':
          $this->generarMultiplicacion();
          break;
        case 'dividir':
          $this->generarDivision();
          break;
        endswitch;
      endif;
      $this->resultado = $this->objRes->getResultado();
    else:
      //error::insert error
      $error = new Error;
    endif;
  }
  protected function generarSuma(){
    $this->objRes->putResultado( $this->controladorCalc->sumar($this->x, $this->y) );
    // guardar resultado---
  }
  protected function generarResta(){
    $this->objRes->putResultado( $this->controladorCalc->restar($this->x, $this->y) );
    // guardar resultado---
  }
  protected function generarMultiplicacion(){
    $this->objRes->putResultado( $this->controladorCalc->multiplicar($this->x, $this->y) );
    // guardar resultado---
  }
  protected function generarDivision(){
    $this->objRes->putResultado( $this->controladorCalc->dividir($this->x, $this->y) );
    // guardar resultado---
  }
}
