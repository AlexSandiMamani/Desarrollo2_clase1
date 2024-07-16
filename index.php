<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD ESTUDIANTE</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
	<h1>EXAMEN DE ENTRADA CRUD ESTUDIANTE</h1>
	<form method="POST" action="procesar_estudiante.php">

		<div class="mb-3">
		  	<label for="codigo" class="form-label">CODIGO: </label>
		  	<input type="text" class="form-control" id="codigo" name="codigo" placeholder="codigo">
		</div>



		<!-- <label for="codigo">CODIGO:</label>
		<input type="text" name="codigo" id="codigo" value="202015"><br> -->

		<label for="apaterno">APATERNO:</label>
		<input type="text" name="apaterno" id="apaterno" value="LOPEZ"><br>

		<label for="amaterno">AMATERNO:</label>
		<input type="text" name="amaterno" id="amaterno" value="SEQUEIROS"><br>

		<label for="nombres">NOMBRES:</label>
		<input type="text" name="nombres" id="nombres" value="RAMIRO"><br>

		<label for="carrera">CARRERA:</label>
		<input type="text" name="carrera" id="carrera" value="INFORMÁTICA"><br>

		<label for="domicilio">DOMICILIO:</label>
		<input type="text" name="domicilio" id="domicilio" value="UNSAAC PERAYOC"><br>
		
		<!-- <input type="submit" name="insertar" value="Guardar"> -->
		<button type="submit" name="insertar" class="btn btn-primary">Guardar</button>
		<input type="submit" name="actualizar" value="Actualizar">
		<input type="submit" name="eliminar" value="Eliminar">
		<input type="submit" name="mostrar" value="Mostrar">

	</form>	

</body>
<footer>
	
</footer>
</html>