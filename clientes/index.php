<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/styles.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

// clientes/index.php

require '../config/database.php';

// Obtener la lista de clientes
$clientes = $database->clientes->find();

echo "<div class='container'>";
echo "<h1>Lista de Clientes</h1>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nombre</th><th>Acciones</th></tr>";

foreach ($clientes as $cliente) {
    echo "<tr>";

    echo "<td>{$cliente->nombre}</td>";
    echo "<td>
            <a href='editar.php?id={$cliente->_id}'>Editar</a> | 
            <a href='eliminar.php?id={$cliente->_id}' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este cliente?\");'>Eliminar</a>
          </td>";
    echo "</tr>";
}

echo "</table>";
echo "<a href='nuevo.php' class='back-link'>Añadir nuevo cliente</a>";
echo "</div>";
?>

?>
