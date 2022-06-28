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

    
        <h1><?php   $Nombre=$_POST['nombre']; echo "Se ha registrado al alumno ".$Nombre, " con exito."; ?></h1>
</h3>
      <h2>¿Desea Inscribir a otro alumno?</h2>

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
         include("../PHPALUMNO/abre.php");
         $Nombre=$_POST['nombre'];
         $Apellido_P=$_POST['apep'];
         $Apellido_M=$_POST['apem'];
         $Correo=$_POST['cor'];
         $Nocontrol=$_POST['noc'];
         $tel=$_POST['tel'];
         $Curp=$_POST['curp'];
         $Genero=$_POST['gen'];
           $conectar->query("INSERT INTO `alumno`(`Id_alumno`, `Nombre_a`, `ApellidoM_a`, `ApellidoP_a`, `Correo_a`, `NumControl_a`, `Tel_a`, `Curp_a`, `Genero_a`) VALUES('','$Nombre','$Apellido_P','$Apellido_M','$Correo','$Nocontrol','$tel','$Curp','$Genero');");
                if ($conectar){

       } else {
           echo "hubo un error en el guardado del registro";
       }
       include("../PHPALUMNO/cierra.php");
     }else {
       echo "Lo sentimos no se pudo registrar por envio incorrecto de datos";
     }
 
   ?>

  