<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Panel de control</title>
</head>

<body>
<?php
$_SESSION['usuario']="admin";
$_SESSION['contrasena']="123";
echo ' 

<html><head><meta http-equiv="REFRESH" content="0;url=precios.php"></head></html> 
'; // nos redirige a la principal usando metatags.

?>

</body>
</html>
