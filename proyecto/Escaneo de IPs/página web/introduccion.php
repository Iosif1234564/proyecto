<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="./estilos.css">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Introducción</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<style>
	@import url('https://fonts.googleapis.com/css?family=Exo:400,700');

/* Estilos generales */
	* {
		margin: 0px;
		padding: 0px;
	}

/* Estilos del cuerpo del documento */
	body {
		font-family: 'Exo', sans-serif;
	}

    
	.context {
		width: 100%;
		position: absolute;
		top: 50vh;

	}

	.context h1 {
		text-align: center;
		color: #fff;
		font-size: 50px;
	}

/* Estilos del área principal */
	.area {
		background: #fffd6f;
		background: -webkit-linear-gradient(to left, #fffbf4, #a8038a);
		width: 100%;
		height: 110vh;

	}

/* Estilos de los círculos animados */
	.circles {
		position: absolute;
		top: 0;
		left: 0px;
		width: 100%;
		height: 110%;
		overflow: hidden;
		padding-left: 0;
	}

	.circles .anim {
		position: absolute;
		display: block;
		list-style: none;
		width: 20px;
		height: 20px;
		background: rgba(228, 5, 132, 0.2);
		animation: animate 25s linear infinite;
		bottom: -150px;

	}

	.circles .anim:nth-child(1) {
		left: 25%;
		width: 80px;
		height: 80px;
		animation-delay: 0s;
	}


	.circles .anim:nth-child(2) {
		left: 10%;
		width: 20px;
		height: 20px;
		animation-delay: 2s;
		animation-duration: 12s;
	}

	.circles .anim:nth-child(3) {
		left: 70%;
		width: 20px;
		height: 20px;
		animation-delay: 4s;
	}

	.circles .anim:nth-child(4) {
		left: 40%;
		width: 60px;
		height: 60px;
		animation-delay: 0s;
		animation-duration: 18s;
	}

	.circles .anim:nth-child(5) {
		left: 65%;
		width: 20px;
		height: 20px;
		animation-delay: 0s;
	}

	.circles .anim:nth-child(6) {
		left: 75%;
		width: 110px;
		height: 110px;
		animation-delay: 3s;
	}

	.circles .anim:nth-child(7) {
		left: 35%;
		width: 150px;
		height: 150px;
		animation-delay: 7s;
	}

	.circles .anim:nth-child(8) {
		left: 50%;
		width: 25px;
		height: 25px;
		animation-delay: 15s;
		animation-duration: 45s;
	}

	.circles .anim:nth-child(9) {
		left: 20%;
		width: 15px;
		height: 15px;
		animation-delay: 2s;
		animation-duration: 35s;
	}

	.circles .anim:nth-child(10) {
		left: 85%;
		width: 150px;
		height: 150px;
		animation-delay: 0s;
		animation-duration: 11s;
	}



	@keyframes animate {

		0% {
			transform: translateY(0) rotate(0deg);
			opacity: 1;
			border-radius: 0;
		}

		100% {
			transform: translateY(-1000px) rotate(720deg);
			opacity: 0;
			border-radius: 50%;
		}

	}

/* Se establece la altura del elemento <html> al 100% del viewport*/
	html {
		height: 100%;
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
		margin-left: 20px;
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


</style>
</head>

<body>

	<div class="area">
		<ul class="circles">

			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<div class="container-fluid">
					<a href="../iniciar sesión/login.php" class="navbar-brand text-info fw-semibold fs-4">Inicio de sesión</a>


					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
						data-bs-target="#menuLateral">
						<span class="navbar"><img src="./list.svg" alt="lista"></span>
					</button>
					<section class="offcanvas offcanvas-top bg-dark" id="menuLateral" tabindex="-1">
						<div class="offcanvas-header" data-bs-theme="dark">
							<h5 class="offcanvas-title text-info">Escaneo de IPs</h5>
							<button class="butn-close" type="button" aria-label="Close"
								data-bs-dismiss="offcanvas"></button>
						</div>
						<div class="offcanvas-body d-flex flex-colum justify-content-between px-0">
							<ul class="navbar-nav fs-5 justify-content-evenly">
								<li class="nav-item p-3 py-md-1"><a href="introduccion.php"
										class="nav-link">Introducción</a></li>
								<li class="nav-item p-3 py-md-1"><a href="normativa.php" class="nav-link">Normativas</a>
								</li>
								<li class="nav-item p-3 py-md-1"><a href="funcionamiento.php" class="nav-link">Guía de funcionamiento</a>
								</li>
							</ul>
							<div>
								<a href="https://github.com/Iosif1234564/proyecto.git"><i class="bi bi-github"></i></a>
								<a href="https://discord.com/channels/1117045020340535370/1117045066393989180"><i class="bi bi-discord"></i></a>
							</div>
						</div>
					</section>
				</div>
			</nav>

			<br>
			<br>
			<br>
			<br>
			<aside>
				<h1>Introducción</h1>
				<br>
				<p>
					Bienvenido/a a nuestra página web de escaneos de IPs. Aquí podrás encontrar una herramienta útil<br>
					para obtener información detallada sobre cualquier dirección IP que desees analizar. Por lo que,
					al<br>
					escanear una dirección IP puede ser muy útil en situaciones en las que se necesita conocer más
					acerca<br>
					más acerca de la ubicación geográfica del servidor que se encuentra detrás de una dirección IP, o
					para<br>
					obtener información sobre la red en la que se encuentra alojado un sitio web en particular<br>
				</p>
				<p>
					Nuestra herramienta de escaneo de IP es fácil de usar y proporciona resultados precisos y
					actualizados.<br>
					Explora nuestro sitio y descubre todo lo que puedes hacer con nuestras funciones de escaneo de
					Ip.<br>
				</p>
				<br>
				<h3>¿Cual ha sido nuestra motivación?</h3>
				<p>
					En la actualidad, el Protocolo de Internet (IP) es una de las tecnologías más importantes y<br>
					utilizadas en el mundo de las comunicaciones digitales. A través de la implementación de redes de
					IP,<br>
					se ha logrado establecer una red global que conecta a millones de dispositivos y usuarios en todo el
					<br>
					mundo. Sin embargo, esta conectividad también ha dado lugar a una serie de desafíos de seguridad, ya
					<br>
					que los usuarios y dispositivos se vuelven más vulnerables a los ataques malintencionados en línea.
					<br>
				</p>
				<p>
					Por esta razón hemos desarrollado está Web de escaneo de IPs, que permita a los administradores <br>
					de redes y otros usuarios detectar posibles amenazas en sus sistemas. En este trabajo se presentará
					una <br>
					revisión exhaustiva de las principales funcionalidades de la Web de escaneo de IPs disponibles <br>
					en la web, y se analizarán sus características y capacidades para ayudar a los usuarios a entender
					cómo <br>
					pueden ser utilizadas para mejorar la seguridad de sus redes.<br>
				</p>
				<img src="imagenes/ip-red.jpg" width="500px" height="400px"><br><br>
			</aside><br>

			<li class="anim"></li>
			<li class="anim"></li>
			<li class="anim"></li>
			<li class="anim"></li>
			<li class="anim"></li>
			<li class="anim"></li>
			<li class="anim"></li>
			<li class="anim"></li>
			<li class="anim"></li>
			<li class="anim"></li>
		</ul>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
		crossorigin="anonymous"></script>
</body>

</html>