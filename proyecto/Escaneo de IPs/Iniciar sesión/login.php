<!--Este fichero es el diseño del inicio de sesión-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="area">
        <ul class="circles">

            <div class="contenedor">
                <h1><ins>Iniciar sesión</ins></h1>
                <br>
                <form action="../Login/LoginAuth.php" method="POST">

                    <?php if (isset($_GET['error'])) { ?>
                        <p>
                            <?php echo $_GET['error'] ?>
                        </p>
                    <?php } ?>

                    <label for="">
                        <img width="25px" src="../iconos/user.svg" alt="">
                        Usuario
                    </label>
                    <input type="text" placeholder="Ingrese usuario" name="NombreUsuario" autocomplete="off">
                    <label for="">
                        <img width="25px" src="../iconos/key.svg" alt="">
                        Clave
                    </label>
                    <input type="password" placeholder="Ingrese clave" name="Clave" autocomplete="off">
                    <button class="button">
                        Ingresar
                    </button>
                    <a href="registrarse.php" class="button">
                        Registrarse
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