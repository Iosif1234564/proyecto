<?php
/** Este fichero sirve para cerrar la sesión de nuestro usuario cuando estemos conectados con una cuenta */   
    session_start();
    session_unset();
    session_destroy();
    
  header('location:../página web/introduccion.php');


   
?>