<?php
require '../conexion.php';
$conexion = new Conexion();

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $stmt = $conexion->getConn()->prepare("DELETE FROM productos WHERE id_producto = ?");
    $stmt->execute([$id]);
    echo "Producto eliminado correctamente.";
}
?>
