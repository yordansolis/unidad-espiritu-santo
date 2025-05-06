<?php
// Conexion a la base de datos
$host = "sql209.infinityfree.com";
$dbname = "if0_38712495_XXX";
$username = "if0_38712495";
$password = "yWxrBSxigSs8";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES utf8mb4");
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}


?>