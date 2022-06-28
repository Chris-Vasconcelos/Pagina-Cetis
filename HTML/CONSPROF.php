<?php 
/*VASCONCELOS SANCHEZ CHRISTOFER RICARDO
AGUSTIN ADLER REYES ANCHEYTA
KAREN GUADALUPE MALVAEZ SANDOVAL
MIA TAMARA MONTIEL RUIZ
RIGOBERTO GUERRERO MARCELO 
CARLOS URIEL FABELA CORRAL
4PAM 
*/
/* Connecting to the database. */
	$conexion=mysqli_connect('localhost','root','','cetis64');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<title>Mostrar datos</title>
	<style>
.tabla{
	background-color: red;
width: 100%;
text-align: center;
}





	</style>
</head>
<body>
	<center>
<nav>

		<a href="logout.php">Cerrar Sesion</a>
		<a href="index.php">Volver</a>
		<a href="../PHPPROFESOR\elimpro.html">Eliminar Profesor</a>
	</nav>
<br>

	<table border="1" class="tabla" center>
	<h3>LIstado de profesores registrados</h3>
		<tr>
			<td>id_prof</td>
			<td>Matricula</td>
			<td>Nombre_p</td>
			<td>Apellido_P</td>
			<td>ApellidoM_P</td>	
            <td>Curp_p</td>
            <td>Maimpar</td>
            <td>Correo_Pro</td>
            <td>Edad</td>
            <td>Fecha de Nacimiento</td>
            <td>Numero</td>
            <td>Genero</td>
		</tr>

		<?php 
		$sql="SELECT * from profesores";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id_prof'] ?></td>
			<td><?php echo $mostrar['Matricula'] ?></td>
			<td><?php echo $mostrar['Nombre_p'] ?></td>   
			<td><?php echo $mostrar['Apellido_P'] ?></td> 
			<td><?php echo $mostrar['ApellidoM_P'] ?></td>        
			<td><?php echo $mostrar['Curp_p'] ?></td>           
            <td><?php echo $mostrar['Maimpar'] ?></td>          
			<td><?php echo $mostrar['Correo_Pro'] ?></td>          
			<td><?php echo $mostrar['Edad'] ?></td>          
			<td><?php echo $mostrar['Fecha de Nacimiento'] ?></td>
            <td><?php echo $mostrar['Numero'] ?></td>
            <td><?php echo $mostrar['Genero'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
	</center>
</body>
</html>