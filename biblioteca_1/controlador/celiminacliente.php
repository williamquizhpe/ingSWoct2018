<?php #celiminacliente.php
if(isset($_GET["idc"])){
    $idc= filter_var($_GET["idc"],FILTER_SANITIZE_STRING);
    require '../modelo/mventas.php';
    eliminaCliente($idc);
    header("location: cmanclientes.php#tclientes");
}