<?php #cinicio.php
//reglas de negocio.
//conectar al modelo.
require '../modelo/modelo.php';
$clientes=listaClientes();
require '../vista/vinicio.php'; //incluyo mi vista