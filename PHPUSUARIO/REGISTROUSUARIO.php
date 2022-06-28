

 <!DOCTYPE html>
   <html lang="en">
   <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../CSS/estregisT.css">
     <title>Document</title>
   </head>
   <body>
     <br>
     <div class="btn">
     <a href="../index.html">Inicio</a>

     <p><?php echo"Te haz registrado con exito ".$Nombre</div></p>
     </div>
   </body>
   </html>
<?php
	  
    /* Comprobamos si el formulario fue enviado correctamente. */
     if(isset($_POST['regist'])){
         include("../PHPUSUARIo/abrircon.php");
       /* Assigning the values of the form to variables. */
         $Nombre=$_POST['nombre'];
         $Apellido_m=$_POST['apellip'];
         $Apellido_P=$_POST['apellim'];
         $Curp_u=$_POST['curp'];
         $Correo_u=$_POST['correo'];
         $Telefono_u=$_POST['tel'];
        
           /*Insertar los valores en la base de datos.. */
           $conectar->query("INSERT INTO `usuario`(`Id_u`, `Nombre_u`, `ApellidoM_u`, `ApellidoP_u`, `Curp_u`, `Correo_u`, `Telefono_u`) VALUES ('','$Nombre',' $Apellido_m','$Apellido_P','$Curp_u','$Correo_u','$Telefono_u');");
                if ($conectar) {
            echo "<br>Te has registrado con exito ".$Nombre;
         
       /* Checking if the connection was successful. */
       } else {
           echo "hubo un error en el guardado del registro";
       }
    */
       include("../PHPUSUARIO/cierra.php");
     }else {
       echo "Lo sentimos no se pudo registrar por envio incorrecto de datos";
     }
 
   ?>

  