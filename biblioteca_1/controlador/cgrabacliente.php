<?php #cgrabacliente.php
if(isset($_POST['cedula'])){
    $ced=$_POST['cedula'];
    $nom=$_POST['nombre'];
    $dir=$_POST['direccion'];
    $tel=$_POST['telefono'];
    $fecha=$_POST['fechan'];
    
    if(is_uploaded_file($_FILES["foto"]["tmp_name"])){
        $arch=$_FILES["foto"]["tmp_name"];
        $file= fopen($arch, "r+b");//r:read b:binario
        $binario= fread($file, filesize($arch));//leo extraigo binaria
        fclose($file);
    }else{
        $binario=NULL;
    }
    require '../modelo/mventas.php';
    ingresaCliente($ced, $nom, $dir, $tel, $fecha, $binario);
    header("Location: cmanclientes.php");
}