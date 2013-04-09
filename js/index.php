<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Microbiologia Aplicada - </title>
	<link href="css/reset.css">
	<link href="css/main.css">
	<link rel="stylesheet" href="css/supersized.core.css" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/supersized.core.3.2.1.min.js"></script>
	<script type="text/javascript">
			jQuery(function($){
				$.supersized({
					slides  :  	[ {image : 'img/bg.jpg', title : 'Image Credit: Maria Kazvan'} ]
				});
		    });
	</script>
	<style type="text/css">
		#header{
			background-image: url('img/bg-header.png');
			background-repeat: repeat;
			width: 80%;
			height: 76px;
			position: relative;
			top: 10px;
		}
		#header .logo{
			float: left;
		}
		#header h4{
			color: #fff;
			font-family: 'Questrial',Arial, sans-serif;
			font-size: 0.75em;
			position: absolute;
			bottom: 2px;
			right: 0px;
			display: block;
		}
		#redes{
			background-image: url('img/bg-header.png');
			background-repeat: repeat;
			width: 20%;
			height: 76px;
			position: absolute;
			top: 10px;
			right: 0px;
		}
		#redes a{
			color: #fff;
			text-decoration: none;
			position: absolute;
			top: 2px;
			right: 10px;
			font-size: 0.8em;
			font-family: Arial;
		}
		#fondo-redes{
			background: url('img/bg-redes-rounded.png');
			width: 145px;
			height: 35px;
			position: absolute;
			top: 20px;
			left: 30px;
		}
		#redes img{
			position: absolute;
			display: none;
		}
		.btn-fb{
			left: 0px;			
		}
		.btn-tw{
			left: 55px;
		}
		.btn-yt{
			left: 110px;
		}
		/*------------Menu----------------------*/
		#menu-wrapper{
			position: relative;
			left: 0px;
			margin-top: 10px;
			border:1px solid #fff;
			width: 205px;
			height: 100%;
		}
		#menu{
			position: absolute;
			top: 20px;
			left: 0px
		}
		#menu li{
			background: url('img/bg-menu-li.png');
			padding-left: 10px;
			width: 92px;
			padding-top: 32px;
			height: 45px;
			border-bottom:1px dashed #fff;
		}
		#menu li a{
			font-family: 'Questrial';
			font-size: 0.8em;
			color: #fff;
			text-transform: uppercase;
			text-decoration: none;
			display: block;
		}
	</style>
</head>
<body>
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
		</div>	
	</div>
	<div id="menu-wrapper">
		<ul id="menu">
			<li><a href="#" >Inicio</a></li>
			<li><a href="#" >Somos</a></li>
			<li><a href="#" >Marcas</a></li>
			<li><a href="#" >Descargas</a></li>
			<li><a href="#" >Contacto</a></li>
		</ul>	
	</div>
	<script type="text/javascript" >
		$(document).ready(function(){
			$(".btn-fb").fadeIn(1000);
			$(".btn-tw").fadeIn(2000);
			$(".btn-yt").fadeIn(3000);
		});
	</script>	
</body>
</html>