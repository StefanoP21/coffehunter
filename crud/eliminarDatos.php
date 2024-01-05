<?php
    include("../config/conexion.php");
    $Id = $_GET["Id"];
    $sql = "DELETE FROM productos WHERE IdProducto = '$Id'";
    
    $resultado = $conexion->query($sql);

    if ($resultado) {
        header("Location: ../productos.php");
    } else {
        echo "Datos no eliminados";
    }
    exit();
?>