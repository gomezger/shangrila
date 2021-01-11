<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Instalación</title>
</head>

<body>
<?php

// Conexión--------------------------------------
$conexion = mysql_connect("localhost","admin","123"); // Crear el usuario admin en phpMyAdmin y darle todos los privilegios.
if(!$conexion){ die('No he podido conectar: '.mysql_error()); }

//CREAR UNA BASE DE DATOS FAVORITOS------------------------------------
if(mysql_query("CREATE DATABASE shangrila_db", $conexion)) { 
echo "Se ha creado la base de datos.<br /><hr />";
}else{
echo "No se ha podido crear la base de datos por el siguiente error: ". mysql_error()."<hr />";
}

mysql_select_db("shangrila_db",$conexion);

//CREAR UNA TABLA DE FAVORITOS------------------------------------

$sql = "CREATE TABLE precios(
PRIMARY KEY(usuario),
usuario Char(40),
contrasena Char(40),
servicio Char(40),
precio Char(200),
pxm Char(200),
ofertas Char(200),
codigo Char(200)
)";

if(mysql_query($sql, $conexion)) { 
echo "Se ha creado la tabla precios <br />";
}else{
echo "No se ha podido crear la tabla precios por el siguiente error: ". mysql_error();
}

//CONTENIDO DE PRUEBA PARA LA TABLA FAVORITOS

//CREAR UNA TABLA DE USUARIOS------------------------------------

$sql = "CREATE TABLE usuarios(
PRIMARY KEY(usuario),
usuario Char(40),
contrasena Char(40)
)";

if(mysql_query($sql, $conexion)) { 
echo "Se ha creado la tabla usuarios <br />";
}else{
echo "No se ha podido crear la tabla favoritos por el siguiente error: ". mysql_error();
}

//CONTENIDO DE PRUEBA PARA LA TABLA USUARIOS

//CREAR UNA TABLA DE logs------------------------------------

$sql = "CREATE TABLE logs (
PRIMARY KEY(usuario),
uts Int, 
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
ip Char(50),
navegador Char(100),
usuario Char(40),
contrasena Char(40)
)";

if(mysql_query($sql, $conexion)) { 
echo "Se ha creado la tabla logs <br />";
}else{
echo "No se ha podido crear la tabla logs por el siguiente error: ". mysql_error();
}

//CONTENIDO DE PRUEBA PARA LA TABLA logs

$sql = " 
INSERT INTO logs (uts, anio, mes, dia, hora, minuto, segundo, ip, navegador, usuario, contrasena) VALUES (00000000,2013,02,07,03,00,00,'127.0.0.1','chrome','usr','123');
";

if(mysql_query($sql, $conexion)) { 
echo "Se ha insertado contenido generico en la tabla LOGS <br /><hr />";
}else{
echo "No se ha podido crear la tabla LOGS por el siguiente error: ". mysql_error();
}

mysql_close($conexion);
?>
</body>
</html>
