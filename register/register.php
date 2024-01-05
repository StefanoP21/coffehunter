<?php
    include("config/conexion.php");

    if (isset($_POST["register"])) {
        if (
            strlen($_POST["nombre"]) >= 1 &&
            strlen($_POST["apellido"]) >= 1 &&
            strlen($_POST["correo"]) >= 1 &&
            strlen($_POST["telefono"]) >= 1 &&
            strlen($_POST["distrito"]) >= 1 &&
            strlen($_POST["asunto"]) >= 1 
        ) {
            $nombre = trim($_POST["nombre"]);
            $apellido = trim($_POST["apellido"]);
            $correo = trim($_POST["correo"]);
            $telefono = trim($_POST["telefono"]);
            $distrito = trim($_POST["distrito"]);
            $asunto = trim($_POST["asunto"]);

            $consulta = "INSERT INTO contacto(Nombre, Apellido, Correo, Telefono, Distrito, Asunto) VALUES ('$nombre', '$apellido', '$correo', '$telefono', '$distrito', '$asunto')";

            $resultado = mysqli_query($conexion, $consulta);

            if ($resultado) {
                ?>
                <h3 class="text-center">¡Te has inscripto correctamente!</h3>
                <?php
            } else {
                ?>
                <h3 class="text-center danger">¡Ups ha ocurrido un error!</h3>
                <?php
            }
        } 
        exit();
    }
?>