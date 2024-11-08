<?php
require '../conexion.php';
$conexion = new Conexion();

$stmt = $conexion->getConn()->query("SELECT * FROM productos");
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($productos as $producto) {
    echo "<tr>
            <td>{$producto['id_producto']}</td>
            <td>{$producto['nombre']}</td>
            <td>{$producto['descripcion']}</td>
            <td>{$producto['precio']}</td>
            <td>{$producto['cantidad']}</td>
            <td>{$producto['categoria']}</td>
            <td><button class='btnEditar' data-id='{$producto['id_producto']}' data-nombre='{$producto['nombre']}' data-descripcion='{$producto['descripcion']}' data-precio='{$producto['precio']}' data-cantidad='{$producto['cantidad']}' data-categoria='{$producto['categoria']}'>Editar</button></td>
            <td><button class='btnEliminar' data-id='{$producto['id_producto']}'>Eliminar</button></td>
        </tr>";
}
?>
