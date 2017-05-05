<?php include "header.php";?>

<?php
require_once("./classes/datastore.php");
$conection = new DataStore("localhost", "root", "lcpo67", "redsocialII");
$user = $conection->get_user($_COOKIE["usermail"]);
$usermail = explode("@", $user->get_email())[0];
?>
  <main>
    <section class = "personal_data">
      <fieldset>
        <legend>Datos personales</legend>
        <form action = "update_user.php?id=<?php echo $user->get_id()?>" method = "post" name = "Inscription" enctype="multipart/form-data">
          <table>
            <tr>
              <td>Cambia la imagen:</td>
            </tr>
            <tr>
              <td><a href = "<?php echo $usermail.".php"; ?>"><img src = "<?php echo "./img/".$usermail.".png"; ?>" height = 64 width = 64 alt = "Imagen de <?php echo $user->get_name(); ?>"></a></td>
              <td><input type = "file" name = "fileToUpload" id = "fileToUpload"/></td>
            </tr>
          </table>
          <label for = "nameField">Nombre:</label>
          <input type = "text" id = "nameField" name = "name" value = "<?php echo $user->get_name(); ?>" />
          <br>
          <br>
          <label for = "secondNameField">Apellidos:</label>
          <input type = "text" id = "secondNameField" name = "last_name" value = "<?php echo $user->get_last_name(); ?>" />
          <br>
          <br>
          <label for = "mailField">Correo electrónico:</label>
          <input type = "email" id = "mailField" name = "email" value = "<?php echo $user->get_email(); ?>" />
          <br>
          <br>
          <label for = "nameField">Contraseña antigua:</label>
          <input type = "text" id = "pass" name = "pass" value = "************" />
          <br>
          <br>
          <label for = "nameField">Nueva contraseña:</label>
          <input type = "text" id = "newPass" name = "Inscription" value = "" />
          <br>
          <br>
          <label for = "nameField">Confirmar nueva contraseña:</label>
          <input type = "text" id = "confirmPass" name = "Inscription" value = "" />
          <br>
          <br>
          <label for = "bornDateField">Fecha de nacimiento:</label>
          <input type = "date" id = "bornDateField" name = "borndate" value = "<?php echo $user->get_borndate(); ?>"/>
          <br>
          <br>
          <label for = "phoneField">Teléfono:</label>
          <input type = "tel" id = "phoneField" name = "phone" value = "<?php echo $user->get_phone(); ?>" />
          <br>
          <br>
          <input type = "submit" class = "submitButton" name = "Inscription" value = "Modificar Información" />
          <input type = "reset" class = "resetButton" name = "Inscription" value = "Reiniciar formulario" />
        </form>
      </fieldset>
    </section>
  </main>
<?php include "footer.php";?>
