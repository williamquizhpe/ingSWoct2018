<?php //mventas.php
$host="localhost";
$usuario="root";
$pass="";
$based="ventas";
function listaClientes(){
 global $host,$usuario,$pass,$based;
 $con=new mysqli($host,$usuario,$pass,$based);
 if($con->connect_errno){
     die("Error Conexion"); }
 $sql="select * from clientes";
 $res=$con->query($sql);
 $datos=array();
 while($fila=$res->fetch_assoc()){
     $datos[]=$fila;
 }
 $con->close();
 return $datos;
}
function ingresaCliente($ce,$no,$di,$te,$fe,$fo){
    global $host,$usuario,$pass,$based;
 $con=new mysqli($host,$usuario,$pass,$based);
 if($con->connect_errno){
     die("Error Conexion"); }
     $fo=$con->escape_string($fo);
     $sql="INSERT INTO `clientes`
(`cedula`,`nombre`,`telefono`,`direccino`,`fechaNacimiento`,`foto`)
VALUES
('$ce','$no','$te','$di','$fe','$fo');
";
     $res=$con->query($sql);
     $con->close();
     return $res;
}
