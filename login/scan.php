<!DOCTYPE html>
<html>

<head>
    <title>Escaneo de puertos</title>
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
			left: 0px;
			top: 0;
			position: absolute;
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

</head>

<body>
    <header>
        <a id="logo-header" href="index.php">
            <span class="site-name">Escanear otra IP</span>
        </a>
    </header>
    <aside>
        <h2>El resultado de tu IP es:
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $ip = $_POST["ip"];
                $startPort = $_POST["start_port"];
                $endPort = $_POST["end_port"];

                // Ejecutar el comando Nmap
                $command = "nmap -p $startPort-$endPort $ip";
                $output = shell_exec($command);

                // Mostrar la salida del comando
                echo "<pre>$output</pre>";
            }
            ?>
    </aside>
    </h2>
    </div>
</body>

</html>