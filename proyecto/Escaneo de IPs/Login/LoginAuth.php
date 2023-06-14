<?php
/** Este fichero se utilizará para logearnos con una cuenta ya existente en la base de datos */

//Se inicia la sesión para poder almacenar y acceder a variables de sesión en el script 
 session_start();


//Se incluye el archivo '../Config/Conexion.php', que contiene la configuración de la conexión a la base de datos
 include_once('../Config/Conexion.php');
 if (isset($_POST['NombreUsuario']) && isset($_POST['Clave'])) {
 
    
//Se define una función llamada 'Validar' que se utiliza para limpiar y validar los datos enviados por el formulario.
    function Validar($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
    }


//Se llama a la función 'Validar' para limpiar y validar el valor del campo 'NombreUsuario' y 'Clave' 
//y se asigna el resultado a la variable '$Usuario' y '$clave' respectivamente.
 $Usuario = Validar($_POST['NombreUsuario']);
 $clave = Validar($_POST['Clave']);


//Se verifica si los campos estan vacíos y se redirecciona 
//a la ruta del login con un mensaje de error en la URL si es el caso.
 if (empty($Usuario)) {
    header('location: ../iniciar sesión/login.php?error=El usuario es requerido');
    exit();
 }elseif (empty($clave)) {
    header('location: ../iniciar sesión/login.php?error=La clave es requerida');
    exit();
 }else {
//Se construye una consulta SQL para seleccionar todos los registros de la tabla 'usuarios' desde 
//campo 'NombreUsuario' para que coincid con el valor de '$Usuario'.
  $Sql = "SELECT * FROM usuarios WHERE NombreUsuario = '$Usuario'";

//Se ejecuta la consulta utilizando la función 'mysqli_query' y se almacena 
//el resultado en la variable '$query'.
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
                  location.href = '../sesión iniciada/index.php'
                </script>";

            }else {
                header('Location:../iniciar sesión/login.php?error=Usuario o clave incorrecta');
            }
        }else {
            header('Location:../iniciar sesión/login.php?error=Usuario o clave incorrecta');
        }
    }else {
        header('Location:../iniciar sesión/login.php?error=Usuario o clave incorrecta');
    }
 }
}
