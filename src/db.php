<?php

$host = "mysql";
$user = "root";
$pass = "123456";
$dbname = "practice_db";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conexion_status = "Conectado correctamente a MySQL ✔️";
} catch (PDOException $e) {
    $conexion_status = "Error de conexión ❌: " . $e->getMessage();
}
