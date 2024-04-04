<?php
include_once('../models/productoDAO.php');
$pr = new ProductoDAO();
$rta=$pr->addProducto();
echo('El registro fue agregado correctamente');

?>
