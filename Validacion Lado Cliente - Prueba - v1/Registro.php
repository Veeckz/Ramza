<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<title> Registro </title>

		
	
	</head>

	<body>
		
		
				<label> Entero </label>
				<input type="text" id="Entero" placeholder="Entero"> <!-- Input: Simbolizar los controles -->
			
				<label> Texto </label>
				<input type="text" id="Texto" placeholder="Texto"> <!-- Input: Simbolizar los controles -->
				
				<label> Fecha </label>
				<input type="text" id="Fecha" placeholder="yyyy-dd-mm"> <!-- Input: Simbolizar los controles -->
				
				<button id="BtnRegistro" onclick="validar()"> Registrar</button>
		
		

		<div id="Respuesta" class="row">
		

		</div>



	
		<script src="js/jquery.js"></script>
	 	<script src="js/bootstrap.min.js"></script>
	 	<script src="js/Funciones.js" type="text/javascript"> </script>
		<script src="js/Validaciones.js" type="text/javascript"></script>

	</body>
</html>