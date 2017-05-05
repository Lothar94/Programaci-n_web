<?php
require_once("./classes/datastore.php");
$conection = new DataStore("localhost", "root", "lcpo67", "redsocialII");
$conection->unactive_user($_COOKIE["usermail"]);
setcookie ("usermail", "", time() - 3600);
setcookie ("password", "", time() - 3600);
header("Location: ./index.php");
?>
