<?php include_once("Encabezado.php"); 
include_once("includes/conexion.php"); // Asegura que la ruta sea correcta
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - Barro y Alma</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/catalog.css">
</head>
<body>
    <main>
        <div class="contenedor-catalogo">
            
            <!-- Selector de categorías dinámico -->
            <div class="filtro-categoria">
                <form action="catalogo.php" method="GET" id="filtroForm">
                    <label>Categoría:</label>
                    <select name="categoria_id" onchange="document.getElementById('filtroForm').submit()">
                        <option value="">Todas</option>
                        <?php
                        $sqlCat = "SELECT categoria_id, nombre FROM categorias";
                        $resCat = $conn->query($sqlCat);
                        while($cat = $resCat->fetch_assoc()){
                            $selected = (isset($_GET['categoria_id']) && $_GET['categoria_id'] == $cat['categoria_id']) ? 'selected' : '';
                            echo "<option value='{$cat['categoria_id']}' $selected>{$cat['nombre']}</option>";
                        }
                        ?>
                    </select>
                </form>
            </div>

            <!-- Productos dinámicos -->
            <div class="grid-productos">
                <?php
                $where = "";
                if(isset($_GET['categoria_id']) && is_numeric($_GET['categoria_id'])){
                    $categoria_id = intval($_GET['categoria_id']);
                    $where = "WHERE categoria_id = $categoria_id";
                }

                $sqlPro = "SELECT producto_id, nombre, precio, ruta_imagen1 FROM productos $where";
                $resPro = $conn->query($sqlPro);

                if($resPro->num_rows > 0){
                    while($pro = $resPro->fetch_assoc()){
                        echo '
                        <div class="producto">
                            <a href="producto.php?id='.$pro['producto_id'].'">
                                <img src="'.$pro['ruta_imagen1'].'" alt="'.$pro['nombre'].'">
                            </a>
                            <h3>'.$pro['nombre'].'</h3>
                            <p>$'.number_format($pro['precio'], 0).'</p>
                        </div>';
                    }
                } else {
                    echo '<p>No hay productos en esta categoría.</p>';
                }
                ?>
            </div>
            
        </div>
    </main>
    <?php include_once("pie.php"); ?>
</body>
</html>