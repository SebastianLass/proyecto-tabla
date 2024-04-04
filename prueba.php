<?php
include_once('./models/productoDAO.php');
$pr = new ProductoDAO();
$rta = $pr->traerDatosProducto();
print_r($rta);
?>