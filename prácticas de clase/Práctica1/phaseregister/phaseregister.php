<?php

  //La clase va a recibir por argumento una matriz de elementos de form con 4 atributos como máximo
  class PhaseRegister{
    function phase1($hidden){
      if($hidden == true){
        echo "<label for=\"nameField\">Nombre:</label>";
        echo "<input type = \"hidden\" id = \"nameField\" name=\"nameField\" value = \"p.e: Juan\" />";
        echo "<label for=\"nameField\">Apellidos:</label>";
        echo "<input type = \"hidden\" id = \"nameField\" name=\"lastname\" value = \"p.e: García\" />";
      }
      else{
        echo "<label for=\"nameField\">Nombre:</label>";
        echo "<input type = \"text\" id = \"nameField\" name=\"nameField\" value = \"p.e: Juan\" />";
        echo "<label for=\"nameField\">Apellidos:</label>";
        echo "<input type = \"text\" id = \"nameField\" name=\"lastname\" value = \"p.e: García\" />";
      }
    }

    function phase2($hidden){
      if($hidden == true){
        echo "<label for=\"nameField\">nº de teléfono:</label>";
        echo "<input type = \"hidden\" id = \"phone\" name=\"phone\" value = \"685252525\" />";
        echo "<label for=\"nameField\">Correo electrónico:</label>";
        echo "<input type = \"hidden\" id = \"mailField\" name=\"mailField\" value = \"Juan@nfgvioda.com\" />";
      }
      else{
        echo "<label for=\"nameField\">nº de teléfono:</label>";
        echo "<input type = \"tel\" id = \"phone\" name=\"phone\" value = \"685252525\" />";
        echo "<label for=\"nameField\">Correo electrónico:</label>";
        echo "<input type = \"text\" id = \"mailField\" name=\"mailField\" value = \"Juan@nfgvioda.com\" />";
      }
    }

    function phase3(){
      echo "<label for=\"nameField\">Nombre:</label>";
      echo "<input type = \"text\" id = \"nameField\" name=\"nameField\" value = \"p.e: Juan\" />";
      echo "<label for=\"nameField\">Apellidos:</label>";
      echo "<input type = \"text\" id = \"nameField\" name=\"lastname\" value = \"p.e: García\" />";
      echo "<label for=\"nameField\">nº de teléfono:</label>";
      echo "<input type = \"tel\" id = \"phone\" name=\"phone\" value = \"685252525\" />";
      echo "<label for=\"nameField\">Correo electrónico:</label>";
      echo "<input type = \"text\" id = \"mailField\" name=\"mailField\" value = \"Juan@nfgvioda.com\" />";
    }

  }
?>
