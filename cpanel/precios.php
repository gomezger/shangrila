<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Panel de control | Precios</title>
</head>

<body>
<?php /*
session_start();
echo "Tu usuario es: ".$_SESSION['usuario']. "<br /> Tu contraseña es:".$_SESSION['contrasena']."<br />";

// Conexión--------------------------------------
$conexion = mysql_connect("localhost","admin","123"); 
if(!$conexion){ die('No he podido conectar: '.mysql_error()); }
mysql_select_db("shangrila_db",$conexion);

// Establecer consulta
$consulta = "SELECT * FROM precios WHERE usuario='admin' AND contrasena='123';";

// Ejecutar consulta
$resultado = mysql_query($consulta,$conexion);

// Imprimir consulta
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
echo "<tr><td>".$fila['servicio']."</td><td>".$fila['precio']."</td><td>".$fila['pxm']."</td><td>".$fila['ofertas']."</td><td>".$fila['codigo']."</td>
<td><a href='eliminarprecio.php?servicio=".$fila['servicio']."&precio=".$fila['precio']."&pxm=".$fila['pxm']."&ofertas=".$fila['ofertas']."&codigo=".$fila['codigo']."'>Eliminar</a></td>
<td><a href='formularioeditar.php?servicio=".$fila['servicio']."&precio=".$fila['precio']."&pxm=".$fila['pxm']."&ofertas=".$fila['ofertas']."&codigo=".$fila['codigo']."'>Editar</a></td></tr>";
}



//Añadir un registro
echo "
<tr>
<form action='crearprecio.php' method='POST'>
<td><input type='text' name='servicio'></td>
<td><input type='text' name='precio'></td>
<td><input type='text' name='pxm'></td>
<td><input type='text' name='ofertas'></td>
<td><input type='text' name='codigo'></td>
<td><input type='submit' name='Enviar'></td>
</tr>";
echo "</table>";


echo  "</table>";

//Cerrar 
mysql_close($conexion);
?>*/

session_start();
echo "Tu usuario es: ".$_SESSION['usuario']. "<br /> Tu contraseña es:".$_SESSION['contrasena']."<br />";
 
// Conexión--------------------------------------
$conexion = mysql_connect("localhost","admin","123"); 
if(!$conexion){ die('No he podido conectar: '.mysql_error()); }
mysql_select_db("shangrila_db",$conexion);

// Establecer consulta
$consulta = "SELECT * FROM precios WHERE usuario='admin' AND contrasena='123';";

// Ejecutar consulta
$resultado = mysql_query($consulta,$conexion);

// Imprimir consulta
echo  "
<table border=1 width=80%>
<tr>
<td>Servicio</td>
<td>Precio</td>
<td>Precio por mes</td>
<td>Ofertas</td>
<td>Código (no se repite) </td>
</tr>
";
while ($fila = mysql_fetch_array($resultado)){
echo "<tr><td>".$fila['servicio']."</td><td>".$fila['precio']."</td><td>".$fila['pxm']."</td><td>".$fila['ofertas']."</td><td>".$fila['codigo']."</td>

<td><a href='eliminarprecio.php?servicio=".$fila['servicio']."&precio=".$fila['precio']."&pxm=".$fila['pxm']."&ofertas=".$fila['ofertas']."&codigo=".$fila['codigo']."'>Eliminar</a></td>

<td><a href='formularioeditar.php?servicio=".$fila['servicio']."&precio=".$fila['precio']."&pxm=".$fila['pxm']."&ofertas=".$fila['ofertas']. "&codigo=".$fila['codigo']."'>Editar</a></td>

</tr>";
 
}
//Añadir un registro
echo "
<tr>
<form action='crearprecio.php' method='POST'>
<td><input type='text' name='servicio'></td>
<td><input type='text' name='precio'></td>
<td><input type='text' name='pxm'></td>
<td><input type='text' name='ofertas'></td>
<td><input type='text' name='codigo'></td>
<td><input type='submit' name='Enviar'></td>
</form>
</tr>";
echo "</table>";

//Cerrar 
mysql_close($conexion);
?>




</body>
</html>
