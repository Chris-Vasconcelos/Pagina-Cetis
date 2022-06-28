<?php 

	$conexion=mysqli_connect('localhost','root','','cetis64');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>
<a href="index.php">Volver</a>
<a href="eliminar.html">Eliminar alumno</a>
<br>

	<table border="1" >
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

</body>
</html>