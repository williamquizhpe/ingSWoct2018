<?php #ceditacliente.php

if(isset($_GET["idc"])){
    $idc= filter_var($_GET["idc"],FILTER_SANITIZE_STRING);
    require '../modelo/mventas.php';
    $micliente= selectClientesId($idc);
    $clientes= listaClientes();
    require '../vista/veditacliente.php';
}
