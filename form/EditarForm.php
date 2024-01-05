<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Producto</title>
  <link rel="icon" href="../assets/img/logo.png">

  <!--==================== BOOTSTRAP ====================-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--==================== CSS ====================-->
  <link rel="stylesheet" href="../assets/css/style.css">

  <!--==================== FONT AWESOME ====================-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer">

  <!--==================== UNICONS ====================-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

  <!--==================== ANIMATE CSS ====================-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <main>
        <section id="actualizar-form">
            <div class="actualizar__modal">
                <div class="actualizar__modal-content p-5">
                <h1 class="text-center mb-5">Editar Producto</h1>
                <div class="container">
                    <form action="../crud/editarDatos.php" method="POST" class="row g-2">
                        <?php
                            include ('../config/conexion.php');

                            $sql = "SELECT * FROM productos WHERE IdProducto =".$_GET['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                        ?>

                        <input type="Hidden" class="form-control" name="Id" value="<?php echo $row['IdProducto']; ?>">

                        <!--TRAER DATOS CATEGORIAS-->
                        <div class="class="col-md-12"">
                            <label class="mb-2">Categorias</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="Categorias">
                                <?php
                                    include ("../config/conexion.php");

                                    $sql1 = "SELECT * FROM categorias WHERE Id=".$row['CategoriaId'];
                                    $resultado1 = $conexion->query($sql1);

                                    $row1 = $resultado1->fetch_assoc();

                                    echo "<option selected value='".$row1['Id']."'>".$row1['NombreCategoria']."</option>";

                                    $sql2 = "SELECT * FROM categorias";
                                    $resultado2 = $conexion->query($sql2);

                                    while ($Fila = $resultado2->fetch_array()) {
                                        echo "<option value='".$Fila['Id']."'>".$Fila['NombreCategoria']."</option>";
                                    }
                                ?>   
                            </select>
                        </div>
                        
                        <!--TRAER DATOS MARCAS-->
                        <div class="col-md-12">
                            <label class="mb-2">Marcas</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="Marcas">
                                <?php
                                    include ("../config/conexion.php");

                                    $sql3 = "SELECT * FROM marcas WHERE Id=".$row['MarcaId'];
                                    $resultado3 = $conexion->query($sql3);

                                    $row3 = $resultado3->fetch_assoc();

                                    echo "<option selected value='".$row3['Id']."'>".$row3['NombreMarca']."</option>";

                                    $sql4 = "SELECT * FROM Marcas";
                                    $resultado4 = $conexion->query($sql4);

                                    while ($Fila = $resultado4->fetch_array()) {
                                        echo "<option value='".$Fila['Id']."'>".$Fila['NombreMarca']."</option>";
                                    }
                                ?>   
                            </select>
                        </div>
                         
                        <div class="col-md-12">
                            <label class="form-label">Precio</label>
                            <input type="text" class="form-control" name="Precio" value="<?php echo $row['Precio']; ?>">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Descripcion</label>
                            <input type="text" class="form-control" name="Descripcion" value="<?php echo $row['DescripcionProducto']; ?>">
                        </div>

                        <div class="col-md-12 text-center mt-5" >
                            <button type="submit" class="btn btn-outline-secondary text-light productos__actualizar mx-3">ACTUALIZAR <i class="uil uil-sync"></i></button>
                            <a href="../productos.php" class="btn btn-outline-secondary text-light productos__regresar mx-3">REGRESAR <i class="uil uil-arrow-circle-left"></i></a>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </section>
    </main>

    <!--==================== BOOTSTRAP ====================-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!--==================== MAIN JS ====================-->
    <script src="assets/js/main.js"></script>

    <!--==================== WOW JS ====================-->
    <script src="assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>