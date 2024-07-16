<?php 
$servidor="localhost";
$usuario="root";
$contrasenia="";
$nombre_bd="bd_prueba1";


//realiza conexion
$conn = new mysqli($servidor, $usuario, $contrasenia, $nombre_bd);
//verifico si ha conexion
if($conn->connect_error){
	die("Conexion fallida:".$conn->connect_error);
}else{
	//echo "Conexión exitosa!";
}

?>