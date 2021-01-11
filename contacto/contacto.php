<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="../Style/slide.css" rel="stylesheet" type="text/css" />
<head>
<link rel="shortcut icon" href="../activos/icono.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44669148-1', 'shangrilabienestar.com.ar');
  ga('send', 'pageview');

</script>
<link href="../Style/style.css" rel="stylesheet" type="text/css" />
<link href="../Style/contacto.css" rel="stylesheet" type="text/css" />
<title>Shangri-La - Contacto - Perú 498 esq. Panamá, Bahía Blanca</title>
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
</head>

<body>
<div id="header">
  <div id="content">
    <div id="logo"><a href="../index.php"><img src="../activos/logo.png" alt="Shangri-La Armonía y Bienestar" width="300" height="158" /></a></div>
    <div id="Menu">
      <ul>
        <li><a href="../index.php">INICIO</a></li>
        <li><a href="../servicios.php">SERVICIOS</a></li>
        <li><a href="#">PRECIOS</a></li>
        <li><a href="contacto/contacto.php">CONTACTO</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="section">
  <div id="contenedor">
    <div id="s1">
      <div id="titulo">Contactanos a nuestro mail</div>
      <form action="mailer.php" method="post" name="form1" id="form1" style="margin:0px; font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11px; width:300px;" onsubmit="MM_validateForm('from','','RisEmail','subject','','R','verif_box','','R','message','','R');return document.MM_returnValue">

<input name="subject" type="text" class="subject" id="subject" style="padding:2px; border:1px solid #CCCCCC; width:180px; height:14px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;" value="<?php echo $_GET['subject'];?>" placeholder="Nombre y apellido"/>
<br />
<br />

<input name="from" type="text" id="from" placeholder="E-Mail" style="padding:2px; border:1px solid #CCCCCC; width:180px; height:14px; font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11px;" value="<?php echo $_GET['from'];?>"/>
<br />
<br />

<input name="verif_box" type="text" id="verif_box" placeholder="Ingrese el código" style="padding:2px; border:1px solid #CCCCCC; width:180px; height:14px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;"/>
<img src="verificationimage.php?<?php echo rand(0,9999);?>" alt="Código de verificación" width="50" height="24" align="absbottom" /><br />
<br />

<!-- if the variable "wrong_code" is sent from previous page then display the error field -->
<?php if(isset($_GET['wrong_code'])){?>
<div style="border:1px solid #990000; background-color:#D70000; color:#FFFFFF; padding:4px; padding-left:6px;width:295px;">Error al ingresar el código</div><br /> 
<?php ;}?>

<textarea name="message" cols="5" rows="5" id="message" placeholder="Ingrese su mensaje" style="padding:2px; border:1px solid #CCCCCC; width:300px; height:100px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;"><?php echo $_GET['message'];?></textarea>
<noscript><a href="#" style="display:none;"></a></noscript>
<input name="Submit" type="submit" style="margin-top:10px; display:block; border:1px solid #000000; width:100px; height:20px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:2px; padding-right:2px; padding-top:0px; padding-bottom:2px; line-height:14px; background-color:#EFEFEF;" value="Enviar Mensaje"/>
</form>
    </div>
    <div id="s2">
    DEJANOS SU MENSAJE!
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
      <div id="Direccion_mapa">
        <h1>PERÚ 498, ESQ. PANAMÁ, BAHÍA BLANCA</h1>
      </div>
    <iframe width="550" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.ar/maps/ms?msa=0&amp;msid=211534191173063343865.0004e6c05bb3e367f4710&amp;ie=UTF8&amp;t=m&amp;ll=-38.704886,-62.271066&amp;spn=0.002512,0.005515&amp;z=17&amp;output=embed"></iframe><br />	</div>
  </div>
</div>
<div id="barra_lateral">
  <div id="contentbarra">
    <div id="facebook_B"><a href="https://www.facebook.com/shangrilabahiablanca" target="_blank"><img src="../activos/facebook1.png" alt="Facebook" width="35" height="35" /></a></div>
    <div id="contacto_B"> <a href="../contacto.php"><img src="../activos/contacto1.png" alt="Contacto" width="35" height="35" /></a></div>
  </div>
</div>
<div id="footer">
  <div id="contenedor2">
    <ul>
      <li><a href="../index.php">INICIO</a></li>
      <li><a href="../servicios.php">SERVICIOS</a></li>
      <li><a href="../contacto.php">CONTACTO</a></li>
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
