<?php #cpuerta.php
if (isset($_POST["usuario"])){
    $usuario= filter_var($_POST["usuario"],FILTER_SANITIZE_STRING);
    $pass=filter_var($_POST["pass"],FILTER_SANITIZE_STRING);
    if($usuario=='juanp' ){
        if($pass=='1234'){
            header("location: cinicio.php");
        }
        else {
            header("location: clogin.php?m=p");
        }
    }else{
            header("location: clogin.php?m=u");
    }
}