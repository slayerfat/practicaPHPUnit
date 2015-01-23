<?php 
namespace App;
use Illuminate\Database\Capsule\Manager as Capsule;
/**
 * requerido para iniciar Eloquent
 */
class Conexion {

  public function __construct(){
    $ini      = 'conexion.ini';
    $parse    = parse_ini_file($ini , true);
    $servidor = $parse['servidor'];
    $usuario  = $parse['usuario'];
    $clave    = $parse['clave'];
    $db       = $parse['db'];

    $capsule  = new Capsule();

    $capsule->addConnection([
      'driver'    => 'mysql',
      'host'      => $servidor,
      'username'  => $usuario,
      'password'  => $clave,
      'database'  => $db,
      'charset'   => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix'    => '',
    ]);

    $capsule->bootEloquent();
  }

}
