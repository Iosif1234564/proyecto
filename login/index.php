<?php session_start();
  if (isset($_SESSION['Id']) && isset($_SESSION['NombreUsuario'])){
?>
<!DOCTYPE html>
<html>
<head>
    <title>Escaneo de puertos</title>
</head>
<style>
		body {
			background-image: linear-gradient(#FFFFFF, rgb(222,201,153));
		}

		    html {
				height: 100%;
		}

			h3, .site-name {
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

    </style>
<body>
<header>
	<a id="logo-header" href="página web/introduccion.php">
	    <span class="site-name">Cerrar sesión</span>
	</a>
	<nav>
	</nav>
</header>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <form method="post" action="scan.php">
        <label for="ip">Dirección IP:</label>
        <input type="text" name="ip" id="ip" required><br>
        
        <label for="start_port">Puerto Inicial:</label>
        <input type="number" name="start_port" id="start_port" required><br>
        
        <label for="end_port">Puerto Final:</label>
        <input type="number" name="end_port" id="end_port" required><br>
        
        <button class="button">Buscar</button>
        <!--<input type="submit" value="Escanear">-->
    </form>
</body>
</html>
<?php 
  }else {
    header('location: login.php');
  }
?>