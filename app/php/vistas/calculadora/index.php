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
    <form>
      <div>
        <label>
          Operando 1
          <input type="number" placeholder="introduzca numero">
        </label>
        <label>
          Operando 2
          <input type="number" placeholder="introduzca numero">
        </label>
      </div>
      <div>
        <label>Operacion</label>
        <input type="radio" name="operacion" value="sumar" id="sumar"><label for="sumar">Sumar</label>
        <input type="radio" name="operacion" value="restar" id="restar"><label for="restar">Restar</label>
        <input type="radio" name="operacion" value="multiplicar" id="multiplicar"><label for="multiplicar">Multiplicar</label>
        <input type="radio" name="operacion" value="dividir" id="dividir"><label for="dividir">Dividir</label>
      </div>
      <div>
        <input type="submit" value="Procesar">
      </div>
    </form>
  </div>
  <div>
    <p>
      <pre><?php var_dump($datos) ?></pre>
    </p>
  </div>
</body>
</html>
