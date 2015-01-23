<?php 
namespace App\php\controladores;
use App\php\core\Controlador;
use App\php\modelos\Calculadora as ModeloCalc;
use App\php\controladores\Calculadora as ControladorCalc;
use App\php\modelos\Error; 

class CalculadoraForm extends Controlador{

  public $x;
  public $y;
  public $resultado;


  /**
   * chequea variables, actualiza la vista de calc/form 
   * e introduce modelos a la base de datos
   * @param array  $datos datos desde el formulario
   * @param string $tipo  el tipo de operacion a realizar
   */
  function __construct($datos = null, $tipo = '') {

    if ($datos):

      $this->x = $datos['x'];
      $this->y = $datos['y'];

      $this->modeloCalc = new ModeloCalc;

      if ( $this->modeloCalc->validar($this->x, $this->y) ):

        $this->controladorCalc = new ControladorCalc;

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
        default:
          $this->resultado = null;
          break;
        endswitch;

      else:
        $this->resultado = null;
      endif;
    else:
      //error::insert error
    endif;
  }

  protected function generarSuma(){
    $this->resultado = $this->controladorCalc->sumar($this->x, $this->y);
    $this->modeloCalc->insertar($this->x, $this->y, '+', $this->resultado);
  }

  protected function generarResta(){
    $this->resultado = $this->controladorCalc->restar($this->x, $this->y);
    $this->modeloCalc->insertar($this->x, $this->y, '-', $this->resultado);
  }

  protected function generarMultiplicacion(){
    $this->resultado = $this->controladorCalc->multiplicar($this->x, $this->y);
    $this->modeloCalc->insertar($this->x, $this->y, '*', $this->resultado);
  }
  
  protected function generarDivision(){
    $this->resultado = $this->controladorCalc->dividir($this->x, $this->y);
    $this->modeloCalc->insertar($this->x, $this->y, '/', $this->resultado);
  }
}
