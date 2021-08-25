<?php //llamado a funciones para realizar solicitudes del cliente
    require_once("../models/modelo.php");
    $usario = new Usuario();
    $datos = $usario->getUsuarios();
    require_once("../views/vista.php");
?>