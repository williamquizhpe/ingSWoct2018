<?php #cgrabaproducto.php
if(isset($_POST['codproducto'])){
 $codp= $_POST['codproducto'];
 $nom= $_POST['nombre'];
 $des= $_POST['descripcion'];
 $cos= $_POST['costo'];
 $stock= $_POST['stock'];
 
 if(is_uploaded_file($_FILES["imagen"]["tmp_name"])){
     $archtmp=$_FILES["imagen"]["tmp_name"];//extraemos tmp
     $file=fopen($archtmp,"r+b");//abro r:read b:binario
     $binario= fread($file, filesize($archtmp));//leemos y asignamos
     fclose($file);
 }else{
     $binario=NULL;
 }
 require '../modelo/modelo.php';//conectarnos modelo
 ingresaProducto($codp, $nom, $des, $cos, $stock, $binario);
 header("location: cmanproductos.php");
}