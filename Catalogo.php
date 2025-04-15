<?php include_once("encabezado.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - Barro y Alma</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Hoja principal -->
    <link rel="stylesheet" href="css/catalog.css"> <!-- Estilos específicos -->
</head>
<body>
    <main>
        <div class="contenedor-catalogo">
            
            <!-- Selector de categorías -->
            <div class="filtro-categoria">
                <label>Categoría:</label>
                <select name="categorias">
                    <option value="">Todas</option>
                    <option value="bisuteria">Bisuteria</option>
                    <option value="cocina">Cocina</option>
                    <option value="hogar">Hogar</option>
                </select>
            </div>

            <!-- Productos -->
            <div class="grid-productos">
                
                <div class="producto">
                    <img src="img/articulos/bisuteria/Cilindro_Azul_Cobalto.webp" alt="Cilindro Azul">
                    <h3>Cilindros Azules</h3>
                    <p>$100</p>
                </div>

                <div class="producto">
                    <img src="img/articulos/cocina/Cazuela Chica.webp" alt="Platos de Talavera">
                    <h3>Cazuela Chica</h3>
                    <p>$150</p>
                </div>

                <div class="producto">
                    <img src="img/articulos/hogar/Florero Ondas Azul Cobalto.webp" alt="Macetas Artesanales">
                    <h3>Florero Azul Cobalto</h3>
                    <p>$300</p>
                </div>

            </div>
        </div>
    </main>
    <?php include_once("pie.php"); ?>
</body>
</html>