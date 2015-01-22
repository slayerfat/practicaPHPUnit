<!DOCTYPE html>
<html>
<head>
  <title>calculadora</title>
</head>
<body>
  <div>
    <h1>
      Calculadora version: <?php echo $datos['infoSistema']['version'] ?>
    </h1>
    <h2>
      Nombre del sistema: <?php echo $datos['infoSistema']['name'] ?>
    </h2>
    <p>
      <?php echo $datos['infoSistema']['description'] ?>
    </p>
    <p>
      <code><?php var_dump($datos) ?></code>
    </p>
  </div>
</body>
</html>
