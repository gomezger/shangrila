<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar | Panel de Control</title>
</head>

<body>
<?php
session_start();
 
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

//Recuperar Variables pasadas por URL
$servicio = $_GET['servicio'];
$precio = $_GET['precio'];
$pxm = $_GET['pxm'];
$ofertas = $_GET['ofertas'];
$codigo = $_GET['codigo'];

// Conexión--------------------------------------
$conexion = mysql_connect("localhost","admin","123"); 
if(!$conexion){ die('No he podido conectar: '.mysql_error()); }
mysql_select_db("shangrila_db",$conexion);

// Establecer consulta
$consulta = "SELECT * FROM precios WHERE 
usuario='".$usuario."' AND
contrasena='".$contrasena."' AND
servicio='".$servicio."' AND
precio='".$precio."' AND
pxm='".$pxm."' AND
ofertas='".$ofertas."' AND
codigo='".$codigo."'
";

// Ejecutar consulta
$resultado = mysql_query($consulta,$conexion);

// Presentar la información seleccionada en un formulario, como valores por defecto en este formulario.
echo  "
<table border=1 width=80%>
<tr>
<td>Servicio</td>
<td>Precio</td>
<td>Precio por mes</td>
<td>Ofertas</td>
<td>Código</td>
<td></td>
</tr>
";
while ($fila = mysql_fetch_array($resultado)){
// filas, formulario, valores originales
echo "
<tr><form action='actualizar.php' method='POST'>
<td><input type='text' name='servicio' value='".$fila['servicio']."'></td>
<td><input type='text' name='precio' value='".$fila['precio']."'></td>
<td><input type='text' name='pxm' value='".$fila['pxm']."'></td>
<td><input type='text' name='ofertas' value='".$fila['ofertas']."'></td>
<td><input type='text' name='codigo' value='".$fila['codigo']."'></td>
<td><input type='submit'></td>
</td>
</tr>";
}

$_SESSION['codigo']=$codigo; 
 //pasamos el titulo original para comparar en actualizarfavorito.php

//Cerrar 
mysql_close($conexion);

?>

</body>
</html>
