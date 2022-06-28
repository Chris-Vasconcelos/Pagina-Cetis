<?php
include'abre.php';
$id=$_GET['matricula'];
$eliminar="DELETE FROM profesores WHERE Matricula='$id'";
$elimina=$conectar->query($eliminar);
header("location:../HTML\CONSPROF.php");
$conecta->close();
 ?>