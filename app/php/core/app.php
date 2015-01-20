<?php 

/**
* 
*/
class App{

  protected $controlador = 'home';
  protected $metodo      = 'index';
  protected $parametros  = [];
  
  function __construct(){
    // url solicitada
    $url = $this->parseUrl();

    // url[0] es el controlador
    if (file_exists('../php/controladores/'. $url[0] .'.php')):
      $this->controlador = $url[0];
      unset($url[0]);
    endif;

    require_once '../php/controladores/'. $this->controlador .'.php';

    // se instancia al controlador como un nuevo objeto
    $this->controlador = new $this->controlador;

    // se chequea si existe el metodo solicitado
    if ( isset($url[1]) ):
      if ( method_exists($this->controlador, $url[1]) ):
        $this->metodo = $url[1];
        unset($url[1]);
      endif;
    endif;

    // se crea las variables
    $this->parametros = $url ? array_values($url) : [];

    // se usa el controlador y el metodo, junto a los parametros
    call_user_func_array([$this->controlador, $this->metodo], $this->parametros);
  }

  protected function parseUrl(){
    if (isset($_GET['url'])):
      // trim la variable desde la derecha y si
      // existe / lo elimina.
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
    else:
      echo "NO URL";
    endif;
  }

}
