<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "coffeehunter";

  $conexion = new mysqli($host, $user, $pass, $db);
  if(!$conexion){
    echo 'Error al conectar a la base de datos';
  }
?>