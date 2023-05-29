<?php session_start();
  if (isset($_SESSION['Id']) && isset($_SESSION['NombreUsuario'])){
?>
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
			text-align: center;
		}
			label {
			text-shadow: 2px 4px 3px rgba(0,0,0,0.3);
			font-size: 35px;
			font-weight: bold;
			font-family: 'Arial Black';
			text-align: center;	
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
			position: fixed;
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
			color: white;
		}
	
			#logo-header .site-name {
			display: block;
			font-weight: 700;
			font-size: 1.2em;
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
			img {
			display: block;
  			width: 25%;
 			margin-left: auto;
  			margin-right: auto;
		}

		footer {
		text-align: center;
		padding: 3px;
		background-color: black;
		color: #ffffff;
		margin-top: 240px;
		}
		</style>
	</head>
	<body>
		<header>
			<a id="logo-header" href="introduccion.php">
				<span class="site-name">Cerrar sesión</span>
			</a>
			<nav>
			</nav>
		</header>
		<br>
		<br>
		<br>
		<br>
		<h1>411SCANNER</h1>
		<br>
		<img src="imagen1.png" width="200px" height="150px">
		<form action="/action_page.php"><br>
  			<label for="ipname">IP:</label>
  			<input type="text" id="ipname" name="ipname" placeholder="introduce tu IP"><br><br>
			<button class="button">Buscar</button>
		</form>
		<p>
			
		</p>
		<footer>
			<p><center>futuro logo</center></p>
		</footer>
	</body>
</html>
<?php 
  }else {
    header('location: ../login.php');
  }
?>
