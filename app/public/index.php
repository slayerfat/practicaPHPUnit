<?php 
/**
 * importante!
 * para esta practica es necesario activar
 * rewrite en apache.
 * tambien es sabio activar LogLevel warn rewrite:trace8 de 0 a 8
 * tambien en <Directory "/opt/lampp/htdocs">
 * tener en cuenta Options Indexes FollowSymLinks ExecCGI Includes MultiViews
 * y por ultimo AllowOverride All
 */

require_once '../php/init.php';
use App\Conexion;
use App\php\core\App;
// requerido para eloquent:
$conexion = new Conexion;
// la "aplicacion"
$app      = new App;
