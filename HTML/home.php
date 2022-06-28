<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="main.css">
    
    <style>
        .elim{
            background-color: red;
    width: 100px;
    font-size: 15px;
    text-align: center;
    border-radius: 5px;
    margin: 2%;
}

.dos{
    background-color: red;
    width: 100px;
    font-size: 15px;
    text-align: center;
    border-radius: 5px;
    margin: 2%;
}
    </style>
</head>
<body>
      
<div id="menu">
    <div class="uno"><a class="btnu" href="../index.html">Inicio</a></div>
    <div class="dos"><a class="btnd" href="logout.php">Cerrar sesión</a></li></div>
    <div class="tres"><h1 class="btnt">Hola <?php echo $user->getNombre();  ?></h1></div>
        
    </div>
<hr>
<center>
<div class="btnaalum">
    <a class="regisalumno" href="../HTML/regisalumn.html">Registrar un alumno</a>
    </div>
    <a class="elim" href="../PHPALUMNO/eliminar.html">Eliminar alumno</a>
<br>
    <div class="regisprof">   <a class="regisprofs" href="../HTML/FORMPROF.html">Registrar Profesor</a></div>

    <div class="Conalumn">
        <a href="MOSTALUMN.php">Consultar alumnos registrados</a>
    </div>

    <div class="conprof">
        <a href="CONSPROF.php">Consultar Profesores registrados</a>
        <br>
        <a class="dos" href="../PHPPROFESOR\elimpro.html">Eliminar Profesor</a>
    </div>

    


    </center>
</body>
</html>