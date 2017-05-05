<?php
  require_once("./classes/datastore.php");
  $conection = new DataStore("localhost", "root", "lcpo67", "redsocialII");
  $user = $conection->get_user($_POST["email"]);
  if($user == null){
    header("Location: ./index.php?error=1");
  } else{
    echo md5($_POST["password"]);
    echo $user->get_password();
    if(strcmp(md5($_POST["password"]), $user->get_password()) == 0){
      if(isset($_POST["rememberSession"])){
        setcookie("usermail", $_POST["email"], time()+60*60*24*365);
        setcookie("password", md5($_POST["password"]), time()+60*60*24*365);
      } else {
        setcookie("usermail", $_POST["email"], false);
        setcookie("password", md5($_POST["password"]), false);
      }
      $conection->active_user($_POST["email"]);
      header("Location: ./portada.php");
    } else {
      echo "error 2";
      header("Location: ./index.php?error=2");
    }

  }
?>
