<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Panel de control</title>
</head>

<body>

<?php
session_start();
$_SESSION['usuario']="admin";
$_SESSION['contrasena']="123";
// Crear variables
$usuario=$_SESSION['usuario'];
$contrasena=$_SESSION['contrasena'];

$addservicio = $_POST['servicio'];
$addprecio = $_POST['precio'];
$addpxm = $_POST['pxm'];
$addofertas = $_POST['ofertas'];
$addcodigo = $_POST['codigo'];

// Conexión--------------------------------------
$conexion = mysql_connect("localhost","admin","123"); 
if(!$conexion){ die('No he podido conectar: '.mysql_error()); }
mysql_select_db("shangrila_db",$conexion);

// Establecer consulta
$consulta = "INSERT INTO precios VALUES
('$usuario','$contrasena','$addservicio','$addprecio','$addpxm','$addofertas','$addcodigo') ";

// Ejecutar consulta
$resultado = mysql_query($consulta,$conexion);
 
 //Cerrar 
mysql_close($conexion);

// Volver, redireccionando a principal
echo "<html><head><meta http-equiv='REFRESH' content='0;url=precios.php'></head></html>";
?>

</body>
</html>
