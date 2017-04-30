<?php
  require_once("./classes/datastore.php");
  $conection = new DataStore("localhost", "root", "lcpo67", "redsocialII");
  $conection->insert_user($_POST["name"], $_POST["last_name"], $_POST["email"], $_POST["pass"], $_POST["borndate"], (int)$_POST["phone"], $_POST["meet"]);
  header("Location: ./portada.html");
?>
