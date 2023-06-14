<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-080">
	<title>TFG</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<style>
		@import url('https://fonts.googleapis.com/css?family=Exo:400,700');

		* {
			margin: 0px;
			padding: 0px;
		}

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


		.area {
			background: #fffd6f;
			background: -webkit-linear-gradient(to left, #fffbf4, #a8038a);
			width: 100%;
			height: 950vh;


		}

		.circles {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 950%;
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


		p, li1 {
			text-align: center;
			text-shadow: 2px 4px 3px rgba(0, 0, 0, 0.3);
			font-size: 25px;
			font-weight: bold;
			font-family: 'Arial';
			text-align: left;
		}

		aside {
			margin: 20px;
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
							<h5 class="offcanvas-title text-info">Inicio</h5>
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


			<aside><br><br>
				<h1>Guía de funcionamiento</h1>
				<br>
				<p>
					En nuestra sección sobre la guía de funcionamiento mostraremos detalladamente sobre como los usuarios <br>
					tienee que utilizar nuestra página para poder escanaer las que desean.<br><br>
				</p>
				<p>PASO 1</p>
				<p>
					Para ello, primero tendremos que crearnos una cuenta por lo que nos tendremos que dirigir a "inicio de sesión."<br>
					<img src="imagenes/Captura1.png" width="950px" height="600px"><br><br>
				</p>
				<p>PASO 2</p>
				<p>
					Luego, nos tendremos que crear una una cuenta (tendremos que poner nuestro nombre, los apellidos y una clave para iniciar<br>
					cada que entemos con nuestro usuario) desde la opción de registrarse.<br>
				    <img src="imagenes/Captura2.png" width="550px" height="550px"><br><br>
				</p>
				<p>PASO 3</p>
				<p>
					Y para inicar la sesión nos iremos a la opción de "iniciar sesión" desde donde estabamos en el anterior paso<br>
					y ya nos podremos loguear sin ningún impedimento al iniciar con nuestro nombre y nuestra clave al pinchar en "ingresar".<br>
					<img src="imagenes/Captura3.png" width="550px" height="550px"><br><br>
				</p>
				<p>PASO 4</p>
				<p>
					Al iniciar sesión podremos observar que nos a aparecido una nueva sección que es en donde podremos escanear<br>
					las IPs que queramos (para ello, tendremos que meter una IP y el número de puertos que queramos escanear).<br>
					<img src="imagenes/Captura4.png" width="1700px" height="700px"><br><br>
				</p>
				<p>PASO 5</p>
				<p>
					Y podremos observar que al terminar el escaneo nos aparecerá la información de la IP que hemos escaneado.<br>
					Dicha información será nuestra IP, todos los puertos cerrados, los puertos que estan abiertos (con su <br>
					número, si están abiertos o filtrados, el nombre del servicio y la versión que está utilizando ese servicio),<br>
					La dirección MAC del equipo al que hemos escaneado y por último, el sistema operativo que utiliza el equipo.<br>
					<img src="imagenes/Captura5.png" width="1700px" height="700px"><br><br>          
				</p>
				<p>PASO 6</p>
				<p>
					Por último, contamos también con dos opciones extras:
					<ul>
					<li1>La primera opción se encuentra arriba a la derecha el primer icono se trata sobre github ahí es donde<br>
				        guardamos todas nuestras herramientas para los que quieran probar a usar un escaneo de IPs.<br>
						<img src="imagenes/Captura6.png" width="1700px" height="700px"><br><br>
						Si pinchamos en esa opción nos iremos directamente al repositorio en donde se encuentran todos los ficheros<br>
						que hemos utilizado para hacer funcionar la página web.<br>
						<img src="imagenes/Captura7.png" width="1700px" height="700px"><br><br>
					</li1>
					<li1>
						Y en la siguiente opción si volvemos nuevamente arriba a la derecha podremos observar otro icono más,<br>
						ese icono se trata de un servidor de atención al cliente desde Discord en donde resolveremos todas<br>
						vuestras dudas sobre la página web y sus múltiples funcionalidades<br>
						<img src="imagenes/Captura8.png" width="1700px" height="700px"><br><br>
						Desde Discord podreís contactar con nosotros por chat desde la sección de "dudas" o por llamada desde<br>
						la sección de "soporte".<br>
						<img src="imagenes/Captura9.png" width="1700px" height="700px"><br><br>
	                </li1>
	                </ul>
	            </p>
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