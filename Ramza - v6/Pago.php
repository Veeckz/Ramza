<?php


//Variables para recuperar los datos.
$ID_Pago = addslashes(utf8_decode( $_POST["ID_Pago"]));
$ID_Renta = addslashes(utf8_decode( $_POST["ID_Renta"]));
$FechaPago= addslashes(utf8_decode( $_POST["FechaPago"]));
$Abono = addslashes(utf8_decode( $_POST["Abono"]));
$Observaciones = addslashes(utf8_decode( $_POST["Observaciones"]));




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
		
		$query= utf8_decode("Insert into Tbl_Pago (ID_Pago, ID_Renta, FechaPago, Abono, Observaciones) values (".$ID_Pago.", '".$ID_Renta."', '".$FechaPago."', '".$Abono."', '".$Observaciones.")");

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