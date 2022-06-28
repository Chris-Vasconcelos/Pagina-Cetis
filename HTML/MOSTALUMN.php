<?php 

/*VASCONCELOS SANCHEZ CHRISTOFER RICARDO
AGUSTIN ADLER REYES ANCHEYTA
KAREN GUADALUPE MALVAEZ SANDOVAL
MIA TAMARA MONTIEL RUIZ
RIGOBERTO GUERRERO MARCELO 
CARLOS URIEL FABELA CORRAL
4PAM 
*/
$conexion=mysqli_connect('localhost','root','','cetis64');

 ?>


<!DOCTYPE html>
<html>
<head>
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

<br>
<center>
	<nav>
		<a href="index.php">Volver</a>
		<a href="logout.php">Cerrar Sesion</a>
		<a href="../PHPALUMNO/eliminar.html">Eliminar alumno</a>
	</nav>
<div class="tabla">
	<table border="2" center>
		<h3>LIstado de Alumnos Registrados</h3>
		<tr>
			<td>Id_alumnod</td>
			<td>Nombre_a</td>
			<td>ApellidoM_a</td>
			<td>ApellidoP_a</td>
			<td>Correo_a</td>	
            <td>NumControl_a</td>
            <td>Tel_a</td>
            <td>Curp_a</td>
            <td>Genero_a</td>
		</tr>


		<?php 
		$sql="SELECT * from alumno";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
    
			<td><?php echo $mostrar['Id_alumno'] ?></td>
        
			<td><?php echo $mostrar['Nombre_a'] ?></td>
        
			<td><?php echo $mostrar['ApellidoM_a'] ?></td>
    
			<td><?php echo $mostrar['ApellidoP_a'] ?></td>
        
			<td><?php echo $mostrar['Correo_a'] ?></td>
            
            <td><?php echo $mostrar['NumControl_a'] ?></td>
        
			<td><?php echo $mostrar['Tel_a'] ?></td>
            
			<td><?php echo $mostrar['Curp_a'] ?></td>
        
			<td><?php echo $mostrar['Genero_a'] ?></td>

		</tr>
	<?php 
	}
	 ?>
	</table>
	</div>
	</center>
</body>
</html>