<?php #celiminaproducto.php
if(isset($_GET["idp"])){
    $idp= filter_var($_GET["idp"],FILTER_SANITIZE_NUMBER_INT);
    require '../modelo/modelo.php';
    eliminaProducto($idp);
    header("location: cmanproductos.php#tproductos");
}