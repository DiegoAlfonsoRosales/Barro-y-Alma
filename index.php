<?php include_once("Encabezado.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barro y Alma</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <main>
        <div class="container">
            <div class="row align-items-center">
                <!-- Carrusel -->
                <div class="col-md-6 mb-4">
                    <div id="carruselInicio" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img\articulos\hogar\Florero Ondas Azul Cobalto.webp" class="d-block w-100" alt="Artesanía 1">
                            </div>
                            <div class="carousel-item">
                                <img src="img\articulos\cocina\Botanero.webp" class="d-block w-100" alt="Artesanía 2">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Texto -->
                <div class="col-md-6">
                    <h1 class="mb-3 fw-bold display-5 text-md-start text-center">
                        Artesanía Mexicana Hecha con Alma
                    </h1>
                    <p class="intro text-md-start text-center"> 
                        Cada pieza cuenta una historia de tradición y pasión. Descubre colecciones únicas elaboradas por maestros artesanos.
                    </p>
                    <div class="text-center"> 
                        <a href="catalogo.php" class="btn-catalogo mt-3">Ver Catálogo</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include_once("pie.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>