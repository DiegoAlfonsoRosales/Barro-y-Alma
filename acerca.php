<?php include_once("encabezado.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Acerca de Barro y Alma</title>
</head>
<body>
    <main>
        <!-- Título con fondo desvanecido -->
        <section class="hero-section">
            <div class="hero-bg"></div>
            <h1>Nuestra Historia</h1>
        </section>

        <!-- Contenido informativo -->
        <div class="contenedor-texto">
            <p class="destacado">Desde 2010, Barro y Alma fusiona la tradición artesanal mexicana con diseño contemporáneo.</p>
            
            <p>Fundada en Puebla por Edgar Jiménez y Diego Rosales, dos apasionados por preservar las técnicas ancestrales de la talavera, 
            creamos piezas únicas que cuentan historias. Cada obra es elaborada manualmente por maestros alfareros 
            usando los mismos métodos que se practicaban en el siglo XVI.</p>

            <div class="acordeon bootstrap-component"> <!-- Componente Bootstrap -->
                <h3>Nuestros Fundadores ▼</h3>
                <div class="contenido-acordeon">
                    <p><strong>Edgar Jiménez:</strong> Ingeniero industrial con especialización en diseño sostenible. Premio Nacional de Artesanías 2018.</p>
                    <p><strong>Diego Rosales:</strong> Historiador del arte y curador de la exposición "Talavera: Legado Vivo" en el Museo Franz Mayer.</p>
                </div>
            </div>
        </div>
    </main>
    <?php include_once("pie.php"); ?>
    
    <!-- Script para acordeón -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>