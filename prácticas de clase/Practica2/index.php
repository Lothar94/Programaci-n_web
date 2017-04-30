<!DOCTYPE html>
<html lang="es">
  <head>
    <title>PHP test</title>
  </head>
  <body>
    <?php
      echo "<h1>Almuerza en la UGR</h1>";
      $entrante = 5;
      $primer_plato = 10;
      $segundo_plato = 10;
      $postre = 4.5;
      $subtotal = $entrante + $primer_plato + $segundo_plato + $postre;
      $IVA = ($subtotal)*0.21;
      $total = $subtotal + $IVA;

      echo "<p>Ensalada: ", $entrante ," €</p>";
      echo "<p>Sopa de marisco: ", $primer_plato ," €</p>";
      echo "<p>Huevos con papas: ", $segundo_plato ," €</p>";
      echo "<p>Helado: ", $postre ," €</p>";
      echo "<h3>Subtotal: ", $subtotal  ," €</h3>";

      echo "<h3>Total: ", $total  ," €</h3>";
      $numero = 10;
      echo $cad1 = "- Hay '$numero' personas en la cola. - ";
      echo $cad2 = '- Hay "$numero" personas esperando. -';
    ?>

    <h1>Probamos cosas con vectores</h1>

    <?php
      $vector = array("Esto", "es", "una", "cadena", "de", "caracteres");
$precios = array(
  "verdura"=>array("patata"=>1.00,"cebolla"=>.50),
  "fruta"=>array("manzana"=>2.50,"naranja"=>2.00));

    foreach ($precios as $key => $result) {
        echo "$key, <br>";
        foreach ($result as $key2 => $value2) {
          echo "$key2, $value2 €, ";
        }
        echo "<br>";
    }
    ?>

  </body>
</html>
