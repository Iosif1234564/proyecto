<?php session_start();
if (isset($_SESSION['Id']) && isset($_SESSION['NombreUsuario'])) {
    ?>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <head>
        <title>Escaneo de puertos</title>
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
                height: 115vh;


            }

            .circles {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 115%;
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

            h3,
            .site-name {
                text-shadow: 2px 4px 3px rgba(0, 0, 0, 0.3);
                font-size: 55px;
                font-weight: bold;
                font-family: 'Arial Black';
                text-align: center;
            }

            label {
                text-shadow: 2px 4px 3px rgba(0, 0, 0, 0.3);
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

            aside {
                margin: 20px;
            }
        </style>

    </head>

<body>
    <script>
        displayOutput();
    </script>
    <div class="area">
        <ul class="circles">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a href="../página web/introduccion.php" class="navbar-brand text-info fw-semibold fs-4">Cerrar
                        sesión(<?php echo $_SESSION['NombreUsuario']; ?>)</a>


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
                                <li class="nav-item p-3 py-md-1"><a href="Index.php" class="nav-link">Inicio</a></li>
                                <li class="nav-item p-3 py-md-1"><a href="introduccion.php"
                                        class="nav-link">Introducción</a></li>
                                <li class="nav-item p-3 py-md-1"><a href="normativa.php" class="nav-link">Normativas</a>
                                </li>
                                <li class="nav-item p-3 py-md-1"><a href="funcionamiento.php" class="nav-link">Guía de funcionamiento</a>
                                </li>

                            </ul>
                            <div>
                                <a href="https://github.com/Iosif1234564/proyecto.git"><i class="bi bi-github"></i></a>
                                <a href="https://discord.gg/ZykGZqgR"><i class="bi bi-discord"></i></a>
                            </div>
                        </div>
                    </section>
                </div>
            </nav>

            <aside>
                <h2><b>El resultado de tu IP es:</h2>
                <h4>
                <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ip = $_POST["ip"];
    $startPort = $_POST["start_port"];
    $endPort = $_POST["end_port"];


    // Ejecutar el comando Nmap
    $command = "nmap -p $startPort-$endPort -sS -sV $ip";
    $output = shell_exec($command);


    // Filtrar la primera línea
    $lines = explode("\n", $output);
    $lines[1] = str_replace("Nmap", "Ip", $lines[1]);
    
$filteredOutput = implode("\n", array_slice($lines, 1));

// Eliminar las últimas dos líneas
$filteredLines = array_slice($lines, 1, -3); 

// Volver a unir las líneas filtradas
$filteredOutput = implode("\n", $filteredLines);

    // Registrar los datos en la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";


    // Crear una conexión
    $conn = new mysqli($servername, $username, $password, $dbname);


    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
   
    if(isset($_SESSION["NombreUsuario"])){
        $NombreUsuario = $_SESSION["NombreUsuario"];
      }  else {
    // El usuario no existe, mostrar error o manejar la situación adecuadamente
    echo "";
}
// Obtener el ID del usuario
$query = "SELECT Id FROM usuarios WHERE NombreUsuario = '$NombreUsuario'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $idUsuario = $row["Id"];


    // Crear la consulta INSERT con la clave foránea
    $sql = "INSERT INTO resultados (ip, estado, puerto, Id_usuarios) VALUES ('$ip', '$output', '$startPort-$endPort', '$idUsuario')";


    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error al registrar los datos en la base de datos: " . $conn->error;
    }
} 


// Cerrar la conexión
$conn->close();


// Mostrar la salida del comando
echo "<pre>$filteredOutput</pre>";
}
?>

</b>
            </aside>
            </h4>
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
</body>

</html>
<?php } ?>