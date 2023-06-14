<?php session_start();
if (isset($_SESSION['Id']) && isset($_SESSION['NombreUsuario'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="./estilos.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Exo:400,700');

        html {
            height: 100%;
        }

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
            height: 100vh;


        }

        .circles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
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
            font-size: 100%;
            text-align: left;
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
        <script>
            displayOutput();
        </script>
        <div class="area">
            <ul class="circles">

                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a href="../página web/introduccion.php" class="navbar-brand text-info fw-semibold fs-4">Cerrar
                            sesión (<?php echo $_SESSION['NombreUsuario']; ?>)</a>


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
                                    <li class="nav-item p-3 py-md-1"><a href="index.php" class="nav-link">Escaneo de IPs</a></li>
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
                <br>
                <br>
                <br>
                <br>
                <div class="container">
                    <div class="row">
                        <form method="post" action="scan.php">
                            <div class="mb-3">
                                <label for="ip" class="form-label">Dirección IP:</label>
                                <input type="text" name="ip" id="ip" class="form-text" required>
                                <div id="emailHelp" class="form-text"><b><h5>Desde esta opción podrá buscar cualquier dirrección IP
                                    que se encuentre en su misma red para escanear los puertos.</b></h5></div>
                            </div>
                            <div class="mb-3">
                                <label for="start_port">Puerto Inicial:</label>
                                <input type="number" name="start_port" id="start_port" required>
                                <div id="emailHelp" class="form-text"><b><h5>En la siguiente opción marque el número de puerto por
                                    el que quiera empezar a escanear.</b></h5></div>
                            </div>
                            <div class="mb-3">
                                <label for="start_port">Puerto Final:</label>
                                <input type="number" name="end_port" id="end_port" max="5000" required>
                                <div id="textHelp" class="form-text"><b><h5>En la última opción marque un número de puerto más
                                    grande que el anterior para escaner todos los puertos desde puerto inicial que has
                                    marcado hasta el puerto final que tengas en esta opción. </b></h5></div>
                            </div>
                            <button class="button">Escanear</button>
                        </form>
                    </div>
                </div>

                </form>
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
<?php
  }
  
  else{
    header('location: ../iniciar sesión/login.php');
}
  
?>