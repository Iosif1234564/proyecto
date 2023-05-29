<!--Este fichero es el diseño del inicio de sesión-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style1.css">
    <title>Login</title>
</head>
<body>
 <div class="contenedor">
    <h1><ins>Iniciar sesión</ins></h1>
    <br>
    <form action="Login/LoginAuth.php" method="POST">
        
       <?php if(isset($_GET['error'])) { ?>
        <p><?php echo $_GET['error'] ?></p>
       <?php } ?>

        <label for="">
            <img width="25px" src="iconos/user.svg" alt="">
            Usuario
        </label>
        <input type="text" placeholder="Ingrese usuario" name="NombreUsuario" autocomplete="off">
        <label for="">
            <img width="25px" src="iconos/key.svg" alt="">
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
</body>
</html>