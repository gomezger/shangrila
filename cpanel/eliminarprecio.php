<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eliminar | Panel de control</title>
</head>

<body>
<?php
session_start();

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$servicio = $_GET['servicio'];
$precio = $_GET['precio'];
$pxm = $_GET['pxm'];
$ofertas = $_GET['ofertas'];
$codigo = $_GET['codigo'];

// Conexión--------------------------------------
$conexion = mysql_connect("localhost","admin","123"); 
if(!$conexion){ die('No he podido conectar: '.mysql_error()); }
mysql_select_db("shangrila_db",$conexion);

$consulta = "DELETE FROM precios WHERE 
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
 
 //Cerrar 
mysql_close($conexion);

// Antes de volver, probarlos, luego crear este código. 
echo "<html><head><meta http-equiv='REFRESH' content='0;url=precios.php'></head></html>";
?>

</body>
</html>
