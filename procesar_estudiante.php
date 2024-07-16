<?php
require_once('conexion.php');
//echo "Hasta aquí llegue!!!";
//echo $_POST['codigo'].$_POST['apaterno'].$_POST['amaterno'].$_POST['nombres'].$_POST['carrera'].$_POST['domicilio'];
//verificar la conexion
if($conn->connect_error){
	die("Conexión faliida: ".$conn->connect_error);
}

//insertar

if (isset($_POST['insertar'])) {
	$codigo = $_POST['codigo'];
	$apaterno = $_POST['apaterno'];
	$amaterno = $_POST['amaterno'];
	$nombres = $_POST['nombres'];
	$carrera = $_POST['carrera'];
	$domicilio = $_POST['domicilio'];

	$sql = "CALL InsertarEstudiante ('$codigo','$apaterno','$amaterno','$nombres','$carrera','$domicilio');";
	if ($conn -> query($sql) === TRUE) {
		echo "Estudiante ingresado exitosamente.";
	}else{
		echo "Error al ingresar estudiante. ".$conn->error;
	}

}

//actualizar
if (isset($_POST['actualizar'])) {
	$codigo = $_POST['codigo'];
	$apaterno = $_POST['apaterno'];
	$amaterno = $_POST['amaterno'];
	$nombres = $_POST['nombres'];
	$carrera = $_POST['carrera'];
	$domicilio = $_POST['domicilio'];

	$sql = "CALL ActualizarEstudiante ('$codigo','$apaterno','$amaterno','$nombres','$carrera','$domicilio');";
	if ($conn -> query($sql) === TRUE) {
		echo "Estudiante actualizado exitosamente.";
	}else{
		echo "Error al actualizar estudiante. ".$conn->error;
	}
}
//eliminar
if (isset($_POST['eliminar'])) {
	$codigo = $_POST['codigo'];

	$sql = "CALL EliminarEstudiante ('$codigo');";
	if ($conn -> query($sql) === TRUE) {
		echo "Estudiante elimnado exitosamente.";
	}else{
		echo "Error al eliminar estudiante. ".$conn->error;
	}
}

//mostrar
if (isset($_POST['mostrar'])) {
	$sql = "CALL MostrarEstudiantes ();";
	$result = $conn->query($sql);
	if($result->num_rows >0){
		while($row = $result->fetch_assoc())
		{
			echo "Código: ".$row["codigo"].", Nombre: ". $row["nombres"].", Carrera: ".$row["carrera"]."<br>";
		}
	}else{
		echo "No se encontro registros.";
	}
}

echo "<a href='index.php'>Regresar</a>"


?>