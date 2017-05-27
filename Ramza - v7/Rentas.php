<?php


//Variables para recuperar los datos.
$ID_Renta= addslashes(utf8_decode( $_POST["ID_Renta"]));
$ID_Cliente = addslashes(utf8_decode( $_POST["ID_Cliente"]));
$Fecha_Inicial_De_Apartado= addslashes(utf8_decode( $_POST["Fecha_Inicial_De_Apartado"]));
$Fecha_De_Entrega = addslashes(utf8_decode( $_POST["Fecha_De_Entrega"]));
$Fecha_Recuperacion = addslashes(utf8_decode( $_POST["Fecha_Recuperacion"]));
$Total= addslashes(utf8_decode( $_POST["Total"]));



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
		
		$query= utf8_decode("Insert into Tbl_Renta (ID_Renta, ID_Cliente, Fecha_Inicial_De_Apartado, Fecha_De_Entrega, Fecha_Recuperacion, Total) values (".$ID_Renta.", ".$ID_Cliente.", '".$Fecha_Inicial_De_Apartado."', '".$Fecha_De_Entrega."', '".$Fecha_Recuperacion."', ".$Total.")");

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