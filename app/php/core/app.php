<?php 
namespace App\php\core;
/**
* 
*/
class App{

  protected $controlador = 'Home';
  protected $metodo      = 'Index';
  protected $parametros  = [];
  
  function __construct(){
    // url solicitada
    $url = $this->parseUrl();

    // url[0] es el controlador
    if (file_exists('../php/controladores/'. strtolower($url[0]) .'.php')):
      $this->controlador = ucfirst($url[0]);
      unset($url[0]);
    endif;

    // se instancia al controlador como un nuevo objeto
    $clase = 'App\\php\\controladores\\'.ucfirst($this->controlador);
    $this->controlador = new $clase;

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
    endif;
  }

}
