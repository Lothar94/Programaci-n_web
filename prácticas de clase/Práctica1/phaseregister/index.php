<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Web de inscripción a un congreso.">
    <meta name="keywords" content="HTML">
    <meta name="author" content="Lothar Soto Palma">
    <title>phase-register</title>
  </head>
  <body>
    <section>
      <h3>Formulario de inscripción</h3>
      <fieldset>
        <legend>Datos personales</legend>
        <form action="procesar.php" method="post" name="Inscription">
            <?php
              require_once("./phaseregister.php");
              $phase = 1;
              register = PhaseRegister();
              if($phase == 1){
                register->phase1(true);
                register->phase2(false);
                $phase+=1;
                header("location: ./index.php");
              } elseif ($phase == 2) {
                register->phase1(false);
                register->phase2(true);
              } else {
                register->phase3();
              }
             ?>
        </form>
      </fieldset>
    </section>
  </body>
</html>
