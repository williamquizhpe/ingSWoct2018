<?php #modelo.php
$servidor="localhost";
$usuario="root";
$pass="";
$based="ventas";

function listaClientes(){
    global $servidor,$usuario,$pass,$based;
    $con=new mysqli($servidor,$usuario,$pass,$based);
    if($con->connect_errno){
        die("Error de Conexion");//Mensaje de muerte. Para la ejecucion
    }
    $sql="select * from clientes";
    $res=$con->query($sql);
    $datos=array();
    while($fila=$res->fetch_assoc()){
        $datos[]=$fila;
    }
    $con->close();
    return $datos;
}
function ingresaProducto($cp,$np,$dp,$ctp,$st,$im){
    global $servidor,$usuario,$pass,$based;
    $con=new mysqli($servidor,$usuario,$pass,$based);
    if($con->connect_errno){
        die("Error de Conexion");//Mensaje de muerte. Para la ejecucion
    }
    $pvp=$ctp* 1.30;//30% adicional al costo
   // $im=mysql_escape_string($im);
    $im=$con->escape_string($im);
    $sql="INSERT INTO items
(`iditems`,`nombre`,`descripcion`,`costo`,`pvp`,`stock`,`imagen`)
VALUES('$cp','$np','$dp','$ctp','$pvp','$st','$im')
";
 $res=$con->query($sql);
 $con->close();
 //echo $sql;
 return $res;
}
function listaProductos(){
    global $servidor,$usuario,$pass,$based;
    $con=new mysqli($servidor,$usuario,$pass,$based);
    if($con->connect_errno){
        die("Error de Conexion");//Mensaje de muerte. Para la ejecucion
    }
    $sql="select * from items";
    $res=$con->query($sql);
    $datos=array();
    while($fila=$res->fetch_assoc()){
        $datos[]=$fila;
    }
    $con->close();
    return $datos;
}
