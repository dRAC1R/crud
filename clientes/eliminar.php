<?php
// clientes/eliminar.php

require '../config/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el cliente de la base de datos
    $result = $database->clientes->deleteOne(['_id' => new MongoDB\BSON\ObjectId($id)]);

    if ($result->getDeletedCount() > 0) {
        echo "Cliente eliminado con éxito.";
    } else {
        echo "Error al eliminar el cliente.";
    }
}

// Redirigir a la lista de clientes después de eliminar
header('Location: index.php');
exit();
?>
