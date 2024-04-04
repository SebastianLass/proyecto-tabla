<?php
include_once('../models/productoDAO.php');


if (isset($_POST['idProductoActualizar'], $_POST['nombreProductoActualizar'], $_POST['descripcionProductoActualizar'])) {
    
    $id = $_POST['idProductoActualizar'];
    $nombre = $_POST['nombreProductoActualizar'];
    $descripcion = $_POST['descripcionProductoActualizar'];

    
    $productoDAO = new ProductoDAO();

    
    if ($productoDAO->actualizarProducto($id, $nombre, $descripcion)) {
        echo 'El producto se actualizó correctamente';
    } else {
        echo 'Error al actualizar el producto';
    }
} else {
    echo 'Se requieren todos los datos para actualizar el producto';
}
?>

