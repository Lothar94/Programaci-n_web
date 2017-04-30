<?php
  require_once("./classes/datastore.php");
  $conection = new DataStore("localhost", "root", "lcpo67", "redsocialII");
  $conection->insert_post($_POST["title"], 0, $_POST["content"], date("Y/m/d"));
  header("Location: ./active_user.php");
?>
