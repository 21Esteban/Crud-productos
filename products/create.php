<?php
require '../conexion.php';
$conexion = new Conexion();

if (isset($_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['cantidad'], $_POST['categoria'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $categoria = $_POST['categoria'];

    $stmt = $conexion->getConn()->prepare("INSERT INTO productos (nombre, descripcion, precio, cantidad, categoria) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nombre, $descripcion, $precio, $cantidad, $categoria]);
    echo "Producto creado correctamente.";
}
?>
