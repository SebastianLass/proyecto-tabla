<?php
include_once('../models/productoDAO.php');
$pr = new ProductoDAO();
$rta = $pr->traerDatosProducto();
echo json_encode($rta);
?>