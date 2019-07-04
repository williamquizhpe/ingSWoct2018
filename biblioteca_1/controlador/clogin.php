<?php #clogin.php
$mensaje='';
if(isset($_GET["m"])){
    $m= filter_var($_GET["m"],FILTER_SANITIZE_STRING);
    if($m=='u'){
        $mensaje="Usuario Incorrecto";
    }else{
        $mensaje="Contraseña Incorrecta";
    }
}
 require '../vista/vlogin.php';