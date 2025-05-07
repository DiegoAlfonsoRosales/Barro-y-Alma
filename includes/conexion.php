<?php
//datos de conexion a nuestra BD
$host = "fdb1030.awardspace.net"; //"localhost" para los que usan xampp o wampp
$user = "4582315_db";
$password = "Diegolin04";
$db = "4582315_db"; //Cambiar este dato por nuesta base

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Error de conexión: ".$conn->connect_error);
}
?>