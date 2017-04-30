<!DOCTYPE html>
<html lang = "es">
  <head>
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name = "description" content = "Web de inscripción a un congreso.">
    <meta name = "keywords" content = "HTML">
    <meta name = "author" content = "Lothar Soto Palma">
    <link type = "text/css" rel = "stylesheet" href = "./styles/style.css">
    <title>Inicio</title>
  </head>
  <body class = "container">
    <header>
      <section class = "header_section">
        <a href = "index.html"><img src = "./img/logo.png" width = "250" height = "100" alt = "Logo"></a>
        <h2><a href = "index.html">Social Network</a></h2>
        <form action = "portada.html" method = "post" name = "Inscription">
          <label for = "nameField">Usuario:</label>
          <br>
          <input type = "text" id = "username" name = "Inscription" value = "p.e: Juan" />
          <br>
          <br>
          <label for = "secondNameField">Contraseña:</label>
          <br>
          <input type = "text" id = "password" name = "Inscription" value = "p.e. García" />
          <br>
          <br>
          <input type = "submit" class = "submitButton" name = "Inscription" value = "Enviar formulario" />
        </form>
      </section>
    </header>
    <main class = "index_main">
      <section>
        <img class = "roboLogo" src = "./img/robotLogo.png" width = "390" height = "270" alt = "Imagen de bienvenida">
      </section>
      <section>
        <fieldset>
          <legend>Datos personales</legend>
          <form action = "new_user.php" method = "post" name = "Inscription">
            <label for = "nameField">Nombre:</label>
            <input type = "text" id = "nameField" name = "name" value = "p.e: Juan" />
            <br>
            <br>
            <label for = "last_name">Apellidos:</label>
            <input type = "text" id = "last_name" name = "last_name" value = "p.e. García" />
            <br>
            <br>
            <label for = "mailField">Correo electrónico:</label>
            <input type = "email" id = "mailField" name = "email" value = "p.e. xxx@gmail.com" />
            <br>
            <br>
            <label for = "pass">Contraseña:</label>
            <input type = "text" id = "pass" name = "pass" value = "p.e: Juan" />
            <br>
            <br>
            <label for = "newPass">Confirmar contraseña:</label>
            <input type = "text" id = "newPass" name = "newpass" value = "p.e: Juan" />
            <br>
            <br>
            <label for = "bornDateField">Fecha de nacimiento:</label>
            <input type = "date" id = "bornDateField" name = "borndate"/>
            <br>
            <br>
            <label for = "phoneField">Teléfono:</label>
            <input type = "tel" id = "phoneField" name = "phone" value = "956939205" />
            <br>
            <br>
            <label for = "meetingBox">¿Cómo nos conociste?:</label>
            <input type = "text" id = "meetingBox" name = "meet" list = "meetList">
            <datalist id = "meetList">
              <option value = "Por correo">
              <option value = "Por otra persona">
              <option value = "Por otra web">
            </datalist>
            <br>
            <br>
            <input type = "submit" class = "submitButton" name = "Inscription" value = "Enviar formulario" />
            <input type = "reset" class = "resetButton" name = "Inscription" value = "Reiniciar formulario" />
          </form>
        </fieldset>
      </section>
    </main>
    <footer>
      <ul>
        <li><a href = "contacto.html">Contacto</a></li>
        <li>-</li>
        <li><a href="./doc/como_se_hizo.pdf">Cómo se hizo</a></li>
      </ul>
    </footer>
  </body>
</html>
