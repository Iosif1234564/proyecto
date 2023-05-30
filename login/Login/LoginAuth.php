<?php
/** Este fichero se utilizará para logearnos con una cuenta ya existente en la base de datos */

 session_start();

 include_once('../Config/Conexion.php');
 if (isset($_POST['NombreUsuario']) && isset($_POST['Clave'])) {
   
    function Validar($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
    }

 $Usuario = Validar($_POST['NombreUsuario']);
 $clave = Validar($_POST['Clave']);

 if (empty($Usuario)) {
    header('location: ../login.php?error=El usuario es requerido');
    exit();
 }elseif (empty($clave)) {
    header('location: ../login.php?error=La clave es requerida');
    exit();
 }else {
    $Sql = "SELECT * FROM usuarios WHERE NombreUsuario = '$Usuario'";
    $query = mysqli_query($conexion, $Sql);

    if ($query->num_rows==1){
        $usuarioQ = $query->fetch_assoc();
       
        $Id = $usuarioQ['Id'];
        $NombreUsuario = $usuarioQ['NombreUsuario'];
        $Clave = $usuarioQ['Clave'];
        $NombreCompleto = $usuarioQ['NombreCompleto'];

        if ($Usuario === $NombreUsuario) {
            if (password_verify($clave, $Clave)) {
                $_SESSION['Id'] = $Id;
                $_SESSION['NombreUsuario'] = $NombreUsuario;
                $_SESSION['NombreCompleto'] = $NombreCompleto;

                echo "<script>
                  alert('Bienvenido $NombreCompleto');
                  location.href = '../index.php'
                </script>";
            }else {
                header('Location:../login.php?error=Usuario o clave incorrecta');
            }
        }else {
            header('Location:../login.php?error=Usuario o clave incorrecta');
        }
    }else {
        header('Location:../login.php?error=Usuario o clave incorrecta');
    }
 }
}
