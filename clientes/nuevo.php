<?php
// clientes/nuevo.php

require '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $database->clientes->insertOne(['nombre' => $nombre]);
    header('Location: index.php');
}
?>

<h1>Añadir Nuevo Cliente</h1>
<form method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>
    <button type="submit">Añadir</button>
</form>
<a href="index.php">Volver a la lista</a>
