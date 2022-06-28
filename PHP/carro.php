<?php    /*VASCONCELOS SANCHEZ CHRISTOFER RICARDO
    AGUSTIN ADLER REYES ANCHEYTA
    KAREN GUADALUPE MALVAEZ SANDOVAL
    MIA TAMARA MONTIEL RUIZ
    RIGOBERTO GUERRERO MARCELO 
    CARLOS URIEL FABELA CORRAL
    4PAM 
    */
 if(isset($_POST['regist'])){
	include("abrircon.php");

	$data=$_POST['data'];
        $obj= json_decode($data,true); 

$total=0;

 foreach ($obj as $row) {  

	$Nombre = $row['Nombre'];
	$Cantidad = $row['Cantidad'];
	$precio = $row['Precio'];
	$conectar->query("INSERT INTO `producto`(`IdProducto`, `NombreP`, `CantidadP`, `Total`) VALUES ('','$Nombre','$Cantidad','$precio');");
 }
 if ($conectar) {
;
		
		
   } else {
	   echo "hubo un error en el guardado del registro";
   }

   include("cierra.php");{
	
   }

}
 

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
	    btn-8 {
  background-color: #f0ecfc;
background-image: linear-gradient(315deg, #f0ecfc 0%, #c797eb 74%);
  line-height: 50px;
  padding: 0;
  border: none;
}
.btn-8{
    padding:10px ;
    font-size:30px;
        position: absolute;
}
.btn-8 span {
  position: relative;
  display: block;
  width: 100%;
  height: 100%;
      display: contents;
      background-color:blue;
padding:1px;
}
.btn-8:before,
.btn-8:after {
  position: absolute;
  content: "";
  right: 0;
  bottom: 0;
  background: #c797eb;
  /*box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
              -4px -4px 6px 0 rgba(116, 125, 136, .2), 
    inset -4px -4px 6px 0 rgba(255,255,255,.5),
    inset 4px 4px 6px 0 rgba(116, 125, 136, .3);*/
  transition: all 0.3s ease;
  background-color:blue;
}
.btn-8:before{
   height: 0%;
   width: 5px;
   background-color:blue;
}
.btn-8:after {
  width: 0%;
  height: 5px;
}
.btn-8:hover:before {
  height: 100%;
}
.btn-8:hover:after {
  width: 100%;
}
.btn-8:hover{
      background-color: #f0ecfe;

background-image: linear-gradient(315deg, #f0ecfc 0%, #c797eb 74%);

}
.btn-8 span:hover{
  color: #c797eb;
}
.btn-8 span:before,
.btn-8 span:after {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  background: #c797eb;
  /*box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
              -4px -4px 6px 0 rgba(116, 125, 136, .2), 
    inset -4px -4px 6px 0 rgba(255,255,255,.5),
    inset 4px 4px 6px 0 rgba(116, 125, 136, .3);*/
  transition: all 0.3s ease;
}
.btn-8 span:before {
  width: 2px;
  height: 0%;
}
.btn-8 span:after {
  height: 2px;
  width: 0%;
}
.btn-8 span:hover:before {
  height: 100%;
}
.btn-8 span:hover:after {
  width: 100%;
}
.btn-primary:hover{
    background-color: #f0ecfc;
background-image: linear-gradient(315deg, #f0ecfc 0%, #c797eb 74%);

}
.menu{ 
    text-align:center;
    width:100%;
    height:60px;
    background:black;

}
  
	</style>
</head>
<body>
    
<header class="menu">
<a class="custom-btn btn-8" href="../index.html">Inicio</a>
</header>

		<table border="1px">
		   <tr>
		       <th>Producto</th>
		       <th>precio</th>
		       <th>Cantidad</th>
		  
		   </tr> 
		   
		   <tr> 
		   <th> <?php 	$Nombre = $row['Nombre']; echo"".$Nombre    ?> </th>
		   
		     <th> <?php 	$precio = $row['Precio']; echo"".$precio ?> </th>
		     
		     <th> <?php $Cantidad = $row['Cantidad']; echo"".$Cantidad ?> </th>
		   </tr>
		   
		 
		    
		    
		</table>
</body>
</html>
