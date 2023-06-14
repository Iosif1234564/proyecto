<?php
//Con este fichero nos conectamos a la base de datos para almacenar los usuario  
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "login";

  // Establecer la conexión a la base de datos utilizando mysqli
  $conexion = new mysqli($host, $user, $pass, $db);

  // Verificar si la conexión a la base de datos se estableció correctamente
  if (!$conexion) {
    echo "Conexión fallida";
  }
