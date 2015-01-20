<?php 

/**
* 
*/
class App{

  protected $controlador = 'home';
  protected $metodo      = 'index';
  protected $parametros  = [];
  
  function __construct(){
    print_r($this->parseUrl());
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
