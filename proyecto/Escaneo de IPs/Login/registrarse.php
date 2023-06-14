<?php
/** Este fichero se utilizará para crear una cuenta y posteriormente se almacenará en la base de datos */

  session_start();

  include_once('../Config/Conexion.php');
  if (isset($_POST['NombreUsuario']) && isset($_POST['NombreCompleto'])){
     function validar($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
     }


     $NombreUsuario = validar($_POST['NombreUsuario']);
     $NombreCompleto = validar($_POST['NombreCompleto']);
     $Clave = validar($_POST['Clave']);
     $RClave = validar($_POST['RClave']);

     $datosUsuario = 'NombreUsuario' . $NombreUsuario . 'NombreCompleto' . $NombreCompleto;

     if (empty($NombreUsuario)) {
        header("location: ../iniciar sesión/registrarse.php?error=El usuario es requerido&$datosUsuario");
        exit();
     }elseif(empty($NombreCompleto)){
        header("location: ../iniciar sesión/registrarse.php?error=El nombre completo es requerido&$datosUsuario");
        exit();
     }elseif(empty($Clave)){
        header("location: ../iniciar sesión/registrarse.php?error=La clave es requerido&$datosUsuario");
        exit();
     }elseif(empty($RClave)){
        header("location: ../iniciar sesión/registrarse.php?error=Repetir la clave es requerido&$datosUsuario");
        exit();
     }elseif($Clave !== $RClave){
        header("location: ../iniciar sesión/registrarse.php?error=La clave no coincide&$datosUsuario");
        exit();
     }else {
      $Clave = password_hash($_POST['Clave'], PASSWORD_BCRYPT);

        $sql = "SELECT * FROM usuarios WHERE NombreUsuario = '$NombreUsuario'";
        $query = $conexion->query($sql);

        if (mysqli_num_rows($query) > 0) {
            header("location: ../iniciar sesión/registrarse.php?error=El usuario ya existe!");
            exit();   
        }else {
            $sql2 = "INSERT INTO usuarios(NombreCompleto, NombreUsuario, Clave) VALUES('$NombreCompleto','$NombreUsuario','$Clave')";
            $query2 = $conexion->query($sql2);

            if ($query2) {
                header("location: ../iniciar sesión/registrarse.php?error=Usuario creado con éxito");
                exit();
            }else {
                header("location: ../iniciar sesión/registrarse.php?error=Ocurrio un error");
                exit();
            }
        }
     }

  }else{
    header("location: ../iniciar sesión/registrarse.php");
    exit();
  }