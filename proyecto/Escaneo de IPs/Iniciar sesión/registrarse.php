<!--Este fichero es el diseño del registro-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Registrarse</title>
</head>

<body>
    <div id="console"></div>
    <script>
        displayOutput();
    </script>
    <div class="area">
        <ul class="circles">
            <li class="anim"></li>
            <div class="contenedor">
                <h1><ins>Registrarse</ins></h1>
                <br>
                <form action="../Login/registrarse.php" method="POST">

                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error">
                            <?php echo $_GET['error'] ?>
                        </p>
                    <?php } ?>
                    <br>
                    <?php if (isset($_GET['success'])) { ?>
                        <p class="success">
                            <?php echo $_GET['success'] ?>
                        </p>
                    <?php } ?>
                    <br>

                    <label for="">
                        <img width="25px" src="../iconos/user.svg" alt="">
                        Usuario
                    </label>
                    <input type="text" placeholder="Ingrese usuario" name="NombreUsuario">
                    <label for="">
                        <img width="25px" src="../iconos/user.svg" alt="">
                        Nombre completo
                    </label>
                    <input type="text" placeholder="Ingrese nombre completo" name="NombreCompleto">
                    <label for="">
                        <img width="25px" src="../iconos/key.svg" alt="">
                        Clave
                    </label>
                    <input type="password" placeholder="Ingrese clave" name="Clave">
                    <label for="">
                        <img width="25px" src="../iconos/key.svg" alt="">
                        Repetir clave
                    </label>
                    <input type="password" placeholder="Repita su clave clave" name="RClave">
                    <input type="submit" class="button" value="Crear cuenta">
                    </button>
                    <a href="login.php" class="button_ingresar">
                        Iniciar sesión
                    </a>
                </form>
            </div>
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