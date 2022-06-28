<?php
include'abre.php';
$id=$_GET['matricula'];
$eliminar="DELETE FROM alumno WHERE NumControl_a='$id'";
$elimina=$conectar->query($eliminar);
header("location:MOSTALUMN.php");
$conecta->close();
 ?>