<!DOCTYPE html>
   <html lang="en">
   <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="stylealu.css">
     <title>Registro Terminado</title>
   </head>
   <body>
   <center>
<div class="area" >

     
<ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul> 

    
        <h1><?php   $Nombre=$_POST['nombre']; echo "Se ha registrado al profesor ".$Nombre, " con exito."; ?></h1>
</h3>
      <h2>¿Desea registrar a otro profesor?</h2>

      <div class="btn">
      
      <a class="btnu" href="../HTML/regisalumn.html">Registrar alumno</a>
      
      <a class="btnd" href="../index.html">Volver al inicio</a>

<a class="btnt" href="../HTML/logout.php">Cerrar sesion</a>
      </center>
      </div>
  
     </center>
    </div>
    </div >
   </body>
   </html>

<?php
	  
     if(isset($_POST['regist'])){
         include("../PHPPROFESOR/abre.php");
         //1
         $Matricula=$_POST['matri'];
         //2
         $Nombre=$_POST['nombre'];
         //3
         $Apellido_P=$_POST['apep'];
         //4
         $Apellido_M=$_POST['apem'];
         //5
         $Curp=$_POST['curp'];
         //6
         $Materia=$_POST['materia'];
         //7
         $Correo=$_POST['cor'];
         //8
         $Edad=$_POST['Edad'];
         //9
         $fechdn=$_POST['Fecha'];
         //10
         $Numero=$_POST['tel'];
         //11
         $Genero=$_POST['gen'];
           $conectar->query("INSERT INTO `profesores`(`id_prof`, `Matricula`, `Nombre_p`, `Apellido_P`, `ApellidoM_P`, `Curp_p`, `Maimpar`, `Correo_Pro`, `Edad`, `Fecha de Nacimiento`, `Numero`, `Genero`) VALUES ('','$Matricula','$Nombre','$Apellido_P','$Apellido_M','$Curp','$Materia','$Correo','$Edad','$fechdn','$Numero','$Genero');");
                if ($conectar){

       } else {
           echo "hubo un error en el guardado del registro";
       }
       include("../PHPPROFESOR/cierra.php");
     }else {
       echo "Lo sentimos no se pudo registrar por envio incorrecto de datos";
     }
 
   ?>

  