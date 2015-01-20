<?php 

class Controlador{

  protected $modelo = 'Usuario';
  
  protected function modelo($modelo){

    if (file_exists('../php/modelos/' . $modelo . '.php')):
      $this->modelo = $modelo;
    endif;
    require_once '../php/modelos/' . $this->modelo . '.php';

    return new $modelo;
  }
}
