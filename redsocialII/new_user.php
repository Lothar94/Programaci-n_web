<?php
  require_once("./classes/datastore.php");
  $conection = new DataStore("localhost", "root", "lcpo67", "redsocialII");
  $conection->insert_user($_POST["name"], $_POST["last_name"], $_POST["email"], md5($_POST["pass"]), $_POST["borndate"], (int)$_POST["phone"], $_POST["meet"]);
  $init_img = "./img/user.png";
  $new_img = "./img/".explode("@", $_POST["email"])[0].".png";
  if(!file_exists($new_img))
    copy($init_img, $new_img);
  header("Location: ./portada.php");
?>
