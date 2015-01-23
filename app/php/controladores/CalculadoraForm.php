<?php 
namespace App\php\controladores;
use App\php\core\Controlador;
use App\php\modelos\Calculadora as ModeloCalc;
use App\php\controladores\Calculadora as ControladorCalc;
use App\php\modelos\Resultado; 
use App\php\modelos\Error; 

class CalculadoraForm extends Controlador{

  function __construct($datos = null, $tipo = '') {

    if ($datos):
      $modeloCalc = new ModeloCalc;
      if ( $modeloCalc->validar($datos['x'], $datos['y']) ):
        $controladorCalc = new ControladorCalc;
        $resultado = new Resultado;
        switch ($tipo):

        case 'sumar':
          $resultado->resultado = $controladorCalc->sumar($datos['x'], $datos['y']);
          // guardar resultado---
          $this->resultado = $resultado->resultado;
          break;

        endswitch;
      endif;
    else:
      //error::insert error
      $error = new Error;
    endif;
    
  }
}
