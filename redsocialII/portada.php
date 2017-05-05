<?php include "header.php";?>
  <main>
    <section class = "articles">
      <?php
      require_once("./classes/datastore.php");
      $conection = new DataStore("localhost", "root", "lcpo67", "redsocialII");
      $posts = $conection->get_posts();
      $num_paginas = sizeof($posts)/9+1;
      $last_page = false;
      if(empty($_GET["pagination"]) || $_GET["pagination"] == 0){
        for ($i=0; $i < 9; $i++) {
          echo "<article>
            <table>
              <tr>
                <td><a href = \"Pepe.html\">Pepe</a></td>
              </tr>
              <tr>
                <td><a href = \"Pepe.html\"><img src = \"./img/Pepe.png\" alt = \"Imagen de Pepe\"></a></td>
                <td>".$posts[$i]->get_time()." segundos</td>
              </tr>
            </table>
            <h3><a href = \"./pepe/pepe_20170305_1533.html\">".$posts[$i]->get_title()."</a></h3>
            <p>".$posts[$i]->get_150_content()."
            </p>
          </article>";
        }
      } else {
        $last_post = $_GET["pagination"] * 9;
        $num_elements = ($_GET["pagination"] + 1) * 9;
        if($num_elements > sizeof($posts)){
          $num_elements = sizeof($posts);
          $last_page = true;
        }
        for ($i=$last_post; $i < $num_elements; $i++) {
          echo "<article>
            <table>
              <tr>
                <td><a href = \"Pepe.html\">Pepe</a></td>
              </tr>
              <tr>
                <td><a href = \"Pepe.html\"><img src = \"./img/Pepe.png\" alt = \"Imagen de Pepe\"></a></td>
                <td>".$posts[$i]->get_time()." segundos</td>
              </tr>
            </table>
            <h3><a href = \"./pepe/pepe_20170305_1533.html\">".$posts[$i]->get_title()."</a></h3>
            <p>".$posts[$i]->get_150_content()."
            </p>
          </article>";
        }
      }

      ?>
    </section>
    <section class = "arrows">
      <?php
      if(empty($_GET["pagination"]) || $_GET["pagination"] == 0){
        if(sizeof($posts) < 9){
          echo "<ul>
                  <li> </li>
                  <li> </li>
                </ul>";
        } else {
          echo "<ul>
                  <li> </li>
                  <li><a href = \"portada.php?pagination=1\"><img src = \"./img/rarrow.png\" width = \"40\" height = \"40\" alt = \"Flecha a la derecha\"></a></li>
                </ul>";
        }
      } else if($last_page == true){
        $previous_pag = $_GET["pagination"] - 1;
        echo "<ul>
                <li><a href = \"portada.php?pagination=".$previous_pag."\"><img src = \"./img/larrow.png\" width = \"40\" height = \"40\" alt = \"Flecha a la derecha\"></a></li>
                <li> </li>
              </ul>";
      } else {
        $next_pag = $_GET["pagination"] + 1;
        $previous_pag = $_GET["pagination"] - 1;
        echo "<ul>
                <li><a href = \"portada.php?pagination=".$previous_pag."\"><img src = \"./img/larrow.png\" width = \"40\" height = \"40\" alt = \"Flecha a la derecha\"></a></li>
                <li><a href = \"portada.php?pagination=".$next_pag." \"><img src = \"./img/rarrow.png\" width = \"40\" height = \"40\" alt = \"Flecha a la derecha\"></a></li>
              </ul>";
      }

      ?>

    </section>
  </main>
<?php include "footer.php";?>
