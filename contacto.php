<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  <link rel="icon" href="assets/img/logo.png">

  <!--==================== BOOTSTRAP ====================-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--==================== CSS ====================-->
  <link rel="stylesheet" href="assets/css/style.css">

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
  <header>
    <div class="nav-barra">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5 py-2 fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><img class="logo mb-3" src="assets/img/logo-cabecera2.png" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active text-light nav__enlace" aria-current="page" href="index.html">INICIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light nav__enlace" aria-current="page"
                  href="productos.php">PRODUCTOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light nav__enlace" aria-current="page" href="galeria.html">GALERÍA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light nav__enlace" aria-current="page" href="contacto.php">CONTACTO</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-outline-secondary text-light" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <main>
    <!-- Inicio de Contacto -->
    <section id="form-contacto" class="pt-5 mt-5">
      <form method="post" class="row g-2">
        <h1 class="text-center my-3 pb-4">Completa tu información</h1>
        <div class="col-md-6">
          <label for="nombre" class="form-label ">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>

        <div class="col-md-6">
          <label for="apellido" class="form-label ">Apellido</label>
          <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>

        <div class="col-md-12">
          <label for="email" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="email" name="correo" required>
        </div>

        <div class="col-md-5">
          <label for="distrito" class="form-label">Distrito</label>
          <select id="inputState" class="form-select" name="distrito" required>
          <option selected disabled>-- Seleccionar --</option>
            <?php
              include("config/conexion.php");

              $sql = $conexion->query("SELECT * FROM distritos");
              while($resultado = $sql->fetch_assoc()) {
                echo '<option value="'.$resultado["IdDistrito"].'">'.$resultado["NombreDistrito"].'</option>';
              }
            ?>
          </select>
        </div>

        <div class="col-md-7">
          <label for="telefono" class="form-label">Teléfono</label>
          <input type="tel" class="form-control" id="telefono" name="telefono" required>
        </div>

        <div class="col-md-12">
          <label for="asunto" class="form-label">Asunto</label>
          <textarea type="text" class="form-control" id="asunto" rows="3" name="asunto" required></textarea>
        </div>

        <div class="text-center col-12 mb-4">
          <button type="submit" class="btn btn-outline-secondary text-light btn__enviar" name="register">ENVIAR <i class="uil uil-message"></i></button>
        </div>

        <?php
        include("register/register.php");
        ?>
      </form>

      

    </section>
    <!-- Fin de Contacto -->
  </main>

  <!-- Inicio del Footer -->
  <footer class="text-center text-lg-start text-white footer">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-between p-4 footer__redes">
      <!-- Left -->
      <div class="me-5">
        <span>Conéctate conmigo a través de mis redes sociales</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://web.facebook.com/AldairStefanoPalomino"
          role="button" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/stefano_p21" role="button"
          target="_blank"><i class="fab fa-twitter"></i></a>
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/stefanop23/" role="button"
          target="_blank"><i class="fab fa-instagram"></i></a>
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/aldair-palomino/"
          role="button" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/StefanoP21" role="button"
          target="_blank"><i class="fab fa-github"></i></a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="footer__links">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">COFFEE HUNTER</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" />
            <h6>El mejor café a nivel nacional</h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Productos</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" />
            <h6>
              <a href="#productos" class="text-white">La Palestina</a>
            </h6>
            <h6>
              <a href="#productos" class="text-white">Huánuco</a>
            </h6>
            <h6>
              <a href="#productos" class="text-white">Alto Inambari</a>
            </h6>
            <h6>
              <a href="#productos" class="text-white">Geisha</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Enlaces útiles</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" />
            <h6>
              <a href="index.html" class="text-white">Inicio</a>
            </h6>
            <h6>
              <a href="productos.php" class="text-white">Productos</a>
            </h6>
            <h6>
              <a href="galeria.html" class="text-white">Galería</a>
            </h6>
            <h6>
              <a href="contacto.php" class="text-white">Contacto</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contacto</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" />
            <h6><i class="fas fa-home mx-2"></i> Miraflores - Av. La Paz 646</h6>
            <h6><i class="fas fa-envelope mx-2"></i> stefanop21@outlook.es</h6>
            <h6><i class="fas fa-phone mx-2"></i> +51 987 052 642</h6>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3 footer__autor">
      <span>© 2023 Copyright: <a class="text-white" href="https://github.com/StefanoP21" target="_blank"> Stefano
          Palomino</a></span>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Fin del Footer -->

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