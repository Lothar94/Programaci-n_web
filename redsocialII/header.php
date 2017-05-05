<!DOCTYPE html>
<html lang = "es">
  <head>
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name = "description" content = "Red social.">
    <meta name = "keywords" content = "HTML">
    <meta name = "author" content = "Lothar Soto Palma">
    <link type = "text/css" rel = "stylesheet" href = "./styles/grid.css">
    <link type = "text/css" rel = "stylesheet" href = "./styles/style.css">
    <title>Portada</title>
  </head>
  <body class = "container">
    <header>
      <section class = "header_section">
        <a href = "portada.html"><img src = "./img/logo.png" width = "160" height = "70" alt = "Logo"></a>
        <h2><a href = "portada.html">Social Network</a></h2>

        <?php
        require_once("./classes/datastore.php");
        $conection = new DataStore("localhost", "root", "lcpo67", "redsocialII");
        $user = $conection->get_user($_COOKIE["usermail"]);
        $usermail = explode("@", $user->get_email())[0];
        echo "<table>
                <tr>
                  <td><a href = \"".$usermail.".php\">".$user->get_name()."</a></td>
                </tr>
                <tr>
                  <td><a href = \"".$usermail.".php\"><img src = \"./img/".$usermail.".png\" alt = \"Imagen de ".$user->get_name()."\"></a></td>
                </tr>
                <tr>
                  <td><a href = \"disconnect.php\">bye, bye...</a></td>
                </tr>
              </table>";
        ?>

      </section>
      <nav class = "navigation_bar">
        <ul>
          <li><a href = <?php echo "\"".$usermail.".php\"" ?>>Biografia</a></li>
          <li><a href = "fotosPepe.html">Fotos</a></li>
          <li><a href = "informacion.php">Información</a></li>
        </ul>
      </nav>
    </header>
    <section class = "users">
      <?php
        $users = $conection->get_users();
        for ($i=0; $i < sizeof($users); $i++) {
          $usermail = explode("@", $users[$i]->get_email())[0];
          echo "<table>
                  <tr>
                    <td><a href = \"".$usermail.".php\">".$users[$i]->get_name()."</a></td>
                  </tr>
                  <tr>
                    <td><a href = \"".$usermail.".php\"><img src = \"./img/".$usermail.".png\" alt = \"Imagen de ".$users[$i]->get_name()."\"></a></td>
                  </tr>
                </table>";
        }
      ?>
    </section>
    <h5 class = "Ausers_button" >Usuarios activos</h5>
    <aside>
      <h5>Usuarios activos:</h5>
      <table>
        <tr>
          <td><a href = "Pepe.html">Pepe</a></td>
        </tr>
        <tr>
          <td><a href = "Pepe.html"><img src = "./img/Pepe.png" alt = "Imagen de Pepe"></a></td>
        </tr>
      </table>
      <table>
        <tr>
          <td><a href = "Nico.html">Nico</a></td>
        </tr>
        <tr>
          <td><a href = "Nico.html"><img src = "./img/Nico.png" alt = "Imagen de Nico"></a></td>
        </tr>
      </table>
      <table>
        <tr>
          <td><a href = "Andrea.html">Andrea</a></td>
        </tr>
        <tr>
          <td><a href = "Andrea.html"><img src = "./img/Andrea.png" alt = "Imagen de Andrea"></a></td>
        </tr>
      </table>
      <table>
        <tr>
          <td><a href = "Pepe.html">Pepe</a></td>
        </tr>
        <tr>
          <td><a href = "Pepe.html"><img src = "./img/Pepe.png" alt = "Imagen de Pepe"></a></td>
        </tr>
      </table>
      <table>
        <tr>
          <td><a href = "Nico.html">Nico</a></td>
        </tr>
        <tr>
          <td><a href = "Nico.html"><img src = "./img/Nico.png" alt = "Imagen de Nico"></a></td>
        </tr>
      </table>
      <table>
        <tr>
          <td><a href = "Andrea.html">Andrea</a></td>
        </tr>
        <tr>
          <td><a href = "Andrea.html"><img src = "./img/Andrea.png" alt = "Imagen de Andrea"></a></td>
        </tr>
      </table>
      <table>
        <tr>
          <td><a href = "Pepe.html">Pepe</a></td>
        </tr>
        <tr>
          <td><a href = "Pepe.html"><img src = "./img/Pepe.png" alt = "Imagen de Pepe"></a></td>
        </tr>
      </table>
      <table>
        <tr>
          <td><a href = "Nico.html">Nico</a></td>
        </tr>
        <tr>
          <td><a href = "Nico.html"><img src = "./img/Nico.png" alt = "Imagen de Nico"></a></td>
        </tr>
      </table>
      <table>
        <tr>
          <td><a href = "Andrea.html">Andrea</a></td>
        </tr>
        <tr>
          <td><a href = "Andrea.html"><img src = "./img/Andrea.png" alt = "Imagen de Andrea"></a></td>
        </tr>
      </table>
      <table>
        <tr>
          <td><a href = "Pepe.html">Pepe</a></td>
        </tr>
        <tr>
          <td><a href = "Pepe.html"><img src = "./img/Pepe.png" alt = "Imagen de Pepe"></a></td>
        </tr>
      </table>
      <table>
        <tr>
          <td><a href = "Nico.html">Nico</a></td>
        </tr>
        <tr>
          <td><a href = "Nico.html"><img src = "./img/Nico.png" alt = "Imagen de Nico"></a></td>
        </tr>
      </table>
      <table>
        <tr>
          <td><a href = "Andrea.html">Andrea</a></td>
        </tr>
        <tr>
          <td><a href = "Andrea.html"><img src = "./img/Andrea.png" alt = "Imagen de Andrea"></a></td>
        </tr>
      </table>
    </aside>
