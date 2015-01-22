<?php 
namespace App\php\controladores;
use App\php\core\Controlador;
use App\php\modelos\Usuario;
/**
* 
*/
class Home extends Controlador{
  
  public function index($nombre = ''){
    $usuario = $this->modelo('Usuario');
    $usuario->nombre = $nombre;

    $this->vista('home/index', ['nombre' => $usuario->nombre]);
  }
  
  public function create($usuario = '', $correo = ''){
    Usuario::create([
      'usuario' => $usuario,
      'correo' => $correo
    ]);
  }

  public function delete(){

    Usuario::where('usuario', '=', 'alex')->delete();

  }
}
