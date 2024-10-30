<?php
// clientes/editar.php

require '../config/database.php';

$id = $_GET['id'];
$cliente = $database->clientes->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $database->clientes->updateOne(
        ['_id' => new MongoDB\BSON\ObjectId($id)],
        ['$set' => ['nombre' => $nombre]]
    );
    header('Location: index.php');
}
?>

<h1>Editar Cliente</h1>
<form method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $cliente->nombre; ?>" required>
    <button type="submit">Actualizar</button>
</form>
<a href="index.php">Volver a la lista</a>
