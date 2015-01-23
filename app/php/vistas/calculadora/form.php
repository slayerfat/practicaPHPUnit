<?php 
use App\php\controladores\CalculadoraForm;
if ($_POST):
  print_r($_POST);
  $formCalc = new CalculadoraForm($_POST, $_POST['operacion']);
endif;
?>

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
    <form action="form?" method="POST">
      <div>
        <label>
          Operando 1
          <input 
            type        ="number" 
            name        ="x"
            placeholder ="introduzca numero"
            value       ="<?php echo isset($_POST['x']) ? $_POST['x'] : null ?>"
          >
        </label>
        <label>
          Operando 2
          <input 
            type        ="number"
            name        ="y" 
            placeholder ="introduzca numero"
            value       ="<?php echo isset($_POST['y']) ? $_POST['y'] : null ?>"
          >
        </label>
      </div>
      <div>
        <label>Operacion</label>
        <input type="radio" name="operacion" value="sumar" id="sumar" checked>
          <label for="sumar">Sumar</label>
        <input type="radio" name="operacion" value="restar" id="restar">
          <label for="restar">Restar</label>
        <input type="radio" name="operacion" value="multiplicar" id="multiplicar">
          <label for="multiplicar">Multiplicar</label>
        <input type="radio" name="operacion" value="dividir" id="dividir">
          <label for="dividir">Dividir</label>
      </div>
      <div>
        <input 
          type        ="text" 
          name        ="resultado"
          placeholder ="producto esperado"
          value       ="<?php echo isset($formCalc->resultado) ? $formCalc->resultado : null ?>"
        >
      </div>
      <div>
        <input type="submit" value="Procesar">
      </div>
    </form>
  </div>
  <hr>
  <div>
    <pre>
      <?php var_dump($formCalc) ?>
    </pre>
  </div>
</body>
</html>
