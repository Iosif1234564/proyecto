<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-080">
	<title>TFG</title>
	<style>
		body {
			background-image: linear-gradient(#ffffff, rgb(222, 201, 153));
		}

		html {
			height: 128.4%;
		}

		h1,
		.site-name {
			text-shadow: 2px 4px 3px rgba(0, 0, 0, 0.3);
			font-size: 55px;
			font-weight: bold;
			font-family: 'Arial Black';
			text-align: left;

		}

		h3 {
			text-shadow: 2px 4px 3px rgba(0, 0, 0, 0.3);
			font-size: 30px;
			font-weight: bold;
			font-family: 'Arial Black';
			text-align: left;

		}

		form {
			font-size: 150%;
			text-align: center;
		}

		header {
			height: 80px;
			width: 100%;
			left: 0;
			top: 0;
			position: relative;
		}

		nav {
			float: left;
		}

		nav ul {
			margin: 0;
			padding: 0;
			list-style: none;
			padding-right: 20px;
		}

		nav ul li {
			display: inline-block;
			line-height: 80px;
		}

		nav ul li a {
			display: block;
			padding: 0 10px;
			text-decoration: none;
		}

		nav ul li a:hover {
			background: white;
		}

		#logo-header {
			float: right;
			padding: 15px 0 0 20px;
			text-decoration: none;
		}

		#logo-header:hover {
			color: red;
		}

		#logo-header .site-name {
			display: block;
			font-weight: 700;
			font-size: 1.2em;
		}

		#logo-header .site-desc {
			display: block;
			font-weight: 300;
			font-size: 0.8em;
			color: black;
		}

		.button {
			font-family: "Open Sans", sans-serif;
			font-size: 16px;
			letter-spacing: 2px;
			text-decoration: none;
			text-transform: uppercase;
			color: rgb(0, 0, 0);
			cursor: pointer;
			background: transparent;
			border: 3px solid;
			padding: 0.25em 0.5em;
			box-shadow: 1px 1px 0px 0px, 2px 2px 0px 0px, 3px 3px 0px 0px, 4px 4px 0px 0px, 5px 5px 0px 0px;
			position: relative;
			user-select: none;
			touch-action: manipulation;
		}

		.button:hover {
			color: rgb(0, 0, 0);
			background: transparent;
		}

		.button:focus {
			color: rgb(0, 0, 0);
			border: 3px solid;
			background: transparent;
		}

		.button:active {
			box-shadow: 0px 0px 0px 0px;
			top: 5px;
			left: 5px;
		}

		p {
			text-align: center;
			text-shadow: 2px 4px 3px rgba(0, 0, 0, 0.3);
			font-size: 20px;
			font-weight: bold;
			font-family: 'Arial';
			text-align: left;
		}

		img {
			position: absolute;
			left: 1300px;
			top: 270px;
		}

		aside {
			animation-duration: 3s;
			animation-name: slidein;
		}

		@keyframes slidein {
			from {
				margin-left: 100%;
				width: 300%
			}

			to {
				margin-left: 0%;
				width: 100%;
			}
		}

		footer {
			text-align: center;
			padding: 3px;
			background-color: black;
			color: #ffffff;
		}
	</style>
</head>

<body>
	<header>
		<a id="logo-header" href="../login.php">
			<span class="site-name">Inicio de sesión</span>
		</a>
		<nav>
			<ul>
				<li><a href="introduccion.php"><button class="button">Introducción</button></a></li>
				<li><a href="normativa.php"><button class="button">Normativas de seguridad</button></a></li>
				<li><a href="#"><button class="button">Guia de funcionamiento</button></a></li>
			</ul>
		</nav>
	</header>
	<br>
	<br>
	<br>
	<br>
	<aside>
		<h1>Introducción</h1>
		<br>
		<p>
			Bienvenido/a a nuestra página web de escaneos de IPs. Aquí podrás encontrar una herramienta útil<br>
			para obtener información detallada sobre cualquier dirección IP que desees analizar. Por lo que, al<br>
			escanear una dirección IP puede ser muy útil en situaciones en las que se necesita conocer más acerca<br>
			más acerca de la ubicación geográfica del servidor que se encuentra detrás de una dirección IP, o para<br>
			obtener información sobre la red en la que se encuentra alojado un sitio web en particular<br>
		</p>
		<p>
			Nuestra herramienta de escaneo de IP es fácil de usar y proporciona resultados precisos y actualizados.<br>
			Explora nuestro sitio y descubre todo lo que puedes hacer con nuestras funciones de escaneo de Ip.<br>
		</p>
		<br>
		<h3>¿Cual ha sido nuestra motivación?</h3>
		<p>
			En la actualidad, el Protocolo de Internet (IP) es una de las tecnologías más importantes y<br>
			utilizadas en el mundo de las comunicaciones digitales. A través de la implementación de redes de IP,<br>
			se ha logrado establecer una red global que conecta a millones de dispositivos y usuarios en todo el <br>
			mundo. Sin embargo, esta conectividad también ha dado lugar a una serie de desafíos de seguridad, ya <br>
			que los usuarios y dispositivos se vuelven más vulnerables a los ataques malintencionados en línea. <br>
		</p>
		<p>
			Por esta razón hemos desarrollado está Web de escaneo de IPs, que permita a los administradores <br>
			de redes y otros usuarios detectar posibles amenazas en sus sistemas. En este trabajo se presentará una <br>
			revisión exhaustiva de las principales funcionalidades de la Web de escaneo de IPs disponibles <br>
			en la web, y se analizarán sus características y capacidades para ayudar a los usuarios a entender cómo <br>
			pueden ser utilizadas para mejorar la seguridad de sus redes.<br>
		</p>
		<img src="ip-red.jpg" width="500px" height="400px"><br><br>
	</aside><br>
	<footer>
		<p>
			<center>futuro logo</center>
		</p>
	</footer>
</body>

</html>