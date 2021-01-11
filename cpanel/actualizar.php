<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
session_start();
 
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

//Recuperar Variables
$servicio = $_POST['servicio'];
$precio = $_POST['precio'];
$pxm = $_POST['pxm'];
$ofertas = $_POST['ofertas'];
$codigo = $_POST['codigo'];

$codigoantiguo = $_SESSION['codigo'];

// Conexión--------------------------------------
$conexion = mysql_connect("localhost","admin","123"); 
if(!$conexion){ die('No he podido conectar: '.mysql_error()); }
mysql_select_db("shangrila_db",$conexion);

$consulta = "UPDATE precios SET servicio='".$servicio."', precio='".$precio."', 
pxm='".$pxm."', ofertas='".$ofertas."', codigo='".$codigo."' 
WHERE codigo='".$codigoantiguo."'";

// Ejecutar consulta
$resultado = mysql_query($consulta,$conexion);
//Cerrar 
mysql_close($conexion);

// Antes de volver, probarlos, luego crear este código. 
echo "<html><head><meta http-equiv='REFRESH' content='0;url=precios.php'></head></html>";
?>

</body>
</html>
