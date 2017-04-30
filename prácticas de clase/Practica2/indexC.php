<!DOCTYPE html>
<html lang="es">
  <head>
    <title>PHP calculadora</title>
  </head>
  <body>
    <?php
    require_once("./calculadora.php");
    require_once("./calculadoraAvanzada.php");
    require_once("./genericForm.php");


    $calculator = new calculadora(1.0,2.0);
    echo "<p>".$calculator->sumar()."</p>";
    echo "<p>".$calculator->restar()."</p>";
    echo "<p>".$calculator->multiplicar()."</p>";
    echo "<p>".$calculator->dividir()."</p>";
    $calculator = new calculadoraAvanzada(2.0);
    echo "<p>".$calculator->potencia(2)."</p>";
    echo "<p>".$calculator->raizCuadrada()."</p>";
    echo "<p>".$calculator->exponencial()."</p>";

    $former = new genericForm(array("text", "text", "email", "radio"), array("hola", "me", "me", "me"));
    $former->writeForm();
    ?>
  </body>
</html>
