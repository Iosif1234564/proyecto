<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-080">
		<title>TFG</title>
		<style>
			body {
			background-image: linear-gradient(#FFFFFF, rgb(222,201,153));
		}

		    html {
				height: 100%;
		}

			h1, .site-name {
			text-shadow: 2px 4px 3px rgba(0,0,0,0.3);
			font-size: 55px;
			font-weight: bold;
			font-family: 'Arial Black';
			text-align: left;
			
		}

		h3 {
			text-shadow: 2px 4px 3px rgba(0,0,0,0.3);
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
			left: 5px; }
		p {
			text-align: center;
			text-shadow: 2px 4px 3px rgba(0,0,0,0.3);
			font-size: 25px;
			font-weight: bold;
			font-family: 'Arial';
			text-align: left;
		}

		/*aside{
			animation-duration: 3s;
			animation-name: slidein;
		}

		@keyframes slidein{
			from {
				margin-left: 100%;
				width: 300%;
				overflow: hidden;
			}

			to {
				margin-left: 0%;
				width: 100%;
			}
		}*/

		footer {
		text-align: center;
		padding: 3px;
		background-color: black;
		color: #ffffff;
		margin-top: 70px;
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
		<aside>
		<h1>Normativas de seguridad</h1>
		<br>
		<p>
		Ley Orgánica de Protección de Datos (LOPD): Esta ley establece las normas <br>
		    para la protección de datos personales, incluyendo las medidas de seguridad necesarias<br> 
		para garantizar la confidencialidad, integridad y disponibilidad de los datos.<br>
		</p>
		<p>
		Reglamento General de Protección de Datos (RGPD): Este reglamento es de <br>
		aplicación directa en España y establece los principios y normas para la protección <br>
		de datos personales en la Unión Europea.<br>
		</p>
		<p>
		Ley de Propiedad Intelectual (LPI): Esta ley establece las normas y medidas <br>
		necesarias para proteger los derechos de propiedad intelectual en el ámbito digital, <br>
		incluyendo las medidas de seguridad necesarias para garantizar la integridad y <br>
		confidencialidad de la información.<br>
		</p>
		</aside><br>
		<footer>
			<p><center>futuro logo</center></p>
		</footer>
	</body>
</html>