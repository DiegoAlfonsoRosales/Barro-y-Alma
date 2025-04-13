<?php
session_start();
if(isset($_SESSION['usuario_id'])){
    header("Location: restringida.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Barro y Alma</title>
    <link rel="stylesheet" href="css/css_header.css">
    <link rel="stylesheet" href="css/css_footer.css">
    <link rel="stylesheet" href="css/css_login.css">
</head>
<body>
    <?php include_once("Encabezado.php"); ?>
    
    <main class="login-main">
        <div class="login-container">
            <h2>Iniciar Sesión</h2>
            <form method="post" action="login.php">
                <div>   
                    <label for="login">Usuario:</label>
                    <input type="text" name="login" id="login" required>
                </div>
                
                <div>
                    <label for="pass">Contraseña:</label>
                    <input type="password" name="pass" id="pass" required>
                </div>
                    
                <input type="submit" value="Ingresar">
            </form>
        </div>
    </main>
    
    <?php include_once("pie.php"); ?>
</body>
</html>