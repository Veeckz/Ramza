
<html>
	<head>
		<meta charset="utf8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<title> Registro Alumnos </title>
	
	</head>

	<body>

		<div class="row"> <!--Se mantenga todo en la misma fila -->

			<div class="col-md-6 col-xs-12 text-left">				
				<label> ID_Producto </label>
				<input id= "ID_Producto" type="text" maxlenght="11"> <!-- Input: Simbolizar los controles -->
				
			</div>

			<div class="col-md-6 col-xs-12 text-left">
				<label> Nombre </label>
				<input id= "Nombre" type="text" maxlenght="11"> <!-- Input: Simbolizar los controles -->
				
			</div>
		</div>

		<div class="row"> <!--Se mantenga todo en la misma fila -->

			<div class="col-md-6 col-xs-12 text-left">				
				<label> Color </label>
				<input id= "Color" type="text" maxlenght="11"> <!-- Input: Simbolizar los controles -->
				
			</div>

			<div class="col-md-6 col-xs-12 text-left">
				<label> Tamaño </label>
				<input id= "Tamaño" type="text" maxlenght="11"> <!-- Input: Simbolizar los controles -->
				
			</div>
		</div>


		<div class="row">
			<div class="col-md-6 col-xs-12 text-left">				
				<label> Tipo </label>
				<input id= "Tipo" type="text" maxlenght="11"> <!-- Input: Simbolizar los controles -->
				
			</div>

			<div class="col-md-6 col-xs-12 text-left">
				<label> Modelo </label>
				<input id= "Modelo" type="text" maxlenght="11"> <!-- Input: Simbolizar los controles -->
				
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-6 col-xs-12 text-left">				
				<label> Cantidad_Disponible </label>
				<input id= "Cantidad_Disponible" type="text" maxlenght="11"> <!-- Input: Simbolizar los controles -->
				
			</div>

			<div class="col-xs-6 text-left">
				<label> Descripcion </label>
				<input id= "Descripcion" type="text" maxlenght="11"> <!-- Input: Simbolizar los controles -->
				
			</div>
		</div>

		<div class="row">
			<div class="col-xs-6 col-xs-12 text-left">				
				<label> Precio </label>
				<input id= "Precio" type="text" maxlenght="10"> <!-- Input: Simbolizar los controles -->
				
			</div>
			
		</div>

		<button id="BtnRegistro" class="btn btn-success" onclick="CapturaProductos()"> 			
			<span class="glyphicon glyphicon-ok"> 
			</span>
			Registrar informaciòn
		</button>

		<div id="Respuesta" class="row">
			

		</div>



	
	<script src="js/jquery.js"></script>
 	<script src="js/bootstrap.min.js"></script>
 	<script src="js/Funciones.js" type="text/javascript"> </script>


</body>
</html>