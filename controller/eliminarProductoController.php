<?php
include_once(__DIR__.'/../modelo/ProductoDAO.php');

// Verificar si se recibió el ID del producto a eliminar
if(isset($_POST['id'])) {
    // Obtener el ID del producto a eliminar
    $id = $_POST['id'];

    // Instanciar la clase ProductoDAO
    $productoDAO = new ProductoDAO();

    // Intentar eliminar el producto
    if ($productoDAO->eliminarProducto($id)) {
        echo "Producto eliminado correctamente";
    } else {
        echo "Error al eliminar el producto";
    }
} else {
    // Enviar un mensaje de error si no se proporcionó el ID del producto
    echo "Error: ID de producto no proporcionado";
}
?>
