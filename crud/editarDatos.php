<?php
    include("../config/conexion.php");

    $Id = $_POST["Id"];
    $Categorias = $_POST["Categorias"];
    $Marcas = $_POST["Marcas"];
    $Precio = $_POST["Precio"];
    $Descripcion = $_POST["Descripcion"];

    $sql = "UPDATE productos SET CategoriaId = '".$Categorias."', MarcaId = '".$Marcas."', Precio = '".$Precio."', DescripcionProducto = '".$Descripcion."' WHERE IdProducto = '".$Id."'";

    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header("Location: ../productos.php");
    } else {
        echo "Datos no actualizados";
    }
    exit();
?>