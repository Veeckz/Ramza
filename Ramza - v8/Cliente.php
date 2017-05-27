<?php


//Variables para recuperar los datos.
$ID_Cliente = addslashes(utf8_decode( $_POST["ID_Cliente"]));
$Nombre = addslashes(utf8_decode( $_POST["Nombre"]));
$Apellidos= addslashes(utf8_decode( $_POST["Apellidos"]));
$NumTel = addslashes(utf8_decode( $_POST["NumTel"]));
$Direccion = addslashes(utf8_decode( $_POST["Direccion"]));
$RFC= addslashes(utf8_decode( $_POST["RFC"]));




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
		
		$query= utf8_decode("Insert into Tbl_Cliente (Nombre, Apellidos, NumTel, Direccion, RFC) values ('".$Nombre."', '".$Apellidos."', '".$NumTel."', '".$Direccion."', '".$RFC."')");

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