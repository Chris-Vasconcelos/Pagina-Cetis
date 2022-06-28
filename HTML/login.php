<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicia Sesion</title>

    <link rel="stylesheet" href="login.css">

</head>
<body>
<center>
<div class="menu">
        <ul>
            <a href="../index.html">Inicio</a>
            <a href="datos.html">Volver</a>
        </ul>
    </div>
    <div class="Formulario">
 

  <fieldset class="sign-in-form">
      <h3>Iniciar Sesion</h3>

      <form action="" method="POST">
      <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
      <input type="text" name="username" placeholder="Nombre de usuario" required>

        <input type="password" placeholder="Password" name="password" required>

        <input type="submit" value="Iniciar Sesión">

        <div class="container">

 
      </form>

  </fieldset>
</div>
        </center>
</body>
</html>