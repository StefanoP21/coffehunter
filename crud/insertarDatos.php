<?php
    include("../config/conexion.php");

    $categoria = $_POST["CategoriaP"];
    $marca = $_POST["MarcaP"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];

    $sql = "INSERT INTO productos (CategoriaId, MarcaId, Precio, DescripcionProducto) VALUES ('$categoria', '$marca', '$precio', '$descripcion')";
    $resultado = mysqli_query($conexion, $sql);
    // $resultado = $conexion->query($sql); // Otra forma de hacerlo 
     
    if ($resultado) {
        header("Location: ../productos.php");
    } else {
        echo "Datos no insertados";
    }
    exit();
?>