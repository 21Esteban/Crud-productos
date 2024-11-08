<?php
require '../conexion.php';
$conexion = new Conexion();

if (isset($_POST['id_producto'], $_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['cantidad'], $_POST['categoria'])) {
    $id_producto = $_POST['id_producto'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $categoria = $_POST['categoria'];

    $stmt = $conexion->getConn()->prepare("UPDATE productos SET nombre = ?, descripcion = ?, precio = ?, cantidad = ?, categoria = ? WHERE id_producto = ?");
    $stmt->execute([$nombre, $descripcion, $precio, $cantidad, $categoria, $id_producto]);
    echo "Producto actualizado correctamente.";
}
?>
