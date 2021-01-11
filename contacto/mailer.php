<?php
// ----------------------------------------- 
//  The Web Help .com
// ----------------------------------------- 
// remember to replace you@email.com with your own email address lower in this code.

// load the variables form address bar
$subject = $_POST["subject"];
$message = $_POST["message"];
$from = $_POST["from"];
$verif_box = $_POST["verif_box"];

// remove the backslashes that normally appears when entering " or '
$message = stripslashes($message); 
$subject = stripslashes($subject); 
$from = stripslashes($from); 

// check to see if verificaton code was correct
if(md5($verif_box).'a4xn' == $_COOKIE['tntcon']){
	// if verification code was correct send the message and show this page
	mail("shangrila.bienestar@gmail.com", 'Enviado por: '.$subject, $_SERVER['REMOTE_ADDR'] ."\n\n"  .$message, "From: $from");
	// delete the cookie so it cannot sent again by refreshing this page
	setcookie('tntcon','');
} else if(isset($message) and $message!=""){
	// if verification code was incorrect then return to contact page and show error
	header("Location: contacto.php?subject=$subject&from=$from&message=".urlencode($message)."&wrong_code=true");
	exit;
} else {
	echo "no variables received, this page cannot be accessed directly";
	exit;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="../Style/slide.css" rel="stylesheet" type="text/css" />
<link href="../Style/style.css" rel="stylesheet" type="text/css" />
<link href="../Style/contacto.css" rel="stylesheet" type="text/css" />
<head>
<link rel="shortcut icon" href="../activos/icono.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shangri-La Armonía y Bienestar - Pilates, circuito aeróbico y mucho más - Perú 498 esq. Panamá, Bahía Blanca </title>
<!-- Archivos del slide -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script src="../js/slides.min.jquery.js"></script>
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
    
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>  
<style type="text/css">
<!--
.Estilo1 {font-size: 24px}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style> 
</head>

<body>
<div id="header">
  <div id="content">
    <div id="logo"><a href="../index.php"><img src="../activos/logo.png" alt="Shangri-La Armonía y Bienestar" width="300" height="158" /></a></div>
    <div id="Menu">
      <ul>
        <li><a href="../index.php">INICIO</a></li>
        <li><a href="../servicios.php">SERVICIOS</a></li>
        <li><a href="contacto.php">CONTACTO</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="section">
  <div id="contenedor">
    <div id="s1">
      <div id="titulo2">MENSAJE ENVIADO CORRECTAMENTE
      </div>
      
    </div>
    <div id="s2">
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div class="fb-comments" data-href="https://www.facebook.com/shangrilabahiablanca" data-width="500"></div>
    </div>
    <div id="s3">
      <div id="Direccion_mapa">PERÚ 498, ESQ. PANAMÁ, BAHÍA BLANCA</div>
    <iframe width="550" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.ar/maps/ms?msa=0&amp;msid=211534191173063343865.0004e6c05bb3e367f4710&amp;ie=UTF8&amp;t=m&amp;ll=-38.704886,-62.271066&amp;spn=0.002512,0.005515&amp;z=17&amp;output=embed"></iframe><br />	</div>
  </div>
</div>
<div id="barra_lateral">
  <div id="contentbarra">
    <div id="facebook_B"><a href="https://www.facebook.com/shangrilabahiablanca" target="_blank"><img src="../activos/facebook1.png" alt="Facebook" width="35" height="35" /></a></div>
    <div id="contacto_B"> <a href="contacto.php"><img src="../activos/contacto1.png" alt="Contacto" width="35" height="35" /></a></div>
  </div>
</div>
<div id="footer">
  <div id="contenedor2">
    <ul>
      <li><a href="../index.php">INICIO</a></li>
      <li><a href="../servicios.php">SERVICIOS</a></li>
      <li><a href="contacto.php">CONTACTO</a></li>
    </ul>
    <div id="logo2"><a href="../index.php"><img src="../activos/logo_footer.png" alt="Shangri-La &quot;Armonía y Bienestar&quot;" /></a></div>
    <div id="facebook"><a href="https://www.facebook.com/shangrilabahiablanca" target="_blank"><img src="../activos/Facebook.png" alt="Shangri-La en Facebook" width="145" height="70" /></a></div>
    
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
