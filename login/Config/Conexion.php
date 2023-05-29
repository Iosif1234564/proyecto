<?php
/*Con este fichero nos conectamos a la base de datos para almacenar los usuario */ 
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "login";

  $conexion = new mysqli($host, $user, $pass, $db);

  if (!$conexion) {
    echo "Conexión fallida";
  }