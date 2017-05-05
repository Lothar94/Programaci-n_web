<?php
  require_once("./classes/datastore.php");
  $conection = new DataStore("localhost", "root", "lcpo67", "redsocialII");
  $conection->update_user($_GET["id"], $_POST["name"], $_POST["last_name"], $_POST["email"], md5($_POST["pass"]), $_POST["borndate"], (int)$_POST["phone"]);
  $init_img = "./img/user.png";
  $new_img = "./img/".explode("@", $_POST["email"])[0].".png";
  echo "hola";
  echo $_FILES['fileToUpload']["name"];
  if(isset($_FILES['fileToUpload'])){
    $errors= array();
    $file_name = $_FILES['fileToUpload']['name'];
    $file_size =$_FILES['fileToUpload']['size'];
    $file_tmp =$_FILES['fileToUpload']['tmp_name'];
    $file_type=$_FILES['fileToUpload']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['fileToUpload']['name'])));

    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
      $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }

    if($file_size > 2097152){
      $errors[]='File size must be excately 2 MB';
    }

    if(empty($errors)==true){
      copy($file_tmp,$new_img);
      echo "Success";
    }else{
      print_r($errors);
    }
  }

  //header("Location: ./informacion.php");
?>
