<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
$conexion = mysql_connect("localhost","admin","123");
if(!$conexion){ die(mysql_error());}
mysql_select_db("shangrila_db",$conexion);
?>
<head>
<link rel="shortcut icon" href="activos/icono.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shangri-La - Servicios: Pilates, circuito aeróbico, masajes, depilación y ritmología</title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44669148-1', 'shangrilabienestar.com.ar');
  ga('send', 'pageview');

</script>


<!-- Archivos del slide -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script src="js/slides.min.jquery.js"></script>
<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'activos/slide/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
	</script>	
<link href="Style/slide.css" rel="stylesheet" type="text/css" />
<link href="Style/style.css" rel="stylesheet" type="text/css" />
<link href="Style/precios.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="header">
  <div id="content">
    <div id="logo"><a href="index.php"><img src="activos/logo.png" alt="Shangri-La Armonía y Bienestar" width="300" height="158" /></a></div>
    <div id="Menu">
      <ul>
        <li><a href="index.php">INICIO</a></li>
        <li><a href="servicios.php">SERVICIOS</a></li>
        <li><a href="precios.php">PRECIOS</a></li>
        <li><a href="contacto/contacto.php">CONTACTO</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="section">
  <div id="contenedor">
    <div class="cuadro">
      <img src="activos/pilates_servicios.png" alt="pilates" class="img" />    
      <span class="titulo">PRECIO: <?php $peticion = mysql_query("SELECT * FROM precios WHERE codigo=11111"); while($fila = mysql_fetch_array($peticion)) { echo $fila['servicio'] ; } ?></span>
      <div class="texto">
        <ul class="ul2">
          <li><u>Precio:</u>  <?php $peticion = mysql_query("SELECT * FROM precios WHERE codigo=11111"); while($fila = mysql_fetch_array($peticion)) { echo $fila['precio'] ; } ?></li>
          <br /><li><u>Precio mensual:</u> <?php $peticion = mysql_query("SELECT * FROM precios WHERE codigo=11111"); while($fila = mysql_fetch_array($peticion)) { echo $fila['pxm'] ; } ?></li>
          <br /><li><u>Otras Ofertas:</u> <?php $peticion = mysql_query("SELECT * FROM precios WHERE codigo=11111"); while($fila = mysql_fetch_array($peticion)) { echo $fila['ofertas'] ; } ?></li>
        </ul>
      </div>
    </div>
    <div class="cuadro">
      <img src="activos/aerobico_servicios.png" alt="pilates" class="img" />    
      <span class="titulo">PRECIO: <?php $peticion = mysql_query("SELECT * FROM precios WHERE codigo=22222"); while($fila = mysql_fetch_array($peticion)) { echo $fila['servicio'] ; } ?></span>
      <div class="texto">
        <ul class="ul2">
          <li><u>Precio:</u> <?php $peticion = mysql_query("SELECT * FROM precios WHERE codigo=22222"); while($fila = mysql_fetch_array($peticion)) { echo $fila['precio'] ; } ?></li>
          <br /><li><u>Precio mensual:</u> <?php $peticion = mysql_query("SELECT * FROM precios WHERE codigo=22222"); while($fila = mysql_fetch_array($peticion)) { echo $fila['pxm'] ; } ?></li>
          <br /><li><u>Otras Ofertas:</u> <?php $peticion = mysql_query("SELECT * FROM precios WHERE codigo=22222"); while($fila = mysql_fetch_array($peticion)) { echo $fila['ofertas'] ; } ?></li>
        </ul>
      </div>
    </div>
    <div class="cuadro">
      <img src="activos/depilacion_servicios.png" alt="pilates" class="img" />    
      <span class="titulo">PRECIO: <?php $peticion = mysql_query("SELECT * FROM precios WHERE codigo=44444"); while($fila = mysql_fetch_array($peticion)) { echo $fila['servicio'] ; } ?></span>
      <div class="texto">
        <ul class="ul2">
          <li><u>Precio:</u> <?php $peticion = mysql_query("SELECT * FROM precios WHERE codigo=44444"); while($fila = mysql_fetch_array($peticion)) { echo $fila['precio'] ; } ?></li>
          <br /><li><u>Precio mensual:</u> <?php $peticion = mysql_query("SELECT * FROM precios WHERE codigo=44444"); while($fila = mysql_fetch_array($peticion)) { echo $fila['pxm'] ; } ?></li>
          <br /><li><u>Otras Ofertas:</u> <?php $peticion = mysql_query("SELECT * FROM precios WHERE codigo=44444"); while($fila = mysql_fetch_array($peticion)) { echo $fila['ofertas'] ; } ?></li>
        </ul>
      </div>
    </div>
    <div class="cuadro">
      <img src="activos/masajes_servicios.png" alt="pilates" class="img" />    
      <span class="titulo">PRECIO: <?php $peticion = mysql_query("SELECT * FROM precios WHERE codigo=33333"); while($fila = mysql_fetch_array($peticion)) { echo $fila['servicio'] ; } ?></span>
      <div class="texto">
        <ul class="ul2">
          <li><u>Precio:</u> <?php $peticion = mysql_query("SELECT * FROM precios WHERE codigo=33333"); while($fila = mysql_fetch_array($peticion)) { echo $fila['precio'] ; } ?></li>
          <br /><li><u>Precio mensual:</u> <?php $peticion = mysql_query("SELECT * FROM precios WHERE codigo=33333"); while($fila = mysql_fetch_array($peticion)) { echo $fila['pxm'] ; } ?></li>
          <br /><li><u>Otras Ofertas:</u> <?php $peticion = mysql_query("SELECT * FROM precios WHERE codigo=33333"); while($fila = mysql_fetch_array($peticion)) { echo $fila['ofertas'] ; } ?></li>
        </ul>
      </div>
    </div>
    <div class="cuadro">
      <img src="activos/ritmologia_servicios.png" alt="pilates" class="img" />    
      <span class="titulo">PRECIO: <?php $peticion = mysql_query("SELECT * FROM precios WHERE codigo=55555"); while($fila = mysql_fetch_array($peticion)) { echo $fila['servicio'] ; } ?></span>
      <div class="texto">
        <ul class="ul2">
          <li><u>Precio:</u> <?php $peticion = mysql_query("SELECT * FROM precios WHERE codigo=55555"); while($fila = mysql_fetch_array($peticion)) { echo $fila['precio'] ; } ?></li>
          <br /><li><u>Precio mensual:</u> <?php $peticion = mysql_query("SELECT * FROM precios WHERE codigo=55555"); while($fila = mysql_fetch_array($peticion)) { echo $fila['pxm'] ; } ?></li>
          <br /><li><u>Otras Ofertas:</u> <?php $peticion = mysql_query("SELECT * FROM precios WHERE codigo=55555"); while($fila = mysql_fetch_array($peticion)) { echo $fila['ofertas'] ; } ?></li>
        </ul>
      </div>
    </div>
  </div> 
</div>
<div id="barra_lateral">
  <div id="contentbarra">
    <div id="facebook_B"><a href="https://www.facebook.com/shangrilabahiablanca" target="_blank"><img src="activos/facebook1.png" alt="Facebook" width="35" height="35" /></a></div>
    <div id="contacto_B"> <a href="contacto/contacto.php"><img src="activos/contacto1.png" alt="Contacto" width="35" height="35" /></a></div>
  </div>
</div>
<div id="footer">
  <div id="contenedor2">
    <ul>
      <li><a href="index.php">INICIO</a></li>
      <li><a href="servicios.php">SERVICIOS</a></li>
      <li><a href="contacto/contacto.php">CONTACTO</a></li>
    </ul>
    <div id="logo2"><a href="index.php"><img src="activos/logo_footer.png" alt="Shangri-La &quot;Armonía y Bienestar&quot;" /></a></div>
    <div id="facebook"><a href="https://www.facebook.com/shangrilabahiablanca" target="_blank"><img src="activos/Facebook.png" alt="Shangri-La en Facebook" width="145" height="70" /></a></div>
    
    <div id="Datos">
      <p>Dirección: Perú 498 esq. Panamá.</p>
      <p>Teléfono: 0291-154064772</p>
      <p>Bahía Blanca, Rep. Argentina.</p>
      <p>shangrila.bienestar@gmail.com</p>
    </div>
  </div>
  
</div>
</body>
</html>
