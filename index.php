<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Microbiologia Aplicada - </title>
	<link href="css/reset.css">
	<link rel="stylesheet" href="css/main.css" type="text/css">
	<link rel="stylesheet" href="css/redes-estilo1.css" type="text/css">
	<link rel="stylesheet" href="css/supersized.core.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/coin-slider-styles.css" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/supersized.core.3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" src="js/coin-slider.min.js"></script>
	<script src="js/jquery.neosmart.fb.wall.js" type="text/javascript"></script>
	<script src="js/menu.js" type="text/javascript"></script>
	<script type="text/javascript">
			jQuery(function($){				$.supersized({					slides  :  	[ {image : 'img/bg.jpg', title : 'Image Credit: Maria Kazvan'} ]				});		    });
	</script>
</head>

<body>
	<div id="wrapper">
		<div id="header">
			<img class="logo" src="img/logo.png" alt="Microbiologia Aplicada" />
			<h4>La distribuidora con mayor stock en las líneas más reconocidas para control microbiológico y bio-nutrientes.</h4>	
		</div>
		<div id="redes">
			<a href="#" >Iniciar Sesión</a>
			<div id="fondo-redes">
				<img class="btn-fb" src="img/fb.png" alt="Facebook" >
				<img class="btn-tw" src="img/tw.png" alt="Twitter" >
				<img class="btn-yt" src="img/yt.png" alt="YouTube" >
				<div id="tab"></div>
			</div>	
			
		</div>
		<div id="menu-wrapper">
			<ul id="menu">
				<li class="btn-inicio" style="border:0px"><a href="#">Inicio</a><div class="li-menu-activo"></div></li>
				<li class="btn-somos"><a href="#">Somos</a><div class="li-menu-activo"></div></li>
				<li class="btn-marcas"><a href="#">Marcas</a><div class="li-menu-activo"></div></li>
				<li class="btn-descargas"><a href="#">Descargas</a><div class="li-menu-activo"></div></li>
				<li class="btn-contacto"><a href="#">Contacto</a><div class="li-menu-activo"></div></li>
			</ul>	
		</div>
		<div id="contenido">
			<div id="coin-slider">
				<a href="#" >
					<img src="img/banner/000.png" alt="Lineas de Distribucion" >
					<span>
						<strong>Experiencia</strong><br>
						Somos una empresa con más de 10 años en el mercado, importamos y distribuimos a nivel nacional las mejores marcas en equipo y material de laboratorio. Lo que nos distingue es la calidad de los productos que comercializamos, personal altamente capacitado, así como nuestro oportuno servicio de entrega local y nacional.					
					</span>
				</a>
				<a href="#" >
					<img src="img/banner/001.png" alt="Lineas de Distribucion" >
					<span>
						<strong>Medios de Cultivo</strong><br>
						Manejamos varias marcas.					
					</span>
				</a>					
			</div>
		</div>	
		<div id="barra-lateral">
			<div id="redes-display">
				<div id="facebook-posts"></div>				
				<!--<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FMicrobiolog%25C3%25ADa-Aplicada%2F178001092249826&amp;width=205&amp;height=427&amp;show_faces=false&amp;colorscheme=dark&amp;stream=true&amp;border_color&amp;header=false&amp;appId=512030805526859" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:427px;" allowTransparency="true"></iframe>-->
			</div>
			<div id="chat-barra-inferior"><p>CHAT // Atención a Clientes</p><div class="btn-chat"></div>
				<div id="chat"></div>
			</div>
			
		</div>
		<div id="footer">
			©2013 Microbiologia Aplicada S.A. de C.V. Todos los Derechos Reservados.		
		</div>
	</div>		
		<script type="text/javascript">
			$(document).ready(function(){
				//Animación de inicio
				$(".btn-fb").fadeIn(1000);
				$(".btn-tw").fadeIn(2000);
				$(".btn-yt").fadeIn(3000);
				
				//Facebook
  				$('#facebook-posts').fbWall({ id:'178001092249826',accessToken:'AAAC7gAoWDQ0BADoGg4ZA8dKtOmeRuGCTSRJRxwrCXEQxuIWa9cSiAbgiNKZCmsHfpOic69RskkVHABvZCWS0XEhOlgouqNnA6mooNC9BQZDZD'});
  				 
				//Slider de Home
				$('#coin-slider').coinslider({ width: 608, height: 308, navigation: true, delay: 3000 });
				
				//------Chat----------------------------------------------------------------
				//Funcion de Abrir y cerrar el chat
				var $chatAbierto=false;
				//abrir el chat al dar click en el boton de la flecha
				$(".btn-chat").click(function(){
					if($chatAbierto==false){
						//cambiar sentido flecha
						$(this).fadeOut(500,function(){
							$(this).css({"background-image":"url('img/arrow-down.png')"}).fadeIn(500);
						});
						$("#facebook-posts").animate({height:'-=400px'},500); //subir el fb
						$("#chat-barra-inferior").animate({height:'+=400px'},500);//expandir el chat
						$("#chat").html("<input type='text'><input type='submit' value='enviar'>");//cargar el chat
						$chatAbierto=true;//Para indicar que ya está abierto
					}else{ //si está abierto, cerrarlo
						//cambiar sentido flecha
						$(this).fadeOut(500,function(){
							$(this).css({"background-image":"url('img/arrow-up.png')"}).fadeIn(500);
						});
						$("#facebook-posts").animate({height:'+=400px'},500); //subir el fb
						$("#chat-barra-inferior").animate({height:'-=400px'},500);//expandir el chat
						$("#chat").html("");//cargar el chat
						$chatAbierto=false;//Para indicar que ya está abierto						
					}
				});
				
				//--------------Animacion de Menu y funciones-------------------------------
				//inicializar inicio como activo
				//$(".btn-inicio").menuActivo();
				$(".btn-inicio").mouseover(function(){
					$(this).activar();
				}).mouseout(function(){
					$(this).desactivar();
				});
				
				$("#menu li a").mouseover(function(){
					$(this).animate({backgroundColor:'#ffffff'});
				}).mouseout(function(){
					$(this).animate({backgroundColor:'#000000'});	
				});
				//CLick!!
				$("#menu li a").click(function(){
					$(this).parent().css({backgroundImage:"url(img/bg-menu-li-activo.png)","width":"105px"});
				});
			});
		</script>	
</body>
</html>