<?php


//Variables para recuperar los datos.
$Entero = addslashes(utf8_decode( $_POST["Entero"]));
$Texto = addslashes(utf8_decode( $_POST["Texto"]));
$Fecha= addslashes(utf8_decode( $_POST["Fecha"]));




error_reporting(E_ALL);
$servidor="localhost";
$basedatos="validacionesbd";
$usuario="root";
$contrasenia="";

try{
	$conexionMysqli= new mysqli ($servidor,$usuario,$contrasenia,$basedatos);
	if($conexionMysqli->connect_errno)
	{
		echo "Fallo la conexion con Mysql:(". $conexionMysqli->connect_errno .")
		" .$conexionMysqli->connect_error;
	}else{
		
		$query= utf8_decode("Insert into Tbl_Validar (Entero, Texto, Fecha) values (".$Entero.", '".$Texto."', '".$Fecha."')");

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