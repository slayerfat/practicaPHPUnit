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
  </div>
  <div>
    <a href="calculadora/form"><button>go</button></a>
  </div>
  <div>
    <pre>
      <?php if ($_POST) var_dump($_POST) ?>
    </pre>
  </div>
  <div>
    <p>
      <pre><?php var_dump($datos) ?></pre>
    </p>
  </div>
</body>
</html>
