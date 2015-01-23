<!DOCTYPE html>
<html>
<head>
  <title>index usuario</title>
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
  </div>
  <div>
    <a href="calculadora/form">
      <button>Ir a Calculadora</button>
    </a>
  </div>
  <div>
    <p>
      <pre><?php var_dump($datos) ?></pre>
    </p>
  </div>
</body>
</html>
