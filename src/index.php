<?php
require 'db.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hello World</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align:center;
            margin-top: 100px;
        }
        h1 { font-size: 50px; }
        p { font-size: 22px; }
    </style>
</head>
<body>
    <h1>Hello World</h1>
    <p>Conexión MySQL via Docker Compose</p>

    <p><strong>Estado conexión:</strong> <?= $conexion_status ?></p>
</body>
</html>
