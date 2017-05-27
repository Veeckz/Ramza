<?php


//Variables para recuperar los datos.
$ID_Producto = addslashes(utf8_decode( $_POST["ID_Producto"]));
$Nombre = addslashes(utf8_decode( $_POST["Nombre"]));
$Color= addslashes(utf8_decode( $_POST["Color"]));
$Tamaño = addslashes(utf8_decode( $_POST["Tamaño"]));
$Tipo = addslashes(utf8_decode( $_POST["Tipo"]));
$Modelo= addslashes(utf8_decode( $_POST["Modelo"]));
$Cantidad_Disponible= addslashes(utf8_decode( $_POST["Cantidad_Disponible"]));
$Descripcion= addslashes(utf8_decode( $_POST["Descripcion"]));
$Precio= addslashes(utf8_decode( $_POST["Precio"]));



error_reporting(E_ALL);
$servidor="localhost";
$basedatos="ramzabd";
$usuario="root";
$contrasenia="";

try{
	$conexionMysqli= new mysqli ($servidor,$usuario,$contrasenia,$basedatos);
	if($conexionMysqli->connect_errno)
	{
		echo "Fallo la conexion con Mysql:(". $conexionMysqli->connect_errno .")
		" .$conexionMysqli->connect_error;
	}else{
		
		$query= utf8_decode("Insert into Tbl_Productos (ID_Producto, Nombre, Color, Tamaño, Tipo, Modelo, Cantidad_Disponible, Descripcion, Precio) values (".$ID_Producto.", '".$Nombre."', '".$Color."', '".$Tamaño."', '".$Tipo."', '".$Modelo."', ".$Cantidad_Disponible.", '".$Descripcion."', ".$Precio.")");

		echo $query;
		$resultadoOperacion=$conexionMysqli->query($query);

		if ($resultadoOperacion) 
		{

			?>

			<div class="text-success text-center">
				<p> Operaci&oacute;n Realizada con &eacute;xito </p>
			<div>
			
			<?php

		}
		else
		{

			?>

			<div class="text-success text-center">
				<p> Operaci&oacute;n <b> NO </b> Realizada </p>
			<div>
			
			<?php
		}

	}
} catch (Exception $e){
	throw $e;
}